<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<title><?php bloginfo() ?></title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo get_option('home_input_2'); ?>" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/css/dae.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>

	<!-- ======= Top Bar ======= -->
	<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top <?php if(is_user_logged_in())echo "bar-logged"; ?>">
		<div class="container d-flex">
			<div class="contact-info mr-auto">
				<i class="bx bx-phone"></i><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_14'); ?>&text=dae"><?php echo get_option('home_input_14'); ?></a>&emsp;&emsp;
				<i class="bx bxl-whatsapp"></i><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_15'); ?>&text=dae"><?php echo get_option('home_input_15'); ?></a>
			</div>
			<!--<div class="social-links">				
				<a target="_blank" href="<?php echo get_option('home_input_18'); ?>" class="facebook"><i class="icofont-facebook"></i></a>
				<a target="_blank" href="<?php echo get_option('home_input_19'); ?>" class="instagram"><i class="icofont-instagram"></i></a>				
			</div>-->
		</div>
	</div>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top <?php if(is_user_logged_in())echo "bar-logged"; ?>">
		<div class="container d-flex align-items-center">

			<a href="/" class="logo mr-auto"><img src="<?php echo get_option('home_input_2'); ?>" alt=""></a>

			<nav class="nav-menu d-none d-lg-block">
				<ul>
					<li class="active"><a href="/">Inicio</a></li>
					<li><a href="/#institucional">Institucional</a></li>
					<li><a href="/#estrutura">Estrutura</a></li>
					<li><a href="/#servicos">Serviços</a></li>
					<li><a href="/#editais">Editais</a></li>
					<li><a href="/#informativo">Informativo</a></li>
					<li><a href="/#ouvidoria">Ouvidoria</a></li>
					<li><a href="/#contact">Contato</a></li>
				</ul>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->