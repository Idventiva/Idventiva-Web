			<!-- footer -->
			<footer class="footer" role="contentinfo">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.png" alt="Logo" class="logo-img">
          </a>
        </div>
        <!-- /logo -->
        <div class="wrapper">
				<!-- copyright -->
        <div class="footer-widget">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer-1')) ?>
        </div>
        <div class="footer-widget">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer-2')) ?>
        </div>
        <div class="footer-widget">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer-3')) ?>
        </div>
        <div class="footer-widget" style="text-align: right; float: right;">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-footer-4')) ?>
        </div>
				<!-- /copyright -->
      </div>
      <div class="social-networks-footer">
        <a href="https://www.facebook.com/idventiva/" alt="Facebook"><i class="fab fa-facebook-square"></i></a>
        <a href="https://twitter.com/idventiva" alt="Twitter"><i class="fab fa-twitter-square"></i></a>
        <a href="https://mx.linkedin.com/company/idventiva" alt="LinkedIn"><i class="fab fa-linkedin"></i></a>
        <a href="https://www.instagram.com/idventiva/" alt="Idventiva"><i class="fab fa-instagram-square"></i></a>
      </div>
			</footer>
			<!-- /footer -->

      <!-- logo -->

		<?php wp_footer(); ?>

	</body>
</html>
