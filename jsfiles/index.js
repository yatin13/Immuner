let ie=document.getElementById('amount').getAttribute('value')
localStorage.setItem("pp",ie)
paypal.Buttons({
style:{
    color:"gold"

},
createOrder:function(data,actions){
    return actions.order.create({
    purchase_units:[{
    amount:{
     value:localStorage.getItem("pp")  
    }
    }]
    })
},
onApprove:function(data,actions){
    return actions.order.capture().then(function(details){
        console.log(details);
     document.location='success.php'
       console.log(details);
    })
},
onCancel:function(data) {
  document.location='cancel.php'
}
}).render("#paypal-gateway");