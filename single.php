<?php get_header(); ?>

	<main role="main" class="post-container">
	<!-- section -->
	<div class="sidebar-idv">
		<?php get_sidebar(); ?>
	</div>
	<section class="main-area">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
    <header class="post-header" style="background-image:url(<?php the_post_thumbnail_url() ?>);">


			<!-- post title -->
			<h1 class="section-title">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
      <div class="post-meta">
			<span class="date"><?php the_time('F j, Y'); ?> | <?php the_time('g:i a'); ?> |</span>
			<span class="author"><?php _e( 'Publicado por', 'idv2018' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Deja tus comentarios', 'idv2018' ), __( '1 Comentario', 'idv2018' ), __( '% Comentarios', 'idv2018' )); ?></span>
      </div>
			<!-- /post details -->

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

<?php get_sidebar(); ?>

<?php get_footer(); ?>
