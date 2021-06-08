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
$con=mysqli_connect("localhost","root","","Register");
if($con==false)
{
echo "Failed to connect"+mysqli_connect_error();
}
$email=mysqli_real_escape_string($con,$_POST["email"]);
$password=mysqli_real_escape_string($con,$_POST["password"]);
$arr1=array();
array_push($arr1,$email);
array_push($arr1,$password);
$arr2=array();
if($result=mysqli_query($con,"Select Email,Password from RegisterOrder"))
while($row=mysqli_fetch_row($result))
{
array_push($arr2,$row[1]);
array_push($arr2,$row[2]);
} 
if(array_diff($arr1,$arr2)==null)
{
echo "Successfully signed up";    
}
else
{
echo "Please fill your information carefully";    
}
header('location:SignUp.php');
mysqli_close($con);
?>
</body>
</html>