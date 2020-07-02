<?php
$servername = "localhost";
$dbn = "Remenko";
$username = "root";
$password = "root";
$message = "";

try {
    $con = new PDO("mysql:host=$servername;dbname=$dbn;", $username, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";

    }


catch(PDOException $error)
    {
        $message = $error->getMessage();
    }



?>
