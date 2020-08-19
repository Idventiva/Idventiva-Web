<?php /* Template Name: Servicios */ get_header(); ?>

<main class="body">
<section class="services col1">
    <section class="sidebar">
        <section class="section__title">
            <h5>Nuestros</h5>
            <h2>Servicios</h2>
        </section>
    </section>

    <section class="services__container">
        
        <section class="service">  <!-- Branding y Diseño Digital -->      
            <section class="service__info">
                <h2>Branding y Diseño Digital</h2>
                <h5>Que tu marca trascienda</h5>
                <p>El Diseño de y para una marca implica el entendimiento profundo de sus valores, su visión y sobre todo los resultados que espera obtener en un mercado cada día más competido. El Diseño que ofrecemos es versátil y de alto impacto para sus mensajes y marcas. </p>
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

            <section class="service-carousel">
                <h3>Nuestro trabajo:</h3>
                <div class="service-carousel__container">
        
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
            
                        <div class="service-carousel-item">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan"></a>
                            <div class="service-carousel-item__details">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <p>Categoria</p>
                            </div>
                        </div>
                    <?php }
                } ?>
        
                </div>
            </section>
        </section> <!-- Branding y Diseño Digital -->


        <section class="service"> <!-- Marketing Digital -->
            
            <section class="service__info">
                <h2>Marketing Digital</h2>
                <h5>Que te conozca la gente correcta</h5>
                <p>Dar clic al botón promocionar en redes sociales puede ser muy tentador, pero también puede abrir un pozo sin fondo para tu inversión si no tienes la estrategia correcta. El potencial de la analítica que permiten las redes sociales solo puede ser explotado al máximo cuando entiendes qué y a quiénes quieres que tus productos y servicios lleguen, en eso somos especialistas.</p>
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
                </ul>
               </div>

            </div>
            <button class="slide--left"><a href="/contacto">¡Quiero esto para mi marca! </a></button>
            
        <section class="service-carousel">
            <h3>Nuestro Trabajo:</h3>
            <div class="service-carousel__container">

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

                    <div class="service-carousel-item">
                        <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan">
                        <div class="service-carousel-item__details">
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
        </section> <!-- Marketing Digital -->
        </section>

        <section class="service"> <!-- Producción Audiovisual -->
            
            <section class="service__info">
                <h2>Producción Audiovisual</h2>
                <h5>Impulsa tu negocio sin precedentes</h5>
                <p>Tocar las emociones correctas en la emotividad de las personas puede ser la diferencia entre motivar una acción valiosa o solamente ver un contenido más y dejarlo pasar. En Idventiva tenemos claro que los grandes contenidos no son obra de la casualidad, se diseñan minuciosamente y se ejecutan con una producción y postproducción impecables. </p>
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

            <button class="slide--left"><a href="/contacto">¡Quiero esto para mi marca! </a></button>
            
            <section class="carousel">
                <h3>Nuestro trabajo:</h3>
                <div class="service-carousel__container">
        
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
            
                        <div class="service-carousel-item">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan">
                            <div class="service-carousel-item__details">
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
        </section>


        <section class="service"> <!--  Diseño Web y Productos Digitales -->
            
            <section class="service__info">
                <h2>Diseño Web y Productos Digitales</h2>
                <h5>Diseñamos el futuro de tu negocio</h5>
                <div class="line--lightgolden"></div>
                <p>En Idventiva nos tomamos en serio las necesidades de tu negocio y tus expectativas de diseño e interacción para tu página web. Los estándares, cualquiera en la industria los puede alcanzar; pero superar tus expectativas de desempeño en interacciones de valor, usabilidad de tu página y un diseño sofisticado, solo un verdadero equipo de profesionales, apasionados y comprometidos, puede lograrlo, eso somos en Idventiva. </p>
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
            
            <section class="service-carousel">
                <h3>Nuestro trabajo:</h3>
                <div class="service-carousel__container">
        
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
            
                        <div class="service-carousel-item">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>" alt="Japan">
                            <div class="service-carousel-item__details">
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
        </section> <!--  Diseño Web y Productos Digitales -->

    </section> <!--  .service-container -->
    <section></section>
</main>


<?php get_footer(); ?>
