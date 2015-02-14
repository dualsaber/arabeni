<div class="bg-info"><?php

include_once('db.php');

$kelime = $_POST["kelime"];

$bul = mysql_query("SELECT * FROM musteriler WHERE isim LIKE '%$kelime%' OR soyad LIKE '%$kelime%' OR istek LIKE '%$kelime%' OR telefon LIKE '%$kelime%'");
$toplam = mysql_num_rows($bul);

if ($toplam > 0 ){
    echo "<div class='bg-info text-center'> Toplam ".$toplam." sonuç bulundu.<br> <a class='btn btn-info' href='genel.php'>Aramayı kapat</a></div>";
    while ($goster = mysql_fetch_array($bul)){     
    echo "<div class='listeleme container'>
            <strong>İsim:</strong> {$goster["isim"]}<br />
            <strong>Soyad:</strong> {$goster["soyad"]}<br />
            <strong>İstek:</strong> {$goster["istek"]}<br />
            <strong>Telefon:</strong> {$goster["telefon"]}<br />
            <strong>Tarih:</strong> {$goster["tarih"]}<br />";
     
    if ($goster["ulasilamadi"] == "1"){
        echo "<span class='ulasilamadi'>ULAŞILAMADI</span><br>";
    };
     
      if ($goster["arandi"] == "1"){
        echo "<span class='arandi'>ARANDI</span><br>";
    };
     
      if ($goster["tamamlandi"] == "1"){
        echo "<span class='tamamlandi'>TAMAMLANDI</span><br>";
    };


     
     echo "<a class='btn btn-info' href='duzenle.php?id={$row["id"]}'>Düzenle</a>  ";
     echo "<a class='btn btn-danger' href='sil.php?id={$row["id"]}'>Sil</a> ";
     echo "<a class='btn btn-success' href='arsivle.php?id={$bul["id"]}'>Arşivle</a>";
     echo "</div>";
     }
}else{
    echo mysql_error();
}

?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ara Beni! Alpha v0.1.1</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container center-block">
      <a href="http://canagirkaya.com/arabeni/genel.php" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
      <ul id="nav">
       <li><a href="liste" class="btn btn-primary"><span class="glyphicon glyphicon-home"></span></a></li>
       <li><a href="ekle" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span></a></li>
        <li><a href="liste" class="btn btn-default">Hepsi <span class="badge"><?php echo $toplam; ?></span></a></li>
        <li><a href="ulasilamadi" class="btn btn-default">Ulaşılamadı <span class="badge danger"><?php echo $toplam2; ?></span></a></li>
        <li><a href="arandi" class="btn btn-default">Arandı <span class="badge"><?php echo $toplam3; ?></span></a></li>
        <li><a href="tamamlandi" class="btn btn-default">Tamamlandı <span class="badge"><?php echo $toplam4; ?></span></a></li>
        <li><a href="arsiv" class="btn btn-default">Arşiv <span class="badge"><?php echo $toplam5; ?></span></a></li>
        <li><form style="display: inline;" action="arama.php" method="post" class="form-control"><input id="searchbar" name="kelime" placeholder="Ara..."><button class="btn btn-primary"type="submit" value="Ara">Ara</button></form></li>
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
