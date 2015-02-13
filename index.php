
<?php 
include_once('db.php');

$getir = mysql_query("SELECT * FROM version");
$buldur = mysql_fetch_array($getir);
?>


<div class="container">

      <form class="form-signin" action="login.php" method="post">
        <h2 class="form-signin-heading">Giriş yap</h2>
        <label for="inputEmail" class="sr-only">Kullanıcı Adı:</label>
        <input type="text" class="form-control" placeholder="Email address" autofocus name="kadi">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="sifre">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş</button>
      </form>

    </div>
<?php 

echo "<div class='text-center'>".$buldur["num"]." - ".$buldur["release"]." - ".$buldur["name"]."</div>";

?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>