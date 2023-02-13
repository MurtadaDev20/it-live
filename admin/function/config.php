<?php
ob_start();
session_start();
include 'db.php';
if (!isset($_SESSION['email'])) 
{
    header("location:./index.php");
}



?>