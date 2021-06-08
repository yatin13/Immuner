<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../cssfiles/check.css">
    <title>CheckoutForm</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<h1>Payment &#128184;</h1>
<form action="pay.php" id="myform" method="POST">
<div class="form-content">
<div>
<label value="name">Name</label><br>
<input type="text" name="name" id="name">
    </div>
<div>
<label value="email">Email</label><br>
<input type="email" name="email" id="email">
</div>
<div>
<label value="contact">Contact</label><br>
<input type="tel" name="contact" id="contact">
    </div>
<div>
<label value="orderid">OrderId</label><br>
<input type="number" name="orderid" id="orderid">
    </div>
<div>
<label value="date">Date</label><br>
<input type="text" name="date" id="date">
    </div>
<div>
<label value="amount">Amount</label><br>
<input type="number" name="amount" id="amount" max="999999.99">
    </div>
<div>
<label value="count">Count</label><br>
<input type="number" name="count" id="count">
    </div>
<div>
<label value="address">Address</label><br>
<input type="text" name="address" id="address">
</div>
</div>
<button id="sub" style="border-radius:30px;">Proceed</button>    
</form>
<script>
console.log(localStorage.getItem('cnt'));
document.getElementById('amount').value=localStorage.getItem('amount');
document.getElementById('count').value=Number(localStorage.getItem("HomeCart")) +
  Number(localStorage.getItem("KidCart")) +
  Number(localStorage.getItem("WomenCart")) +
  Number(localStorage.getItem("MenCart"));
function randNo(min,max)
{
return Math.floor(Math.random()*(max-min+1)+min);
}
let dat=document.getElementById('date');
let d=new Date();
const da=d.getDate();
const m=d.toLocaleString('default',{month:"long"});
const year=d.getFullYear();
let answer=da+" "+m+","+year;
dat.value=answer;
document.getElementById('contact').addEventListener('change',(event)=>{
    localStorage.contact=event.target.value;
})
document.getElementById('address').addEventListener('change',(event)=>{
    localStorage.address=event.target.value;
})
var orderId=document.getElementById('orderid');
var val=randNo(1,100);
orderId.value=val;
</script>   
</body>
</html>
