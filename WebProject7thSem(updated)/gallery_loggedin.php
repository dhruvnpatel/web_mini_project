<?php
require 'navbar-2.php';
require 'connect.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
$image= addslashes($_FILES['image']['tmp_name']);
$names= addslashes($_FILES['image']['name']);
$image= file_get_contents($image);
$image= base64_encode($image);
    $sql="INSERT INTO `images`( `name`,`img`) VALUES ('$name','$image')";
    mysqli_query($conn, $sql);
}

$query="SELECT * FROM images";
$result= mysqli_query($conn, $query);
?>

<html>
    <head>
       <style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}

form
{
    
    position: relative;
    float: left;
    
}
</style> 
    </head>
    <body>
       
        <?php
  while($row= mysqli_fetch_array($result))
  {
      echo '<div class="responsive">';
      echo '<div class="gallery">';      
      echo '<img src="data:image;base64,'.$row['img'].'" alt="'.$row['name'].'" width="600" height="400" onclick="onClick(this)" class="w3-hover-opacity">';
  echo '<div class="desc">'.$row['name'].'</div>';
echo '</div></div>';
  }?>
        <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

        
        <br> <div style="position: relative; float: left"> <form method="post" enctype="multipart/form-data">
            <br><input type="file" name="image" placeholder="Choose an image">
            <br><input type="text" name="name" placeholder="Enter your name">
            <br><input type="submit" name="submit">
            
            </form></div>
    </body>
</html>
