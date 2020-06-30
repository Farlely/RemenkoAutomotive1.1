<?php
require_once ('DakdragerDatabase.php');
require_once ('hearder.php');


?>


<center>
  <h1> Toeveog Automodel </h1>
<form method="post" action ="addAutomodel.php">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100"> Modelnaam:</td>
<td><input name="modelnaam" type="text" placeholder = "Vul Automodel in..." required>*</td>
</tr>

<tr>
<td width="100"> Merkcode:</td>
<td><input name="merkcode" type="text" placeholder = "Vul Merkcode in..." required>*</td>
</tr>


<tr>
<tr>
<td width="100">&nbsp;</td>
<td><input type="submit" value="Klant toevoegen"></td>
</tr>

</table>
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
  <button type="button" class="btn btn-warning"><a href="indexAutoType.php">Toegevoegd</a></button>
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
