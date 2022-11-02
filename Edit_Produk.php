<?php
session_start();
include 'form.php';

if(!isset($_SESSION['login'])) {
    header("Location: logins.php");
}

    if(isset($_GET['Kode_Produk'])) {
        $Kode_Produk = $_GET['Kode_Produk'];
        $query = "SELECT * FROM produk WHERE Kode_Produk = '$Kode_Produk'";
        $result = mysqli_query($form, $query);
        if(!$result) {
            die("Query Error :".mysqli_errno($form). " - ".mysqli_error($form));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script>alert('Data Tidak Ditemukan !');window.location='admin.php';</script>";
        }

    } else {
        echo "<script>alert('Masukan Kode Produk yang Akan di Edit');window.location='admin.php';</script>";
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
    color: var(--warna-text);
    margin-top: 100px;
    display: flex;
}
h1 {
    color: var(--warna-text);
    font-size: 40px;
    margin-left: auto;
    margin-right: auto;
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
    background-color: var(--warna-nav);
    border: 1px solid var(--warna-nav);
    outline-color: var(--warna-text);
}

button {
    background-color: var(--warna-text);
    color: var(--warna-text);
    padding: 10px;
    font-size: 12px;
    border: 0;
    margin-top: 2opx;
    align-items: center;
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
                <li> <a href="userr.php"> Home </a> </li>
                <li> <a href="admin.php"> Admin </a> </li>
                <li> <a href="abouta.php"> About </a> </li>
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
        <center> <h1> Edit Produk <?php echo $data['Nama_Produk']; ?></h1> </center>
        <br>
        <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
        <section class="dasar">
            <div>
                <label> Kode Produk </label>
                <input type="text" name="Kode_Produk" autofoucs="" required="" value="<?php echo $data['Kode_Produk']; ?>" />
                <input type="hidden" name="Kode_Produk" value="<?php echo $data['Kode_Produk']; ?>" />
            </div>
            <div>
                <label> Nama Produk </label>
                <input type="text" name="Nama_Produk" required="" value="<?php echo $data['Nama_Produk']; ?>"/>
            </div>
            <div>
                <label> Warna </label>
                <input type="text" name="Warna" required="" value="<?php echo $data['Warna']; ?>"/>
            </div>
            <div>
                <label> Stok </label>
                <input type="text" name="Stok" required="" value="<?php echo $data['Stok']; ?>"/>
            </div>
            <div>
                <label> Harga </label>
                <input type="text" name="Harga" required="" value="<?php echo $data['Harga']; ?>"/>
            </div>
            <div>
                <label> Gambar Produk </label>
                <img src="gambar/<?php echo $data['Gambar_Produk']; ?>" style="width: 100px;float:left;margin-bottom=: 5px;">
                <input type="file" name="Gambar_Produk"/>
                <i style="float:left;font-size:11px;color:red;">Abaikan Apabila Gambar Tidak Dirubah</i>
            </div>
            <div>
                <br>
                <button type="submit"> Simpan Perubahan</button>
            </div>
        </section>
</form>
    <script src="script.js">
    </script>
</body>
</html>