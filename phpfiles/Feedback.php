<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/8d249fdd95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Monoton&display=swap" rel="stylesheet">
    <style media="screen">
     body{
         font-family: 'Crete Round', serif;
         background:linear-gradient(	#87CEFA,#87CEEB,#B0C4DE,#6495ED );
     }
    .carousel-cell{
    width: 100%;
    height:37rem;}
    .carousel-cell img{
    border-radius:10px;
    }
    .carousel-cell:before {
      display: block;
    }
    h2 
    {
    text-align:center;
    color:blue;
    margin:-4rem 0 0 0;
    font-size:40px;
    font-weight:550;
    text-shadow:2px 2px 10px #4169E1;
    }
    #text{
    font-family: 'Abril Fatface', cursive;
    color:#FF00FF;
    animation:slidedown 2s ease-in 1s infinite;
    font-size:32px;
    font-weight:700;
    }
    @keyframes slidedown {
      from{
       color:#FF00FF;
      }
      to{
        color:#00BFFF;
        text-shadow:2px 2px 10px #87CEEB;
        opacity:0.3;
      }
    }
  </style>
</head>
<body>
<br>
<br>
<br>
<h2>Feedback Form</h2>
<div id="text"><br></div>
<div class="carousel" style='height:38rem;' data-flickity='{ "autoPlay":true,"prevNextButtons":true ,"imagesLoaded":true }'>
<div class="carousel-cell">
        <img class="w3-image" src="../Media/feedback.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image"  src="../Media/feedback1.jpg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" style="padding-left:20rem" src="../Media/feedback4.jpg">
      </div>
</div>
<form method="POST" action="feeddata.php" class="was-validated" autocomplete="off">
<div class="form-group">
<label for="name">Name:</label>    
<input type="text" placeholder="Enter your name here" name="name" class="form-control" required> 
<div class="valid-feedback">Valid</div>
<div class="invalid-feedback">Enter your name here</div>
</div>
<div class="form-group">
<label for="Email">Email:</label>    
<input type="email" placeholder="Enter your email here" name="email" class="form-control" required>
<div class="valid-feedback">Valid</div>
<div class="invalid-feedback">Enter your email here</div>
</div>    
<div class="form-group">
<label for="id">OrderId:</label>
<input type="number" name="orderid" placeholder="Enter your orderid here" class="form-control" required>
<div class="valid-feedback">Valid</div>
<div class="invalid-feedback">Enter your OrderId here</div>
</div>
<div class="form-group">
<label for="feedback">Enter your response</label>    
<textarea rows="5" id="comment" name="reason" class="form-control" required></textarea>   
<div>
<button id="delorder" type="submit" style="margin:1rem 0 0 30rem;"class="btn btn-outline-success btn-lg">
Submit Feed
</button>    
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>   
<script>
document.getElementById('delorder').addEventListener('click',()=>{
    alert("Feedback Successfully Submitted");
})    
</script>
<script src="../jsfiles/inputchange.js" defer></script>
</body>
</html>