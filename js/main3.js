$(document).ready(function() {
var modal4 = document.getElementById('myModal4');
var modal8 = document.getElementById('myModal8');
var img4 = document.getElementById('myImg4');
var img8 = document.getElementById('myImg8');
var modalImg4 = document.getElementById("img04");
var modalImg8 = document.getElementById("img08");
var captionText4 = document.getElementById("caption4");
var captionText8 = document.getElementById("caption8");
img4.onclick = function(){
    modal4.style.display = "block";
    modalImg4.src = this.src;
    captionText4.innerHTML.style.display = "block";
}
img8.onclick = function(){
    modal8.style.display = "block";
    modalImg8.src = this.src;
    captionText8.innerHTML.style.display = "block";
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
modal4.onclick = function() {
  modal4.style.display = "none";
}
modal8.onclick = function() {
  modal8.style.display = "none";
}
});
