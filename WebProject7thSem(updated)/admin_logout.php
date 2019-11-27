<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:admin.php');
}
session_destroy();
//header('location:index.php');

?>