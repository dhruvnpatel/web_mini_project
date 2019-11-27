<?php

?>
<html>
    <head>
    <title>Pixel Hut</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
  height: 100%;
  line-height: 1.8;
  background-color: #379683
}
/* Full height image header */
.bgimg-1 {
  .bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("PH.jpg");
  min-height: 50%;
}
header{
 overflow: hidden;
  height: auto;
  justify-content: inherit;
  align-items: inherit;
}
.w3-bar .w3-button {
  padding: 16px;
}
</style>
    </head>
    <body>
        
        
        
        <script>
  var myIndex = 0;
  carousel();
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 2500);    
    }
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}
// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
        
        
        
        
        
        <div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="home.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i>HOME</a>
      <a href="events_loggedin.php" class="w3-bar-item w3-button"><i class="fa fa-edge"></i> EVENTS</a>
      <a href="gallery_loggedin.php" class="w3-bar-item w3-button"><i class="fa fa-picture-o"></i> GALLERY</a>
      <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-lock"></i> LOGOUT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a>
  <a href="events_loggedin.php" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
  <a href="gallery_loggedin.php" onclick="w3_close()" class="w3-bar-item w3-button">GALLERY</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGOUT</a>
</nav>
        
     <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
  </div> 
</header> 
        
        
    </body>
</html>
