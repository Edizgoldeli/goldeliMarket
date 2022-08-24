<?php
include "DBconnection.php";
session_start(); 
$EM=$_POST['mail1'];
$PW= $_POST['password1'];


$sql = "SELECT ID, mail, password FROM Admin WHERE mail='$EM'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $hashed_password = $row['password'];
       if(password_verify($PW, $hashed_password)) 
        {
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['mail'] = $row['mail'];
            header( "refresh:0; url=/html/Admin/login.php" ); 
            die;
        }else{
            echo" Mail or password incorrect. ";
            header( "refresh:3; url=/html//Admin/login.php" ); 
    }
} 
}else{echo" User not found ";
    header( "refresh:3; url=/html/Admin/login.php" ); 
}
 
$conn->close(); 

?>