// document,addEventListener('onload',() => {
//   let list = createPerson(localStorage.getItem("namePerson"));
//   let lsit2 = createReview(localStorage.getItem("commentText"));
//   lsit2.classList.add("comment1");
//   let val = localStorage.getItem("starRating");
//   arr.forEach((item) => {
//     console.log(item);
//     if (item["value"] === val) {
//       let v = item.name;
//       let starId = document.getElementById(v);
//       starId.style.color = "rgb(13, 245, 233)";
//     }
//   });
//   arr2.forEach((item) => {
//     if (item["value"] === val) {
//       let v = item.id;
//       let revId = document.getElementById(v);
//       let num = Number(revId.innerHTML);
//       revId.innerHTML = num + 1;
//     }
//   });
//   let list3 = document.createElement("li");
//   list3.append(list);
//   list3.append(lsit2);
//   list3.id = "comment-per" + Number(lists.childElementCount) - 1;
//   localStorage.setItem("listValue", list3);
//   lists.insertBefore(list3, lists.childNodes[0]);
// });
console.log("Men js loaded");
let starValue = "http://127.0.0.1:5500/star.svg";
console.log(starValue);
let starClass = document.getElementsByClassName("st");
let arr = [];
Array.from(starClass).forEach((i) => {
  arr.push({
    name: i.id,
    value: i.getAttribute("value"),
  });
});
let arr2 = [];
let rClass = document.getElementsByClassName("r");
Array.from(rClass).forEach((i) => {
  arr2.push({
    id: i.id,
    value: i.getAttribute("value"),
  });
});
let listClass = document.querySelector(".li-class");
console.log(listClass);
function showStars(number) {
  for (let i = 0; i < number; i++) {
    let img = document.createElement("img");
    img.src = starValue;
    img.id = "sta";
    StarField.append(img);
  }
  localStorage.sta = StarField;
}
let StarField = document.getElementById("star-field");
function createReview(text) {
  let listItem2 = document.createElement("li");
  listItem2.textContent = text;
  return listItem2;
}
localStorage.delId = "del";
localStorage.editId = "edit";
localStorage.btnClas = "li-class";
function createPerson(fullName) {
  let listItem = document.createElement("li");
  listItem.classList.add("person");
  let div1 = document.createElement("div");
  let div2 = document.createElement("div");
  let div3 = document.createElement("div");
  div1.textContent = fullName;
  div2.textContent = getDate();
  listItem.append(div1);
  listItem.append(div2);
  return listItem;
}
function getDate() {
  let d = new Date();
  return `${d.toLocaleDateString()}`;
}
let writeBtn = document.getElementById("wri");
let commentWindow = document.querySelector(".comment");
console.log(commentWindow);
writeBtn.addEventListener("click", () => {
  commentWindow.style.display = "block";
});
let namewarn = document.getElementById("namewarn");
let closeBtn = document
  .getElementById("close")
  .addEventListener("click", () => {
    commentWindow.style.display = "none";
  });
let fieldName = document.getElementById("name");
fieldName.addEventListener("input", (event) => {
  const word = event.target.value;
  const regex = new RegExp("^[A-Z][D]{1,15}([s])?[D]{1,10}/g");
  if (regex.test(word) == false) {
    namewarn.style.display = "block";
  } else {
    namewarn.style.display = "none";
  }
  localStorage.namePerson = word;
});
let reviewText = document.getElementById("txt");
reviewText.addEventListener("change", (event) => {
  let txtValue = event.target.value;
  localStorage.commentText = txtValue;
});
let h1Text = document.getElementById("sttext");
let starShow = document.getElementById("star-val");
let StarSection = document.getElementById("star-section");
starShow.addEventListener("input", function strs(event) {
  let val = event.target.value;
  localStorage.starRating = val;
  h1Text.style.display = "block";
  showStars(val);
});
const templateList=document.getElementById('list-item-render');
let lists = document.querySelector(".comment-section");
let addBtn = document.getElementById("adbtn");
addBtn.addEventListener("click", () => {
  let list = createPerson(localStorage.getItem("namePerson"));
  let lsit2 = createReview(localStorage.getItem("commentText"));
  lsit2.classList.add("comment1");
  let val = localStorage.getItem("starRating");
  arr.forEach((item) => {
    console.log(item);
    if (item["value"] === val) {
      let v = item.name;
      let starId = document.getElementById(v);
      starId.style.color = "rgb(13, 245, 233)";
    }
  });
  arr2.forEach((item) => {
    if (item["value"] === val) {
      let v = item.id;
      let revId = document.getElementById(v);
      let num = Number(revId.innerHTML);
      localStorage.reviewValue =num+1;
      revId.innerHTML =localStorage.getItem("reviewValue");
    }
  });
  let list3 = document.createElement("li");
  list3.append(list);
  list3.append(lsit2);
  list3.id = "comment-per" + Number(lists.childElementCount) - 1;
  lists.insertBefore(list3, lists.childNodes[0]);
  alert("Your comment is successFully Added!!");
  commentWindow.style.display = "none";
  fieldName.value = " ";
  starShow.value = "";
  reviewText.value = " ";
  StarField.innerHTML = " ";
});

