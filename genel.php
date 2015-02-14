<?php

include_once('db.php');
$result = mysql_query("SELECT * FROM musteriler WHERE arsiv=0 ORDER BY id DESC");
$result2 = mysql_query("SELECT * FROM musteriler WHERE ulasilamadi=1 ORDER BY id DESC");
$result3 = mysql_query("SELECT * FROM musteriler WHERE arandi=1 ORDER BY id DESC");
$result4 = mysql_query("SELECT * FROM musteriler WHERE tamamlandi=1 ORDER BY id DESC");
$result5 = mysql_query("SELECT * FROM musteriler WHERE arsiv=1 ORDER BY id DESC");

$toplam = mysql_num_rows($result);
$toplam2 = mysql_num_rows($result2);
$toplam3 = mysql_num_rows($result3);
$toplam4 = mysql_num_rows($result4);
$toplam5 = mysql_num_rows($result5);

$getir = mysql_query("SELECT * FROM version");
$buldur = mysql_fetch_array($getir);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ara Beni! <?php

echo $buldur["num"]." - ".$buldur["release"]." - ".$buldur["name"];

?></title>
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
