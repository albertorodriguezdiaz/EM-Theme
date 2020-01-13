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
	
	<h2>Buscar</h2>

	<div class="listaABC">


 		<ul>

         <?php $wcatTerms = get_terms('marcas-fabricantes', array('hide_empty' => 0, 'parent' =>0)); 
            foreach($wcatTerms as $wcatTerm) : ?>
       
            <li>
               <a href="#<?php echo $wcatTerm->slug; ?>">
               	<?php echo $wcatTerm->name; ?>
               </a>
            </li>
         

         <?php endforeach;  ?>

      </ul>
	</div>
</div>




<div class="marcasHome">
  
  <div class="row">

  <div class="tituloSelector">
    <h2>Mejores fabricantes</h2>
  </div>
    
    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgsiemens.jpg); ">
        
        <h2>Siemens</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>


    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bglenze.jpg); ">
        
        <h2>Lenze</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>

    
    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgbaumer.jpg); ">
        
        <h2>Baumer</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>


    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgheidenhain.jpg); ">
        
        <h2>Haidenhein</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>


    
    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgabb.jpg); ">
        
        <h2>ABB</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>


    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgfanuc.jpg); ">
        
        <h2>Fanuc</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>


    
    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgrittal.jpg); ">
        
        <h2>Rittal</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>


    <div class="column medium-3">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgyaskawa.jpg); ">
        
        <h2>Yaskawa</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
    </div>


  </div>
</div>





<div class="listadoFabricantesABC">
	<div class="row">
		<div class="tituloSelector tituloBgBlanco">
	      <h2>Todos los Fabricantes</h2>
	    </div>


      <?php $wcatTerms = get_terms('marcas-fabricantes', array('hide_empty' => 0, 'parent' =>0)); 
         foreach($wcatTerms as $wcatTerm) : 
         ?>

	    <div class="column large-6">
	    	<div class="row">
	    		<div class="column medium-1">
	    			<div class="abcItem" id="<?php echo strtolower($wcatTerm->name); ?>">
	    				<?php echo $wcatTerm->name; ?>
	    			</div>
	    		</div>
	    		<div class="column medium-11">
	    			<ul class="listaMarcasAll">
		               <?php
		                  $wsubargs = array(
		                     'hierarchical' => 1,
		                     'show_option_none' => '',
		                     'hide_empty' => 0,
		                     'parent' => $wcatTerm->term_id,
		                     'taxonomy' => 'marcas-fabricantes'
		                  );
		                  $wsubcats = get_categories($wsubargs);
		                  foreach ($wsubcats as $wsc):
		                  ?>
		               <li><a href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><?php echo $wsc->name;?></a></li>
		               <?php endforeach; ?>  
		            </ul>
	    		</div>
	    	</div>
	    </div>

	<?php endforeach;  ?>

	</div>
</div>



 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
