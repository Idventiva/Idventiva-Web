<?php /* Template Name: Servicios */ get_header(); ?>

<main class="body--black">
<container class="service">

        <section class="section__title">
            <h5>Nuestros</h5>
            <h2>Servicios</h2>
        </section>

<!-------------------------------------- Branding y Diseño Digital -->

    <section class="service__pilar">
        
        
        <section class="service__info">
            <div class="line--lightgolden"></div>
            <h5>Creativos y Creadores</h5>
            <h2>Branding y Diseño Digital</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
        </section>
        <!-- Ilustración -->
        
        <div class="service__list">
            <div class="service__item">
                <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-identidadvisual.svg" alt="Icono Identidad Visual"></i>
                <h4>Identidad Visual</h4>
                <ul class="service__item__list">
                    <li>Logotipos</li>
                    <li>Manuales de Identidad</li>
                </ul>
            </div>

            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-naming.svg" alt="Icono Naming"></i>
                <h4>Naming</h4>
            </div>

            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-registrodemarca.svg" alt="Icono Registro de Marca"></i>
                <h4>Registro de Marca</h4>
            </div>

            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-publicidad2.svg" alt="Icono Publicidad"></i>
                <h4>Publicidad</h4>
            </div>
        </div>
        <button class="slide--left"><a href="/contacto">¡Quiero esto para mi marca! </a></button>
        <h3>Nuestro trabajo:</h3>
        
    </section>

    <section class="carousel col1">
        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'order' => 'ASC',
            'orderby' => 'date',
            'categoria-proyectos' => 'branding'
        );
        
        $projects = new WP_Query($dat);


        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan"></a>
                <div class="carousel-item__details">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p>Categoria</p>
                </div>
            </div>
        <?php }
    } ?>
 
        </div>
    </section>
    </section>

<!-------------------------------------- Marketing Digital -->

    <section class="service__pilar">
        
        
        <section class="service__info">
            <div class="line--lightgolden"></div>
            <h5>Creativos y Creadores</h5>
            <h2>Marketing Digital</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
        </section>
        
        <div class="service__list">
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-iomarketing.svg" alt="Icono Inbound y Outbound Marketing"></i>
                <h4>Inbound y Outbound Marketing</h4>
              </ul>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-redessociales.svg" alt="Icono Redes Sociales"></i>
              <h4>Gestión de Redes Sociales</h4>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-seosem.svg" alt="Icono SEO y SEM"></i>
              <h4>Campañas de SEO y SEM</h4>
              <ul class="service__item__list">
                  <li>Google Analytics</li>
              </ul>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-campanas.svg" alt="Icono Social Media"></i>
              <h4>Campañas de Social Media</h4>
              <ul class="service__item__list">
                <li>Estrategias de Contenido</li>
                <li>Creación y Diseño de Contenido</li>
                <li>Community Management</li>
            </div>
        </div>

        </div>
        <button class="slide--left"><a href="/contacto">¡Quiero esto para mi marca! </a></button>
        <h3>Nuestro Trabajo:</h3>
        
    </section>

    <section class="carousel col1">
        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'order' => 'ASC',
            'orderby' => 'date',
            'categoria-proyectos' => 'marketing'
        );
        
        $projects = new WP_Query($dat);

        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan">
                <div class="carousel-item__details">
                    <h5><?php the_title(); ?></h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div> </a>
            </div>
    <?php }
    }?>
 
        </div>
    </section>

<!-------------------------------------- Producción Audiovisual -->

    <section class="service__pilar">
        
        
        <section class="service__info">
            <div class="line--lightgolden"></div>
            <h5>Planeamos y diseñamos el futuro</h5>
            <h2>Producción Audiovisual</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
        </section>
        
        <div class="service__list">
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-fotografia.svg" alt="Icono Identidad Visual"></i>
                <h4>Fotografía Digital</h4>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-video.svg" alt="Icono Video"></i>
              <h4>Producción de Video</h4>
              <ul class="service__item__list">
                  <li>Videos Corporativos</li>
                  <li>Promocionales</li>
              </ul>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-postproduccion.svg" alt="Icono Post-Producción"></i>
              <h4>Post-Producción</h4>
              <ul class="service__item__list">
                  <li>Edición de Video</li> 
                  <li>Motion Graphics</li> 
              </ul>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-animacion.svg" alt="Icono Animación Digital"></i>
              <h4>Animación Digital</h4>
            </div>
        </div>

        </div>
        <button class="slide--left"><a href="/contacto">¡Quiero esto para mi marca! </a></button>
        <h3>Nuestro trabajo:</h3>
        
    </section>

    <section class="carousel col1">
        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'order' => 'ASC',
            'orderby' => 'date',
            'categoria-proyectos' => 'audiovisual'
        );
        
        $projects = new WP_Query($dat);

        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan">
                <div class="carousel-item__details">
                    <h5><?php the_title(); ?></h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div> </a>
            </div>
    <?php }
    }?>
 
        </div>
    </section>

<!-------------------------------------- Diseño Web y Productos Digitales -->

    <section class="service__pilar">
        
        
        <section class="service__info">
            <h5>Planeamos y diseñamos el futuro</h5>
            <h2>Diseño Web y Productos Digitales</h2>
            <div class="line--lightgolden"></div>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
        </section>
        
        <div class="service__list">
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-webcorporativo.svg" alt="Icono Sitios Web"></i>
                <h4>Sitios Web Corporativos</h4>
              </ul>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-landingpages.svg" alt="Icono Landing Pages"></i>
              <h4>Landing Pages</h4>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-ecommerce.svg" alt="Icono Blog e E-commerce"></i>
              <h4>Blog e E-Commerce</h4>
            </div>
            
            <div class="service__item">
            <i><img src="<?php echo get_template_directory_uri();?>/img/icons/icon-apps.svg" alt="Icono Diseño de Aplicaciones"></i>
              <h4>Diseño de Aplicaciones</h4>
            </div>
        </div>

        </div>
        <button class="slide--left"><a href="/contacto">¡Quiero esto para mi marca! </a></button>
        <h3>Nuestro trabajo:</h3>
        
    </section>

    <section class="carousel col1">
        <div class="carousel__container">

        <?php 
        $dat = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'order' => 'ASC',
            'orderby' => 'date',
            'categoria-proyectos' => 'web'
        );
        
        $projects = new WP_Query($dat);

        if ($projects->have_posts()) { 
			while ($projects->have_posts()) { 
				$projects->the_post(); ?> 

            <div class="carousel-item">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan">
                <div class="carousel-item__details">
                    <h5><?php the_title(); ?></h5>
                    <ul>
                        <li>Identidad Visual</li>
                        <li>Marketing Digital</li>
                    </ul>
                </div> </a>
            </div>
    <?php }
    }?>
 
        </div>
    </section>
</container>
</main>


<?php get_footer(); ?>
