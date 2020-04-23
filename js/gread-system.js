document.querySelector('#list-b').onclick = demoDisplay;

function demoDisplay() {
  document.getElementById("list-group").style.display = "none";
  document.getElementById("grid-group").style.display = "block";


   document.getElementById("sort-up").style.display = "none";
  document.getElementById("sort-down").style.display = "none";
  document.getElementById("sort-raiting").style.display = "none";
  document.getElementById("elastic1").style.display = "none";


   document.getElementById("sort-up-grid").style.display = "block";
  document.getElementById("sort-down-grid").style.display = "block";
  document.getElementById("sort-raiting-grid").style.display = "block";
  document.getElementById("elastic2").style.display = "block";
}

document.querySelector('#grid-b').onclick = demoDisplay2;

function demoDisplay2() {
  document.getElementById("list-group").style.display = "flex";
  document.getElementById("grid-group").style.display = "none";


  document.getElementById("sort-up").style.display = "block";
  document.getElementById("sort-down").style.display = "block";
  document.getElementById("sort-raiting").style.display = "block";
  document.getElementById("elastic1").style.display = "block";

   document.getElementById("sort-up-grid").style.display = "none";
  document.getElementById("sort-down-grid").style.display = "none";
  document.getElementById("sort-raiting-grid").style.display = "none";
  document.getElementById("elastic2").style.display = "none";
}
