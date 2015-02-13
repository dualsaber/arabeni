<?php 

include_once('db.php');

$result= mysql_query("SELECT * FROM musteriler WHERE arsiv=0 ORDER BY id DESC");
 while($row = mysql_fetch_array($result)){
     
    if ($row["ulasilamadi"] == "1" && $row["arandi"] == "0" && $row["tamamlandi"] == "0"){
        $css_class = bigred;
    };
     
     if ($row["ulasilamadi"] == "0" && $row["arandi"] == "1" && $row["tamamlandi"] == "0"){
        $css_class = bigblue;
    };
     
     if ($row["ulasilamadi"] == "0" && $row["arandi"] == "0" && $row["tamamlandi"] == "1"){
        $css_class = biggreen;
    };
     
     if ($row["ulasilamadi"] == "0" && $row["arandi"] == "0" && $row["tamamlandi"] == "0"){
        $css_class = bigwhite;
    };
     
     
    echo "<div class='listeleme $css_class'>
            <strong>İsim:</strong> {$row["isim"]}<br />
            <strong>Soyad:</strong> {$row["soyad"]}<br />
            <strong>İstek:</strong> {$row["istek"]}<br />
            <strong>Telefon:</strong> {$row["telefon"]}<br />
            <strong>Tarih:</strong> {$row["tarih"]}<br />";
     
    if ($row["ulasilamadi"] == "1"){
        echo "<span class='ulasilamadi'>ULAŞILAMADI</span><br>";
    };
     
      if ($row["arandi"] == "1"){
        echo "<span class='arandi'>ARANDI</span><br>";
    };
     
      if ($row["tamamlandi"] == "1"){
        echo "<span class='tamamlandi'>TAMAMLANDI</span><br>";
    };


     
     echo "<a class='btn btn-info' href='duzenle.php?id={$row["id"]}'>Düzenle</a>  ";
     echo "<a class='btn btn-danger' href='sil.php?id={$row["id"]}')>Sil</a> ";
     echo "<a class='btn btn-success disabled' href='arsivle.php?id={$row["id"]}'>Arşivle</a>";
     echo "</div>";
     }
?>
