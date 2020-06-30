<!doctype html>
<html>
<title>REMENKO Automotive</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel=  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="jquery.min.js"></script>

     </div>
     <div class="pull-right"> <h2> <?php
   //haal de huidige datum en tijd op
   $vandaag = getdate();
   //      jaar: 'year'
   //     maand: 'mon' (numeriek)
   //            'month' (tekstueel)
   //       dag: 'mday' (dag van de maand)
   //            'wday' (dag van de week)
   //            'yday' (dag van het jaar)
   //            'weekday' (tekstueel)
   //       uur: 'hours'
   //   minuten: 'minutes'
   //  seconden: 'seconds'

   $maand = $vandaag['month'];
   $dag = $vandaag['mday'];
   $jaar = $vandaag['year'];
   $dagJaar =  $vandaag['yday'];
   echo "$dag $maand $jaar.<br />Dit is de $dagJaar<sup>e</sup> dag van het jaar.";
   ?></h2></div>

   </div>

  </head>
  <body>
