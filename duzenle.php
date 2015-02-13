<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-9">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<?php
include_once("db.php");

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

$id = @$_GET["id"];

if($_POST){

    $isim = $_POST['isim'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $istek = $_POST['istek'];
    $ulasilamadi = $_POST['ulasilamadi'];
    $arandi = $_POST['arandi'];
    $tamamlandi = $_POST['tamamlandi'];
    $arsiv = $_POST['arsiv'];
    
    $guncelle = mysql_query("UPDATE musteriler SET isim='$isim', soyad='$soyad', telefon='$telefon', istek='$istek', ulasilamadi='$ulasilamadi', arandi='$arandi', tamamlandi='$tamamlandi', arsiv='$arsiv' WHERE id='$id'");
        
        if($guncelle){
        echo "<div class='container text-center alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Halloldu!</div>";
            //header("Refresh:1; url=index.php");
    }else{
       echo mysql_error();
    }
    
}else{
    
$bul = mysql_query("SELECT * FROM musteriler WHERE id='$id'");
$goster = mysql_fetch_array($bul);
extract($goster);

echo '<div class="container"><form id="myForm" method="POST">
        İsim: <input type="text" name="isim" value="'.$isim.'" /><br>
        Soyad: <input type="text" name="soyad" value="'.$soyad.'" /><br>
        Telefon: <input type="text" name="telefon" value="'.$telefon.'"><br>
        İstek: <input type="text" name="istek" value="'.$istek.'"><br>
        Ulasilamadi: <select name="ulasilamadi">
        <option value="1"';
        if ($ulasilamadi == 1){echo ' selected';}
        echo '>Evet</option>
        <option value="0"';
        if ($ulasilamadi == 0){echo ' selected';}
        echo '>Hayır</option></select><br>
        Arandı: <select name="arandi">
        <option value="1"';
        if ($arandi == 1){echo ' selected';}
        echo '>Evet</option>
        <option value="0"';
        if ($arandi == 0){echo ' selected';}
        echo '>Hayır</option></select><br>
        Tamamlandi: <select name="tamamlandi">
        <option value="1"';
        if ($tamamlandi == 1){echo ' selected';}
        echo '>Evet</option>
        <option value="0"';
        if ($tamamlandi == 0){echo ' selected';}
        echo '>Hayır</option></select><br>
        
        
        
         Arşivde: <select name="arsiv">
        <option value="1"';
        if ($arsiv == 1){echo ' selected';}
        echo '>Evet</option>
        <option value="0"';
        if ($arsiv == 0){echo ' selected';}
        echo '>Hayır</option></select><br>
        
        
        
        
        
        
        <button id="sub">Güncelle</button>  
    </form>';
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ara Beni! Alpha v0.1</title>
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