<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$orderid=$_POST['orderid'];
$amount=$_POST['amount'];
$address=$_POST['address'];
$count=$_POST['count'];
$date=$_POST['date'];
?>
<?php
$conn=mysqli_connect("localhost","root","","cust");
if($conn===false)
{
    die('Error:Could not connect'.mysqli_connect_error());
}
else
{
 echo "Connected successfully";
}
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$orderid=$_POST['orderid'];
$amount=$_POST['amount'];
$address=$_POST['address'];
$count=$_POST['count'];
$date=$_POST['date'];
mysqli_query($conn,"INSERT INTO che(name,email,contact,amount,id,address,count,date) VALUES('$name','$email','$contact','$amount','$orderid','$address','$count','$date')");
    echo "Value inserted";
mysqli_close($conn);
header("location:choosePay.php");
?>
</body>
</html>