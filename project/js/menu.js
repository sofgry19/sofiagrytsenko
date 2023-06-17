function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function change(id, img){
  document.getElementById(id).src = img;
}

function changeCap(id,cap){
  document.getElementById(id).innerHTML = cap;
}
