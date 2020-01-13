<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EV
 */

 get_header(); ?>

 <?php get_template_part('template-parts/header-interno'); ?>


 <div id="primary" class="content-area productosEM">
 	<main id="main" class="site-main">



 		<?php
 		while ( have_posts() ) : the_post();
 			get_template_part( 'template-parts/content', 'page' );
 		endwhile; // End of the loop.
 		?>


 	<div class="row">
 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/metrologia-sensores/">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/metrologia.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Metrología Sensores</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>
 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/componentes-electronicos/">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/componenteselectricos.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Componentes Electronicos</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>
 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/tecnologia-de-accionamiento-y-transmision/">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/accionamiento.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Tecnología Accionamiento y Transmisión</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>
 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/tecnologia-de-medicion/">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bg-medicion.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Tecnología de Medición</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>

 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/hidraulica/">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/hidraulica.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Hidráulica</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>
 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/neumatica">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/neumatica.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Neumática</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>
 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/automatizacion-de-edificios/">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/edificios.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Automatización de edificios</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>
 		<div class="column medium-6">
 			<a href="<?php echo site_url(); ?>/producto-categoria/tubos">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/tubos.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Tubos</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>
 		<div class="column medium-12">
 			<a href="<?php echo site_url(); ?>/quimicos">
	 			<div class="boxCatProductos" style="background: url(<?php echo get_template_directory_uri(); ?>/img/quimicos.jpg);">
	 				<div class="titleBoxCat">
	 					<h2>Productos Químicos</h2>
	 				</div>
	 			</div>
 			</a>
 		</div>

 	</div>



 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
