<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
// ************* Cor do portal
$post_color = get_option('portal_input_3');
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php bloginfo() ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_option('home_input_2'); ?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo SITEPATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center <?php if (is_user_logged_in()) echo "user-logged"; ?>">
    <div class="container d-flex justify-content-center justify-content-md-between">
      
      <div class="contact-info d-flex align-items-center">
        <i class="bx bx-phone"></i>&ensp;<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_14'); ?>&text=dae"><?php echo get_option('home_input_14'); ?></a>&emsp;&emsp;
				<i class="bx bxl-whatsapp"></i>&ensp;<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_15'); ?>&text=dae"><?php echo get_option('home_input_15'); ?></a>
			</div>
      <div class="top-search">
        <!--<form action="/" method="get">
          <input type="text" placeholder="Pesquisar" required name="s" id="search" value="<?php the_search_query(); ?>" />
          <button type="submit"><i class="bi bi-search"></i></button>
        </form>-->
      </div> 
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center <?php if (is_user_logged_in()) echo "user-logged"; ?>">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="/"><img src="<?php echo get_option('home_input_2'); ?>" title="<?php echo get_option('home_input_1'); ?>"></a>
      </div>

      <nav id="navbar" class="navbar">
        <?php wp_nav_menu(array('menu' => 'dae_nav')); ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->