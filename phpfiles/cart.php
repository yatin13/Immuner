<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../cssfiles/cart.css">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-xl">
<div class='head'>
<a href="Home.php"><i id="arr" class="fas fa-chevron-left"></i></a><h1><u>Your Cart</u></h1><i class="fas fa-shopping-cart"></i><i class="fas del fa-trash" id='del' data="Delete"></i>
</div>
<table id="table">
<tr class="rt">  
<th>Product</th>
<th>Product Image</th>
<th>Amount<br>(Per Item)</th>
<th>Count</th>
</tr>    
</table>
<div class="amount">
<div>
Amount(&#128181;):Rs.<span id="totalCash">0</span>
</div>
<div>
Count:<span id="countProd">0</span>
</div>
</div>
<a href="check.php"><button>Make Payment</button></a>
</div>
<script src="../jsfiles/table.js" defer></script>
<script>

document.getElementById('del').addEventListener('click',()=>{
  localStorage.clear(); 
  let emoji="&#128533;"
  document.getElementById('table').innerHTML=`${emoji} It seems like your cart is empty!!Shop to Continue`;
  document.getElementById('totalCash').innerHTML="0";
  document.getElementById("countProd").innerHTML="0"; 
})
</script>
</body>
</html>