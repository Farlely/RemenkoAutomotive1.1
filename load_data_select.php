
<?php
require_once ('hearder.php');
 //load_data_select.php
 ?>
 <script type="text/javascript">

 $(document).ready(function(){
     $('#merk').on('change',function(){
         var countryID = $(this).val();
         if(countryID){
             $.ajax({
                 type:'POST',
                 url:'ajaxData.php',
                 data:'Merkcode='+countryID,
                 success:function(html){
                     $('#model').html(html);
                     $('#city').html('<option value="">Select state first</option>');
                 }
             });
         }else{
             $('#model').html('<option value="">Select country first</option>');
             $('#city').html('<option value="">Select state first</option>');
         }
     });

     $('#model').on('change',function(){
         var stateID = $(this).val();
         if(stateID){
             $.ajax({
                 type:'POST',
                 url:'ajaxData.php',
                 data:'Modelcode='+stateID,
                 success:function(html){
                     $('#city').html(html);
                 }
             });
         }else{
             $('#city').html('<option value="">Select state first</option>');
         }
     });
     $('#city').on('change',function(){
         var stateID = $(this).val();
         if(stateID){
             $.ajax({
                 type:'POST',
                 url:'ajaxData.php',
                 data:'Typecode='+stateID,
                 success:function(html){
                     $('#bouwjaar').html(html);
                 }
             });
         }else{
             $('#bouwjaar').html('<option value="">Select type first</option>');
         }
     });
 });
 </script>





<!-- Navigation bar with social media icons -->
<div class="">
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-youtube"></i></a>
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-google"></i></a>
  <a href="" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>
</div>


<!-- w3-content defines a container for fixed size centered content,
and is wrapped around the whole page content, except for the footer in this example -->
<div class="form" >

  <!-- Header -->
  <header class="">
    <h1 class=""><a href="load_data_select.php"><img src="logo.jpg" alt="Logo" style="width:20%" class="w3-padding-16"></a></h1>
    <h6>Welkom <span class="w3-tag">Bij REMENKO Automotive</span></h6>
<link type="text/css" rel="stylesheet" href="style.css"/>
  </header>

  <body>



      <!-- Blog entry -->

          <h2 style="text-align: center";>Select voertuigen</h2>
          <br>

          <div class="container">
            <div class="row">
              <div class="merk">
            <?php
               include('dbConfig.php');

               //Get all country data
       $query = $db->query("SELECT * FROM Merk WHERE Merkcode ORDER BY Merknaam ASC");

       //Count total number of rows
       $rowCount = $query->num_rows;
       ?>
       <select name="merk" id="merk"  >
           <option value="">Select Automerk</option>
           <?php
           if($rowCount > 0){
               while($row = $query->fetch_assoc()){
                   echo '<option value="'.$row['Merkcode'].'">'.$row['Merknaam'].'</option>';
               }
           }else{
               echo '<option value="">Merk not available</option>';
           }
           ?>
       </select>
</div>
<br>
<div class="model" >
       <select name="model" id="model" >
           <option value="">Kies eerst Auto Merk</option>
       </select>
</div>
<br>
<div class="type">
       <select name="city" id="city" >
           <option value="">Kies eerst Auto Model</option>
       </select>
</div>
<br>
<div class="bouwjaar" >
              <select name="bouwjaar" id="bouwjaar" >
                  <option value="">Kies eerst Auto Type</option>
              </select>
       </div>



         </div>

       </div>

     </div>

   </div>

   </body>
   </html>
