$(document).ready(function() {
var modal5 = document.getElementById('myModal5');
var modal6 = document.getElementById('myModal6');
var img5 = document.getElementById('myImg5');
var modalImg5 = document.getElementById("img05");
var captionText5 = document.getElementById("caption5");
img5.onclick = function(){
    modal5.style.display = "block";
    modalImg5.src = this.src;
    captionText5.innerHTML.style.display = "block";
}
var img6 = document.getElementById('myImg6');
var modalImg6 = document.getElementById("img06");
var captionText6 = document.getElementById("caption6");
img6.onclick = function(){
    modal6.style.display = "block";
    modalImg6.src = this.src;
    captionText6.innerHTML.style.display = "block";
}
var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}
modal5.onclick = function() {
  modal5.style.display = "none";
}
modal6.onclick = function() {
  modal6.style.display = "none";
}
});
