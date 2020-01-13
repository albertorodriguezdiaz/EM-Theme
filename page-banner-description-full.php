<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * Template Name: Banner Description Full
 * @package EV
 */

 get_header(); ?>


 <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Full'); ?>


 <header class="entry-header">

   <div class="header-interno header-internoFull">
     <div class="menuBarTop">
       <div class="row">
         <div class="column large-3 medium-5 logoFonem">
           <img src="<?php echo get_template_directory_uri(); ?>/img/logo-blanco.png" alt="">
         </div>
         <div class="column large-8 medium-7 large-offset-1">
           <div class="row collapse">
             <div class="column large-9 medium-12 small-12 menu900">
               <?php get_template_part('template-parts/header-menu'); ?>
             </div>
             <div class="column large-3 medium-12 small-12">
               <a href="<?php echo site_url(); ?>/simulador/">
                 <div class="botonR20 botonSimulador">Simulador</div>
               </a>
             </div>
           </div>
         </div>
       </div>
     </div>

   </div>



   <div class="banner-page-general">
     <div class="banner-img-general banner-img-description banner-img-descriptionFull"
       style="background: url(<?php print_r($thumb[0]); ?>);">
       <div class="banner-texto-general">
         <div class="row">
         <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
 				<h2><?php the_field('text_description'); ?></h2>
 				</div>
       </div>
     </div>
   </div>
 </header>


 <div id="primary" class="content-area">
 	<main id="main" class="site-main">

 		<?php
 		while ( have_posts() ) : the_post();
 			get_template_part( 'template-parts/content', 'pagedescriptionfull' );
 		endwhile; // End of the loop.
 		?>

 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
