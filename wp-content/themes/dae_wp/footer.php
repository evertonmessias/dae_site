  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
          <div class="menu-footer">
            <?php wp_nav_menu(array('menu' => 'dae_footer')); ?>
            </div>
          </div>       

        </div>
      </div>
    </div>

    <div class="container d-lg-flex py-4">

      <div class="me-lg-auto text-center text-lg-start">
        <div class="credits">
           <small>Todos os direitos reservados - DAE Americana/SP</small>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo SITEPATH; ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo SITEPATH; ?>assets/js/main.js"></script>

  <?php wp_footer(); ?>
  </body>

  </html>