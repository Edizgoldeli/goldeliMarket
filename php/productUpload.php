<?php
include ($_SERVER['DOCUMENT_ROOT']."/php/DBconnection.php");
session_start();
$color = $_POST['color'];
$denim = $_POST['denim'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$type = $_POST['type'];
$comment = $_POST['comment'];


$targetfolder = "*targetFile*";

$newfilename = rand(1,999999) . '.' . end(explode(".",$_FILES["file"]["name"]));
$targetfolder = $targetfolder . $newfilename ;

$storedURL = $newfilename ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

{

echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
$sql = "INSERT INTO `Product` (`color`,`comment`,`denim`,`img_address`,`price`,`stock`,`type`) VALUES('$color', '$comment','$denim','$storedURL','$price','$stock','$type'); ";
echo"hey";
if($conn->query($sql)==TRUE){
echo'New values are successfully saved.';
header("location:/html/Admin/login.php");
}
else{
echo"Error: " . $sql . "<br>" . $conn->error;}

}
else {
echo "Problem uploading file".$_FILES["file"]["error"];
?> <br><?php
echo $targetfolder;
?> <br><?php
echo $storedURL;
}
?>
