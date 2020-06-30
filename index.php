<html>
<title>REMENKO Automotive</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css.css">
<link type="text/css" rel="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
    $('#merk').on('change',function(){
        var Merkcode = $(this).val();
        if(Merkcode){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'Merkcode='+Merkcode,
                success:function(html){
                    $('#model').html(html);
                    $('#type').html('<option value="">Select model first</option>');
                }
            });
        }else{
            $('#model').html('<option value="">Select model first</option>');
            $('#type').html('<option value="">Select type first</option>');
        }
    });

    $('#model').on('change',function(){
        var Modelcode = $(this).val();
        if(Modelcode){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'Modelcode='+Modelcode,
                success:function(html){
                    $('#city').html(html);
                }
            });
        }else{
            $('#city').html('<option value="">Select type first</option>');
        }
    });
});
</script>


<body class="w3-light-grey">



  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><a href="index.php"><img src="logo.jpg" alt="Logo" style="width:20%" class="w3-padding-16"></a></h1>
    <h6>Welkom op onze pagina <span class="w3-tag"></span></h6>

  </header>

  <!-- Image header -->
</div>
  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l12 s12">

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">

          <h2 style="text-align: center";>Select je vervoer</h2>
          <br>
          <div class="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php');

    //Get all merk data
    $query = $db->query("SELECT * FROM Merk");

    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
    <select name="Merk" id="Merk" >
        <option value="">Select Automerk</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){
                echo '<option value="'.$row['Merkcode'].'">'.$row['Merknaam'].'</option>';
            }
        }else{
            echo '<option value="">Merk is not available</option>';
        }
        ?>
    </select>

    <select name="Model" id="Model">
        <option value="">Select Model </option>
    </select>

    <select name="Type" id="Type">
        <option value="">Select Type</option>
    </select>
    <select name="Bouwjaar" id="Bouwjaar">
        <option value="">Select bouwjaar</option>
    </select>
    </div>



      </div>

    </div>

  </div>

</div>

</body>
</html>
