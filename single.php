<?php get_header(); ?>

<main class="single-project">
	<?php if(have_posts()){ 
			while (have_posts()){ 
				the_post();
			?> 
				<section class="single-project__title">
					<h5>Sitio Web</h5>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</section>

				<section class="single-project__intro">
					<div class="single-project__info">
						<h5>Descripción:</h5>
						<p>Excepteur velit culpa culpa incididunt ad esse pariatur dolor eu irure do Lorem reprehenderit. Reprehenderit id ex occaecat excepteur culpa do velit reprehenderit et in eu incididunt veniam adipisicing. Tempor id qui dolore tempor eu id veniam.</p>
						<h5>Categorías:</h5>
						<ul>
							<li>Identidad Visual</li>
							<li>Naming</li>
							<li>Registro de Marca</li>
							<li>Publicidad</li>
						</ul>
						<button class="slide--left"><a href="#">Mi marca</a></button>
					</div>
					<div class="single-project__img">
						<?php the_post_thumbnail('large'); ?>
					</div>
				</section>

				<section class="single-project__content">
					<?php the_content(); ?>
					<?php the_tags( __( 'Tags: ', 'idv2018' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				</section>
			<?php 
			}
		} ?>

	<!-- Layout Manual de Entrada de Caso de Estudio -->

    <!-- <section class="single-project__content">
        <div class="single-project__content__img--half">
            <img src="img/slides/slide01.jpg" alt="">
            <div class="single-project__content__info--left">
                <h5>Año:</h5>
                <p>2019</p>
                <h5>Logros:</h5>
                <ul>
                    <li>Logro 01</li>
                    <li>Logro 01</li>
                    <li>Logro 01</li>
                </ul>
            </div>
        </div>
        <div class="single-project__content__img--complete">
            <img src="img/slides/slide01.jpg" alt="">
        </div>
        <div class="single-project__content__img--half">
            <div class="single-project__content__info">
                <h2>Frase que destaque el proyecto o testimonio proporcionado por el cliente.</h2>
            </div>
            <img src="img/slides/slide02.jpg" alt="">
        </div>
        <div class="single-project__content__img--half">
            <img src="img/slides/slide03.jpg" alt="">
            <img src="img/slides/slide03.jpg" alt="">
        </div>
        <div class="single-project__content__img--complete">
            <img src="img/slides/slide01.jpg" alt="">
        </div>
        <div class="center">
            <button class="slide--left"><a href="#">Mi marca</a></button>
        </div>
    </section> -->
</main>

<?php get_footer(); ?>
