<?php /* Template Name: Home */ get_header(); ?>
<div class="body-container">

<div id="home" class="section">

  <div class="home-background"> 
    <div class="background-image bg--parallax"></div>
    <?php get_template_part('animation') ?>
  </div>

  <div class="logo-container glitch">  
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img logo__img--outline"></div>
    <div class="glitch__item logo__img logo__img--outline"></div>
    <div class="glitch__item logo__img logo__img--outline"></div>
  </div>

  <div class="logix">
    <h2 class="glitchx" data-text="Experimenta nuestra potencia creativa">Experimenta nuestra potencia creativa</h2>
    <p>Creamos experiencias digitales de valor</p>
    <button class="slide--left"><a href="#features">Empezar</a></div>
  </div>

</div>

<div id="features" class="features section">
  

  <section class="wrapper">
    <div class="features__intro">
      <div class="features__intro-text">
        <h2 class="">
          Creatividad para un mundo digital
        </h2>
        <p>
          Nos reinventamos constantemente en un negocio que cambio la forma en que las personas interactúan con los productos y servicios para siempre.
        </p>
        <button class="slide--left"><a href="#home-portfolio">Historias Inspiradoras </a></button>
      <button class="slide--left"><a href="<?php echo get_site_url() ?>/contacto">Contactanos</a></button>
      </div>
      <img class="globe bg--parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/globe.png" alt="">
    </div>
  </section>
</div>


<!--------------------------------------------- Portfolio -->

  <section id="home-portfolio" class="home-portfolio">

    <div class="home-portfolio__wrapper">
        <section class="main__section__title home-portfolio__title">
          <h2>Historias Inspiradoras</h2>
          <h3>
          Diseñamos productos enfocados en dar valor a tu marca
        </h3>
        </section>
    <section class="home-portfolio__carousel">
      
    <!-- home-portfolio__container -->
    <div class="home-portfolio__container">
        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'order' => 'ASC',
            'orderby' => '',
            'categoria-proyectos' => 'destacados',
        );
        $projects = new WP_Query($dat);
        if ($projects->have_posts()) { 
          while ($projects->have_posts()) { 
            $projects->the_post(); ?> 
              <div class="home-portfolio__item">
                  <a href="<?php the_permalink(); ?>">
                  
                  <?php 
                    $image = get_field('caso_de_exito');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
                    </a>
              </div>
              <div class="home-portfolio__item home-portfolio__details">
                  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                  <?php $descriptionField = get_field( "descripcion" );?>
                    <?php 
                    if( $descriptionField ) {
                      $s = substr($descriptionField, 0, 261);
                      $result = substr($s, 0, strrpos($s, ' '));
                      echo $result;
                  } ?>...
                  <div class="clear"></div>
                    <button class="slide--left"><a href="<?php the_permalink(); ?>">Ver proyecto</a></button>

              </div>
            <?php }
        } ?>
        </div> 
        <!-- home-portfolio__container -->
      </section>
      <button class="slide--left"><a href="<?php echo get_site_url() ?>/portafolio">Ver Portafolio </a></button>
    </div>

  </section> <!-- area -->

  <section class="home-cta">
  <img class="divider" src="<?php echo get_stylesheet_directory_uri(); ?>/img/light1.png" alt="">
  <div class="wrapper">    
    <section class="home-cta__grid">
      <div>
        <h2 class="">Contáctanos y déjanos conocer tus proyectos</h2>
        <h3>Estamos seguros que podemos ayudarte a impulsarlos. </h3>
      </div>
      <button class="slide--left"><a href="<?php echo get_site_url() ?>/contacto">Agendar una cita</a></button>
    </section>
  </div>
</section>

  <section class="home-testimoniales">
    <div class="wrapper"></div>
  </section>

<?php get_footer(); ?>
  
</div>