<?php
session_start();
include 'form.php';

if(!isset($_SESSION['login'])) {
    header("Location: logins.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
        <title> Fabric </title>
        <style>
*{
    font-family: 'Rubik', sans-serif;
}

:root {
    --warna-utama: #FFF5FD;
    --warna-nav: #005A8D;
    --warna-text: #FF96AD;
}

body {
    height: 100vh;
    background-color: var(--warna-utama);
}

body.night{
    --warna-utama: #0F3D3E;
    --warna-nav: #100F0F;
    --warna-text: #E2DCC8;
}

.empat{
    width: 100%;
    height: 100%;
    background-image: var(--warna-utama);
    color: var(--warna-text);
    background-position: center;
    background-size: cover;

}

.lima {
    background-image: var(--warna-utama);
    color: var(--warna-text);
    height: 85%;
}

.enam {
    background-image: var(--warna-utama);
    color: var(--warna-text);
    margin-top: 100px;
}

center {
    margin-top: 100px;
}
h1 {
    color: var(--warna-text);
}

.dasar {
    width: 440px;
    padding: 20px;
    margin-left: auto;
    margin-right: auto;
    background-color: var(--warna-nav);
    margin-bottom: 20px;
}

label {
    color: var(--warna-text);
    margin-top: 10px;
    float: left;
    text-align: left;
    width: 100%;
}

.input {
    padding: 1px;
    width: 100%;
    box-sizing: border-box;
    background-color: var(--warna-utama);
    border: 1px solid var(--warna-utama);
    outline-color: var(--warna-text);
}

button {
    background-color: var(--warna-text);
    color: var(--warna-text);
    padding: 10px;
    font-size: 12px;
    border: 0;
    margin-top: 2opx;
}


        </style>
    </head>
    <body>
    <nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen'></i>
        <span class="logo"> <a href=""> Fabric. </a> </span>
        <div class ="menu">
            <div class="logo-toggle">
                <span class="logo"> <a href=""> Fabric. </a> </span>
                <i class='bx bx-x sidebarClose'></i>
            </div>
            <ul class="nav-links">
                <li> <a href="index.php"> Home </a> </li>
                <li> <a href="admin.php"> Admin </a> </li>
                <li> <a href="menu.php"> Catalog</a> </li>
                <li> <a href="about.php"> About </a> </li>
            </ul>
        </div>
        <div class="nightday-mode">
            <div class="nightday">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun' ></i>
            </div>
        </div>
    </div>
    </nav>
    <div class="empat">
    <div class="lima">
        <div class="enam">
        <center> <h1> Tambah Produk </h1> </center>
        <form method="POST" action="proses_input.php" enctype="multipart/form-data">
        <section class="dasar">
            <div>
                <label> Kode Produk </label>
                <input type="text" name="Kode_Produk" autofoucs="" required="" />
            </div>
            <div>
                <label> Nama Produk </label>
                <input type="text" name="Nama_Produk" required="" />
            </div>
            <div>
                <label> Warna </label>
                <input type="text" name="Warna" required="" />
            </div>
            <div>
                <label> Stok </label>
                <input type="text" name="Stok" required="" />
            </div>
            <div>
                <label> Harga </label>
                <input type="text" name="Harga" required="" />
            </div>
            <div>
                <label> Gambar Produk </label>
                <input type="file" name="Gambar_Produk" required="" />
            </div>
            <div>
                <label> <?php $d=strtotime("today"); echo date("Y/m/d", $d); ?> </label>
            </div>
            <div>
                <button type="submit">  Simpan </button>
            </div>
        </section>
</form>
    <script src="script.js">
    </script>
</body>
</html>