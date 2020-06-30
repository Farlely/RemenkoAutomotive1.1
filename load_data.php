<?php
 //load_data.php
 $connect = mysqli_connect("localhost", "root", "root", "Remenko");
 $output = '';
 if(isset($_POST["AutomerkCode"]))
 {
      if($_POST["AutomerkCode"] != '')
      {
           $sql = "SELECT * FROM Model WHERE Merkcode = '".$_POST["Merkcode"]."'";
      }
      else
      {
           $sql = "SELECT * FROM Model";
      }
      $result = mysqli_query($connect, $sql);
      while($row = mysqli_fetch_array($result))
      {

           $output .= '<option value="'.$row["Modelcode"].'">'.$row["Modelnaam"].'</option>';

      }
      echo $output;
 }
 if(isset($_POST["AutomodelCode"]))
 {
      if($_POST["AutomodelCode"] != '')
      {
           $sql = "SELECT * FROM Type WHERE Typecode = '".$_POST["Modelcode"]."'";
      }
      else
      {
           $sql = "SELECT * FROM Bouwjaar";
      }
      $result = mysqli_query($connect, $sql);
      while($row = mysqli_fetch_array($result))
      {

           $output .= '<option value="'.$row["Bouwjaarcode"].'">'.$row["Bouwjaar"].'</option>';

      }
      echo $output;
 }
 ?>
