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


<?php 
 $taxonomy = get_query_var('taxonomy');
 $termId = get_queried_object()->term_id;
 the_field('Your_field_name');
?>


<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Full'); ?>

<header class="entry-header">
  <div class="banner-page-general">
    <div class="banner-img-general"
      style="background: url(<?php print_r($thumb[0]); ?>), url(<?php echo get_template_directory_uri(); ?>/img/bgmotores.jpg);">
      <div class="banner-texto-general">
        <div class="row">
          <?php single_cat_title('<h1 class="entry-title">', '</h1>') ?>
         
          <?php if ( get_field('sub_titulo', $taxonomy . '_' . $termId) ): ?>
            <p><?php the_field('sub_titulo', $taxonomy . '_' . $termId); ?></p>
          <?php endif ?>

        </div>
      </div>
    </div>
  </div>
</header>


<?php if (get_field('imagen', $taxonomy . '_' . $termId)): ?>
    
<div class="bgTwo bgMotoresCat" style="background:url(<?php the_field('imagen', $taxonomy . '_' . $termId); ?>);">
</div>

<?php endif ?>


<?php if (get_field('texto_extra', $taxonomy . '_' . $termId)): ?>
    
<div class="row textoTitle3">
    <p>
       <?php the_field('texto_extra', $taxonomy . '_' . $termId); ?>
    </p>
</div>

<?php endif ?>


 <div id="primary" class="content-area productosEM">
 	<main id="main" class="site-main">

 		 <?php 
        $term = get_queried_object();
        $args=array(
            'post_type' => 'productos',
            'orderby' => 'title',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'producto-categoria',
                    'field' => 'slug',
                    'terms' => $term->slug
                )
            )
        );?>



    <?php $consulta = new WP_Query($args);?>




<div class="paginaInterna">
	

 	<div class="row">

 		<?php while($consulta->have_posts()): $consulta->the_post(); ?>

        <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Medium'); ?>

        <div class="column medium-4 boxPI">
        	<a href="<?php echo get_permalink(); ?>">
	        	<div class="boxProductositems">
	        		<h2><i class="fas fa-chevron-circle-right"></i> <?php the_title(); ?></h2>
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
