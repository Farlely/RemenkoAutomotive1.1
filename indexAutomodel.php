<?php
require_once ('DakdragerDatabase.php');
require_once ('headerindex.php');


?>

<link rel="stylesheet" type="text/css" href="indexStyle.css">
<center>
  <br><br><br><br><br><br><br><br><br><br>
  <div class="container">
  <h2> Toevoeg Automodel </h2>
<form method="post" action ="addAutomodel.php">
<div class="form-group">
<label for="Merknaam"> Modelnaam:</label>
<input name="modelnaam" type="text"  class="form-control" placeholder = "Vul Automodel in..." required>
</div>

<div class="form-group">
<label for="Merkcode"> Merkcode:</label>
<input name="merkcode" type="text" class="form-control" placeholder = "Vul Merkcode in..." required>
<td width="100">&nbsp;</td>
<td><input type="submit" name="btn_submit" value="Automodel toevoegen"></td>

</form>
</div>

</div>

<br/><br/> <br/><br/><br/><br/> <br/><br/><br/><br/> <br/><br/><br/><br/> <br/><br/>

<div class="">



<table class="table table-striped">

  <thead>
<tr>

  <th><h2>Automodel</h2></th>
  <th><h2>AutomerkCode</h2></th>
  <th><h2>Action</h2></th>
  <th><h2>Autotype Toegevoegen</h2></th>

</tr>
</thead>
<tbody>
<?php
 $stmt = $conn->prepare("SELECT * FROM Model ORDER BY Modelcode");
 $stmt->execute();
 $results = $stmt->fetchALL();
 foreach ($results as $row) {
 ?>
<tr>


  <td><h3><?=$row['Modelnaam']?></h3></td>
  <td><h3><?=$row['Merkcode']?></h3></td>


  <td>
    <a href="edit.php?id=<?=$row['AutomerkCode'];?>" class="btn btn-info">Edit</a>
    <a href="#" class='btn btn-danger'>Delete</a>
  </td>

  <td>
  <button type="button" style=" background-color:#FAC400;font-size:200%;font-family:verdana;display:block;margin-bottom:2%; margin-right:30%;margin-left:10%;"><a href="indexAutoType.php">Toegevoegd</a></button>
  </td>
</tr>
<?php
}
 ?>
</tbody>
</table>
</div>
</center>
<br/><br/> <br/><br/>
<h1><a href=" load_data_select.php"> Voor klanten </a></h1>
  </body>
</html>
