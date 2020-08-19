			<!-- footer -->
			<footer class="footer" role="contentinfo">

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
			</footer>
			<!-- /footer -->

      <!-- logo -->

		<?php wp_footer(); ?>

	</body>
</html>
