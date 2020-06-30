<?php
    require_once "DakdragerDatabase.php";

    $naam = $_POST['modelnaam'];
    $merkcode = $_POST['merkcode'];


    $sql_id = $conn->query("SELECT MAX(Modelcode) + 1 FROM Model");
    $new_id = $sql_id->fetchColumn();

    $sql = "INSERT INTO Model (Modelcode, Modelnaam, Merkcode) VALUES  (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $new_id);
    $stmt->bindParam(2, $naam);
    $stmt->bindParam(3, $merkcode);



    $stmt->execute();

    header('Location: indexAutomodel.php');



?>
