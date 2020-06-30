<?php
    require_once "DakdragerDatabase.php";

    $naam = $_POST['typenaam'];
    $modelcode = $_POST['modelcode'];


    $sql_id = $conn->query("SELECT MAX(Typecode) + 1 FROM Type");
    $new_id = $sql_id->fetchColumn();

    $sql = "INSERT INTO Type (Typecode, Typenaam, Modelcode) VALUES  (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $new_id);
    $stmt->bindParam(2, $naam);
    $stmt->bindParam(3, $modelcode);



    $stmt->execute();

    header('Location: indexAutoType.php');



?>
