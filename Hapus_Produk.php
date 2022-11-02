<?php
session_start();
include 'form.php';

if(!isset($_SESSION['login'])) {
    header("Location: logins.php");
}

    $Kode_Produk = $_GET['Kode_Produk'];
    $query = "DELETE FROM produk WHERE Kode_Produk='$Kode_Produk'";
    $result = mysqli_query($form, $query);

    if(!$result) {
        die("Query Error :".mysqli_errno($form)." - ".mysqli_error($form));
    } else {
        echo "<script> alert('Berhasil Dihapus!');window.location='admin.php'; </script>";
    }
?>