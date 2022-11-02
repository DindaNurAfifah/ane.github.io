<?php
session_start();
include 'form.php';

if(!isset($_SESSION['login'])) {
    header("Location: logins.php");
}

?>
<!doctype html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
<!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title> Fabric </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
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
                <li> <a href="user.php"> Home </a> </li>
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
    <section class="about">
        <div class="mainn">
            <a href="https://www.instagram.com/renebaebae/?hl=en"> <img src="gambar/about.jpg"> </a>
            <div class="about-isi">
                <h2> About Me </h2>
                <h5> Collage Student <span>& part of carat</span> </h5>
                <p> My name is Dinda Nur Afifah 19 years old. I don't have a particular hobby but 
                    sometimes i like to do some design on adobe illustrator while listening to my 
                    favorite song smile flower by seventeen. Also i can read hangul because i used 
                    to love kpop so much. </p>
            </div>
        </div>
    </section>
    <div class="contact">
        <p> Let me help you with anything - click link below </p>
        <a class="button-two" href="https://wa.me/628115582588"> Reach me </a>
    </div>
    </div>
    <div class="footer" align-items="center">
        <div class="kolom1">
            <h3> Useful Links </h3>
            <a href="https://www.youtube.com/"> Source </a>
            <a href="https://drive.google.com/file/d/1hjjX0Ha5SqzwQNmauJOuG8OPBYQTMKsm/view"> Help </a>
            <a href="https://shopee.co.id/?gclid=CjwKCAjw-L-ZBhB4EiwA76YzOV_8GJb09RGj-4GdTSj9zXotn6zX9RuUieOdKyBYljrUtLdv6Yu21xoCDDgQAvD_BwE"> Shop </a>
        </div>
        <div class="kolom2">
            <h3> For Update News </h3>
            <form>
                <input type="email" placeholder=" Enter Email Address Here" required>
                <br>
                <button type="submit"> Send Me News </button>
            </form>
        </div>
        <div class="kolom3">
            <h3> Contact </h3>
            <p> Lorem ipsum dolor sit amet, consectetur <br>Samarinda, Kalimantan Timur.</p>
            <div class="medsos">
                <a href="https://www.youtube.com/watch?v=impSuIygMiQ"> <i class="fa fa-youtube"></i> </a>
                <a href="https://instagram.com/dindannfh__?igshid=YmMyMTA2M2Y="> <i class="fa fa-instagram"></i> </a>
                <a href="https://twitter.com/pledis_17?t=TAVOZy68MvSs3jfqf787Lw&s=09"> <i class="fa fa-twitter"></i> </a>
            </div>
        </div>
    <script src="script.js"> </script>
</body>