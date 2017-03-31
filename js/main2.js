$(document).ready(function() {
var modal3 = document.getElementById('myModal3');
var modal7 = document.getElementById('myModal7');
var img3 = document.getElementById('myImg3');
var img7 = document.getElementById('myImg7');
var modalImg3 = document.getElementById("img03");
var modalImg7 = document.getElementById("img07");
var captionText3 = document.getElementById("caption3");
var captionText7 = document.getElementById("caption7");
img3.onclick = function(){
    modal3.style.display = "block";
    modalImg3.src = this.src;
    captionText3.innerHTML.style.display = "block";
}
img7.onclick = function(){
    modal7.style.display = "block";
    modalImg7.src = this.src;
    captionText7.innerHTML.style.display = "block";
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
modal3.onclick = function() {
  modal3.style.display = "none";
}
modal7.onclick = function() {
  modal7.style.display = "none";
}
});
