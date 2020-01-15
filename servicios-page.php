<?php /* Template Name: Servicios */ get_header(); ?>
	<main role="main">
		<!-- section -->
		<section class="main-area">
      <div id="services" class="section">
        <div data-tilt class="parallaxLayer">
          <div class="servicesBackground"></div>
          <div class="dotGrid"></div>
        </div>
        <div class="serviceContainer">
          <div id="serviceCard01" class="serviceCard">
            <div class="card">
              <!-- Card Content -->
              <div class="cardGraphic"></div>
              <div class="cardAnimation"></div>
              <div class="cardInfo">
                <h4>Branding</h4>
                <ul>
                  <li>Naming y Registro de Marca</li>
                  <li>Identidad Corporativa</li>
                  <li>Diseño de Empaque y Producto</li>
                </ul>
              </div>
              <!-- Card Content -->
            </div>
          </div>
          <div id="serviceCard02" class="serviceCard">
            <div class="card">
              <!-- Card Content -->
              <div class="cardGraphic"></div>
              <div class="cardAnimation"></div>
              <div class="cardInfo">
                <h4>Estrategia Digital</h4>
                <ul>
                  <li>Campañas de Marketing Digital</li>
                  <li>Analitica Digital y SEO</li>
                  <li>Publicidad</li>
                  <li>Community Management</li>
                </ul>
              </div>
              <!-- Card Content -->
            </div>
          </div>
          <div id="serviceCard03" class="serviceCard">
            <div class="card">
              <!-- Card Content -->
              <div class="cardGraphic"></div>
              <div class="cardAnimation"></div>
              <div class="cardInfo">
                <h4>Producción Audiovisual</h4>
                <ul>
                  <li>Videograbación y Edición</li>
                  <li>Motion Graphics</li>
                  <li>Fotografia Digital</li>
                </ul>
              </div>
              <!-- Card Content -->
            </div>
          </div>
          <div id="serviceCard04" class="serviceCard">
            <div class="card">
              <!-- Card Content -->
              <div class="cardGraphic"></div>
              <div class="cardAnimation"></div>
              <div class="cardInfo">
                <h4>Diseño Web y Productos Digitales</h4>
                <ul>
                  <li>Sitios corporativos y de producto</li>
                  <li>Experiencias Digitales</li>
                  <li>E-Commerce y herramientas en linea</li>
                  <li>Diseño de aplicaciones web móviles</li>
                </ul>
              </div>
              <!-- Card Content -->
            </div>
          </div>
        </div>
        <h1 class="section-title"><?php the_title(); ?></h1>
        <h2 class="">Lo que hacemos</h2>


      </div>
		</section>
		<!-- /section -->
	</main>



  <script>

  jQuery(document).ready(function(){

    jQuery('.card').hover(function(){
      jQuery(this).toggleClass('active')
    });

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
