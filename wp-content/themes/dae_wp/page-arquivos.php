<?php get_header(); ?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <h2>Todos os Arquivos</h2>
      <ol>
        <li><a href="/">inicio</a></li>
        <li>arquivos</li>
      </ol>      
    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="news" class="new-posts">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-9 entries">
          <div class="row">
            <?php
            $x = 1;

            $args = array(
              'post_type' => 'post',
              'order' => 'DESC',
              'posts_per_page' => 20,
              'category__not_in' => array(27,28)
            );
            $loop = new WP_Query($args);

            foreach ($loop->posts as $post) {
              $imagem = get_the_post_thumbnail_url(get_the_ID(), 'full');
              if ($imagem == "") $imagem = SITEPATH . "assets/img/semimagem.png";

              echo '<div class="col-lg-3 border-start custom-border"><div class="post-entry-2">' .
                '<a href="' . get_the_permalink() . '"><img src="' . $imagem . '" alt="" class="img-fluid"></a>' .
                '<div class="post-meta"><span class="date">' . get_the_category()[0]->name . '</span>' .
                '<span class="mx-1">&bullet;</span> <span>' . get_the_date('d M Y', $post->ID) . '</span></div>' .
                '<p><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></p></div></div>';
              $x++;
            }
            wp_reset_postdata();
            ?>
          </div>
        </div><!-- End blog entries list -->

        <div class="col-lg-3">
          <div class="sidebar">
            <h3 class="sidebar-title">Busca</h3>

            <div class="sidebar-item search-form search">
              <form action="/" method="get">
                <input type="text" placeholder="Pesquisar" required name="s" id="search" value="<?php the_search_query(); ?>" />
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categorias</h3>
            <div class="sidebar-item categories">
              <ul>
                <?php
                $argsCat = array(
                  'post_type' => 'post',
                  'orderby'       => 'name',
                  'order'         => 'ASC'
                );
                $categories = get_terms('category', $argsCat);
                foreach ($categories as $category) {
                  echo '<li><a class="getstarted empty" href="/arquivos/' . $category->slug . '">' . $category->name . ' <span>(' . $category->count . ')</span></a></li>';
                }
                ?>
              </ul>
            </div><!-- End sidebar categories-->

          </div><!-- End blog sidebar -->

        </div>

      </div>
  </section><!-- End Blog Section -->
</main><!-- End #main -->
<?php get_footer(); ?>