<?php
require_once ('DakdragerDatabase.php');
require_once ('headerindex.php');
?>
<link rel="stylesheet" type="text/css" href="indexStyle.css">
<br/><br/> <br/><br/><br/><br/>
<center>
  <div class="container">
  <h1> Toevoeg bouwjaar </h1>
<form method="post" action ="addBouwjaar.php">
<div class="form-group">
<label for="Modelnaam"> Modelnaam:</label>
<input name="bouwjaardatum" type="text"  class="form-control" placeholder = "Vul bouwjaardatum in..." required>
</div>

<div class="form-group">
<label for="merkcode"> Merkcode:</label>
<input name="typecode" type="text" class="form-control" placeholder = "Vul typecode' in..." required>
</div>


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
  <th type="date" id="start" name="trip-start"
       value="2018">
    <h2>Bouwjaar</h2></th>
    <h2>Typecode</h2></th>
  <th><h2>Action</h2></th>
  <th><h2>Autobouwjaar Toegevoegen</h2></th>

</tr>
</thead>
<tbody>
<?php
 $stmt = $con->prepare("SELECT * FROM Bouwjaar ORDER BY Bouwjaarcode");
 $stmt->execute();
 $results = $stmt->fetchALL();
 foreach ($results as $row) {
 ?>
<tr>

  <td><h3><?=$row['Bouwjaardatum']?></h3></td>
  <td><h3><?=$row['Typecode']?></h3></td>



  <td>
    <a href="edit.php?id=<?=$row['Bouwjaarcode'];?>" class="btn btn-info">Edit</a>
    <a href="#" class='btn btn-danger'>Delete</a>
  </td>

  <td>
  <button type="button" class="btn btn-warning"><a href="index.html">Toegevoegd</a></button>
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
