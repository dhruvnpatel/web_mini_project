<?php
require 'navbar.php';
require 'connect.php';

$query="SELECT * FROM events";
$result= mysqli_query($conn, $query);
echo '<center><div style="padding-top: 10%;">';
while($row= mysqli_fetch_array($result))
{
    echo '<h3>'.$row['name'].'</h3>';
    echo '<img id="img" src="data:image;base64,'.$row['poster'].'">';
    echo '<h3>'.$row['description'].'</h3>';
    echo '<h3>'.$row['date'].'</h3>';
    echo '<h3>'.$row['time'].'</h3>';
    echo '<h3>'.$row['venue'].'</h3>';    
}
echo '</div></center>';
mysqli_close($conn);
?>

<html>
    <head>
        <style>
            div
            {
                position: relative;
            }
            #img
            {
                padding-left: 1%;
                max-height: 15%;
                max-width: 15%;
            }
        </style>
    </head>
</html>