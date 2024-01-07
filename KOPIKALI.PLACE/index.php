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
    <!-- About Us -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="image/home/kopkal.jpg" alt="" />
      </div>
      <div class="about-text">
        <h2>For You Information</h2>
        <p>
          KOPIKALI PLACE adalah sebuah kedai kopi yang berada di Jakarta Utara
          yang berdiri sejak tahun 2019.
        </p>
        <p>
          Kedai kopi yang berawal dari masih sederhana, sekarang sudah menjadi
          kedai kopi yang lebih modern. Banyak perubahan dari awal berdiri
          sampai saat ini seperti area bar, tempat duduk, meja, dan bahkan
          sekarang sudah ada rooftop.
        </p>
        <p>
          KOPIKALI PLACE ini adalah salah satu kedai kopi yang terbilang favorit
          di daerah Jakarta Utara. KOPIKALI PLACE tidak hanya meyediakan minuman-minuman 
          saja tetapi juga menyediakan makanan-makanan yang enak. Banyak kedai kopi yang 
          sudah tersebar di Jakarta Utara, namun KOPIKALI PLACE hadir dengan menawarkan 
          menu-menu yang harganya cukup terjangkau. 
        </p>
      </div>
    </section>
    <!-- Menu -->
    <section class="menu" id="menu">
        <div class="heading">
            <h2>Our Menu</h2>
            <h2>Kategori Menu</h2>
			<ul>
				<h3><a href="?kategori=Minuman">Minuman</a></h3>
				<h3><a href="?kategori=Makanan">Makanan</a></h3>
			</ul>
        </div>
        <!-- Container -->
        <!-- Coffee -->
        <div class="content">
		<div class="menu-container">

				<!-- menu item -->
				<?php 
					if(mysqli_num_rows($run_query_select) > 0){
					while($row = mysqli_fetch_array($run_query_select)){
				?>
				<div class="box">
					<div class="card-menu">
						<img src="uploads/menu/<?= $row['foto'] ?>">
						<div class="card-body">
							<div class="card-name"><?= $row['namamenu'] ?></div>
							<div class="card-price">Rp<?= number_format($row['hargamenu'], 0, ',', '.') ?></div>
						</div>
					</div>
				</div>
				<?php }}else{ ?>

					<div>Menu Tidak Tersedia.</div>

				<?php } ?>

				</div>

		</div>
	</div>
    </section>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact Us</h2>
        <div class="contact-in">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0621055148713!2d106.87992027428112!3d-6.122343860032155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1fa0c4193a3f%3A0x1241a69c37b8050e!2sKopikali%20Place!5e0!3m2!1sid!2sid!4v1687943899704!5m2!1sid!2sid" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="contact-form">
            <h3>Reservasi</h3>
            <form>
                <img src="uploads/qrcode/qrcode.png" width="200">
            </form>
        </div>
    </section>
    <!-- Contact End -->
    <!-- Footer -->
    <section class="footer">
        <div class="footer-box">
            <h2>KOPIKALI PLACE</h2>
            <p>#MAMPIRKALI.</p>
        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                <span><i class='bx bx-map' ></i>13, Jl. Warakas Raya No.22, RT.13/RW.7, Sungai Bambu, Kec. Tj. Priok, Jkt Utara, Daerah Khusus Ibukota Jakarta 14330</span>
                <span><i class='bx bx-phone' ></i>+62812-8446-6507/+62812-9591-6664</span>
                <span><i class='bx bx-envelope' ></i>kopikali20@gmail.com</span>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>Copyright &#169; 2023 KOPIKALI PLACE - All Right Reserved.</p>
    </div>
    <!-- Link JS -->
    <script src="main.js"></script>
  </body>
</html>
