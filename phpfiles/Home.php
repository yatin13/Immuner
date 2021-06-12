<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devic+e-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssfiles/style.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/8d249fdd95.js" crossorigin="anonymous"></script>
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" integrity="sha512-OdEXQYCOldjqUEsuMKsZRj93Ht23QRlhIb8E/X0sbwZhme8eUw6g8q7AdxGJKakcBbv7+/PX0Gc2btf7Ru8cZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<script>
window.addEventListener('load', (event) => {
  alert(`Welcome Dear,${localStorage.getItem("nameValue")} Hope you will enjoy our services`);
});
</script>
<nav>
<div class="logo">
<img width="160" height="40" src="../Media/immu.jpeg"/>
</div>   
<div class="shop">
 <a class="s" href="#">Home</a>
 <div class="shop-dropdown">
 <li class='category'>
 <a class="s" href="#">Shop By Category</a>
 <img width="15" height="10" src="../Media/arrow.png"/>    
 <ul class='dropdown-categories'>
<img width="150" height="100" src="../Media/menprod.webp"/>   
<li><a class="s"  href="men.php">Shop for Men</a></li>
<img width="150" height="100" src="../Media/womenprod.jpg"/>
<li><a class="s" href="Women.php">Shop for Women</a></li>
<img width="150" height="100" src="../Media/kidprod.jpg"/>
<li><a class="s" href="Kids.php">Shop for Kids</a></li>
</ul>
</li>
 </div class="live">
 <a href="liveSession.php" class="s">Live Sessions</a>   
</div> 
<div class="u" class="last-col-nav">
<li>    
<a href="#"><img class="nav-logo" src="../Media/userprof.svg"/>
 <img width="15" height="10" src="../Media/arrow.png"/>  
<ul class="user-item">
<a href="Login.php">Login</a><br>
<a href="SignUp.php">SignUp</a>  
</ul>
</li>
<a href="cart.php"><img class="nav-logo" src="../Media/cart-icon.svg"/></a>
<div id="num">0</div>
</nav>
 <img id="img" src="../Media/Back.png"/>  
 <h1 id="text1">We care for your Health</h1>
 <div class="love-immuner">  
 <h3>I <img width="50" height="40" src="../Media/heart.png"/> immuner Products</h3>
 <div class="st"><br></div>
 <div class="nd"><br></div>
 </div>
  <section id="spotlight">
    <div class="spot-icon">
      <div id="img">
        <img id="spot" src="../Media/spotlight.svg"/>
          <div class="light">
          <br>
          </div>                 
      </div>
    </div> 
   </div> 
   <?php 
   function renderProducts(){
    $con=mysqli_connect("localhost","root","","imagestable");
    $output='';
    $sql=mysqli_query($con,'SELECT * from imagesforhome');
    while($row=mysqli_fetch_array($sql))
    {
     $output.='<div class="col-sm-4">
               <div class="card border-info" style="width: 18rem;">
               <img src="data:image;base64,'.base64_encode($row['Img']).'" width="420" height="300" class="card-img-top" alt="...">
               <div class="card-body text-primary">
               <h5 class="card-title" id="pd1" >'.$row[1].'</h5>
               <p class="card-text">'.$row[3].'</p>
               <button class="btn btn-primary" id="btn1" data="'.$row[0].'" value="data:image;base64,'.base64_encode($row["Img"]).'" data2="'.$row[2].' ,'.$row[1].'">Add to Cart</button>
               <h4 class="text-danger" id="rup1">'.$row[2].'</h4>
               </div>
               </div>
               </div>';
    }
    return $output;
    }
    ?>
    <h1 class="head-spot"><span id="first">In</span> The <span id="second">Spotlight</span></h1>
  <div class="row s allproduct" style='display:grid;grid-template-columns:auto auto auto;grid-gap:1rem;margin-left:3rem;'>
  <?php 
  echo renderProducts();
  ?>
  </div>
