<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package
 */

 get_header(); ?>

 <?php get_template_part('template-parts/header-interno-usuarios'); ?>

 <div id="primary" class="content-area">
 	<main id="main" class="site-main">

 		<?php
 		while ( have_posts() ) : the_post();
 			get_template_part( 'template-parts/content', 'page' );
 		endwhile; // End of the loop.
 		?>



<?php if ( is_user_logged_in() ) { ?>



<?php 

  $usuario = $current_user->user_login;

  $miembros = array(
    'posts_per_page'  => 1,
    'post_type'     => 'miembros',
    'meta_key'    => 'cedula',
    'meta_value'  => $usuario
  );

?>



<div class="botonesUsuarios">

     <div class="row">
      <div class="column medium-6">
        <div class="botonSoporte">
          <p><i class="fas fa-money-check-alt"></i> <b>Soporte de Nómina</b></p>
        </div>
      </div>

      <div class="column medium-6">
        <div class="botonSoporte">
          <p><i class="fas fa-file-invoice-dollar"></i> <b>Cartera AP</b></p>
        </div>
      </div>
    </div>


</div>



<?php $consulta = new WP_Query($miembros);?>

<?php while($consulta->have_posts()): $consulta->the_post(); ?>

    <div class="infoUsuario">
      <div class="row">
        <div class="column medium-1">
          <i class="fas fa-user-md"></i>
        </div>
        <div class="column medium-5">
          <ul>
            <li class="nombreIS"><?php the_field('nombre'); ?> <?php the_field('apellido'); ?></li>
            <li><?php the_field('cargo'); ?></li>
            <li>C.C. <?php the_field('cedula'); ?></li>
          </ul>
        </div>
        <div class="column medium-6">
        </div>
      </div>
    </div>

<?php endwhile; wp_reset_postdata(); ?>



<div class="documentoUsuario">
  
  <div class="row collapse">
    <div class="column medium-2">
      <div class="fechaDoc">
        31 / 05 / 2019
      </div>
    </div>
    <div class="column medium-7">
      <div class="detalleDoc">
        Pago Nónima Mayo
      </div>
    </div>
    <div class="column medium-3">
      <div class="detalleDescarga">
        <p><i class="far fa-file-pdf"></i> Descargar</p>
      </div>
    </div>
  </div>

  <div class="row collapse">
    <div class="column medium-2">
      <div class="fechaDoc bgGris">
        31 / 05 / 2019
      </div>
    </div>
    <div class="column medium-7">
      <div class="detalleDoc bgGris">
        Pago Nónima Mayo
      </div>
    </div>
    <div class="column medium-3">
      <div class="detalleDescarga bgGris">
        <p><i class="far fa-file-pdf"></i> Descargar</p>
      </div>
    </div>
  </div>

  <div class="row collapse">
    <div class="column medium-2">
      <div class="fechaDoc">
        31 / 05 / 2019
      </div>
    </div>
    <div class="column medium-7">
      <div class="detalleDoc">
        Pago Nónima Mayo
      </div>
    </div>
    <div class="column medium-3">
      <div class="detalleDescarga">
        <p><i class="far fa-file-pdf"></i> Descargar</p>
      </div>
    </div>
  </div>


  <div class="row collapse">
    <div class="column medium-2">
      <div class="fechaDoc bgGris">
        31 / 05 / 2019
      </div>
    </div>
    <div class="column medium-7">
      <div class="detalleDoc bgGris">
        Pago Nónima Mayo
      </div>
    </div>
    <div class="column medium-3">
      <div class="detalleDescarga bgGris">
        <p><i class="far fa-file-pdf"></i> Descargar</p>
      </div>
    </div>
  </div>


</div>


<?php } //  end user_logged_in ?>


 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
