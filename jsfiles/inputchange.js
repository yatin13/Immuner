let text1='Whether you want to give us a Feedback';
let text2='Whether you have any query';
let text3='Whether you have any suggestions'
let text4='This is a right place to notify';
let texttoChange=document.getElementById('text');
setInterval(()=>{
   setTimeout(()=>{
    texttoChange.innerHTML=text1+"&#128077;";
   },2000)
   setTimeout(()=>{
    texttoChange.innerHTML = text2 + " &#128517;";
   },4000)
    setTimeout(() => {
      texttoChange.innerHTML = text3 + " &#128161;";
    },6000);
    setTimeout(() => {
      texttoChange.innerHTML = text4 + " &#128140;";
    }, 8000);
},9000)
console.log("Js loaded");
