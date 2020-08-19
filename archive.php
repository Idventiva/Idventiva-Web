<?php get_header(); ?>

<main class="body--black">
<container class="portfolio col1">


    <section class="section-sidebar">
        <section class="section__title">
            <h5>Nuestro</h5>
            <h2>Trabajo</h2>
        </section>
        <nav class="section-menu__container">
            <?php wp_nav_menu( array( 'theme_location' => 'portfolio-menu', 'container_class' => 'section-menu' ) ); ?>
        </nav>
    </section>

    <section class="carousel">

        <section class="carousel__title">
                <h3><?php the_archive_title(); ?></h3>
        </section>

        <div class="carousel__container">
            <?php 
            if (have_posts()) { 
                while (have_posts()) { 
                    the_post(); ?> 

                <div class="carousel-item">
                    <a class="carousel-item__link" href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
                    <div class="carousel-item__details">
                        <a href="<?php the_permalink(); ?>">
                            <h5>
                                <?php the_title(); ?>
                            </h5>
                            <p>
                                <?php echo $fields['anno']; ?>
                            </p>
                        </a>
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
