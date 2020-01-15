<?php get_header(); ?>

	<main role="main" class="project-container">
	<!-- section -->
	<section class="main-area">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
    <header class="project-header">


			<!-- post title -->
			<h1 class="project-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        <span class="date"><?php the_time('Y'); ?></span>
			</h1>
			<!-- /post title -->

      </header>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); // Dynamic Content ?>

			<?php the_tags( __( 'Tags: ', 'idv2018' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>


		</article>
		<!-- /article -->
  <?php comments_template(); ?>

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'idv2018' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

  <div class="back-button"><a href="../" alt="Regresar"><i class="fas fa-angle-left"></i></a></div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
