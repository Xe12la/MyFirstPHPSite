<?php
//var_dump($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //this is to make sure that the data submitted is not harmful/not a hacking code data
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favPet = htmlspecialchars($_POST["favPet"]);

    if (empty($firstname) || empty($lastname) || empty($favPet)){
        header("Location: ../index.php");
    }else{
        try {
            require_once "connectDB.php"; //connect to the DB

            $DBquery = "INSERT INTO userInfo (firstname, lastname, favPet) VALUES (:firstname, :lastname, :favPet);";
            $query = $pdo->prepare($DBquery);

            $query->bindParam(":firstname", $firstname);
            $query->bindParam(":lastname", $lastname);
            $query->bindParam(":favPet", $favPet);

            $query->execute();

            $pdo = null; //disconnect to the DB
            $query = null; 

            header("Location: ../index.php");

            die();

        } catch (PDOException $e) {
            die("Query failed: ". $e->getMessage());
        }
    }

}else{
    header("Location: ../index.php");
}
