<html>
  <head>
    <title>SignUp Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <link rel="stylesheet" href="../cssfiles/Register.css">
  <body>
    <div class="form-model">
    <form id="myform" method="POST" action="LoginData.php">
     <div class="form-elements">
      <h1>Verify Account</h1>
     <p id="txt">Enter your email and password</p>  
     <br> 
      <input type="email" name="email" placeholder="Enter email" id="email">
      <br>
      <br>
      <input
        type="password"
        name="password"
        placeholder="Enter password"
      >
      <br>
      <br>
     <button id='submit'>Login!</button>
     </div>
     <div class="image">
    <img id="sign" src="../Media/log.jpg" width="340" height="400"/>
    </div>
    </form>
    </div>
    <script>
      $(document).ready(() => {
        $("#submit").click(function () {
          $.ajax({
            url: "data1.php",
            type: "post",
            data: $("#myform input").serialize(),
            success: function (data) {
              console.log("Data submitted");
            },
          });
        });
      });
     document.getElementById('email').addEventListener('change',(event)=>{
       const val=event.value;
       localStorage.emailValue=val;      
     })
      document.getElementById('submit').addEventListener('click',()=>{
          alert(`Successfully Logged In! ${localStorage.getItem('emailValue')}`);
      })
    </script>
  </body>
</html>
