<?php
    require 'connect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM user WHERE user.id=".$id;
    mysqli_query($conn, $sql);
    header('location:admin_user.php');
?>