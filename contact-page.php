<?php /* Template Name: Contacto */ get_header(); ?>
	<main role="main">
		<!-- section -->
		<section class="main-area">
      <div id="contact" class="section">
        <div data-tilt class="parallaxLayer">
          <div class="aboutBackground"></div>
          <div class="dotGrid"></div>
        </div>
        <div class="contactContainer">
          <div class="contact-right">
            <h5 class="section-title"><?php the_title(); ?></h5>
            <h2 class="">Dudas y sugerencias</h2>
            <address>Ricardo Toscano #18 P.H. Cd. Satélite. Naucalpan, Edo. Méx. C.P: 53100</address>
          </div>
          <div class="contact-left">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

              <!-- article -->
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <?php the_content(); ?>

              </article>
              <!-- /article -->

            <?php endwhile; ?>

          <?php else: ?>

            <!-- article -->
            <article>

              <h2><?php _e( 'Sorry, nothing to display.', 'idv2018' ); ?></h2>

            </article>
            <!-- /article -->

          <?php endif; ?>

        </div>
        </div>




      </div>
		</section>
		<!-- /section -->
	</main>



  <script>

  jQuery(document).ready(function(){


    jQuery('.parallaxLayer').tilt({
          maxTilt: 20,
          perspective: 4000,
          reset: false,
          glare: false,
          maxGlare: 1,
          transition: true,
          easing: "cubic-bezier(.03,.98,.52,.99)",
          speed:  1000
    });
  });

  </script>


<?php get_footer(); ?>
