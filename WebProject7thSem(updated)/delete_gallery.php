<?php
    require 'connect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM images WHERE images.id=".$id;
    mysqli_query($conn, $sql);
    header('location:admin_gallery.php');
?>