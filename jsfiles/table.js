const moneyToBeUpdated=document.getElementById('totalCash');
function money(cash)
{
  cash=String(cash);
  let num=cash.slice(3);
  console.log(num);
  totalCash=totalCash+num;
  return totalCash;
}
let cash=0;
const totalCount=document.getElementById("countProd");
totalCount.innerHTML =
  Number(localStorage.getItem("HomeCart")) +
  Number(localStorage.getItem("KidCart")) +
  Number(localStorage.getItem("WomenCart")) +
  Number(localStorage.getItem("MenCart"));
const table = document.getElementById("table");
function tableElement(ProductValue, ProuductSrc, ProductAmount, ProductCount) {
  let tableRow = document.createElement("tr");
  let tableProduct = document.createElement("td");
  let tableImage = document.createElement("td");
  let tableAmount = document.createElement("td");
  let tableCount = document.createElement("td");
  let image = document.createElement("img");
  image.src = ProuductSrc;
  cash+=(Number(ProductAmount.replace("Rs",''))*Number(ProductCount));
  moneyToBeUpdated.innerHTML=cash;
  localStorage.amount=cash;
  tableProduct.innerHTML = ProductValue;
  tableImage.append(image);
  tableAmount.innerHTML = ProductAmount;
  tableCount.innerHTML = ProductCount;

  tableRow.append(tableProduct);
  tableRow.append(tableImage);
  tableRow.append(tableAmount);
  tableRow.append(tableCount);
  return tableRow;
}
const tableAdd = (countofProduct, arrayToBeSplitted) => {
  if (
    countofProduct !== null &&
    countofProduct !== "undefined" &&
    countofProduct !== " "
  ) {
    let arr = arrayToBeSplitted.split(",");
    let tableData = tableElement(arr[2], arr[0], arr[1], countofProduct);
    table.append(tableData);
  }
};
tableAdd(localStorage.getItem("count1"), localStorage.getItem("Name1"));
tableAdd(localStorage.getItem("count2"), localStorage.getItem("Name2"));
tableAdd(localStorage.getItem("count3"), localStorage.getItem("Name3"));
tableAdd(localStorage.getItem("count4"), localStorage.getItem("Name4"));
tableAdd(localStorage.getItem("count5"), localStorage.getItem("Name5"));
tableAdd(localStorage.getItem("count6"), localStorage.getItem("Name6"));
tableAdd(localStorage.getItem("count7"), localStorage.getItem("Name7"));
tableAdd(
  localStorage.getItem("CountMen1"),
  localStorage.getItem("MenProdGroup1")
);
tableAdd(
  localStorage.getItem("CountMen2"),
  localStorage.getItem("MenProdGroup2")
);
tableAdd(
  localStorage.getItem("CountMen3"),
  localStorage.getItem("MenProdGroup3")
);
tableAdd(
  localStorage.getItem("CountMen4"),
  localStorage.getItem("MenProdGroup4")
);
tableAdd(
  localStorage.getItem("CountMen5"),
  localStorage.getItem("MenProdGroup5")
);
tableAdd(
  localStorage.getItem("CountWomen1"),
  localStorage.getItem("ProdWomenGroup1")
);
tableAdd(
  localStorage.getItem("CountWomen2"),
  localStorage.getItem("ProdWomenGroup2")
);
tableAdd(
  localStorage.getItem("CountWomen3"),
  localStorage.getItem("ProdWomenGroup3")
);
tableAdd(
  localStorage.getItem("CountWomen4"),
  localStorage.getItem("ProdWomenGroup4")
);
tableAdd(
  localStorage.getItem("CountWomen5"),
  localStorage.getItem("ProdWomenGroup5")
);
tableAdd(
  localStorage.getItem("CountKid1"),
  localStorage.getItem("KidProdGroup1")
);
tableAdd(
  localStorage.getItem("CountKid2"),
  localStorage.getItem("KidProdGroup2")
);
tableAdd(
  localStorage.getItem("CountKid3"),
  localStorage.getItem("KidProdGroup3")
);
tableAdd(
  localStorage.getItem("CountKid4"),
  localStorage.getItem("KidProdGroup4")
);
tableAdd(
  localStorage.getItem("CountKid5"),
  localStorage.getItem("KidProdGroup5")
);
