<?php
include ($_SERVER['DOCUMENT_ROOT']."/php/DBconnection.php");
session_start();
$prdct_ID = $_POST['prdct_ID'];
if($_SESSION['ID'] && $prdct_ID){}else{header("location:/html/Admin/login.php");	}	
$color= $_POST['color'];
$comment= $_POST['comment'];
$denim= $_POST['denim'];
$price= $_POST['price'];
$stock= $_POST['stock'];
$type= $_POST['type'];

$img_address= $_POST['img_address'];
?>
<!doctype html>
<html>
<title>Goldeli Admin</title>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link rel= stylesheet  href="/style/productUp.css" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=QuickSand' rel='stylesheet'>
</head>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
function myFunction1(a) {
  a.classList.toggle("show");
}
</script>
<body>

    
<div class="gapTop"></div>
<a href="/html/Admin/login.php"><img class="logo" src="http://ediz.goldeli.com/GraduationProject/images/goldeliLogo.png" /> </a>
<h1>Ürün Güncelleme</h1>
<img src="/images/products/<?php echo $img_address; ?>" class="fitting-image-upload" >

    <div class="prdctContainer">
    
<form action="/php/update.php" method="post" enctype="multipart/form-data">
<!--<input type="text" class="prdctOptn" name="color" placeholder="Renk" value="<?php echo $color; ?>">
<input type="text" class="prdctOptn" name="denim" placeholder="Denim" value="<?php echo $denim; ?>"> -->
<input type="text" class="prdctOptn" name="price" placeholder="Fiyat" value="<?php echo $price; ?>">
<input type="text" class="prdctOptn" name="stock" placeholder="Stok" value="<?php echo $stock; ?>">
<!--input type="text" class="prdctOptn" name="type" placeholder="Tür" value="<?php echo $type; ?>">-->
<input type="text" class="prdctOptn" name="comment" placeholder="Açıklama Gir" value="<?php echo $comment; ?>" required>
<input type="hidden" name="prdct_ID" value="<?php echo $prdct_ID; ?>">
<input type="submit" class="submit" value="Güncelle"/>
</form>
<div class="menu">
    
        <div class="container" onclick="myFunction(this);myFunction1(this);">
        
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        
            <div class="menuContent">
                <a href="/html/Admin/index.php">Ana Sayfa (Admin)</a> <br><br>
                <a href="/html/index.php">Ana Sayfa (Müşteri)</a> <br><br>
                <a href="/html/Admin/upload.php">Ürün Yükle</a> <br><br>
                <a href="/php/logout.php" style="color: red;">Çıkış Yap</a> <br><br>
                
            
            </div>
        </div>
    </div>
</div>
</body>
</html>