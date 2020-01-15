<?php /* Template Name: Servicios */ get_header(); ?>
	<main role="main">
		<!-- section -->
		<section class="main-area">
      <div id="about-us" class="section">
        <div data-tilt class="parallaxLayer">
          <div class="aboutBackground"></div>
          <div class="dotGrid"></div>
        </div>
        <div class="aboutContainer">
          <div class="about-left">

          </div>
          <div class="about-right">
            <h1 class="section-title"><?php the_title(); ?></h1>
            <h2 class="">Quiénes somos</h2>
            <p>Somos una consultoría creativa especializada en branding y marketing digital.</p>
            <p>Trabajamos hombro a hombro con su empresa en el desarrollo de estrategias para la integración y explotación del ecosistema digital, generando experiencias trascendentales que le permitan conectar con su audiencia.</p>
            <a class="view-portfolio" href="../portafolio">Conozca nuestro trabajo</a>
          </div>
        </div>




      </div>
		</section>
		<!-- /section -->
	</main>



  <script>

  jQuery(document).ready(function(){


    jQuery('.parallaxLayer').tilt({
          maxTilt: 20,
          perspective: 4000,
          reset: false,
          glare: false,
          maxGlare: 1,
          transition: true,
          easing: "cubic-bezier(.03,.98,.52,.99)",
          speed:  1000
    });
  });

  </script>


<?php get_footer(); ?>
