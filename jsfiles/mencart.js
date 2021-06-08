let countforCart = 0;
let btnMen = document.querySelectorAll(".btn2");
Array.from(btnMen).forEach((item) => {
  let countmen = 0;
  item.addEventListener("click", () => {
    if (countmen >= 0 || countforCart >= 0) {
      countmen += 1;
      countforCart=Number(localStorage.getItem("MenCart"))
      countforCart += 1;
      localStorage.setItem("MenCart", countforCart);
    }
    let num = item.getAttribute("data");
    localStorage.setItem(`CountMen${num}`, countmen);
    localStorage.setItem(`MenProdGroup${num}`, item.getAttribute("value"));
  });
});