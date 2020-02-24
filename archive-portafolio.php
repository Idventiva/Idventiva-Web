<?php /* Template Name: Proyectos */ get_header(); ?>


<main class="body--black">
<container class="portfolio">

    <section class="section__title">
        <h5>Nuestro</h5>
        <h2>Trabajo</h2>
    </section>

<!--------------------------------------------- Branding y Diseño Digital -->

    <section class="carousel">
        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'post_per_page' => 2,
        );
        
        $projects = new WP_Query($dat);

        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan"></a>
                <div class="carousel-item__details">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
    <?php }
    }?>
 
        </div>
    </section>

    <section class="carousel__title">
            <div class="line--lightgolden"></div>
            <h2>Branding y Diseño Digital</h2>
            <button class="slide--left">
                <a href="#">Probando longitud de botones </a>
            </button>
    </section>

<!--------------------------------------------- Marketing Digital -->

    <section class="carousel">
        <div class="carousel__container">
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
 
        </div>
    </section>

    <section class="carousel__title">
            <div class="line--lightgolden"></div>
            <h2>Marketing Digital</h2>
            <button class="slide--left">
                <a href="/portafolio/healthypau">¡A crear!</a>
            </button>
    </section>

<!--------------------------------------------- Producción Audiovisual -->

    <section class="carousel">
        <div class="carousel__container">
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
 
        </div>
    </section>

    <section class="carousel__title">
            <div class="line--lightgolden"></div>
            <h2>Producción Audiovisual</h2>
            <button class="slide--left">
                <a href="/portafolio/healthypau">¡A crear!</a>
            </button>
    </section>


<!-------------------------------------- Diseño Web y Productos Digitales -->
    
    <section class="carousel">
        <div class="carousel__container">
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/3380967/pexels-photo-3380967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Japan">
                <div class="carousel-item__details">
                    <h5>Healthy Pau</h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div>
            </div>
 
        </div>
    </section>

    <section class="carousel__title">
            <div class="line--lightgolden"></div>
            <h2>Diseño Web y Productos Digitales</h2>
            <button class="slide--left">
                <a href="/portafolio/healthypau">¡A crear!</a>
            </button>
    </section>
</container>
</main>

<?php get_footer(); ?>