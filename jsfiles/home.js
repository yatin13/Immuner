console.log("Home loaded");
var countforcart = 0;
let num = document.getElementById("num");
let allBtns = document.querySelectorAll(".btn");
Array.from(allBtns).forEach((item) => {
  let countNum = 0;
  item.addEventListener("click", () => {
    if (countNum >= 0 && countforcart >= 0) {
      countNum += 1;
      countforcart =
        Number(localStorage.getItem("HomeCart")) +
        Number(localStorage.getItem("KidCart")) +
        Number(localStorage.getItem("WomenCart")) +
        Number(localStorage.getItem("MenCart"));
      countforcart += 1;
      num.innerHTML = countforcart;
      localStorage.setItem("HomeCart", countforcart);
    }
    localStorage.setItem("count" + item.getAttribute("data"), countNum);
    localStorage.setItem(
      "Name" + item.getAttribute("data"),
      item.getAttribute("value")
    );
  });
});
num.innerHTML =
  Number(localStorage.getItem("HomeCart")) +
  Number(localStorage.getItem("KidCart")) +
  Number(localStorage.getItem("WomenCart")) +
  Number(localStorage.getItem("MenCart"));
