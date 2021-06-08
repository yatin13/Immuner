<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../cssfiles/track.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="../cssfiles/tracking.css">
</head>
<body>
<?php
include("Navbar.php");
?>
<br>
<br>
<br>
<a style="color:blue;font-size:20px;"href="navAni.php">Back to Home <i class="fas fa-home"></i></a> <div style="color:blue;font-size:20px;font-weight:550;margin:-1.9rem 0 0 10rem;">&nbsp;&nbsp;&nbsp; > Tracking Help</div>
<?php 
$con=mysqli_connect("localhost","root","","cust");
$orderid=$_POST['oid'];
$row=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM che WHERE id='$orderid'"));
?>
<div class="data">
<img src="../Media/map.jpg" class="ig1">
<div class="ladder">
  ------------------------------------------------------------------>
</div>
<div id="home" style="margin:-2rem 0 0 38rem;color:red;font-weight:700;">
  <h4>Your home</h4>
</div>
<h4 data1="Our warehouse"><h4>
<div class="order-details">
<div class="date-ship">
<h4 class="date" style="color:blue;">Date of Order:<br><?php echo $row[8]?></h4>  
<h4 class="shipping" style="color:blue;">Delivered To:<br><?php echo $row[6]?></h4>
</div>
<h4 class="greet">Geetings,<?php echo $row[0]?></h4>
</div>
</div>
<h4 class="head-text"><u>Your Tracking Status</u></h4>
<div class="aa">aa</div>
<div class="real-tracking">
<div id="part1">
<div id="ball1">aa</div>
<?php echo $row[8]?>&nbsp;:&nbsp;<?php echo $row[10] ?>
</div>
<div id="part2">
<div id="ball2">aa</div>
<?php echo $row[11] ?>
<div>
<div id="part3">
<div id="ball3">aa</div>
<?php echo $row[12] ?>
</div>
<div id="part4">
<div id="ball4">aa</div>
<?php echo $row[13] ?>
</div>
<div id="part5">
<div id="ball5">aa</div>
<?php echo $row[9] ?>&nbsp;:&nbsp;<?php echo $row[6]?>
</div>
</div>
</body>
</html>