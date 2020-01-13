
<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template Name: HomePage
 * @package EfectoVirtual
 */

get_header(); ?>




 <?php get_template_part('template-parts/header-interno'); ?>
<div class="clear"></div>


<div class="row expanded">
  <?php get_template_part('template-parts/slider'); ?>
</div>



<div class="encuentraPoductos">
  <h2 class="tituloEncuentraProducto">Encuentra tu producto</h2>

  <div class="row"> 
    <div class="column medium-6">
      <p>Seleccionar grupo de productos y productos</p>
      <select name="carlist" form="carform">
        <option value="1">Seleccionar</option>
        <option value="2">P2</option>
        <option value="3">P3</option>
        <option value="4">P4</option>
      </select>
    </div>
    <div class="column medium-6">
      <p>O usa nuestra búsqueda</p>
      <div class="buscadorProductos">
        <div class="campoBusquedaProductos">
          <input type="text" name="busqueda" value="Búscar producto">
          <div class="botonBusqueda"><i class="fas fa-search"></i></div>
        </div>
      </div>

    </div>
  </div>
</div>




<div class="marcasHome">
  


  <div class="row">

  <div class="tituloSelector">
    <h2>Marcas</h2>
  </div>
    
    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/siemens/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgsiemens.jpg); ">
        
        <h2>Siemens</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>


    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/lenze/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bglenze.jpg); ">
        
        <h2>Lenze</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>

    
    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/baumer/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgbaumer.jpg); ">
        
        <h2>Baumer</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>


    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/haidenhein/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgheidenhain.jpg); ">
        
        <h2>Haidenhein</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>


    
    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/abb/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgabb.jpg); ">
        
        <h2>ABB</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>


    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/fanuc/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgfanuc.jpg); ">
        
        <h2>Fanuc</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>


    
    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/rittal-r/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgrittal.jpg); ">
        
        <h2>Rittal</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>


    <div class="column medium-3">
      <a href="<?php echo site_url(); ?>/marcas-fabricantes/yaskawa/">
      <div class="boxMarca" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgyaskawa.jpg); ">
        
        <h2>Yaskawa</h2>
        <div class="botonAcceder">Acceder</div>

      </div>
      </a>
    </div>




  </div>



  <a href="<?php echo site_url(); ?>/fabricantes">
    <div class="botonVerMas">Ver Todos</div>
  </a>

</div>







<div class="grupoProductosHome">

  <div class="row">

    <div class="tituloSelector tituloBgBlanco">
      <h2>GRupo de Productos</h2>
    </div>


    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct1.jpg);"></div>
        <h2>Assembly Technology</h2>
      </div>
    </div>


    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct2.jpg);"></div>
        <h2>Electric Drives and Controls</h2>
      </div>
    </div>



    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct3.jpg);"></div>
        <h2>Gear Technology</h2>
      </div>
    </div>



    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct4.jpg);"></div>
        <h2>Industrial Hydraulics</h2>
      </div>
    </div>



    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct5.jpg);"></div>
        <h2>Linear Motion Technology</h2>
      </div>
    </div>


    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct6.jpg);"></div>
        <h2>Mobile Hydraulics</h2>
      </div>
    </div>



    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct7.jpg);"></div>
        <h2>Moulding and Casting Technology</h2>
      </div>
    </div>



    <div class="column medium-3">
      <div class="boxGP">
        <div class="imageGP" style="background: url(<?php echo get_template_directory_uri(); ?>/img/bgproduct8.jpg);"></div>
        <h2>Tightening Technology</h2>
      </div>
    </div>




  </div>

</div>





<div class="newsletterHome">

  <div class="row">
    <h3>Newsletter</h3>

      <div class="buscadorProductos">
        <div class="campoBusquedaProductos">
          <input type="text" name="busqueda" placeholder="@ Ingresa tu correo">
          <div class="botonBusqueda">Suscríbete</div>
        </div>
      </div>

  </div>

</div>



<?php/*
  $post_id = 10616;
  $marcas_post = get_post($post_id);
  echo $marcas_post->post_content; */
?>
<div class="marcasHomeCarrusel paginaInterna">
  <?php 
    $post_id = 10616;
    echo \Elementor\Plugin::$instance->frontend->get_builder_content( $post_id ); 
  ?>
</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
