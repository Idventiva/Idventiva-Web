<?php 
/* Template Name: Proyecto Simple */ 
get_header();
$fields = get_fields(); ?>

<main class="single-project">
	<?php if(have_posts()){ 
			while (have_posts()){ 
				the_post();
			?> 
        <section class="single-project__title">
            <h5><?php echo $fields['tipo']; ?></h5>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </section>

        <section class="single-project__container">
            <div class="single-project__info">
                <h5>Descripción:</h5>
                <p><?php echo $fields['descripcion']; ?></p>
                <h5>Actividades:</h5>
                <p><?php echo $fields['categorias']; ?></p>
                <h5>Año:</h5>
                <p><?php echo $fields['anno']; ?></p>
                <h5>Resultados:</h5>
                <p><?php echo $fields['resultados']; ?></p>
                <button class="slide--left"><a href="/contacto">Quiero algo así</a></button>
            </div>
            <div class="single-project__img">
                <?php the_post_thumbnail('large'); ?>
            </div>
        </section>

        <section class="single-project__content">
            <?php the_content();?>
            <button class="slide--left"><a href="/contacto">Quiero algo así</a></button>
        </section>
    <?php 
    }
} ?>

</main>

<?php get_footer(); ?>
