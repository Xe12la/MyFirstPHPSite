<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //<!-- this is to make sure that the data submitted is not harmful/not a hacking code data-->
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favPet = htmlspecialchars($_POST["favPet"]);

    echo "This are the data Submitted";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favPet;
    echo "<br>";
}
