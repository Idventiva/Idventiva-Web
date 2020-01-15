<?php /* Template Name: Legales */ get_header(); ?>
<header class="thumbnail-header" style="background-image:url(<?php the_post_thumbnail_url() ?>);"></header>
	<main role="main">
		<!-- section -->
		<div class="sidebar-idv">
      <aside class="sidebar" role="complementary">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('legal-sidebar')) ?>
      	<div class="sidebar-widget">
      	</div>
      </aside>
		</div>
		<section class="main-area">


		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width: 780px; margin: 0 auto; padding: 60px 30px; text-align: justify;">

        <h1 class="section-title"><?php the_title(); ?></h1>
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
