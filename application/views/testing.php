<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script>
$(document).ready(function(){
  $("p").on("swipeleft",function(){
    alert("You swiped left!");
  });
  $("p").on("swiperight",function(){
    alert("You swiped right!");
  });                         
});
</script>
</head>
<body>

<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>The swipeleft Event</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p style="border:1px solid black;margin:5px;">Swipe me in the left direction - do not swipe outside the border!</p>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

</body>
</html>
<!--   <div class="w3-bar-block">
    <a href="loadhome" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-th-large fa fa-home w3-margin-right"></i>HOME</a> 
    <a href="loadabout" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal w3-hover-blue"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="loadsayso" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-user fa fa-comment w3-margin-right"></i>SAY SO</a>
    <a href="loadfaq" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-user fa fa-question-circle w3-margin-right"></i>FAQ</a>
    <a href="loadcontact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="loadcontact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-users fa-fw w3-margin-right"></i>JOIN US</a>
    <a href="loadcontact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-wrench fa-fw w3-margin-right"></i>SETTINGS</a>
    <a href="loadcontact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-power-off fa-fw w3-margin-right"></i>LOGOUT</a>
  </div> -->