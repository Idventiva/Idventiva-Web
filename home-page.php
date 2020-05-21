<?php /* Template Name: Home */ get_header(); ?>
<div class="body-container">

<div id="home" class="section">

  <div class="home-background"> 
    <div class="background-image bg--parallax"></div>
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

<section class="home-cta">
  <div class="wrapper">    
    <section class="home-cta__grid">
      <h2 class="">Ponte en contacto con nuestros ejecutivos</h2>
      <button class="slide--left"><a href="">Contactanos</a></button>
    </section>
  </div>
</section>

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
<!--------------------------------------------- Portfolio -->

  <section class="home-portfolio">

    <div class="wrapper home-portfolio__wrapper">
        <section class="main__section__title home-portfolio__title">
          <h2>Proyectos Destacado</h2>
        </section>
    <section class="home-portfolio__carousel">
      
    <!-- home-portfolio__container -->
    <div class="home-portfolio__container">
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
              <div class="home-portfolio__item">
                  <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" ></a>
                  <div class="home-portfolio__details">
                      <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                      <p><?php echo $fields['anno']; ?></p>
                  </div>
              </div>
            <?php }
        } ?>
        </div> 
        <!-- home-portfolio__container -->
      </section>
      <button class="slide--left"><a href="/servicios">Ver Portafolio </a></button>
    </div>

  </section> <!-- area -->

<?php get_footer(); ?>
  
</div>