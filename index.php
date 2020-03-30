<?php get_header(); ?>
<div id="blog">
  <div class="dotGridBlack"></div>

  <div class="container">
    <header>
      <h1 class="section-title"><?php _e( 'Ledix', 'idv2018' ); ?><small>Leading Digitali Experiences</small></h1>

    </header>
  	<main role="main">
  		<!-- section -->
  		<section class="main-area">


  			<?php get_template_part('loop'); ?>

  			<?php get_template_part('pagination'); ?>

  		</section>
  		<!-- /section -->
  	</main>
  </div>
</div>

<?php get_footer(); ?>
