<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <aside>
    <!-- post thumbnail -->
    <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <div id="" class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url() ?>);">

        </div>
    <?php endif; ?>
    <!-- /post thumbnail -->
    <!-- post details -->
    <div class="details">
      <span class="date"><?php the_time('F j'); ?></span>
      <span class="author">por <?php the_author(); ?></span>
      <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Comentarios', 'idv2018' ), __( '1 Comentario', 'idv2018' ), __( '% Comentarios', 'idv2018' )); ?></span>
    </div>
    <!-- /post details -->

  </aside>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->



		<?php idv2018_excerpt('idv2018_index'); // Build your custom callback length in functions.php ?>

		<?php edit_post_link(); ?>

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
