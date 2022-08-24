<?php
session_start(); 
unset($_SESSION['ID']);
header("location:/html/Admin/login.php");
?>