<?php
    require_once "DakdragerDatabase.php";

    $naam = $_POST['bouwjaardatum'];
    $typecode = $_POST['typecode'];


    $sql_id = $conn->query("SELECT MAX(Bouwjaarcode) + 1 FROM Bouwjaar");
    $new_id = $sql_id->fetchColumn();

    $sql = "INSERT INTO Bouwjaar (Bouwjaarcode, Bouwjaardatum, Typecode) VALUES  (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $new_id);
    $stmt->bindParam(2, $naam);
    $stmt->bindParam(3, $typecode );



    $stmt->execute();

    header('Location: indexAutoType.php');



?>
