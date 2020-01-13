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

 		<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Medium'); ?>

 		<div class="row detallesProducto paginaInterna">
 			<div class="column large-4 medium-12">
 				<div class="imagenProductos" style="background: url(<?php print_r($thumb[0]); ?>), url(<?php echo get_template_directory_uri(); ?>/img/imglogo.jpg);"></div>
 			</div>
 			<div class="column large-8 medium-12">
 				<p class="consultarTitulo">Consultar ahora</p>

 				<div class="formularioProductos">
 					<?php echo do_shortcode('[contact-form-7 id="10628" title="Contacto Químicos"]'); ?>


 					<script type="text/javascript">
 						var url = jQuery(location).attr('href');

							jQuery(document).ready(function(){
								jQuery('.wpcf7-form-control-wrap.id input').val(<?php echo get_the_title(); ?>);
                				jQuery('.wpcf7-form-control-wrap.url input').val(url);
							})
					</script>

 				</div>
 			</div>
 		</div>

 		<div class="row masinfoFooter">
 			<div class="column medium-3">
 				<div class="boxItemsProductos">
 					<div class="iconoProducto"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-garantia.png"></div>
 					<div class="textoProducto">12 meses de garantía</div>
 				</div>
 			</div>
 			 <div class="column medium-3">
 				<div class="boxItemsProductos">
 					<div class="iconoProducto"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-disponibilidad.png"></div>
 					<div class="textoProducto">Disponible para envío inmediato</div>
 				</div>
 			</div>
 			<div class="column medium-3">
 				<div class="boxItemsProductos">
 					<div class="iconoProducto"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-entrega.png"></div>
 					<div class="textoProducto">Entrega en todo el mundo</div>
 				</div>
 			</div>
 			 <div class="column medium-3">
 				<div class="boxItemsProductos">
 					<div class="iconoProducto"><img src="<?php echo get_template_directory_uri(); ?>/img/ico-rf.png"></div>
 					<div class="textoProducto">Refurbished parts available</div>
 				</div>
 			</div>
 			
 		</div>





 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
