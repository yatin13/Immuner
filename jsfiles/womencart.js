let countforcart=0;
var btnWomen=document.querySelectorAll('.btn3');
console.log(btnWomen)
Array.from(btnWomen).forEach((item)=>{
 let countwomen=0; 
  item.addEventListener('click',()=>{
    if(countwomen>=0&&countforcart>=0)
    {
    countwomen+=1;
    countforcart=Number(localStorage.getItem("WomenCart"));
    countforcart+=1;
    localStorage.setItem("WomenCart", countforcart);
    }
    localStorage.setItem(`CountWomen${item.getAttribute('data')}`,countwomen);
    localStorage.setItem(`ProdWomenGroup${item.getAttribute('data')}`,item.getAttribute('value'));
  })
})