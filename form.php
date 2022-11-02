<?php
    $host ="localhost";
    $user = "root";
    $pass = "";
    $db = "crud_fabric";
    $form = mysqli_connect($host,$user,$pass,$db);

    if(!$form) {
        die("DataBase Gagal di Muat : ".mysql_connect_error());
    }
?>