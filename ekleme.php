<?php
    include_once('db.php');

    $isim = $_POST['isim'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $istek = $_POST['istek'];
    $ulasilamadi = $_POST['ulasilamadi'];
    $arandi = $_POST['ulasilamadi'];
    $tamamlandi = $_POST['ulasilamadi'];
    $arsiv = $_POST['arsiv'];
    $tarih=date("d.m.y");


    if(mysql_query("INSERT INTO musteriler VALUES('$id', '$isim', '$soyad', '$email', '$telefon', '$istek', '$tarih', '$ulasilamadi', '$tamamlandi', '$arandi', '$arsiv')")){
       echo "<div class='container text-center alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Halloldu!</div>";
        //header("Refresh:2; url=index.php");
    }else{
        echo mysql_error();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ara Beni! Alpha</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container"><ul id="nav"><li><a href="ekle" class="btn btn-warning">Ekle</a></li>
        <li><a href="liste" class="btn btn-default">Hepsi</a></li>
        <li><a href="ulasilamadi" class="btn btn-default">Ulaşılamadı</a></li>
        <li><a href="arandi" class="btn btn-default">Arandı</a></li>
        <li><a href="tamamlandi" class="btn btn-default">Tamamlandı</a></li>
        <li><a href="arsiv" class="btn btn-default">Arşiv</a></li>
        <li><form style="display: inline;" action="arama.php" method="post"><input type="text" name="kelime"><input type="submit" value="Ara"></form></li>
    </ul>
    </div>
    <div class="container" id="content"></div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"
    ></script>
    <div class="containter"><script src="js/general.js"></script></div>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>