<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-98603144-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-98603144-1');
    </script>

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>
 
	</head>
	<body <?php body_class(); ?>">


			<!-- header -->
			<header class="home-header header clear" role="banner">
        <!-- nav -->
        <nav class="nav prepare" role="navigation">
          <div class="blade-a blade"></div>
          <div class="blade-b blade"></div>
          <div class="blade-c blade">
            <div class="overblade"></div>
          </div>
          <div class="main-menu">
            <?php idv2018_nav(); ?>
            <div class="social-networks-nav">
              <a href="https://www.facebook.com/idventiva/" alt="Facebook"><i class="fab fa-facebook-square"></i></a>
              <a href="https://twitter.com/idventiva" alt="Twitter"><i class="fab fa-twitter-square"></i></a>
              <a href="https://mx.linkedin.com/company/idventiva" alt="LinkedIn"><i class="fab fa-linkedin"></i></a>
              <a href="https://www.instagram.com/idventiva/" alt="Idventiva"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="menu-localization">
              <div class="lower">
                <div class="menu-logo"></div>
                <div class="menu-address">
                  <address>
                  Autopista Mex-Qro. Km 37.5 Condominio Industrial Cuamatla Bodega 34 Planta Alta
                  Cuautitlán Izcalli
                  Estado de México 
                  C.P. 54730
                  </address>
                </div>
                <div class="menu-phone">
                  <div class="menu-phone-item">
                    <span>Teléfono</span>
                    <phone>+52 (55) 7261 7880</phone>
                  </div>
                  <div class="menu-email-item">
                    <span>Correo</span>
                    <email>contacto@idventiva.com</email>
                  </div>
                  <div class="menu-policy" style="padding-top: 15px;">
                    <a href="https://www.idventiva.com/legal/politica-de-privacidad/" alt="Política de privacidad" style="color:#bea373;">Políticas de Privacidad</a>
                  </div>
                </div>
              </div>
          </div>
        </nav>


        <div class="top-bar">    
          <!-- logo -->
          <div class="logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.png" alt="Logo" class="logo-img">
            </a>
          </div>
          <!-- /logo -->
          
          <!-- Nav Button -->
          <div id="nav-button-container">
            <div id="nav-button">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <!-- Nav Button -->
        </div>

			</header>
			<!-- /header -->
