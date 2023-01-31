<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BPHL Wilayah XIII</title>

	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap-utilities.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style1.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body>
	<nav class="navbar navbar-dark navbar-expand-md shadow fixed-top" style="background: #8BC34A">
		<div class="container-fluid">
			<a class="navbar-brand d-flex align-items-center" href="#">
				<img src="assets/img/logo.PNG" width="200px" height="65px">
				&nbsp; <span> </span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarScroll">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
					<li class="nav-item dropdown">
						<a class="nav-link active" aria-current="page" href="index.php?page=beranda">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php?page=berita">Berita</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=aturann">Aturan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?page=galeri">Galeri</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
						<ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" style="background: #A9C97D" aria-labelledby="navbarDarkDropdownMenuLink">
							<li><a class="dropdown-item" href="index.php?page=visimisi">Visi dan Misi</a></li>
							<li><a class="dropdown-item" href="index.php?page=sejarah">Sejarah</a></li>
							<li><a class="dropdown-item" href="index.php?page=struktur-organisasi">Struktur Organisasi</a></li>
							<li><a class="dropdown-item" href="index.php?page=kepalabalai">Kepala Balai</a></li>
							<li><a class="dropdown-item" href="index.php?page=seksi1">Seksi PPPHPHL</a></li>
							<li><a class="dropdown-item" href="index.php?page=seksi2">Seksi PEPHPHL</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="index.php?page=datasistem" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Data dan Sistem Informasi</a>
						<ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" style="background: #A9C97D" aria-labelledby="navbarDarkDropdownMenuLink">
							<li><a class="dropdown-item" href="index.php?page=kph">KPH</a></li>
							<li><a class="dropdown-item" href="index.php?page=siganishut">SIGANISHUT</a></li>
							<li><a class="dropdown-item" href="index.php?page=sipuhh">SIPUHH</a></li>
							<li><a class="dropdown-item" href="index.php?page=sirpbbi">SIRPBBI</a></li>
							<li><a class="dropdown-item" href="index.php?page=sipnbp">SIPNBP</a></li>
							<li><a class="dropdown-item" href="index.php?page=sehati">SEHATI</a></li>
							<li><a class="dropdown-item" href="index.php?page=sicakap">SICAKAP</a></li>

						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- slide photos -->
	<div id="carouselExampleIndicators" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/header1.png" class="img-fluid" alt="Responsive image">
			</div>
			<div class="carousel-item">
				<img src="assets/img/header3.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="carousel-item">
				<img src="assets/img/header2.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="carousel-item">
				<img src="assets/img/header3.jpg" class="img-fluid" alt="Responsive image">
			</div>

		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<!-- akhir slide photos -->

	<section id="sec-article" class="mt-3">


		<div class="container">

			<div class="row mt-3">
				<?php

				if (isset($_GET['page'])) {
					$page = $_GET['page'];

					switch ($page) {
						case 'beranda':
							include "kategori/beranda.php";
							break;

						case 'berita':
							include "kategori/berita.php";
							break;

						case 'detail':
							include "kategori/detail-post.php";
							break;

						case 'kebijakan':
							include "kategori/kebijakan.php";
							break;

						case 'peraturan':
							include "kategori/peraturan.php";
							break;

						case 'galeri':
							include "kategori/galeri.php";
							break;

						case 'struktur-organisasi':
							include "kategori/struktur-organisasi.php";
							break;


						case 'visimisi':
							include "kategori/visimisi.php";
							break;


						case 'sejarah':
							include "kategori/sejarah.php";
							break;

						case 'kepalabalai':
							include "kategori/kepalabalai.php";
							break;

						case 'detail-kepala':
							include "kategori/detail-kepalabalai.php";
							break;

						case 'seksi1':
							include "kategori/p3hphl.php";
							break;

						case 'seksi2':
							include "kategori/pephphl.php";
							break;

						case 'kph':
							include "kategori/kph.php";
							break;

						case 'siganishut':
							include "kategori/siganishut.php";
							break;

						case 'sipuhh':
							include "kategori/sipuhh.php";
							break;

						case 'sirpbbi':
							include "kategori/sirpbbi.php";
							break;

						case 'sipnbp':
							include "kategori/sipnbp.php";
							break;
						case 'sehati':
							include "kategori/sehati.php";
							break;
						case 'sicakap':
							include "kategori/sicakap.php";
							break;
						case 'kontak':
							include "kategori/kontak.php";
							break;

						case 'aturann':
							include "kategori/aturann.php";
							break;

						case 'detail-aturan':
							include "kategori/detail-aturan.php";
							break;
						default:
							echo "<center><h3>Maaf. Halaman !</h3></center>";
							break;
					}
				} else {
					include "kategori/beranda.php";
				}
				?>
	</section>

	<footer class="footer-distributed">

		<div class="footer-left">

			<p class="footer-links">
				<a href="index.php?page=kontak">Contact</a>
			</p>

			<p class="footer-company-name">Copyright © 2023 <strong>Sisfo Unhas 2020</strong> Keep Strong</p>
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p>Makassar
					<span>Jl. Perintis Kemerdekaan KM 9 Tamalanrea</span>

				</p>

			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>0411-586044</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="#">bphp13mks@gmail.com</a></p>
			</div>
		</div>
		<div class="footer-right">
			<p class="footer-company-about">
				<span>Contact</span>
				<strong>BPHL Wilayah XIII</strong>
				<br>
				More Information
			</p>
			<div class="footer-icons">
				<a href="https://id-id.facebook.com/kehutananmakassar/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/bphl13.makassar/"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/bphp13_mks"><i class="fa fa-twitter"></i></a>
				<a href="https://www.youtube.com/channel/UC77yqB43KBFWq-TBiIHp0Nw"><i class="fa fa-youtube"></i></a>
			</div>
		</div>
	</footer>



	<script src="assets/js/bootstrap.js"></script>

</body>

</html>