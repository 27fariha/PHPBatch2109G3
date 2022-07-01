<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}
</style>
</head>
<body>
    <?php
    #Date Function
    #d-date
    #m-month
    #Y-year
    $today=date("d/m/Y"); #month/date/year => date/month/year
    $year=date("Y"); #year 2022   2020
    $yd=date("d-m-Y"); #15-6-2022
    $yd1=date("d.m.Y");                  #15.6.2022
    echo $today;
    echo "<br>".$year;
    echo "<br>".$yd."<br>".$yd1;
    ?>


<?php
#time Function
echo time(); # Time in seconds
#H-hours - 0-24 format
#h-0-12
#i-minutes
#s-seconds
#A- AM,PM
#a-am,pm

echo "<br>Time is :".date("h:i:sA");
echo "<br>Time is :".date("h:ia");
echo "<br>Date and Time is :".date("d/m/Y-h:i:sA");

?>

<div class="footer">
  <p>Copyright @ <?php echo date("Y");?></p>
</div>  
</body>
</html>