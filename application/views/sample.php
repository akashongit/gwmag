<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$index = $this->session->userdata('index');
?>
<!DOCTYPE html>
<html>
<title>About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('css/w3.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('css/custom.css') ?>">
<script src="<?php echo base_url('js/custom.js')?>"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="<?php //echo base_url('images/slides/my-slider.css') ?>"/> -->
<!-- <script src="<?php// echo base_url('images/slides/ism-2.2.min.js') ?>"></script>
 -->
 <style>
body {background-image: url("<?php echo base_url('images/bg.jpg') ?>");}
.navi {
    border: solid black;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 3px;

}


.right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    
}

.left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left" style=" background-color:#f2f2f2; z-index:3;width:200px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <!-- <img src="/w3images/avatar_g2.jpg" style="width:45%;" class="w3-round"><br><br> -->
    <!-- <h4><b>GIANT WHEEL</b></h4>
     --><!-- <p class="w3-text-grey">Template by W3.CSS</p>
  </div> -->
  <div class="w3-bar-block">
    <a href="javascript:void(0)" onclick="window.location='loadhome'" class="w3-bar-item w3-button w3-padding w3-text-teal w3-hover-blue"><i class="fa fa-th-large fa fa-home w3-margin-right"></i>HOME</a> 
    <a href="javascript:void(0)" onclick="window.location='loadabout'" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a> 
    <a href="javascript:void(0)" onclick="window.location='loadsayso'" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-user fa fa-comment w3-margin-right"></i>SAY SO</a>
    <a href="javascript:void(0)" onclick="window.location='loadfaq'" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-user fa fa-question-circle w3-margin-right"></i>FAQ</a>
    <a href="javascript:void(0)" onclick="window.location='loadcontact'" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="javascript:void(0)" onclick="window.location='loadjoinus'" class="w3-bar-item w3-button w3-padding w3-hover-blue"><i class="fa fa-users fa-fw w3-margin-right"></i>JOIN US</a>
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
<div class="w3-main" style="margin-left:200px">

  <!-- Header -->
  <header class=" w3-top" id="portfolio" style=" background-color:#f2f2f2; padding-top:1%; padding-bottom:1% ; opacity: 0.9">
   <!-- opacity -->
    <!-- <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:1200px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a> -->
    <div class="w3-cell-row">
      <span class=" w3-left w3-button w3-hide-large w3-large w3-hover-text-grey" onclick="w3_open()" ><i class="fa fa-bars"></i></span>
    <!-- <div class="w3-container">
    <h1><b>My Portfolio</b></h1> -->
    <!-- <div class="w3-section w3-bottombar w3-padding-16"> -->
      <!-- <button class="w3-button w3-black">ALL</button> -->
      <button class=" w3-cell w3-button w3-container " onclick="window.location='loadsample'"><i class="fa fa-book w3-margin-right"></i>READ SAMPLE</button>
      <button class=" w3-cell w3-button w3-container " onclick="window.location='loadtrial'"><i class="fa fa-clock-o w3-margin-right"></i>TRIAL</button>
      <button class=" w3-cell w3-button w3-container " onclick="window.location='loadgift'"><i class="fa fa-gift w3-margin-right"></i>GIFT</button>
      <button  onclick="$('#id01').show();" class=" w3-cell w3-button w3-container "><i class="fa fa-user-circle w3-margin-right"></i>LOG IN/SIGN UP</button>
    </div>
    <!-- </div> -->
  </header>
<!-- slider -->
<!-- <div class="w3-content w3-display-container" style="max-width:100%; " >
</div>  -->

<!-- insert here -->

<script>
$(document).ready(function(){
  $("#page").on("swipeleft",function(){
    next();
  });
  $("#page").on("swiperight",function(){
    prev();
  });                         
});
var path="<?php echo base_url().'images/sample/' ?>";
var d=document;
var index=<?php echo $index ?>;
// Script to open and close sidebar
function next(){
  index=index+1;
  // alert(index);
  <?php $index=$index+1; ?>;
  var npath=path+index+'.jpg';
  // $.get();
  $('#page').attr('src',npath).animate({opacity: '0'}, 10).animate({opacity: '1'}, "slow");
}

function prev(){
  index=index-1;
  <?php $index=$index-1; ?>;
  if(index==0){
   index=1; 
  }
  var npath=path+index+'.jpg';
  $('#page').attr('src',npath).animate({opacity: '0'}, 10).animate({opacity: '1'}, "slow");
}
</script>
<!-- about -->
<div class="w3-content w3-display-container" style="max-height:40px; padding-top: 70px; padding-left: 200px; padding-right: 220px" >
  <!-- <img class="w3-image w3-animate-right w3-center" id="page" src="<?php echo base_url().'images/sample/'.$index.'.jpg' ?>" style="height: 100% width: 100%; max-height: 650px;"> -->
  <img class="w3-image w3-animate-zoom w3-center" id="page" src="<?php echo base_url().'images/sample/'.$index.'.jpg' ?>" align="middle" vspace="0px 450px" style="max-height: 650px;">
  <a href="javascript:void(null)" onclick="next()"><i class="arrow right navi" style="float: right;">next</i></a>
  <a href="javascript:void(null)" onclick="prev()"><i class="arrow left navi" style="float: left;">ʌǝɹd</i></a>
  </div>
  <!-- Footer -->
  <!-- <footer class="w3-container w3-padding-32">
  <div class="w3-row-padding">
    <div class="w3-third w3-center">
      <img src="<?php// echo base_url('images/lvf-green.png') ?>" height=250dpx width=250dpx/>
        </div>
<br>
    <div class="w3-twothird w3-light-grey" style="opacity: 0.9">
      <br><p class="w3-text-black  ">dummy text this is used to enter describtion about life values foundation    </p><br><br>
    </div>    
  </div>
  </footer>
 -->


<!-- login popup -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content" class="width:50%;">
      <header class="w3-container w3-blue"> 
        <span onclick="$('#id01').hide();" 
        class="w3-button w3-display-topright">&times;</span>
        <h2 style=>Login</h2>
      </header>
      <div class="w3-container">
      <!-- create form here -->
        <form action="" autocomplete="on" method="get">
        <input class="w3-input w3-border" type="text" placeholder="username" name="u_name"/>
        <input class="w3-input w3-border" type="password" placeholder="password" name="pass"/>
        <input class="w3-button w3-green w3-container " type="submit" value="Sign In" formmethod="post" name="Sign In"/>
        <input class="w3-button w3-blue w3-container " type="button" name="signup" value="Sign Up"  formaction="">
         
        </form>
      </div>
    </div>
  </div>
<!-- End page content -->
</div>


</body>
</html>