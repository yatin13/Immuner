<html>
<head>
<title>SignUp Form</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<form id="myform" method="POST" action="data.php">
Email<input type="email" name="email" placeholder="Enter your email">
Password<input type="password" name="password" placeholder="Enter your password">
<input type="submit" name="sub" value="submit">
<span id="result"></span>
</form>
<script>
$(document).ready(()=>{
    $('#submit').click(function(){
     $.ajax({
       url:"data.php",
       type:"post",
       data:$('#myform input').serialize(),
       success:function(data)
       {
           console.log("Data submitted");
       }  
     }) 
    })
})
</script>
</body>
</html>