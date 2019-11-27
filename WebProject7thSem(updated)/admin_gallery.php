<?php
require 'navbar-admin.php';
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
$count=0;
echo '<div class="row">';
while($row= mysqli_fetch_array($result))
{
    echo'<div class="column">';
    echo '<img id="img" src="data:image;base64,'.$row['img'].'">';
    echo '<h3>'.$row['name'].'</h3>';
    echo '<a href="delete_gallery.php?id='.$row['id'].'" class="btn btn-primary">Delete</a></div>';
    $count++;
    if($count%4==0)
    {
        echo '</div><div class="row">';
    }

}
echo '</div>';
mysqli_close($conn);
?>

<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            #img
            {
                padding-left: 1%;
                max-height: 25%;
                max-width: 25%;
            }
            
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
        </style>
    </head>
    <body>
            
        <br><div>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="image" >
                    <input type="text" name="name">
                    <input type="submit" name="submit">
                </form>
            </div>
            
        
    </body>
</html>