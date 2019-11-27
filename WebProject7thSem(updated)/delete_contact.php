<?php
    require 'connect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM contacts WHERE contacts.id=".$id;
    mysqli_query($conn, $sql);
    header('location:admin_contact.php');
?>