

<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section class="main-area">
      <div id="portafolio" class="section">
        <h1 class="section-title">Portafolio</h1>
        <h2 class="">Nuestro trabajo</h2>
        <div data-tilt class="parallaxLayer">
          <div class="portafolioBackground"></div>
          <div class="dotGrid"></div>
        </div>

        <div id="portafolioContainer" class="container">
          <div class="portafolioSlider">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="portafolioSlide">
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                  <div class="projectSlide">
                    <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url() ?>);">
                      <a class="thumb-link"
                        style="display:block; width:100%; height: 100%;"
                       href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
                    </div>
                      <div class="details"><!-- post details -->
                        <h3><?php the_title(); ?></h3>
                        <span class="date"><?php the_time('Y'); ?></span>
                        <span class="excerpt"><?php the_excerpt() ?></span>

                        <a class="view-project" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Ver proyecto</a>


                      </div><!-- post details -->
                  </div>
              <?php endif; ?>
              <!-- /post thumbnail -->
            </div>

            <?php endwhile; else: ?>
                <div class="post">
                    <p><?php _e('Sorry, no posts matched your criteria.', "proyectos"); ?></p>
                </div>
            <?php endif; ?>

          </div>
          <div class="portafolioGallery">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                  <div id="" class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url() ?>);">

                  <a class="view-project" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>



                  </div>
              <?php endif; ?>
              <!-- /post thumbnail -->

            <?php endwhile; else: ?>
                <div class="post">
                    <p><?php _e('Sorry, no posts matched your criteria.', "proyectos"); ?></p>
                </div>
            <?php endif; ?>

          </div>
        </div>



      </div>
		</section>
		<!-- /section -->
	</main>



  <script>

  jQuery(document).ready(function(){

    jQuery(document).ready(function(){
      jQuery('.portafolioSlider').bxSlider({
        mode: 'fade'
      }

      );
    });



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
