console.log("Kid script loaded")
var kidBtns=document.querySelectorAll('.btn5');
let countforcart=0;
Array.from(kidBtns).forEach((item)=>{
    let countkidcart=0;
    item.addEventListener('click',()=>{
    if(countforcart>=0&&countkidcart>=0)
    {
     countkidcart+=1;
     countforcart = Number(localStorage.getItem("KidCart"));
     countforcart+=1;
     localStorage.setItem("KidCart", countforcart);
    }    
    localStorage.setItem(`CountKid${item.getAttribute('data')}`,countkidcart);
    localStorage.setItem(`KidProdGroup${item.getAttribute('data')}`,item.getAttribute('value'));
   })
})