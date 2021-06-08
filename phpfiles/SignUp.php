<html>
  <head>
    <title>SignUp Form</title>
    <link rel="stylesheet" href="../cssfiles/Register.css" />
    <style>
     input[type=text]
      {
      border-radius:30px;
      outline:0;
      width:60%;   
      height:6vh; 
      text-align: center;
      border:2px solid #3498db;
      transition:all 0.5s ease-in;
      }
      input[type=text]:focus
      {
      border:2px solid #2ecc71;
      width:80%;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <div class="form-model">
      <form id="myform" method="POST" action="SignUpData.php">
        <div class="form-elements">
          <h1>Create Account</h1>
          <p id="txt">Enter your name, email and password</p>
          <input type="text" name="name" id="name" placeholder="Enter your name" /><br />
          <br>
          <input
            type="email"
            name="email"
            placeholder="Enter your email"
          /><br />
          <br /><input
            type="password"
            name="password"
            placeholder="Enter your password"
          />
          <br />
          <input type="checkbox" />Remember me
          <p>
            I hereby confirm the <a href="Privacy.php">Terms and Conditions</a>
          </p>
          <button id="submit">Submit</button>
        </div>
        <div class="image">
          <img id="sign" src="../Media/Sig.jpg" width="340" height="400" />
        </div>
      </form>
    </div>
    <script>
      $(document).ready(() => {
        $("#sub").click(() => {
          $.ajax({
            url: "data3.php",
            type: "post",
            data: $("#myform input"),
            success: function (data) {
              console.log("Data submitted");
            },
          });
        });
      });
      document.getElementById('name').addEventListener('change',()=>{
       let val=event.target.value;
       let name=val[0].toUpperCase()+val.slice(1);
       localStorage.nameValue=name;
      })
      let btn = document.getElementById("submit");
      btn.addEventListener("click", () => {
      alert("SuccessFully Signed Up!"+localStorage.getItem("nameValue"));
      });
    </script>
  </body>
</html>
