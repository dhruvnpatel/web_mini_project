<?php
    require 'connect.php';
    $query="SELECT * FROM index_images";
$result= mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<title>PIXEL HUT</title>
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
  background-position: center;
  background-size: cover;
  background-image: url("PH.jpg");
  min-height: 50%;
}
.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><img src="PH copy.jpg" width="30"</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-question-circle"></i>ABOUT</a>
      <a href="#glimpses" class="w3-bar-item w3-button"><i class="fa fa-star"></i> GLIMPSES</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
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
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#glimpses" onclick="w3_close()" class="w3-bar-item w3-button">GLIMPSES</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="events_loggedin.php" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
  <a href="gallery_loggedin.php" onclick="w3_close()" class="w3-bar-item w3-button">GALLERY</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">LOGOUT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
  </div> 
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE CLUB</h3>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-third">
      <i class="fa fa-thumbs-up w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Quality Media</p>
      <p>Provide quality media and ensure the coverage is done well.</p>
    </div>
    <div class="w3-third">
      <i class="fa fa-users w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Sessions</p>
      <p>Conduct regular sessions and workshops for the members of the club.</p>
    </div>
    <div class="w3-third">
      <i class="fa fa-camera-retro w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Access to resources</p>
      <p>Members are given access to photography equipments and editing tools and softwares.</p>
    </div>
  </div>
</div>
 
<!-- Slideshow --> 
<center><div class="w3-container" style="padding:50px 100px" id="glimpses" >
  <h3 class="w3-center">GLIMPSES</h3>
  <?php while($row= mysqli_fetch_array($result))
{
    echo '<img class="mySlides w3-animate-right" id="img" width="500" align="center" w3-center src="data:image;base64,'.$row['image'].'">';
}
echo '</div></center>';
?>
</div></center>

<!-- Testimonials -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-third">
    <span class="w3-medium">" Pixel Hut opened a wide range of opportunities for me as I could learn a lot about a whole new different field..."</span>
    <br> - Dhruv Patel
  </div>
  <div class="w3-third">
    <span class="w3-medium">" After joining Pixel Hut, I could finally view the world through the eyes of a camera... my interest, turned into my passion..."</span>
    <br> - Swarnashree H R
  </div>
  <div class="w3-third">
    <span class="w3-medium">" Photography and the editing sessions conducted by the club, proved to be of great help to me..."</span>
    <br> - Pawan S Nadig
  </div>
</div>


<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work" >
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done so far...</p>

  <div class="w3-row-padding" style="margin-top:50px">
    <div class="w3-col l4 m6 w3-center">
      <h3>PORTRAIT PHOTOGRAPHY</h3>
      <img src="PH2.jpg" width="277" onclick="onClick(this)" class="w3-hover-opacity" alt="Portraits">
      <p>Pixel Hut aims at capturing the beautiful moments through the lenses of a camera...The portraits captured, are one of the people's favourite...</p>
    </div>
    <div class="w3-col l4 m6 w3-center">
      <h3>EVENT PHOTOGRAPHY</h3>
      <img src="PH3.jpg" width="277" onclick="onClick(this)" class="w3-hover-opacity" alt="Events">
      <p>The club is an official partner of Vidyuth, the annual fest of VVCE. The three day event is well captured by budding photographers of the club...</p>
    </div>
    <div class="w3-col l4 m6 w3-center">
      <h3>VIDEOGRAPHY</h3>
      <video width="277" height="185" controls="">
      <source src="PHV.mp4" type="PHV/mp4">
      </video>
    <p>Not much experienced, but the recent ad shoots of college; short movies and videography has ensured it lives upto the people's expectations...</p>
    </div>
  </div>
</div>

<!-- Contact Us -->
<div class="w3-container w3-light-grey w3-center" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <div style="margin-top:48px">
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email : pixelhut.vvce@gmail.com</p>
    <p><a href="https://www.instagram.com/pixel_hut/"<i class="fa fa-instagram fa-fw w3-xxlarge w3-margin-right"></i></a>Instagram : @pixel_hut</p><br>
  </div>
	<div class="w3-row-padding" style="margin-top:14px">
   <?php
   $query="SELECT * FROM contacts";
   $result= mysqli_query($conn, $query);
   while($row= mysqli_fetch_array($result))
   {
       echo '<div class="w3-quarter">
    	<p>'.$row['name'].'
    	<br>'.$row['designation'].'
    	<br> '.$row['number'].'
        <br> '.$row['email'].'
    	</p>
    </div>';
   }?>
</div>
 </div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>                         
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
      <a href="https://www.instagram.com/pixel_hut/"<i class="fa fa-instagram w3-hover-opacity"></i></a>
  </div>
</footer>
 
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
    if (myIndex > x.length) {myIndex = 1;}    
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

</body>
</html>