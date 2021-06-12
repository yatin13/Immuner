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
      margin-top:-3rem ;
      background-color: cornsilk;  
       } 
  </style>
   <link rel="stylesheet" href="../cssfiles/footer.css">
    <script src='../jsfiles/kidcart.js' defer></script>
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
        <a href="Home.php"><i class="fas fa-home"></i>Back to Home</a>> Kid Category
      </h4>
    </div>
    <br>
    <br>
  <div class="carousel" style='margin-top:-2rem' data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true }'>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/kidback7.jpeg">
        </div>
      <div class="carousel-cell">
        <img class="w3-image" src='../Media/kidback9.jpeg'>
      </div>
      <div class="carousel-cell">
        <img class="w3-image" src="../Media/kidback8.jpeg">
      </div>
    </div>
  <?php 
   function renderProducts(){
    $con=mysqli_connect("localhost","root","","imagestable");
    $output='';
    $sql=mysqli_query($con,'SELECT * from tableforkid');
    while($row=mysqli_fetch_array($sql))
    {
     $output.='<div class="col-sm-4">
               <div class="card border-info" style="width: 18rem;">
               <img src="data:image;base64,'.base64_encode($row[3]).'" width="420" height="300" class="card-img-top" alt="...">
               <div class="card-body text-primary">
               <h5 class="card-title" id="pd1" >'.$row[1].'</h5>
               <p class="card-text">'.$row[4].'</p>
               <button class="btn btn-primary" id="btn1" data="'.$row[0].'" value="data:image;base64,'.base64_encode($row[3]).'" data2="'.$row[2].', '.$row[1].'">Add to Cart</button>
               <h4 class="text-danger" id="rup1">'.$row[2].'</h4>
               </div>
               </div>
               </div>';
    }
    return $output;
    }
    ?>
  <div class="row s allproduct" style='display:grid;grid-template-columns:auto auto auto;grid-gap:1rem;margin-left:3rem;'>
  <?php 
  echo renderProducts();
  ?>
  </div>
<div class="gif">
<h4 style="color:green;margin-left:12rem;">Right section for Little Champs<img src="../Media/muscles.png" width="100" height="100"/></h4>
<iframe src="https://giphy.com/embed/XKwWJQuBJTT8Y" style="margin-left:12rem;" width="480" height="346" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
<img width="400" height="400" style="margin-top:-25rem;transform:translateX(-500px) ;" src="../Media/dietwomen.jpeg"> 
</div>
<div class="men-text">
<h2>Why we are great choice?</h2>  
<h3>Immuer Clean Nutrition Range for Kid</h3>
For holistic fitness and wellness, it is important for kid to focus on having the right nutrition along with the physical activity. Owing to various factors like a higher percentage of muscle mass and lesser fat percentage, kid usually burn more calories than kid. Hence their total macro and micronutrients requirewoment is also higher.

<h3>Kid's Nutrition</h3>
Our range of clean kid’s nutrition products include Immuner Protein & Herbs for kid, Immuner Nutritional Meal for kid, Immuner Plant Based Omega Multi, and so much more.
These products offer a multitude of benefits that provide holistic nutrition to kid as per their needs.
<br>
<br>
Immuner Protein & Herbs, kid is packed with clean protein and consists of herbs like Ashwagandha, Brahmi and Musli that provide greater stamina.
This blend also helps in faster muscle recovery and additional multivitamins like Biotin, Vitamin A & D promote better skin and hair health.
<br>
<br>
Keeping kid’s specific nutritional needs in mind, Immuner Nutritional Meal for kid acts as a great replacement meal, as it contains 500 calories lesser (*compared to a regular meal).
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
