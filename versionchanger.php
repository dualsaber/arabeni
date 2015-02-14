<?php
    
include_once('db.php');

    if($_POST){

    $name = $_POST['name'];
    $release = $_POST['release'];
    $num = $_POST['num'];
    
    $guncelle = mysql_query("UPDATE version SET name='$name', release='$release', num='$num'");
        
        if($guncelle){
        echo "<div class='container text-center alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Halloldu!</div>";
            //header("Refresh:1; url=index.php");
    }else{
       echo mysql_error();
    }
    
}else{
    echo mysql_error();
    }

?>