<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ChoosePayment</title>
    <link rel="stylesheet" href="../cssfiles/choosePay.css">
  </head>
  <body>
   <div class="container">
    <div class="items1">
       <div class="item1">Immuner</div> 
    </div>
    <div class="items2">
       <div class="item3">Immuner</div> 
    </div>
      <h1>
        <img src="../Media/cartcarryingwomen.jpeg" class="wom1" /><img
          src="../Media/shopping-cart (1).svg" class="cart1"
        /><div>Choose one</div><img
          src="../Media/shopping-cart (1).svg" class="cart2"
        /><img src="../Media/cartcarryingwomen.jpeg"  class="wom2" />
      </h1>
      <form action="invoice.php">
      <button type="submit" id='payOn' class="cash">Pay on Delivery</button>
      </form>
    </div>
    <h2 style="color:blue;margin:-7.3rem 0 0 26.9rem;">Or</h2>
  <script>
    document.getElementById('payOn').addEventListener('click',()=>{
        alert("Order successful!Data saved!");
      });
  </script>
  <div id="paypal-button-container" style='margin-left:4rem;'></div>
  <script src="https://www.paypal.com/sdk/js?client-id=AcVDjJK0l1A5EPEl2Ge9gyjGhm617gaYjsn8LS4wcS_T7CmVdKf7OAD8qxe3KUJjOObp0e9chkQJXfff&disable-funding=credit,card"></script>
<script>
  paypal.Buttons({
    style:{
      size: 'small',
      color:'silver',
      size: 'responsive',
       shape: 'pill'
    },
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value:localStorage.getItem('amount')==null||localStorage.getItem('amount')==0?'0.01':localStorage.getItem('amount'),
          },
          shipping_address: {
          recipient_name:localStorage.getItem('nameValue')==null?'Guest':localStorage.getItem('amount'),
          line1: localStorage.getItem('address')==null?'Delhi,east karolbag':localStorage.getItem('address'),
          phone: localStorage.getItem('contact')==null?'1234567890':localStorage.getItem('contact')
        }
    }],
    note_to_payer: 'Contact us for any questions on your order.'
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
      document.location='success.php';
      });
    },
    onCancel: function (data) {
      document.location = "cancel.php";
    },
  }).render('#paypal-button-container');
</script>
  </body>
</html>
