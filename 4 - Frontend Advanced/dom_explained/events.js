function displayMenu(currentElement) {
  document.getElementById("box").style.width = "500px";
  document.getElementById("box").style.backgroundColor = "#555";
  currentElement.style.backgroundColor = "green";
}

function printUserInput(currentElement) {
  console.log(currentElement.value);
  currentElement.style.backgroundColor = "red";
  document.getElementById("guideUser").style.display = "block";
}

function printUserInput2(currentElement) {
  document.getElementById("guideUser").style.display = "hide";
}

let boxBtnHide = document.getElementById("boxBtnHide");

boxBtnHide.addEventListener("click", function (event) {
  document.getElementById("box").style.width = "0";
  event.target.style.backgroundColor = "blue";
  console.log(event.target.style);
});
