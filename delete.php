<?php
 require_once ('DakdragerDatabase.php');
 if(isset($_GET['id'])){
   $id = $_GET['id'];
   try{
    $stmt = $con->prepare("DELETE FROM Merk Where Merkcode=?");
    $stmt->execute(array($id));
    header('Location:indexAutoMerk.php');
   } catch (PDOException $ex){

echo $ex->getMessage();
   }
 }
 ?>
