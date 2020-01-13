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


<?php 
 $taxonomy = get_query_var('taxonomy');
 $termId = get_queried_object()->term_id;
 the_field('Your_field_name');
?>

<header class="entry-header">
  <div class="banner-page-general">
    <div class="banner-img-general"
      style="background: url(<?php print_r($thumb[0]); ?>), url(<?php echo get_template_directory_uri(); ?>/img/bgmotores.jpg);">
      <div class="banner-texto-general">
        <div class="row">
          <?php single_cat_title('<h1 class="entry-title">', '</h1>') ?>
            <p><?php the_field('sub_titulo', $taxonomy . '_' . $termId); ?></p>
        </div>
      </div>
    </div>
  </div>
</header>


<?php if (get_field('imagen', $taxonomy . '_' . $termId) != "" ): ?>
    
<div class="bgTwo bgMotoresCat" style="background:url(<?php the_field('imagen', $taxonomy . '_' . $termId); ?>);">
    
</div>

<?php endif ?>

<div class="row textoTitle3">
    <p>
       <?php the_field('texto_extra', $taxonomy . '_' . $termId); ?>
    </p>
</div>

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
        <div class="column medium-4">
            <ul class="listaLeft">
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores eléctricos IEC</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de eficiencia IE4 Super Premium</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de eficiencia IE3 Premium</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de alta eficiencia IE2</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de freno</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de servicio inversor</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores eléctricos monofásicos</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motor con marco de aluminio</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>LV motor de gran potencia</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de cambio de polos</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores IEC para áreas peligrosas</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motor de minería antideflagrante ExdII</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motor de planta antideflagrante ExdI</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>A prueba de explosión de polvo</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>NEMA Motors</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de media / alta tensión</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de inducción de jaula de ardilla</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Inducción del rotor de la herida</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de aplicaciones especiales</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Bombas Motores</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Mesa de rodillos Motores</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de máquinas herramienta</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Ventiladores Motores</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de grúa</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de aire acondicionado</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motor metalúrgico</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de mina</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Arrastre los motores del transportador</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de molinos de carbón</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motor triturador</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de vehículos</li></a>
                <a href="#"><li><i class="fas fa-angle-right"></i>Motores de corriente continua</li></a>
            </ul>
        </div>   
        <div class="column medium-8">
                <div class="row">

                    <?php while($consulta->have_posts()): $consulta->the_post(); ?>

                    <?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Medium'); ?>

                    <div class="column medium-6 boxPI">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="boxProductositems">
                                <h2><i class="fas fa-chevron-circle-right"></i> <?php the_title(); ?></h2>
                            </div>
                        </a>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>

                        
                </div>
        </div>   
    </div>
    



</div>


    </main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
