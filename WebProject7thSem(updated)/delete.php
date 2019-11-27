<?php
    require 'connect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM index_images WHERE index_images.id=".$id;
    mysqli_query($conn, $sql);
    header('location:admin_home.php');
?>