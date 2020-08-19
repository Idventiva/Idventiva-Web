<?php /* Template Name: Home */ get_header(); ?>
<div class="body-container">

<div id="home" class="section">

  <div class="home-background"> 
    <div class="background-image bg--parallax"></div>
    <?php get_template_part('animation') ?>
  </div>

  <div class="logo-container glitch">  
<<<<<<< HEAD
=======
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img"></div>
>>>>>>> 7652d86b3c64e8d362a5b0b29dd61d73cf998ca3
    <div class="glitch__item logo__img"></div>
    <div class="glitch__item logo__img logo__img--outline"></div>
    <div class="glitch__item logo__img logo__img--outline"></div>
    <div class="glitch__item logo__img logo__img--outline"></div>
  </div>

  <div class="logix">
<<<<<<< HEAD
    <h2 class="glitchx" data-text="Experimenta nuestra potencia creativa">Experimenta nuestra potencia creativa</h2>
    <p>Creamos experiencias digitales de valor</p>
    <button class="slide--left"><a href="#features">Empezar</a></div>
  </div>

</div>
=======
    <h2 class="glitchx" data-text="Somos su próxima agencia digital">Somos su próxima agencia digital</h2>
    <p>Creamos experiencias visuales únicas.</p>
    <button class="slide--left"><a href="#">Empezar</a></div>
  </div>
>>>>>>> 7652d86b3c64e8d362a5b0b29dd61d73cf998ca3

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


<<<<<<< HEAD
<!--------------------------------------------- Portfolio -->

  <section id="home-portfolio" class="home-portfolio">

    <div class="home-portfolio__wrapper">
        <section class="main__section__title home-portfolio__title">
          <h2>Historias Inspiradoras</h2>
          <h3>
          Diseñamos productos enfocados en dar valor a tu marca
        </h3>
=======

<div id="features" class="features section bg--parallax-smooth">
  <section class="wrapper">
    <div class="features__intro">
      <div class="features__intro-text">
        <h2 class="">Estamos aquí para mejorar sus resultados</h2>
        <h3>
          Aquí va un texto llamativo de título
        </h3>
        <p>
          Aquí va un texto apantallante acerca de lo complicados que son los proyectos de nuestros clientes y cómo nosotros echamos mano de nuestras estratégias y personal profesional para cumplir con sus objetivos.
        </p>
      </div>
      <img class="globe" src="<?php echo get_stylesheet_directory_uri(); ?>/img/globe.png" alt="">
    </div>
  </section>
</div>

<section class="home-cta">
  <div class="wrapper">    
    <section class="home-cta__grid">
      <h2 class="">Ponte en contacto con nuestros ejecutivos</h2>
      <button class="slide--left"><a href="">Contactanos</a></button>
    </section>
  </div>
</section>
<!--------------------------------------------- Portfolio -->

  <section class="home-portfolio">

    <div class="wrapper home-portfolio__wrapper">
        <section class="main__section__title home-portfolio__title">
          <h2>Proyectos Destacados</h2>
>>>>>>> 7652d86b3c64e8d362a5b0b29dd61d73cf998ca3
        </section>
    <section class="home-portfolio__carousel">
      
    <!-- home-portfolio__container -->
    <div class="home-portfolio__container">
        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'order' => 'ASC',
<<<<<<< HEAD
            'orderby' => '',
=======
            'orderby' => 'date',
>>>>>>> 7652d86b3c64e8d362a5b0b29dd61d73cf998ca3
            'categoria-proyectos' => 'destacados',
        );
        $projects = new WP_Query($dat);
        if ($projects->have_posts()) { 
          while ($projects->have_posts()) { 
            $projects->the_post(); ?> 
              <div class="home-portfolio__item">
<<<<<<< HEAD
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

=======
                  <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
                  <div class="home-portfolio__details">
                      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                      <p><?php echo $fields['anno']; ?></p>
                  </div>
>>>>>>> 7652d86b3c64e8d362a5b0b29dd61d73cf998ca3
              </div>
            <?php }
        } ?>
        </div> 
        <!-- home-portfolio__container -->
      </section>
      <button class="slide--left"><a href="<?php echo get_site_url() ?>/portafolio">Ver Portafolio </a></button>
    </div>

  </section> <!-- area -->

<<<<<<< HEAD
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

=======
>>>>>>> 7652d86b3c64e8d362a5b0b29dd61d73cf998ca3
<?php get_footer(); ?>
  
</div>