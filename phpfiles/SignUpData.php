<html>
<head>
<title>Form Handler</title>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","Register");
if($con==false)
{
echo "Failed to connect to MySQL Server".mysqli_connect_error();
}
else
{
echo "Connected successfully";
}
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
mysqli_query($con,"INSERT INTO RegisterOrder(Name,Email,Password)VALUES('$name','$email','$password')");
echo "<br>Record has been successfully inserted";
mysqli_close($con);
header('location:Home.php')
?>
</body>
</html>