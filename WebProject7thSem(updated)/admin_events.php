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

$desc=$_POST['desc'];
$date=$_POST['date'];
$time=$_POST['time'];
$venue=$_POST['venue'];
    $sql="INSERT INTO `events`( `name`,`poster`,`description`,`date`,`time`,`venue`) VALUES ('$name','$image','$desc','$date','$time','$venue')";
    mysqli_query($conn, $sql);
}

$query="SELECT * FROM events";
$result= mysqli_query($conn, $query);
echo '<div id="event">';
while($row= mysqli_fetch_array($result))
{
    echo '<h3>'.$row['name'].'</h3>';
    echo '<img id="img" src="data:image;base64,'.$row['poster'].'">';
    echo '<h3>'.$row['description'].'</h3>';
    echo '<h3>'.$row['date'].'</h3>';
    echo '<h3>'.$row['time'].'</h3>';
    echo '<h3>'.$row['venue'].'</h3>';
    echo '<a href="delete_events.php?id='.$row['id'].'" class="btn btn-primary">Delete</a>';
    
}
echo '</div>';
mysqli_close($conn);
?>


<html>
    <head>
        <style>
            #event
            {
                position: relative;
                float: left;
            }
            #img
            {
                padding-left: 1%;
                max-height: 15%;
                max-width: 15%;
            }
        </style>
    </head>
    <body>
    <center><form method="post" enctype="multipart/form-data">
            Event Name :<br><input type="text" name="name" placeholder="Enter Name of the Event"><br>
            Poster :<br><input type="file" name="image" placeholder="Choose a Poster"><br>
            About :<br><input type="textarea" name="desc" placeholder="Details about the Event"><br>
            Date :<br><input type="date" name="date" placeholder="Date of the Event"><br>
            Time :<br><input type="time" name="time" placeholder="Time of the Event"><br>
            Venue :<br><input type="text" name="venue" placeholder="Venue of the Event"><br>
            <input type="reset" value="Reset"><input type="submit" name="submit" value="Submit">
        </form></center>
    </body>
</html>

