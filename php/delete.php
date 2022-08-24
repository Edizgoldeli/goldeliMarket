<?php
include "DBconnection.php";
session_start();
if($_SESSION['ID']){}else{header("location:/html/Admin/login.php");	}	

$prdct_ID=$_POST['prdct_ID'];

$sql = "DELETE FROM `Product` WHERE `prdct_ID` = $prdct_ID"; 

if($conn->query($sql)==TRUE){}
else{
echo"Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 

header( "refresh: 0; url=/html/Admin/login.php" ); 
?>
