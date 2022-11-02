<?php
session_start();
include 'form.php';

if(!isset($_SESSION['login'])) {
    header("Location: logins.php");
}
    $Kode_Produk = $_POST['Kode_Produk'];
    $Nama_Produk = $_POST['Nama_Produk'];
    $Warna = $_POST['Warna'];
    $Stok = $_POST['Stok'];
    $Harga = $_POST['Harga'];
    $Gambar_Produk = $_FILES['Gambar_Produk']['name'];
    
    if($Gambar_Produk != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x= explode('.', $Gambar_Produk);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['Gambar_Produk']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru =$angka_acak.'-'.$Gambar_Produk;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
            $query = "UPDATE produk SET Kode_Produk = '$Kode_Produk', Nama_Produk = '$Nama_Produk', Warna = '$Warna',
            Stok = '$Stok', Harga = '$Harga', Gambar_Produk = '$nama_gambar_baru' WHERE Kode_Produk ='$Kode_Produk' ";
            $result = mysqli_query($form, $query);

            if(!$result) {
                die("Query Error :".mysqli_errno($form)." - ".mysqli_error($form));
            } else {
                echo "<script> alert('Berhasil Diubah !');window.location='admin.php'; </script>";
            }
        } else {
            echo "<script> alert('Format Gambar Hanya bisa .png dan .jpg');window.location='Edit_Produk.php'; </script>";
        }
    } else {
        $query = "UPDATE produk SET Kode_Produk = '$Kode_Produk', Nama_Produk = '$Nama_Produk', Warna = '$Warna',
        Stok = '$Stok', Harga = '$Harga' WHERE Kode_Produk ='$Kode_Produk'";
        $result = mysqli_query($form, $query);

        if(!$result) {
            die("Query Error :".mysqli_errno($form)." - ".mysqli_error($form));
        } else {
            echo "<script> alert('Berhasil Diubah !');window.location='admin.php'; </script>";
        }
        
    }
?>