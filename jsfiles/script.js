console.log("helllo");
let que1=document.getElementById("question");
let ans1=document.getElementById('answer');
let q1=que1.innerHTML;
let a1=ans1.innerHTML;
let button1=document.getElementById('state1');
button1.addEventListener('click',()=>{
button1.style.border="3px solid blue";
que1.innerHTML = "What made you partner with Immuner?";
ans1.innerHTML =
  "I’ve always believed that fitness is far more than just one’s physical appearance. It is about balancing the mind, body and soul. It is about being fit physically, mentally and emotionally. It is also about making better choices every day; which eventually allow us to become better versions of ourselves. Immuner’s products and philosophy both come from the same school of thought; something I absolutely relate to.";
ans1.style.marginTop="-24rem";
})
let button2=document.getElementById('state2');
button2.addEventListener('click',()=>{
button2.style.border = "3px solid blue";
que1.innerHTML="What are your favorite Immuner products?"
ans1.innerHTML="My top pick would be Immuner’s plant based Omega Multi for better immunity, heart and brain health."    
ans1.style.marginTop="-24rem";
})
let button3 = document.getElementById("state3");
button3.addEventListener("click", () => {
  button3.style.border = "3px solid blue";
  que1.innerHTML ="What role does nutrition play in your fitness and health?";
  ans1.innerHTML =
    "Growing up as an athlete, I learnt very early on that apart from sleep, exercise, and meditation, nutrition too plays an extremely crucial role in our overall health and well being.";
   ans1.style.marginTop="-20rem"    
});
