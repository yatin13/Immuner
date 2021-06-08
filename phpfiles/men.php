<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../cssfiles/footer.css">
      <style media="screen">
  .carousel-cell 
  {
    width: 100%;
    height:20rem;
  }
  .carousel-cell img {
    padding-left:15rem ;
    width:80%;
    height:19rem;
    }
    .carousel-cell:before {
      display: block
    }
    .carousel
    {
    margin-top:5rem ;
    background-color: cornsilk;  
    }
  </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/8d249fdd95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="../cssfiles/men.css" />
  </head>
  <body>
    <div class="back">
      <h4>
        <a href="Home.php"><i class="fas fa-home"></i>Back to Home</a>> Men Category
      </h4>
    </div>
  <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true }'>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/menback1.jpeg">
        </div>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/menback2.jpeg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/menback3.jpeg">
      </div>
    </div>
    <div class="row s">
  <div class="col-sm-4">
  <div class="card border-info" style="width: 18rem;">
  <img src="../Media/menprod6.jpg" id="img1" class="card-img-top">
  <div class="card-body text-primary">
    <h5 class="card-title" id="pd1" value="IMMUNER PROTINO">IMMUNER DELUX SHAKE </h5>
    <p class="starrating card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
    <h4 class="text-danger" id="rup1" value="Rs 1500"><s>MRP: ₹1,699</s> 
    <br>Rs.1500 | 11% off</h4>
    <button class="btn btn-outline-primary btn2" id="btn1" data="1" value="../Media/menprod6.jpg ,Rs1500, IMMUNER DELUX SHAKE">Add to Cart</button>
  </div>
</div>
</div>
 <div class="col-sm-4">
<div class="card border-info" style="width: 18rem;">
  <img src="../Media/menprod2.webp" id="img2" class="card-img-top">
  <div class="card-body text-primary">
    <h5 class="card-title" id="pd2">IMMUNER THEY WHEY</h5>
    <p class="starrating  card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
    <h4 class="text-danger" id="rup2" data="Rs 1500"><s>MRP: ₹1,349</s> 
    <br>Rs.1111 | 17% off</h4></h4>
    <button class="btn btn-outline-primary btn2" data="2" value="../Media/menprod2.webp ,Rs1111, IMMUNER THEY WHEY" id="btn2">Add to Cart</button>
    </div>
</div>
</div>
<div class="col-sm-4">
  <div class="card border-info" style="width: 18rem;">
  <img src="../Media/menprod3.png" id="img3" class="card-img-top">
  <div class="card-body text-primary">
    <h5 class="card-title" id="pd3">IMMUNER PROTINO ADVANCED</h5>
    <p class="starrating card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
   <h4 class="text-danger" id="rup3"><s>MRP: ₹699</s>Rs.664 | 5% off</h4>
    <button class="btn btn-outline-primary btn2" id="btn3" data="3" value="../Media/menprod3.png ,Rs664, IMMUNER PROTINO ADVANCED">Add to Cart</button>
  </div>
</div>
</div>
</div>
<div class="row s">
  <div class="col-sm-4 s1">
  <div class="card border-info" style="width: 18rem;">
  <img src="../Media/menprod4.webp" class="img-prod"  class="card-img-top">
  <div class="card-body text-primary">
    <h5 class="card-title" id="pd4" >IMMUNER BODYBULIDING</h5>
    <p class="starrating card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
     <h4 class="text-danger" id="rup4"><s>MRP: ₹1299</s>| Rs.1240</h4>
    <button class="btn btn-outline-primary btn2" id="btn4" data="4" value="../Media/menprod4.webp ,Rs1240, IMMUNER BODYBULIDING">Add to Cart</button>
    </div>
</div>
</div>
 <div class="col-sm-4 s2">
  <div class="card border-info" style="width: 18rem;">
  <img src="../Media/menprod5.webp" id="img4" class="card-img-top">
  <div class="card-body text-primary">
    <h5 class="card-title" id="pd4" >IMMUNER LEAN SHAKE</h5>
    <p class="starrating card-text"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
     <h4 class="text-danger" id="rup5"><s>MRP: ₹1499</s>Rs.1375 | 8% off</h4>
    <button class="btn btn-outline-primary btn2" id="btn4" data="5" value="../Media/menprod5.webp ,Rs1375,IMMUNER LEAN SHAKE">Add to Cart</button>
    </div>
</div>
</div>
</div>
<div class="gif">
<h4 style="margin-left:14rem ;">Right section for fitness freaks<img src="muscles.png" width="100" height="100"/></h4>
<img style="margin-left:14rem ;" src="https://media3.giphy.com/media/7YCC7PTNX2TOhJQ6aW/giphy.gif?cid=ecf05e47vdmwkpe1v06u7wqsdnxjfq3p7v1mobzqvfzfkdbu&rid=giphy.gif&ct=g"/>
</div>
<div class="diet-chart">
<img width="400" height="400" src="../Media/dietmen-chart.jpeg"/>  
</div>
<div class="men-text">
<h2>Why we are great choice?</h2>  
<h3>Immuer Clean Nutrition Range for Men</h3>
For holistic fitness and wellness, it is important for men to focus on having the right nutrition along with the physical activity. Owing to various factors like a higher percentage of muscle mass and lesser fat percentage, men usually burn more calories than women. Hence their total macro and micronutrients requirement is also higher.

<h3>Men's Nutrition</h3>
Our range of clean men’s nutrition products include Immuner Protein & Herbs for Men, Immuner Nutritional Meal for Men, Immuner Plant Based Omega Multi, and so much more.
These products offer a multitude of benefits that provide holistic nutrition to men as per their needs.
<br>
<br>
Immuner Protein & Herbs, Men is packed with clean protein and consists of herbs like Ashwagandha, Brahmi and Musli that provide greater stamina.
This blend also helps in faster muscle recovery and additional multivitamins like Biotin, Vitamin A & D promote better skin and hair health.
<br>
<br>
Keeping men’s specific nutritional needs in mind, Immuner Nutritional Meal for Men acts as a great replacement meal, as it contains 500 calories lesser (*compared to a regular meal).
It also consists of herbs like Ginseng, Barley Grass and Garcinia Cambogia that help boost metabolism and improve energy levels.
<br>
<br>
To boost overall health, it is important to take supplements that promote heart, brain and joint health. OZiva’s Omega Multi contains vegan Omega-3 fortified with extra Olive Oil and plant-based vitamins that reduces inflammation, improves heart and brain health. It also helps build immunity.
</div>
<footer class="Footer-section">
  <img class="pro" width="150" height="100" src="../Media/proteinfood.jpeg"/>
  <div class="subs-box">
  <h4>Subscribe to our Mailing list</h4>
  <input type="text" placeholder="Enter your email">
  <i class="fas fa-arrow-right fa-3x fs" id="arrow"></i>
  </div>
<div class="copyrights">
   © Copyright 2021 Immuner - All Rights Reserved
</div>
</footer>
<script src="../jsfiles/mencart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
document.getElementById('arrow').addEventListener('click',()=>{
  alert("Subscription added successfully");
})
</script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>
