<?php get_header(); ?>

<header class="thumbnail-header" style="background-image:url(<?php the_post_thumbnail_url() ?>);"></header>
	<main role="main">
		<!-- section -->
		<div class="sidebar-idv">
			<?php get_sidebar(); ?>
		</div>
		<section class="main-area">

			<h1 class="section-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

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

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
