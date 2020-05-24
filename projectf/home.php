﻿<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
.mySlides1, .mySlides2 {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a grey background color */
.prev:hover, .next:hover {
  background-color: #f1f1f1;
  color: black;
}
</style>
</head>
<body>
<hr><ul style="height : 20px">
<li  style="display : inline-block; margin-right:20px">
<a href="register.php">
<h5 style="font-family: 'Goudy Old Style', cursive; font-size: 20px; color: black;">Sign Up</h5>
</a></li>
<li  style="display : inline-block;">
<a href="login.php">
 <h5 style="font-family: 'Goudy Old Style', cursive; font-size: 20px; color: black">Sign In</h5>
</a></li></ul>
<h2 style="text-align:center; font-family: 'Goudy Old Style', cursive; font-size: 40px;">La Élégante</h2>
<hr>

<div class="slideshow-container">
  <div class="mySlides1">
    <img src="hwatch.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="hshoe.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="hsg.jpg" style="width:100%">
  </div>

  <div class="mySlides1">
    <img src="hbag.jpg" style="width:100%">
  </div>
  
  <div class="mySlides1">
    <img src="hperf.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>


<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>

</body>
</html> 