<?php /* Template Name: Proyectos */ 
get_header(); 
$fields = get_fields(); ?>



<main class="body--black">
    <container class="portfolio col1">

        <section class="sidebar">
            <section class="section__title">
            <h5>Nuestro</h5>
            <h2>Trabajo</h2>

            <nav class="section-menu__container" style="line-height: 160%; margin-top: 40px;">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Widget Area 1") ) : ?>
            <?php endif;?>
            </nav>
            <button class="slide--left"><a href="<?php echo get_site_url() ?>/contacto">Cotizar mi proyecto</a></button>
            </section>
        </section>

<!--------------------------------------------- Carousel -->

    <section class="carousel">

        <!-- <section class="carousel__title">
                <h2>Branding y Diseño Digital</h2>
        </section> -->

        <div class="carousel__container">
        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => -1,
            'order' => 'ASC',
            'orderby' => 'menu_order',
        );
        
        $projects = new WP_Query($dat);


        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

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




</container>
</main>

<?php get_footer(); ?>