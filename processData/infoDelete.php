<?php
//var_dump($_SERVER["REQUEST_METHOD"]);

if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){

    //this is to make sure that the data submitted is not harmful/not a hacking code data
    $id = htmlspecialchars($_GET["id"]);


    if (empty($id)){
        header("Location: ../index.php");
    }else{
        try {
            require_once "connectDB.php"; //connect to the DB

            //query copy from the SQL query of DB server
            $DBquery = "DELETE FROM `userinfo` WHERE `id` = :id;"; 
            $query = $pdo->prepare($DBquery);
            $query->bindParam(":id", $id, PDO::PARAM_INT);

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
