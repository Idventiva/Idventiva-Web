<?php /* Template Name: Contacto */ get_header(); ?>
	<main role="main">
		<!-- section -->
		<section class="main-area">
      <div id="contact" class="section">
        <div class="wrapper">
          <div class="contactContainer">
            <div class="contact-left">
              <h5 class="section-title"><?php the_title(); ?></h5>
              <h2 class="">Dudas y sugerencias</h2>
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
            <div class="contact-right">    
                <address>Autopista Mex-Qro. Km 37.5 Condominio Industrial Cuamatla Bodega 34 Planta Alta Cuautitlán Izcalli Estado de México C.P. 54730</address>
                <phone>Teléfono: +152 (55) 7261 - 7880 </phone><br />
                <email>Correo: contacto@idventiva.com</email>
                <span><a href="https://g.page/Idventiva?share" class="button">Ver Mapa</a></span>
              </div>
          </div>
          
          
        </div> <!-- Wrapper -->




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
