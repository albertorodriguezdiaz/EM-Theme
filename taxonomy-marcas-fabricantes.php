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



<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Full'); ?>

<header class="entry-header">
  <div class="banner-page-general">
    <div class="banner-img-general"
      style="background: url(<?php print_r($thumb[0]); ?>), url(<?php echo get_template_directory_uri(); ?>/img/bgemproduct.jpg);">
      <div class="banner-texto-general">
        <div class="row">
          <?php single_cat_title('<h1 class="entry-title">', '</h1>') ?>
        </div>
      </div>
    </div>
  </div>
</header>



 <div id="primary" class="content-area productosEM">
 	<main id="main" class="site-main">

 		 <?php 
        $term = get_queried_object();
        $args=array(
            'post_type' => 'fabricantes',
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'marcas-fabricantes',
                    'field' => 'slug',
                    'terms' => $term->slug
                )
            )
        );?>



    <?php $consulta = new WP_Query($args);?>




<div class="paginaInterna listaItemsPart">
	

 	<div class="row titulosPart">

        <div class="column medium-1">
            <p class="numPart">#</p>
        </div>
        <div class="column medium-3">
            <p class="tituloPart">Número de Parte</p>
        </div>
        <div class="column medium-2">
            <p class="fabricantePart">Fabricante</p>
        </div>
        <div class="column medium-4">
            <p class="descripcionPart">Descripción</p>
        </div>
        <div class="column medium-2">
            <p class="stockIcon">Stock</p>
        </div>
    </div>
        <?php $count =0; ?>
 		<?php while($consulta->have_posts()): $consulta->the_post(); ?>
        <?php $count++; ?>
    
    
        <div class="row">
            <a href="<?php the_permalink(); ?>">
            <div class="column medium-1">
                <p class="numPart"><?php echo $count; ?></p>
            </div>
            <div class="column medium-3">
                <p class="tituloPart"><?php the_title(); ?></p>
            </div>
            <div class="column medium-2">
                <p class="fabricantePart"><?php echo $term->slug; ?></p>
            </div>
            <div class="column medium-4">
                <p class="descripcionPart"><?php the_field('informacion'); ?></p>
            </div>
            <div class="column medium-2">
                <p class="stockIcon"><i class="fas fa-check-circle"></i> En Stock</p>
            </div>
            </a>
        </div>
    
    	<?php endwhile; wp_reset_postdata(); ?>

 			
 	</div>

</div>


 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
