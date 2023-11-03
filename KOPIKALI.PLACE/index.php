<?php
	include 'database.php';

	$where = '';

    if(isset($_GET['kategori'])){
		$where = ' where kategori = "'.$_GET['kategori'].'"	';
	}

	$query_select = 'select * from menu' . $where;
  $run_query_select = mysqli_query($conn, $query_select);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPIKALI PLACE</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Box Icons-->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body background="uploads/background2.jpg">
    <!-- Navbar -->
    <header>
      <a href="#" class="logo">
        <img src="image/home/logo kopikali.PNG" alt="" />
      </a>
      <!-- Menu Icon -->
      <i class="bx bx-menu" id="menu-icon"></i>
      <!-- Links -->
      <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#menu">Menu</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <!-- Icon -->
      <div class="header-icon">
        <i class="bx bx-search" id="search-icon"></i>
      </div>
      <!-- Search Box -->
      <div class="search-box">
        <input type="search" name="" id="" placeholder="Search Here..." />
      </div>
    </header>
    <!-- Home -->
    <section class="home" id="home">
      <div class="home-text">
        <h1>Selamat Datang Di Website KOPIKALI PLACE</h1>
        <p>Coffee & Eatery Serve For You.</p>
        <p>Buka Dari Jam 13:00 WIB - 23:00 WIB.</p>
        <P>#MAMPIRKALI.</p>
      </div>
      <div class="home-img">
        <img src="image/home/logo kopikali.PNG" alt="" />
      </div>
    </section>
  
  </body>
</html>
