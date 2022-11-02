<!--<?php include('form.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <!-- Boxicons CSS
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

h1 {
    color: var(--warna-text);
}

table {
    border: 1px solid var(--warna-nav);
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    margin: 10px 40px 10px auto;
}

table thead th {
    background-color: var(--warna-utama);
    border: 1px solid var(--warna-nav);
    color: var(--warna-text);
    padding: 10px;
    text-align:center;
    text-shadow: 1px 1px 1px var(--warna-nav);
}

table tbody td {
    border: 1px solid var(--warna-nav);
    color: var(--warna-text);
    padding: 10px;
}


a{
    color: var(--warna-text);
    padding: 10px;
    font-size: 12px;
    text-decoration: none;
}

img {
    width: 100px;
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
            <div class="cari">
                <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                </div>

                    <div class="search-field">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search'></i>
                    </div>
            </div>
        </div>
    </div>
    </nav>
    <div class="empat">
    <div class="lima">
        <div class="enam">
        <center> <h1> Catalog Produk </h1> </center>
        <br>
        <center> <a href="input.php">+ &nbsp; Tambah Produk </a> </center>
        <br>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Warna</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM produk ORDER BY Kode_Produk ASC";
                    $result = mysqli_query($form, $query);

                    if(!$result) {
                        die("Query Error :".mysqli_errno($form)." - ".mysqli_error($form));
                    }
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo number_format ($row['Kode_Produk'], 0, ','); ?> </td>
                    <td> <?php echo substr($row['Nama_Produk'], 0, 20); ?></td>
                    <td> <?php echo substr($row['Warna'], 0, 20); ?> </td>
                    <td> <?php echo number_format ($row['Stok'], 0, ','); ?> </td>
                    <td>Rp. <?php echo number_format ($row['Harga'], 0, ',','.'); ?> </td>
                    <td> <img src="gambar/<?php echo $row['Gambar_Produk']; ?>"> </td>
                    <td>
                        <a href="Edit_Produk.php?Kode_Produk= <?php echo number_format ($row['Kode_Produk'], 0, ','); ?>"> Edit </a>
                        <br>
                        <br>
                        <a href="Hapus_Produk.php?Kode_Produk= <?php echo number_format ($row['Kode_Produk'], 0, ','); ?>" onclick="return confirm('Lanjut Menghapus Data?')"> Hapus </a>
        
                    </td>
                </tr>
                <?php
                    $no++;
                    }
                ?>
            </tbody>
        </table>
                </div>
    </div>
    </div>
    <script src="script.js">
    </script>
    </body>
</html>