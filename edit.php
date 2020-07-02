<?php
require_once ('DakdragerDatabase.php');
if(isset($_POST['btn_submit'])){
  $merkcode = $_POST['merkcode'];
   $merknaam = $_POST['merknaam'];
   if(!empty($merknaam)){
     try{
      $stmt = $con->prepare("UPDATE Merk set Merknaam= :naam,
                   WHERE Merkcode = :id");
      $stmt->execute(array(':naam' =>$merknaam,'id'=>$merkcode));
     if($stmt){
       header('Location:indexAutomodel.php');
     }
      header('Location:indexAutomodel.php');
     }catch(PDOException $ex){
        echo $ex->getMessage();
     }
   }else{
     echo "INPUT NAME";
   }


}
$merkcode = 0;
$merknaam = '';

if (isset($_GET['id'])){
     $id = $_GET['id'];
     $stmt = $con->prepare('SELECT * FROM Merk WHERE Merkcode = :id');
     $stmt->execute(array(':id'=>$id));
     $row = $stmt->fetch();
     $merkcode = $row['Merkcode'];
     $merknaam = $row['Merknaam'];
}
 ?>

 <div class="container">
   <div class="card mt-5">
     <div class="card-header">
<h2>Edit Automerk</h2>
</div>
<div class="card-body">
<form action="" method="post">

  <div class="form-group">
  <label for="L">Merknaam</label>
  <td><input type="text" name="merknaam" value="<?=$merknaam;?>" class="form-control"></td>
</div>

<div class="form-group">
  <td><input type="hidden" name="merkcode" value="<?=$merkcode;?>"></td>
</div>
<div class="form-group">

  <td><input type="submit" name="btn_submit" class="btn btn-info"></td>
</div>

</form>
</div>
</div>
</div>
