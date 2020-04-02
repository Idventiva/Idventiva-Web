<?php get_header(); ?>

<main class="body--black">
<container class="portfolio">

<section class="section__title">
        <h5>Servicio</h5>
        <h2><?php the_archive_title(); ?></h2>
    </section>

    <section class="carousel col2">

        <section class="carousel__title">
                <div class="line--lightgolden"></div>
                <h3>Nuestros Proyectos</h3>
        </section>

        <div class="carousel__container">

        <?php 

        if (have_posts()) { 
			while (have_posts()) { 
				the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>"></a>
                <div class="carousel-item__details">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </div>
            </div>
        <?php }
    } ?>
        </div>
    </section>
	<?php get_template_part('pagination'); ?>

</container>
</main>
<?php get_footer(); ?>
