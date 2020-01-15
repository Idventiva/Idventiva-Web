<?php get_header(); ?>
<header class="thumbnail-header"></header>
	<main role="main">
		<!-- section -->
		<div class="sidebar-idv">
			<?php get_sidebar(); ?>
		</div>
		<section class="main-area">

			<h1 class="section-title"><?php _e( 'Tag Archive: ', 'idv2018' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
