<?php
include("controller.php");
$ob= new controller;
$ob->admin_logout();

if(!isset($_SESSION['id']))
{
    header("location:ui-login.php");
}
?>