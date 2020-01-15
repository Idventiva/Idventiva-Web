<?php get_header(); ?>
<header class="thumbnail-header"></header>
	<main role="main">
		<!-- section -->
		<div class="sidebar-idv">
			<?php get_sidebar(); ?>
		</div>
		<section class="main-area">

			<h1 class="section-title"><?php echo sprintf( __( '%s Search Results for ', 'idv2018' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
