<?php
require_once ('DakdragerDatabase.php');
require_once ('headerindex.php');

?>
<link rel="stylesheet" type="text/css" href="indexStyle.css">
<br/><br/> <br/><br/><br/><br/>
<center>
  <div class="container">
  <h1> Toevoeg Autptype </h1>
<form method="post" action ="addAutotype.php">
  <div class="form-group">
<label for="typenaam"> typenaam:</label>
<input name="typenaam" type="text"  class="form-control" placeholder = "Vul typenaam in..." required>
</div>

<tr>
<label for="modelcode"> modelcode:</label>
<input name="modelcode" type="text"  class="form-control" placeholder = "Vul modelcode' in..." required>

<tr>
<tr>
<td width="100">&nbsp;</td>
<td><input type="submit" value="Klant toevoegen"></td>
</tr>


</div>

</div>
<br/><br/> <br/><br/><br/><br/> <br/><br/><br/><br/> <br/><br/><br/><br/> <br/><br/>

<div class="">



<table class="table table-striped">

  <thead>
<tr>

  <th><h2>AutoType</h2></th>
  <th><h2>Modelcode</h2></th>
  <th><h2>Action</h2></th>
  <th><h2>Autobouwjaar Toegevoegen</h2></th>

</tr>
</thead>
<tbody>
<?php
 $stmt = $con->prepare("SELECT * FROM Type ORDER BY Typecode");
 $stmt->execute();
 $results = $stmt->fetchALL();
 foreach ($results as $row) {
 ?>
<tr>

  <td><h3><?=$row['Typenaam']?></h3></td>
  <td><h3><?=$row['Modelcode']?></h3></td>





  <td>
    <a href="edit.php?id=<?=$row['TypeCode'];?>" class="btn btn-info">Edit</a>
    <a href="#" class='btn btn-danger'>Delete</a>
  </td>

  <td>
  <button type="button" class="btn btn-warning"><a href="indexAutobouwjaar.php">Toegevoegd</a></button>
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
