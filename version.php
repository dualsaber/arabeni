<meta http-equiv="Content-Type" content="text/HTML" charset="utf-8" />


<?php 

include_once('db.php');

$getir = mysql_query("SELECT * FROM version");
$buldur = mysql_fetch_array($getir);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ara Beni <?php echo $buldur['release']?> - <?php echo $buldur['num']?> - <?php echo $buldur['name']?></title>
</head>
<body>
    
    <form action="versionchanger.php" method="post">
       <span>Numara</span>
        <input type="text" value="<?php echo $buldur['num'] ?>"><br>
        <span>Release</span>
        <input type="text" value="<?php echo $buldur['release'] ?>"><br>
        <span>İsim</span>
        <input type="text" value="<?php echo $buldur['name'] ?>"><br>
        <button type="submit">Değiştir</button>
    </form>
    
</body>
</html>