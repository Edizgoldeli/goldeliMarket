<?php
include ($_SERVER['DOCUMENT_ROOT']."/php/DBconnection.php");
session_start();
if($_SESSION['ID']){}else{header("location:/html/Admin/login.php");	}	
?>
<!doctype html>
<html>
<title>Goldeli Admin</title>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link rel= stylesheet  href="/style/productUp.css" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<script>
function myFunction(x) {
  x.classList.toggle("change");
}
function myFunction1(a) {
  a.classList.toggle("show");
}
function preview() {
  frame.src = URL.createObjectURL(event.target.files[0]);
}
</script>
<body>
    
    
<div class="gapTop"></div>
<a href="/html/Admin/login.php"><img class="logo" src="http://ediz.goldeli.com/GraduationProject/images/goldeliLogo.png" /> </a>

    <div class="prdctContainer">
<form action="/php/productUpload.php" method="post" enctype="multipart/form-data">

<!--<input type="text" class="prdctOptn" name="color" placeholder="Renk">
<input type="text" class="prdctOptn" name="denim" placeholder="Denim">-->
<input type="text" class="prdctOptn" name="price" placeholder="Fiyat">
<input type="text" class="prdctOptn" name="stock" placeholder="Stok">
<!--<input type="text" class="prdctOptn" name="type" placeholder="Tür">-->
<input type="text" class="prdctOptn" name="comment" placeholder="Açıklama Gir" required>
<br>
<img id="frame" src="https://market.goldeli.com/images/website/preview.png" class="imfitting-image-uploadage" width="100%" style="border-radius: 20px;">
<div class="prdctOptn" ><label>Görsel Seç
    <input type="file" onchange="preview()" name="file"  size="64000000" required />
</div></label>
<input type="submit" class="submit" value="Yükle"/>
</form>
<div class="menu">
    
        <div class="container" onclick="myFunction(this);myFunction1(this);">
        
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        
            <div class="menuContent">
                
                <a href="/html/Admin/index.php">Ana Sayfa</a> <br><br>
                <a href="/html/Admin/upload.php">Ürün Yükle</a> <br><br>
                <a href="/html/Admin/logout.php" style="color: red;">Çıkış Yap</a> <br><br>
            
            </div>
        </div>
    </div>
</div>
</body>
</html>