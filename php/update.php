
<?php
include "DBconnection.php";
session_start();

if($_SESSION['ID'] ){}else {header("location:/html/Admin");}
$color= $_POST['color'];
$comment= $_POST['comment'];
$denim= $_POST['denim'];
$price= $_POST['price'];
$stock= $_POST['stock'];
$type= $_POST['type'];
$prdct_ID = $_POST['prdct_ID'];

$sql = "UPDATE  Product SET color='$color', comment='$comment', denim='$denim', price='$price',stock='$stock',type='$type' WHERE prdct_ID=$prdct_ID "; 
if($conn->query($sql)==TRUE){
   
echo"Ürün güncellemesi başarılı."; }
else{
echo"Hata: " . $sql . "<br>" . $conn->error;
}
$conn->close(); 

header( "refresh: 1; url=/html/Admin/index.php" ); 
?>
