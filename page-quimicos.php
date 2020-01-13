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


<div class="row buscadorFabricantes">
	
	<div class="listaABC bgAzul">
        <ul>

            <?php $wcatTerms = get_terms('productos-quimicos', array('hide_empty' => 0, 'parent' =>0)); 
            foreach($wcatTerms as $wcatTerm) : ?>

            <li>
                <a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></a>
            </li>

            <?php endforeach;  ?>

        </ul>

	</div>
</div>






 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
