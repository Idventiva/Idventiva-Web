<?php get_header(); ?>
<header class="thumbnail-header"></header>
	<main role="main">
		<div class="sidebar-idv">
			<?php get_sidebar(); ?>
		</div>
		<!-- section -->
		<section  class="main-area">

			<h1 class="section-title"><?php _e( 'Categories for ', 'idv2018' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
