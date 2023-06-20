<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '672687711120793');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=672687711120793&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
	<title>Ratumerakshop</title>

	<!-- Fonts -->
	<link
	href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
	rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Icons -->
	<link href="<?= base_url('') ?>/assets/css/nucleo-icons.css" rel="stylesheet">
	<link href="<?= base_url('') ?>/assets/css/font-awesome.css" rel="stylesheet">

	<!-- Jquery UI -->
	<link type="text/css" href="<?= base_url('') ?>/assets/css/jquery-ui.css" rel="stylesheet">

	<!-- Argon CSS -->
	<link type="text/css" href="<?= base_url('') ?>/assets/css/argon-design-system.min.css" rel="stylesheet">

	<!-- Main CSS-->
	<link type="text/css" href="<?= base_url('') ?>/assets/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.33/sweetalert2.min.css" integrity="sha512-doewDSLNwoD1ZCdA1D1LXbbdNlI4uZv7vICMrzxfshHmzzyFNhajLEgH/uigrbOi8ETIftUGBkyLnbyDOU5rpA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.33/sweetalert2.min.js" integrity="sha512-cYg5I1IgQJ3PudSiA/J3W15Q2zkgB+bbv7aKm0GuSvIineIx7jsSTc+iXGu0AyJOvdI6vWJkvJe97bVF3POQHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<!-- Optional Plugins-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<header class="header clearfix">
		<div class="top-bar  d-sm-block">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 text-left">
						<ul class="top-links contact-info">
							<li><i class="fa fa-envelope-o"></i> <a href="#">Berasgenthong19@gmail.com</a></li>
							<li><i class="fa fa-whatsapp"></i> +6281264646575</li>
						</ul>
					</div>
					<div class="col-sm-6 text-right">
						<ul class="top-links account-links">
							<?php if ($this->session->email == null) { ?>
								<li><i class="fa fa-user-circle-o"></i> <a href="<?= base_url('auth/register') ?>">Register</a></li>

								<li><i class="fa fa-power-off"></i> <a href="<?= base_url('auth/login') ?>">Login</a></li>
							<?php }else{ ?>
								<li class="nav-item dropdown">

									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true" style="font-weight: bold;"><i class="fa fa-user-circle-o"></i> <?= $this->session->name ?></a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?= base_url('auth/logout') ?>" >Logout <i class="fa fa-sign-out"></i></a>

									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header-main border-top">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-12 col-sm-6">
						<a class="navbar-brand mr-lg-5" href="<?= base_url('shop/') ?>">
							<i class="fa fa-shopping-bag fa-2x"></i> <span class="logo">Ratumerakshop</span>
						</a>
						<!-- <div class="single-icon shopping-cart" id="cartshop">
							<a href="#"><i class="fa fa-shopping-cart fa-2x" id="cart" data-toggle="modal" data-target="#exampleModal"></i></a>
							<span class="badge badge-default" id="tampil_data"><?=  count($this->cart->contents()); ?></span>
						</div> -->
					</div>
					<div class="col-lg-7 col-11 col-sm-6">
						<form action="#" class="search">
							<div class="input-group w-100">
								<input type="text" class="form-control" placeholder="Search">
								<div class="input-group-append">
									<button class="btn btn-primary" type="submit">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-lg-2 col-1 col-sm-6">
						<div class="right-icons pull-right  d-lg-block">
							<div class="single-icon wishlist">
								<a href="#"><i class="fa fa-heart-o fa-2x"></i></a>
								<span class="badge badge-default">0</span>
							</div>
							<div class="single-icon shopping-cart" id="cartmobile">
								<a href="#"><i class="fa fa-shopping-cart fa-2x" id="cart" data-toggle="modal" data-target="#exampleModal"></i></a>
								<span class="badge badge-default" id="tampil_data"><?=  count($this->cart->contents()); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-main navbar-expand-lg navbar-light border-top border-bottom">
			<div class="container">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav"
				aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="main_nav">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link" href="<?= base_url('shop/') ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('shop/abaout') ?>">About</a>
					</li>
<!--  <li class="nav-item">
<a class="nav-link" href="#">Product</a>
</li> -->
<li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">Product</a>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="<?= base_url('shop/produk/premium-rice') ?>">Beras Premium</a>
		<!-- <a class="dropdown-item" href="<?= base_url('shop/produk/medium-rice') ?>">Beras Medium</a>
		<a class="dropdown-item" href="<?= base_url('shop/produk/healthy-rice') ?>">Beras Healthy</a>
		<a class="dropdown-item" href="<?= base_url('shop/produk/glutinous-rice') ?>"> Beras Glutinous</a> -->
	</div>
</li>
<li class="nav-item">
	<a class="nav-link" href="<?= base_url('shop/order') ?>">Data Checkout</a>
</li>
</ul>
</div> <!-- collapse .// -->
</div> <!-- container .// -->
</nav>
</header>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">List cart</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row" id="tampil_cart">

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<a href="<?= base_url('shop/cart_detail') ?>" class="btn btn-primary">Payment</a>
			</div>
		</div>
	</div>
</div>
<!------------------------------------------