// let cartNum = document.getElementById("num");
// let count = 1;
// btnAdd.addEventListener("click", function (event) {
//   if (event.target !== event.currentTarget) {
//     let clickedItem = event.target.id;
//     if (count >= 0) {
//       cartNum.innerHTML = count;
//     }
//     count += 1;
//     event.stopPropagation();
//   }
// });
/*localStorage.imgId = "img8";
if (
  document.getElementById(localStorage.getItem("imgId")) !== undefined ||
  document.getElementById(localStorage.getItem("imgId")) !== null ||
  document.getElementById(localStorage.getItem("imgId"))!==' '
){
  document
    .getElementById(localStorage.getItem("imgId"))
    .addEventListener("click", () => {
      document.querySelector(localStorage.getItem("btnClas")).style.display =
        "block";
    });
  }
    if (
      document.getElementById(localStorage.getItem("imgId")) !== undefined ||
      document.getElementById(localStorage.getItem("imgId")) !== null ||
      document.getElementById(localStorage.getItem("imgId")) !== " "
    ){
      document
        .getElementById(localStorage.getItem("imgId"))
        .addEventListener("dblclick", () => {
          document.querySelector(
            localStorage.getItem("btnClas")
          ).style.display = "none";
        });
    }
if (
  document.getElementById(localStorage.getItem("editId")) !== undefined ||
  document.getElementById(localStorage.getItem("editId")) !== null ||
  document.getElementById(localStorage.getItem("editId")) !== " "
)
{ 
   document
    .getElementById(localStorage.getItem("editId"))
    .addEventListener("click", () => {
      lists.removeChild(localStorage.getItem("listValue"));
      commentWindow.style.display = "block";
      fieldName.value = localStorage.getItem("namePerson");
      reviewText.value = localStorage.getItem("commentText");
      starShow.value = localStorage.getItem("starRating");
      StarField.innerHTML = localStorage.getItem("sta");
      h1Text.style.display = "block";
    });
  }
if (
  document.getElementById(localStorage.getItem("del")) !== undefined ||
  document.getElementById(localStorage.getItem("del")) !== null ||
  document.getElementById(localStorage.getItem("del")) !== " "
){
  document
    .getElementById(localStorage.getItem("del"))
    .addEventListener("click", () => {
      lists.removeChild(localStorage.getItem("listValue"));
      alert("Your comment is SuccessFully deleted");
      localStorage.clear();
    });
  }*/

// window.location.reload(() => {
//   let list = createPerson(localStorage.getItem("namePerson"));
//   let lsit2 = createReview(localStorage.getItem("commentText"));
//   lsit2.classList.add("comment1");
//   let val = localStorage.getItem("starRating");
//   arr.forEach((item) => {
//     console.log(item);
//     if (item["value"] === val) {
//       let v = item.name;
//       let starId = document.getElementById(v);
//       starId.style.color = "rgb(13, 245, 233)";
//     }
//   });
//   arr2.forEach((item) => {
//     if (item["value"] === val) {
//       let v = item.id;
//       let revId = document.getElementById(v);
//       let num = Number(revId.innerHTML);
//       revId.innerHTML = num + 1;
//     }
//   });
//   let list3 = document.createElement("li");
//   list3.append(list);
//   list3.append(lsit2);
//   list3.id = "comment-per" + Number(lists.childElementCount) - 1;
//   localStorage.setItem("listValue", list3);
//   lists.insertBefore(list3, lists.childNodes[0]);
// });
