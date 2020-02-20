<?php /* Template Name: 404 */ get_header(); ?>
<header class="thumbnail-header"></header>
	<main role="main">
		<div class="sidebar-idv">
			<?php get_sidebar(); ?>
		</div>
		<!-- section -->
		<section class="main-area">

			<!-- article -->
			<article id="post-404">

				<h1 class="section-title"><?php _e( 'Page not found', 'idv2018' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'idv2018' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
