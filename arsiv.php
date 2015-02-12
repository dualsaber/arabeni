<link rel="stylesheet" href="css/main.css">
<?php 

include_once('db.php');

$result= mysql_query("SELECT * FROM musteriler WHERE arsiv=1");
 while($row = mysql_fetch_array($result)){
      echo "<div class='listeleme'>
            <strong>İsim:</strong> {$row["isim"]}<br />
            <strong>Soyad:</strong> {$row["soyad"]}<br />
            <strong>İstek:</strong> {$row["istek"]}<br />
            <strong>Telefon:</strong> {$row["telefon"]}<br />
            <strong>Mail:</strong> {$row["email"]}<br />
            <strong>Tarih:</strong> {$row["tarih"]}<br /> ";
     
     echo "<a class='btn btn-info' href='duzenle.php?id={$row["id"]}'>Düzenle</a>  ";
     echo "<a class='btn btn-danger' href='sil.php?id={$row["id"]}'>Sil</a> ";
     echo "</div>";
 }
?>