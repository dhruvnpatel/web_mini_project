<?php
    require 'connect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM events WHERE events.id=".$id;
    mysqli_query($conn, $sql);
    header('location:admin_events.php');
?>