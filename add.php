<?php
require_once ('DakdragerDatabase.php');
require_once ('hearder.php');

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

<h2>Toevoeg Auto Merknaam</h2>
<form action="" method="post">
<table cellpadding="5px">
  <tr>
    <td>Merknaam</td>
    <td><input type="text" name="Merknaam"></td>
  </tr>

  <tr>
    <td></td>
    <td><input type="submit" name="btn_submit" a href="index.php"></td>
  </tr>
</table>
</form>
