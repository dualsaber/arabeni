<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Müşteri Ekle</title>
</head>
<body>
    <form id="myForm" action="ekleme.php" method="POST">
        İsim: <input type="text" name="isim" /><br>
        Soyad: <input type="text" name="soyad" /><br>
        Email: <input type="text" name="email"><br>
        Telefon: <input type="text" name="telefon"><br>
        İstek: <input type="text" name="istek"><br>
        <button id="sub">Ekle</button>  
    </form>
    
    <span id="result"></span>
</body>
</html>