<?php
include('dbConfig.php');

if(isset($_POST["Merkcode"]) && !empty($_POST["Merkcode"])){
    //Get all state data
    $query = $db->query("SELECT * FROM Model WHERE Merkcode = ".$_POST['Merkcode']." AND Modelcode ORDER BY Modelnaam ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Model</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['Modelcode'].'">'.$row['Modelnaam'].'</option>';
        }
    }else{
        echo '<option value="">Model not available</option>';
    }
}

if(isset($_POST["Modelcode"]) && !empty($_POST["Modelcode"])){
    //Get all city data
    $query = $db->query("SELECT * FROM Type WHERE Modelcode = ".$_POST['Modelcode']." AND Typecode ORDER BY Typenaam ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Type</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['Typecode'].'">'.$row['Typenaam'].'</option>';
        }
    }else{
        echo '<option value="">Type not available</option>';
    }
}

if(isset($_POST["Typecode"]) && !empty($_POST["Typecode"])){
    //Get all city data
    $query = $db->query("SELECT * FROM Bouwjaar WHERE Typecode = ".$_POST['Typecode']." AND Typecode ORDER BY Bouwjaardatum ASC");

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Bouwjaar</option>';
        while($row = $query->fetch_assoc()){
            echo '<option value="'.$row['Bouwjaarcode'].'">'.$row['Bouwjaardatum'].'</option>';
        }
    }else{
        echo '<option value="">Bouwjaar not available</option>';
    }
}









 ?>
