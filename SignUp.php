<html>
<head>
<title>SignUp Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<form id="myform" method="POST" action="data3.php">
Email<input type="email" name="email" placeholder="Enter your email">
Password<input type="password" name="password" placeholder="Enter your password">
<input type="submit" name="sub" value="submit">
</form>
<script>
$(document).ready(()=>{
    $('#sub').click(()=>{
       $.ajax({
         url:"data3.php",
         type:"post",
         data:$('#myform input'),
         success:function(data){
           console.log("Data submitted");
       }
     })
  })    
})    
</script>
</body>
</html>