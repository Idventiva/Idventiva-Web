<?php /* Template Name: Home */ get_header(); ?>

<div id="home" class="section">

  <div class="home-background"> 
    <div class="background-image"></div>
    <?php get_template_part('animation') ?>
  </div>

  <div class="logo-container glitch">  
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
  </div>

  <div class="logix">
    <h2 class="glitchx" data-text="Somos su próxima agencia digital">Somos su próxima agencia digital</h2>
    <p>Creamos experiencias visuales únicas.</p>
    <button class="slide--left"><a href="#">Empezar</a></div>
  </div>

</div>
<div id="features" class="section">
  <section class="wrapper">
    <h2>Soluciones estratégicas ágiles para su negocio.</h2>
  </section>
  <section class="wrapper">
    <div class="mid--wrapper">
      <h3>
        Aquí va un texto llamativo de título
      </h3>
      <p>
        Aquí va un texto apantallante acerca de lo complicados que son los proyectos de nuestros clientes y cómo nosotros echamos mano de nuestras estratégias y personal profesional para cumplir con sus objetivos.
      </p>
    </div>
  </section>
</div>

  <container class="portfolio">
    
    <section class="main__section__title">
            <h2>Branding y Diseño Digital</h2>
    </section>
<!--------------------------------------------- Branding y Diseño Digital -->

    <section class="carousel col2">


        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
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
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p><?php echo $fields['anno']; ?></p>
                </div>
            </div>
        <?php }
    } ?>
 
        </div>
        <button class="slide--left"><a href="/servicios">Ver Portafolio </a></button>
    </section>

</container>

<?php get_footer(); ?>
  