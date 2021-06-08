<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedbackData</title>
</head>
<body>
 <?php
 $con=mysqli_connect("localhost","root","","cust");
  $id=$_POST['orderid'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $feedback=$_POST['reason'];
  mysqli_query($con,"INSERT INTO deleteorder(orderid,feedback,name,email) VALUES('$id','$feedback','$name','$email')");
  mysqli_close($con);
  header('location:Home.php');
 ?>   
</body>
</html>