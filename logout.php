<?php
include("controller.php");
$ob= new controller;
$ob->user_logout();

// if(!isset($_SESSION['user_id']))
// {
//     header("location:login.php");
// }
?>