<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <!-- <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br> -->
    <h4><b>GIANT WHEEL</b></h4>
    <!-- <p class="w3-text-grey">Template by W3.CSS</p>
  </div> -->
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa fa-home w3-margin-right"></i>HOME</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa fa-comment w3-margin-right"></i>SAY SO</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa fa-question-circle w3-margin-right"></i>FAQ</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header class="w3-container w3-top w3-white" id="portfolio" style="opacity: .9;">
  <!-- opacity -->
    <!-- <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a> -->
    <div class="w3-cell-row w3-container w3-padding-10">
      <span class="w3-cell w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()" ><i class="fa fa-bars"></i></span>
    <!-- <div class="w3-container">
    <h1><b>My Portfolio</b></h1> -->
    <!-- <div class="w3-section w3-bottombar w3-padding-16"> -->
      <!-- <button class="w3-button w3-black">ALL</button> -->
      <button class=" w3-cell w3-button w3-cell"><i class="fa fa-book w3-margin-right"></i>READ SAMPLE</button>
      <button class=" w3-cell w3-button w3-cell"><i class="fa fa-clock-o w3-margin-right"></i>TRIAL</button>
      <button class=" w3-cell w3-button w3-cell"><i class="fa fa-gift w3-margin-right"></i>GIFT</button>
      <button class=" w3-cell w3-button w3-cell"><i class="fa fa-user-circle w3-margin-right"></i>LOG IN/SIGN UP</button>
    </div>
    <!-- </div> -->
  </header>
  
  

<!-- insert here -->

<!-- slider -->
<div class="w3-content w3-display-container" style="max-width:800px;" >
  <!-- <img class="mySlides" src="slides/01.jpg" style="width:100%"> -->
  <img class="mySlides w3-image" src="<?php echo base_url('images/slides/01.jpg') ?>" style="width:100%">
  <img class="mySlides w3-image" src="<?php echo base_url('images/slides/02.jpg') ?>" style="width:100%">
  <img class="mySlides w3-image" src="<?php echo base_url('images/slides/03.jpg') ?>" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
// carousel();

// function carousel() {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//     for (i = 0; i < x.length; i++) {
//        x[i].style.display = "none";  
//     }
//     myIndex++;
//     if (myIndex > x.length) {myIndex = 1}    
//     x[myIndex-1].style.display = "block";  
//     setTimeout(carousel, 2000); // Change image every 2 seconds
// }
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-orange", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-orange";
}
</script>
<!-- insert here -->

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>