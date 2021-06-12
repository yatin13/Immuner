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
  <?php 
   function renderProducts(){
    $con=mysqli_connect("localhost","root","","imagestable");
    $output='';
    $sql=mysqli_query($con,'SELECT * from imageformen');
    while($row=mysqli_fetch_array($sql))
    {
     $output.='<div class="col-sm-4">
               <div class="card border-info" style="width: 18rem;">
               <img src="data:image;base64,'.base64_encode($row[3]).'" width="420" height="300" class="card-img-top" alt="...">
               <div class="card-body text-primary">
               <h5 class="card-title" id="pd1" >'.$row[1].'</h5>
               <p class="card-text">'.$row[4].'</p>
               <button class="btn btn-primary" id="btn1" data="'.$row[0].'" value="'.$row[3].'"  data="'', ''">Add to Cart</button>
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
   
<div class="gif">
<h4 style="margin-left:14rem ;">Right section for fitness freaks<img src="../Media/muscles.png" width="100" height="100"/></h4>
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
<script src="..jsfiles/mencart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
document.getElementById('arrow').addEventListener('click',()=>{
  alert("Subscription added successfully");
})
</script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>
