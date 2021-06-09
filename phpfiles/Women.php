<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
      display: block;
    }
    .carousel
    {
    margin-top:5rem ;
    background-color: cornsilk;  
    }
  </style>
   <link rel="stylesheet" href="../cssfiles/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://kit.fontawesome.com/8d249fdd95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../jsfiles/womencart.js"defer></script>
    <title>Women cart</title>
    <link rel="stylesheet" href="../cssfiles/men.css" />
  </head>
  <body>
      <h4>
        <a href="Home.php"><i class="fas fa-home"></i>Back to Home</a>> Women Category
      </h4>
    <br>
    <br>
  <div class="carousel" style="margin-top:-2rem;" data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true }'>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/womenback5.jpeg">
        </div>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/womenback2.jpeg">
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/womenback10.jpeg">
      </div>
    </div>
  <?php 
   function renderProducts(){
    $con=mysqli_connect("localhost","root","","imagestable");
    $output='';
    $sql=mysqli_query($con,'SELECT * from tableforwomen');
    while($row=mysqli_fetch_array($sql))
    {
     $output.='<div class="col-sm-4">
               <div class="card border-info" style="width: 18rem;">
               <img src="data:image;base64,'.base64_encode($row[3]).'" width="420" height="300" class="card-img-top" alt="...">
               <div class="card-body text-primary">
               <h5 class="card-title" id="pd1" >'.$row[1].'</h5>
               <p class="card-text">'.$row[4].'</p>
               <button class="btn btn-primary" id="btn1" data='.$row[0].'value="data:image;base64,'.base64_encode($row[3]). '",Rs.1500, IMMUNERPROTINO">Add to Cart</button>
               <h4 class="text-danger" id="rup1">'.$row[2].'</h4>
               </div>
               </div>
               </div>';
    }
    return $output;
    }
    ?>
  <div class="row s allproduct" style='display:grid;grid-template-columns:auto auto auto;grid-gap:1rem;'>
  <?php 
  echo renderProducts();
  ?>
  </div>
<div class="gif">
<h4 style="color:#FF1493;margin-left:12rem;">Right section for fitness ladies<img src="../Media/muscles.png" width="100" height="100"/></h4>
<iframe src="https://giphy.com/embed/0MfcxV0IymysyAKrdE" style="margin-left:12rem;" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
<img width="400" height="400" style="margin-top:-25rem ;" src="../Media/dietwomen.jpeg"> 
</div>
<div class="men-text">
<h2>Why we are great choice?</h2>  
<h3>Immuer Clean Nutrition Range for Women</h3>
For holistic fitness and wellness, it is important for women to focus on having the right nutrition along with the physical activity. Owing to various factors like a higher percentage of muscle mass and lesser fat percentage, women usually burn more calories than wowomen. Hence their total macro and micronutrients requirewoment is also higher.

<h3>Women's Nutrition</h3>
Our range of clean women’s nutrition products include Immuner Protein & Herbs for women, Immuner Nutritional Meal for women, Immuner Plant Based Omega Multi, and so much more.
These products offer a multitude of benefits that provide holistic nutrition to women as per their needs.
<br>
<br>
Immuner Protein & Herbs, women is packed with clean protein and consists of herbs like Ashwagandha, Brahmi and Musli that provide greater stamina.
This blend also helps in faster muscle recovery and additional multivitamins like Biotin, Vitamin A & D promote better skin and hair health.
<br>
<br>
Keeping women’s specific nutritional needs in mind, Immuner Nutritional Meal for Men acts as a great replacement meal, as it contains 500 calories lesser (*compared to a regular meal).
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
<script>
document.getElementById('arrow').addEventListener('click',()=>{
  alert("Subscription added successfully");
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>
