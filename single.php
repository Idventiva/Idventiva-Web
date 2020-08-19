<?php 
/* Template Name: Proyecto Simple */ 
get_header();
$fields = get_fields(); ?>

<main class="single-project">
	<?php if(have_posts()){ 
			while (have_posts()){ 
				the_post();
            ?>
            <?php $taxonomy = get_the_terms(get_the_ID(), 'categoria-proyectos'); ?>

        <section class="single-project__portada" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
            <button class="slide--left"><a href="/contacto">Quiero algo así</a></button>
        </section>

        <section class="single-project__container">
            <div class="single-project__info">
                <div class="single-project__title">
                    <h5><?php echo $fields['tipo']; ?></h5>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
                <h5>Descripción:</h5>
                <p><?php echo $fields['descripcion']; ?></p>
                <h5>Actividades:</h5>
                <p><?php echo $fields['categorias']; ?></p>
                <h5>Año:</h5>
                <p><?php echo $fields['anno']; ?></p>
                <h5>Resultados:</h5>
                <p><?php echo $fields['resultados']; ?></p>
                <button class="slide--left"><a href="<?php echo get_site_url(); ?>/contacto">Quiero algo así</a></button>
            </div>
            <div class="single-project__content">
                <?php the_content();?>
            </div>
        </section>
        
        <?php 
    }
} ?>



</main>


<section class="related-projects">
    <section class="carousel">
        <div class="carousel__container">
        <?php 
            $dat = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
                'order' => 'ASC',
                'orderby' => 'title',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'categoria-proyectos',
                        'field' => 'slug',
                        'terms' => $taxonomy[0]->slug
                        )
                        )
                    );
                    
                    $projects = new WP_Query($dat);
                    
                    
                    if ($projects->have_posts()) { 
                        while ($projects->have_posts()) { 
                            $projects->the_post(); ?> 
    
    <div class="carousel-item">
        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
        <div class="carousel-item__details">
            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <p><?php echo $fields['anno']; ?></p>
        </div>
    </div>
    <?php }
        } ?>
        </div>
    </section>

</section>

<?php get_footer(); ?>
