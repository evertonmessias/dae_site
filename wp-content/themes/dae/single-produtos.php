<?php get_header(); ?>
<main id="main" class="post" data-aos="fade-up">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2><?php the_title() ?></h2>
                <ol>
                    <li><a href="/">home</a></li>
                    <li>
                        <?php
                        if (url_active()[2] == "") echo url_active()[1];
                        else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
                        ?>
                    </li>
                    <!--<li>
            <?php //if (url_active()[2] != "") echo url_active()[2]; 
            ?>
          </li>-->
                </ol>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
        <div class="container">

            <div class="portfolio-details-container">
                <div class="owl-carousel portfolio-details-carousel">
                    <?php if (get_post_meta($post->ID, 'produtos_imagem_1', true) != "") { ?>
                        <a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" target="_blank">
                            <img src="<?php echo get_post_meta($post->ID, 'produtos_imagem_1', true); ?>" class="img-fluid img-produtos" title="<?php the_title() ?>">
                        </a>
                    <?php } ?>
                    <?php if (get_post_meta($post->ID, 'produtos_imagem_2', true) != "") { ?>
                        <a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_2', true); ?>" target="_blank">
                            <img src="<?php echo get_post_meta($post->ID, 'produtos_imagem_2', true); ?>" class="img-fluid img-produtos" title="<?php the_title() ?>">
                        </a>
                    <?php } ?>
                    <?php if (get_post_meta($post->ID, 'produtos_imagem_3', true) != "") { ?>
                        <a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_3', true); ?>" target="_blank">
                            <img src="<?php echo get_post_meta($post->ID, 'produtos_imagem_3', true); ?>" class="img-fluid img-produtos" title="<?php the_title() ?>">
                        </a>
                    <?php } ?>
                    <?php if (get_post_meta($post->ID, 'produtos_imagem_4', true) != "") { ?>
                        <a href="<?php echo get_post_meta($post->ID, 'produtos_imagem_4', true); ?>" target="_blank">
                            <img src="<?php echo get_post_meta($post->ID, 'produtos_imagem_4', true); ?>" class="img-fluid img-produtos" title="<?php the_title() ?>">
                        </a>
                    <?php } ?>
                </div>
            </div>

            <br><br>

            <div class="portfolio-description text-justify">                
                <?php echo get_the_content(); ?>
                <h1>&ensp;</h1>
                <a class="btn-pedido" target="_blank" href="https://api.whatsapp.com/send?phone=55<?php echo get_option('home_input_14'); ?>&text=Pedir <?php echo get_the_title() ?>"><i class="bx bxl-whatsapp"></i> Fazer Pedido</a>
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->
<br>
<hr>
</main><!-- End #main -->
<?php get_footer(); ?>