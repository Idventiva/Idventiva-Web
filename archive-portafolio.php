<?php /* Template Name: Proyectos */ 
get_header(); 
$fields = get_fields(); ?>


<main class="body--black">
<container class="portfolio col1">

    <section class="section-menu">
        <section class="section__title">
            <h5>Nuestro</h5>
            <h2>Trabajo</h2>
        </section>
        <nav class="">
            
        </nav>
    </section>

<!--------------------------------------------- Branding y Diseño Digital -->

    <section class="carousel">

        <section class="carousel__title">
                <h2>Branding y Diseño Digital</h2>
        </section>

        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 4,
            'order' => 'ASC',
            'orderby' => 'date',
            'categoria-proyectos' => 'branding',
        );
        
        $projects = new WP_Query($dat);


        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
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
        <button class="slide--left"><a href="/servicios">Ver Servicio </a></button>
    </section>


<!--------------------------------------------- Marketing Digital -->

<section class="carousel col2">

        <section class="carousel__title">
                    <div class="line--lightgolden"></div>
                    <h2>Marketing Digital</h2>
        </section>

        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 4,
            'categoria-proyectos' => 'marketing'
        );
        
        $projects = new WP_Query($dat);


        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
                <div class="carousel-item__details">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
        <?php }
    } ?>
 
        </div>
        <button class="slide--left"><a href="/servicios">Ver Servicio </a></button>
    </section>



<!--------------------------------------------- Producción Audiovisual -->

<section class="carousel col2">

        <section class="carousel__title">
                    <div class="line--lightgolden"></div>
                    <h2>Producción Audiovisual</h2>
        </section>

        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 4,
            'categoria-proyectos' => 'audiovisual'
        );
        
        $projects = new WP_Query($dat);


        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
                <div class="carousel-item__details">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
        <?php }
    } ?>
 
        </div>
        <button class="slide--left"><a href="/servicios">Ver Servicio </a></button>
    </section>




<!-------------------------------------- Diseño Web y Productos Digitales -->
    
<section class="carousel col2">

        <section class="carousel__title">
                    <div class="line--lightgolden"></div>
                    <h2>Diseño Web y Productos Digitales</h2>
        </section>

        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 4,
            'categoria-proyectos' => 'web'
        );
        
        $projects = new WP_Query($dat);


        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
                <div class="carousel-item__details">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
        <?php }
    } ?>
 
        </div>
        <button class="slide--left"><a href="/servicios">Ver Servicio </a></button>
    </section>


</container>
</main>

<?php get_footer(); ?>