<h1 class="inside">New Launch</h1>
<section class="side-video1" style="margin-top:29rem;padding-top:1rem; display:flex;">
<img class="GIF1" style="margin-left:10rem;"src="https://media2.giphy.com/media/EZ8tMlNXJ7qsaOOQAr/giphy.gif?cid=ecf05e47do3pypfbfyvlx0x3i8dyyhlwd5kic86o06diqcab&rid=giphy.gif&ct=g"/>
<img class="GIF2" style="margin-left:34rem;"src="https://media.giphy.com/media/UrJTMKEJBjr07rBzLO/giphy.gif"/>
</section>
</section>
<section class="insideus">
<img class="mus1" src="./Media/muscles.png"/>
<h1 class="inside">Inside Our Story</h1> 
<img class="mus2" src="./Media/muscles.png"/> 
<iframe class="frame" width="560" height="315" src="https://www.youtube.com/embed/ciwXFLwo7QY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</section>
      <section class="actor-statement">
      <img width="500" height="500" class="actor" src="../Media/Immuner.png"/>
      <h1 id="question">What made you partner with us?</h1>
      <h5 id="answer">
        I’ve always believed that fitness is far more<br>
        than just one’s physical appearance. It is about<br> 
        balancing the mind, body and soul. It is about<br> 
        being fit physically, mentally and emotionally.<br> 
        It is also about making better choices every day;<br>
        which eventually allow us to become better versions<br>
        of ourselves. Immuner’s products and philosophy both<br>
        come from the same school of thought; something I absolutely relate to.
      </h5>
      <div class="btns">
      <button id="state1">1</button>
      <button id="state2">2</button>
      <button id="state3">3</button>
      </div>
      </section>
      <section class="popularity">
        <h1 class="head-spot popu">Loved by Thousands</h1>
   <div  class="carousel" data-flickity='{ "groupCells": true }'>
  <div class="carousel-cell">
    <img width="300" height="300" src="../Media/people1.jpg"/>
  </div>
  <div class="carousel-cell">
    <img width="300" height="300" src="../Media/people2.jpg"/>
  </div>
  <div class="carousel-cell">
    <img width="300" height="300" src="../Media/people3.jpg"/>
  </div>
  <div class="carousel-cell">
    <img width="300" height="300" src="../Media/people4.jpg"/>
  </div>
  <div class="carousel-cell">
   <img width="300" height="300" src="../Media/people5.jpg"/>
  </div>
  <div class="carousel-cell">
<img width="300" height="300" src="./Media/people6.jpg"/>
  </div>
  <div class="carousel-cell">
<img width="300" height="300" src="../Media/people7.jpg"/>
  </div>
  <div class="carousel-cell">
<img width="300" height="300" src="../Media/people8.jpg"/>
  </div>
  <div class="carousel-cell">
<img width="300" height="300" src="../Media/people9.jpg"/>
  </div>
  <div class="carousel-cell">
<img width="300" height="300" src="../Media/people10.jpg"/>
  </div>
  <div class="carousel-cell">
<img width="300" height="300" src="../Media/people11.jpg"/>
  </div>
</div>
</div>
</section>
<section class="Social-box-with-style">
  <div class="follow-Us">
    <div class="follow">  
    <img src="../Media/heart.png"/><h1 class="head-spot1">Follow us</h1><img src="../Media/heart.png"/>
    </div>
    <div class="social-icons-list">
    <div class="instagram"><img src="../Media/instagram.png"/> Instagram</div>  
    <div class="facebook"><img src="../Media/facebook.png"/>Facebook</div>
    <div class="youtube"><img src="../Media/youtube.png"/>Youtube</div>
    <div class="twitter"><img src="../Media/twittter.png"/>Twitter</div>
    </div>
  </div>
</section>
<footer class="Footer-section">
  <img class="pro" width="150" height="100" src="../Media/proteinfood.jpeg"/>
  <div class="subs-box">
  <h4>Subscribe to our Mailing list</h4>
  <input type="text" placeholder="Enter your email">
  <i class="fas fa-arrow-right fa-3x fs" id="arrow"></i>
  </div>
  <div class="follow1">
    <h4 class="tt">Follow Us</h4>
    <div class="social-icons">
     <i class="fab fa-instagram-square fa-4x"></i>
     <i class="fab fa-facebook fa-4x"></i>
     <i class="fab fa-youtube fa-4x"></i>
     <i class="fab fa-twitter fa-4x"></i>
    </div>
  </div>
  <div class="term-and-other-info">
    <div class="infoImportant">
      <a href="About.php">About Us</a>
      <a href="Feedback.php">Contact Us</a>
      <a href="track.php">Track Order</a>
    </div>
  <div class="terms-and-privacy">
      <a href="terms.html">Terms</a>
      <a href="Privacy.php">Privacy</a>
      <a href="refund.php">Cancelion and Refund</a>
      <a  class="hr" href="disclaimers.php">Disclaimers</a>
  </div>
  </div>
  </div>
</footer> 
<div class="foot-copyrights" style="text-align:center;background-color:grey;color:white;height:6rem;padding-top:2.5rem;font-weight:600;font-size:23px;">
   © Copyright 2021 Immuner - All Rights Reserved
</div>
<script>
document.getElementById('arrow').addEventListener('click',()=>{
  alert("Subscription added successfully");
})
</script>
<script src="../jsfiles/home.js" defer></script>
<script src="../jsfiles/script.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>     
</body>
</html>
