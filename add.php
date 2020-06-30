<?php
require_once ('DakdragerDatabase.php');
require_once ('headerindex.php');

if(isset($_POST['btn_submit'])) {

  $automerk = $_POST['Merknaam'];


  if(!empty($automerk)){
  try{
     $stmt = $conn->prepare("INSERT INTO Merk (Merknaam)
     Values(:Merknaam)");
     $stmt->execute(array(':Merknaam'=>$automerk));
    header('location:indexAutoMerk.php');
  }catch(PDOException $ex){
     echo $ex->getMessage();
  }
  }else {
    echo "Input Automerk";
  }
}
?>
<br><br><br><br><br><br><br><br><br><br>
<div class="container">
<h2>Toevoeg AutoMerk</h2>
<form action="" method="post">
  <div class="form-group">
  <label for="Merknaam">Merknaam:</label>
    <input type="text" class="form-control" name="Merknaam">
  </div>

    <input type="submit" name="btn_submit" a href="indexAutoMerk.php">


</form>
</div>
