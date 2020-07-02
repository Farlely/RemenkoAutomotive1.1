<?php
require_once ('DakdragerDatabase.php');
require_once ('headerindex.php');

 ?>

  <link rel="stylesheet" type="text/css" href="indexStyle.css">
<div>
<div class="center"><a class="btn btn-primary btn-lg" style=" font-size:300%;font-family:verdana;margin-left:30%;margin-right:30%;display:block;margin-top:22%;margin-bottom:0%" href="add.php" role="button">Add Automerk </a><br/><br/></div>
</div>
<br/><br/> <br/><br/>
<center>
<table class="table table-striped">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
  <thead>
<tr>
  <th><h2>Automerk</h2></th>
  <th><h2>Action</h2></th>
  <th><h2>Automodel Toegevoegen</h2></th>
</tr>
</thead>

<tbody>
<?php
 $stmt = $con->prepare("SELECT * FROM Merk ORDER BY Merkcode");
 $stmt->execute();
 $results = $stmt->fetchALL();
 foreach ($results as $row) {
 ?>
<tr>
  <td><h3><?=$row['Merknaam']?></h3></td>
  <td>
    <a href="edit.php?id=<?=$row['Merkcode'];?>" class="btn btn-info" style=" font-size:100%;font-family:verdana;display:block;margin-bottom:2%"  role="button">Edit</a>
    <a href="delete.php?id=<?=$row['Merkcode'];?>" class='btn btn-danger' style=" font-size:100%;font-family:verdana;display:block;margin-bottom:2%"  role="button">Delete</a>
  </td>
  <td>
  <button type="button" style=" background-color:#FAC400;font-size:200%;font-family:verdana;display:block;margin-bottom:2%; margin-right:30%;margin-left:10%;" ><a href="indexAutomodel.php" style="font-color:#FCFCFC;">Toegevoegd</a></button>
  </td>
</tr>
<?php
}
 ?>
</tbody>

</table>
</center>
</div>
<div class="col-sm-4"></div>
</div>

<br/><br/> <br/><br/>

<h1><a href=" load_data_select.php"> Voor klanten </a></h1>
  </body>
</html>
