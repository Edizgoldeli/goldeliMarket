<!doctype html>
<html lang="tr">
<head>
    <title>Goldeli Market</title>
    <meta name="description" content="Göldeli Tekstil Müşteri Stok Listesi">
    <meta charset="utf-8">
    <meta name="theme-color" content="#989898">
    <meta name="mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
    <meta name="mobile-web-app-capable" content="yes" /> 
   <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="apple-mobile-web-app-title" content="Goldeli"> 
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    
    <link rel="apple-touch-icon" sizes="180x180" href="https://market.goldeli.com/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://market.goldeli.com/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://market.goldeli.com/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="https://market.goldeli.com/favicon.ico">
    <link rel="manifest" href="https://market.goldeli.com/site.webmanifest">
    <link rel="mask-icon" href="https://market.goldeli.com/safari-pinned-tab.svg" color="#000000">
    
    
    
    <link rel= stylesheet  href="/style/vitrin.css" />
    <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
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
    
<a href="/html" title="Ana Sayfa"><img class="logo" src="https://market.goldeli.com/images/website/goldeliLogo.png" alt="Logo"/> </a>
 <h2>Müşteri Stok Listesi</h2>
<div class="box1">
    <div class="container" onclick="myFunction(this);myFunction1(this);">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="menuContent">
            
            <a href="/html/" title="Ana Sayfa">Ana Sayfa</a> <br><br>
        
        </div>
    </div>
        <form action="/php/search" method="post">
            <input class="searchBar"type="text" placeholder="Ürün Ara" name="search">
            <input class="searchButton" type="image" src="http://ediz.goldeli.com/GraduationProject/images/search1.png" alt="Submit Form" />
            
        </form>
        
</div>
<br>
    <?php include ($_SERVER['DOCUMENT_ROOT']."/php/feed.php");?>

  <div class="floor">
        <h2 style="font-weight: 900;">Adres</h2>
        <h2 style="color: #2a2a2a;"> Buttim İş Merkezi C-4 / 1196 Altınova Mah. İstanbul Cad. No: 424 16090 Osmangazi / Bursa</h2>
        <h1 style="font-weight: 600;"> Telefon: +<a href="tel:+905333319928" title="Call / Ara" rel="nofollow">905333319928</a> </h1>
    </div>
</body>
</html>
