<!doctype html>
<html>
<head>
    <title>Goldeli Market</title>
    <meta charset="utf-8">
    <meta name="mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-capable" content="yes"> 
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
    <meta name="mobile-web-app-capable" content="yes" /> 
   <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
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
    
<a href="/Admin"><img class="logo" src="http://ediz.goldeli.com/GraduationProject/images/goldeliLogo.png" /> </a>
<div class="box1">
    <div class="container" onclick="myFunction(this);myFunction1(this);">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="menuContent">
            
            <a href="/html">Ana Sayfa (Müşteri)</a> <br><br>
        <a href="/html/Admin">Ana Sayfa (Admin)</a> <br><br>
        <a href="/html/Admin/upload">Ürün Yükle</a> <br><br>
        <a href="/php/logout" style="color: red;">Çıkış Yap</a> <br><br>
        
        </div>
    </div>
        <form action="/php/searchAdmin" method="post">
            <input class="searchBar"type="text" placeholder="Ürün Ara" name="search">
            <input class="searchButton" type="image" src="http://ediz.goldeli.com/GraduationProject/images/search1.png" alt="Submit Form" />
            
        </form>
        
</div>