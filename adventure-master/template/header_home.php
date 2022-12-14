<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Free Hand</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" />


</head>

<body>
	<!-- start banner Area -->
	<section class="banner-area" id="home">
		<!-- Start Header Area -->
		<header class="default-header">
			<nav class="navbar navbar-expand-lg  navbar-light">
				<div class="container">
					<a class="navbar-brand" href="index.html">
						<img src="img/logo.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="text-white lnr lnr-menu"></span>
					</button>

					<div class="collapse navbar-collapse justify-content-end align-items-center"
						id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="index.php#about">Tentang Kami</a></li>
							<?php if(isset($_SESSION['login'])){ ?>
							<li><a href="order_pelanggan/index.php">Transaksi</a></li>
							<li><a href="user_profile.php">Profile</a></li>
							<?php } ?>
							<?php if(isset($_SESSION['login'])): ?>
							<li><a href="auth/logout.php">Log Out</a></li>
							<?php else: ?>
							<li><a href="auth/login.php">Login</a></li>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- End Header Area -->
	</section>

	<section class="default-banner">
		<div class="item-slider relative" style="background: url(img/pesawat.jpg);background-size: cover;">
			<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
			<div class="container">
				<div class="row fullscreen justify-content-center align-items-center">
					<div class="col-md-10 col-12">
						<div class="banner-content text-center">
							<h4 class="text-white mb-20 text-uppercase">Pergi dengan pesawat</h4>
							<h1 class="text-uppercase text-white">Aman Cepat Nyaman</h1>
							<p class="text-white">Bekerja sama dengan berbagai maskapai di Indonesia</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>