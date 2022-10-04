<?php get_header(); ?>

<?php $categories = get_terms('category', array('order' => 'DESC')); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" style="background: url('<?php echo get_option('home_input_31'); ?>') center center;" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100">
    <h1><span><?php echo get_option('home_input_1'); ?></span>&emsp;<?php echo get_option('home_input_32'); ?></h1>
    <h2>&ensp;</h2>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">Sobre Nós</a>
      <a href="<?php echo get_option('home_input_33'); ?>" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Assista ao Vídeo <i class="icofont-play-alt-2"></i></a>
    </div>
  </div>
</section><!-- End Hero -->


<main id="main" class="front">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="col-lg-12">
          <?php echo get_option('home_input_4'); ?>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <a target="_blank" href="<?php echo get_option('home_input_83'); ?>">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_81'); ?>" title="<?php echo get_option('home_input_82'); ?>"></div>
            <h4 class="title center"><?php echo get_option('home_input_82'); ?></h4>
          </div>
          </a>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <a target="_blank" href="<?php echo get_option('home_input_93'); ?>">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_91'); ?>" title="<?php echo get_option('home_input_92'); ?>"></div>
            <h4 class="title center"><?php echo get_option('home_input_92'); ?></h4>
          </div>
          </a>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <a target="_blank" href="<?php echo get_option('home_input_103'); ?>">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_101'); ?>" title="<?php echo get_option('home_input_102'); ?>"></div>
            <h4 class="title center"><?php echo get_option('home_input_102'); ?></h4>
          </div>
          </a>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <a target="_blank" href="<?php echo get_option('home_input_113'); ?>">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_111'); ?>" title="<?php echo get_option('home_input_112'); ?>"></div>
            <h4 class="title center"><?php echo get_option('home_input_112'); ?></h4>
          </div>
          </a>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <a target="_blank" href="<?php echo get_option('home_input_123'); ?>">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_121'); ?>" title="<?php echo get_option('home_input_122'); ?>"></div>
            <h4 class="title center"><?php echo get_option('home_input_122'); ?></h4>
          </div>
          </a>
        </div>

        <div class="col-lg-2 d-flex align-items-stretch mb-5 mb-lg-0">
          <a target="_blank" href="<?php echo get_option('home_input_133'); ?>">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><img src="<?php echo get_option('home_input_131'); ?>" title="<?php echo get_option('home_input_132'); ?>"></div>
            <h4 class="title center"><?php echo get_option('home_input_132'); ?></h4>
          </div>
          </a>
        </div>

      </div>

    </div>
  </section><!-- End Featured Services Section -->

    <!-- ======= Avisos Section ======= -->
    <section id="avisos" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="col-lg-12">
          <?php echo get_option('home_input_5'); ?>
        </div>
      </div>
    </div>
  </section><!-- End Avisos Section -->

  <!-- ======= Gallery Section ======= -->
  <section id="portfolio" class="gallery section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Notícias</h2>
      </div>

      <div class="gallery-slider swiper">
        <div class="swiper-wrapper align-items-center">

          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()) {
            $loop->the_post();
          ?>

            <div class="swiper-slide">
              <a class="gallery-lightbox" href="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>">
                <img src="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" class="img-fluid" alt="">
              </a>
              <p><?php echo get_the_title() ?></p>
              <a href="<?php the_permalink() ?>" class="btn-link" title="Link">Leia mais</a>
            </div>
          <?php }
          ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contato</h2>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Endereço</h3>
            <p><?php echo get_option('home_input_16'); ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>E-mail</h3>
            <p><a target="_blank" href="mailto:<?php echo get_option('home_input_15'); ?>"><?php echo get_option('home_input_15'); ?></a></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>WhatsApp</h3>
            <p><a target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_14'); ?>&text=dae"><?php echo get_option('home_input_14'); ?></a></p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="<?php echo get_option('home_input_17'); ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php get_footer(); ?>