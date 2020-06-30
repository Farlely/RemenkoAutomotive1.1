<?php
require_once ('DakdragerDatabase.php');
require_once ('indexStyle.css');


?>
<br/><br/> <br/><br/><br/><br/>
<center>
  <h1> Toevoeg bouwjaar </h1>
<form method="post" action ="addBouwjaar.php">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100"> Modelnaam:</td>
<td><input name="bouwjaardatum" type="text" placeholder = "Vul bouwjaardatum in..." required>*</td>
</tr>

<tr>
<td width="100"> Merkcode:</td>
<td><input name="typecode" type="text" placeholder = "Vul typecode' in..." required>*</td>
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
 $stmt = $conn->prepare("SELECT * FROM Bouwjaar ORDER BY Bouwjaarcode");
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
