<?php get_header(); ?>
<?php
if ($_SERVER['REMOTE_ADDR'] != "143.106.16.153" && $_SERVER['REMOTE_ADDR'] != "177.55.129.61") {
  registerdb($_SERVER['REMOTE_ADDR']);
}
?>

<!-- ======= Hero Section ======= -->
<div id="home"></div>

<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <?php
        $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

        if ($isMob == 1) {
          $cat = get_option('home_input_33');
        } else {
          $cat = get_option('home_input_32');
        }

        $x = 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' =>  get_option('home_input_31'),
          'category_name' => $cat,
          'order' => 'DESC'
        );
        $loop = new WP_Query($args);
        foreach ($loop->posts as $post) {
          if (has_post_thumbnail()) {
            $imagem = get_the_post_thumbnail_url(get_the_ID(), 'full');
          } else {
            $imagem = SITEPATH . "assets/img/semimagem.png";
          }
        ?>
          <!-- Slide -->
          <div class="carousel-item <?php if ($x == 1) echo 'active'; ?>" style="background-image: url(<?php echo $imagem; ?>)">
            <!--<div class="carousel-container">
                <div class="carousel-content">
                  <h5 class="animate__animated animate__fadeInDown"><?php //echo get_the_category()[0]->name; 
                                                                    ?></h5><br>
                  <h2 class="animate__animated animate__fadeInDown"><?php //echo get_the_title() 
                                                                    ?></h2>
                  <a href="<?php //the_permalink() 
                            ?>" class="btn-get-started animate__animated animate__fadeInUp">Leia Mais</a>
                </div>
              </div>-->
          </div>
        <?php $x++;
        }
        wp_reset_postdata();
        ?>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </div>
</section><!-- End Hero -->

<main id="main">


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
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8">

          <div class="row">

            <div class="col-lg-6">
              <a target="_blank" href="<?php echo get_option('home_input_83'); ?>">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><img src="<?php echo get_option('home_input_81'); ?>" title="<?php echo get_option('home_input_82'); ?>"></div>
                  <h4 class="title center"><?php echo get_option('home_input_82'); ?></h4>
                </div>
              </a>
            </div>

            <div class="col-lg-6">
              <a target="_blank" href="<?php echo get_option('home_input_93'); ?>">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><img src="<?php echo get_option('home_input_91'); ?>" title="<?php echo get_option('home_input_92'); ?>"></div>
                  <h4 class="title center"><?php echo get_option('home_input_92'); ?></h4>
                </div>
              </a>
            </div>

            <div class="col-lg-6">
              <a target="_blank" href="<?php echo get_option('home_input_103'); ?>">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><img src="<?php echo get_option('home_input_101'); ?>" title="<?php echo get_option('home_input_102'); ?>"></div>
                  <h4 class="title center"><?php echo get_option('home_input_102'); ?></h4>
                </div>
              </a>
            </div>

            <div class="col-lg-6">
              <a target="_blank" href="<?php echo get_option('home_input_113'); ?>">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><img src="<?php echo get_option('home_input_111'); ?>" title="<?php echo get_option('home_input_112'); ?>"></div>
                  <h4 class="title center"><?php echo get_option('home_input_112'); ?></h4>
                </div>
              </a>
            </div>

          </div>
        </div>

        <div class="col-lg-4">

          <div class="row">

            <div class="col-lg-12">
              <a target="_blank" href="<?php echo get_option('home_input_123'); ?>">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><img src="<?php echo get_option('home_input_121'); ?>" title="<?php echo get_option('home_input_122'); ?>"></div>
                  <h4 class="title center"><?php echo get_option('home_input_122'); ?></h4>
                </div>
              </a>
            </div>

            <div class="col-lg-12">
              <a target="_blank" href="<?php echo get_option('home_input_133'); ?>">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon"><img src="<?php echo get_option('home_input_131'); ?>" title="<?php echo get_option('home_input_132'); ?>"></div>
                  <h4 class="title center"><?php echo get_option('home_input_132'); ?></h4>
                </div>
              </a>
            </div>

          </div>
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

  <h1>&nbsp;</h1>

  <!-- ======= News Section ======= -->
  <section id="news" class="new-posts">

    <div class="section-title">
      <h2>Notícias</h2>
    </div>

    <div class="container">

      <?php
      $x = 1;
      $args = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'posts_per_page' => 8,
        'category__not_in' => array(22, 27, 28)
      );
      $loop = new WP_Query($args);
      $postentry = array();

      foreach ($loop->posts as $post) {
        $imagem = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if ($imagem == "") $imagem = SITEPATH . "assets/img/semimagem.png";

        if ($x <= 2) {
          $excerpt = '<p class="mb-4 d-block">' . get_excerpt(150) . '</p>';
        } else {
          $excerpt = "";
        }
        $postentry[] = '<div class="post-entry-2">' .
          '<a href="' . get_the_permalink() . '"><img src="' . $imagem . '" alt="" class="img-fluid"></a>' .
          '<div class="post-meta"><span class="date">' . get_the_category()[0]->name . '</span>' .
          '<span class="mx-1">&bullet;</span> <span>' . get_the_date('d M Y', $post->ID) . '</span></div>' .
          '<h2><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h2>' . $excerpt . '</div>';
        $x++;
      }
      wp_reset_postdata();
      ?>


      <div class="row">
        <div class="col-lg-4 left">
          <?php echo $postentry[0] . $postentry[1]; ?>
        </div>

        <div class="col-lg-8 right">
          <div class="row">
            <div class="col-lg-4 border-start custom-border">
              <?php echo $postentry[2] . $postentry[3]; ?>
            </div>
            <div class="col-lg-4 border-start custom-border">
              <?php echo $postentry[4] . $postentry[5]; ?>
            </div>
            <div class="col-lg-4 border-start custom-border">
              <?php echo $postentry[6] . $postentry[7]; ?>
            </div>
          </div>
        </div>

      </div> <!-- End .row -->
      <div class="row">
        <div class="col-lg-12 more">
          <a class="getstarted" href="/arquivos">Veja todos</a>
        </div>
      </div>
    </div>
  </section><!-- End News Section -->


  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <div class="info-box">
            <a href="#"><img src="/wp-content/uploads/2019/12/logo-americana-1-1.png" title=""></a>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="info-box">
            <a href="#"><img src="/wp-content/uploads/2019/12/logo-ares-pcj-1-1.png" title=""></a>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="info-box ">
            <a href="#"><img src="/wp-content/uploads/2019/12/logo-daee-1-1.png" title=""></a>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="info-box ">
            <a href="#"><img src="/wp-content/uploads/2019/12/logo-ana-1-1.png" title=""></a>
          </div>
        </div>

      </div>

    </div>

    <h1>&nbsp;</h1>

    <!--<h1>&nbsp;</h1>
    
    <div class="section-title">
      <h2>Contato</h2>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-lg-6 maps">
          <iframe class="mb-4 mb-lg-0" src="<?php //echo get_option('home_input_17'); ?>" frameborder="0" style="border:0; width: 100%; height: 580px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6 php-email-form">
          <?php //echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>
        </div>

      </div>

    </div>-->
  </section><!-- End Contact Section -->

</main><!-- End #main -->
<?php get_footer(); ?>