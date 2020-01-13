<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EV
 */




?>

	</div><!-- #content -->



<footer class="site-footer">


<div class="row">
	<div class="column medium-4">
		<a href="<?php echo site_url(); ?>"><img class="logofooter" src="<?php echo get_template_directory_uri(); ?>/img/logo-em-blanco.png" alt="EM"></a>
			
			<?php wp_nav_menu( array(
          		'theme_location' => 'menu-footer-a',
          		'menu_id' => 'menu-footer',
          		'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
          		) ); ?>

	</div>
	<div class="column medium-4">
		<h3>Ayúda</h3>
			<?php wp_nav_menu( array(
          		'theme_location' => 'menu-footer-b',
          		'menu_id' => 'menu-footer',
          		'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
          		) ); ?>
	</div>

	<div class="column medium-4">
		<h3>Productos</h3>
			<?php wp_nav_menu( array(
          		'theme_location' => 'menu-footer-c',
          		'menu_id' => 'menu-footer',
          		'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
          		) ); ?>
	</div>
</div>



<div class="derechosFooter">
		<div class="row ">
			<div class="column-12">
				<p>Todos los derechos reservados Electronics Motion © 2019</p>
				<p>Electronics Motion no es Distribuidor Oficial ni Representante de los fabricantes que aparecen en nuestra web. Los nombres y marcas que aparecen en nuestra web son propiedad de los respectivos fabricantes.</p>
			</div>
		</div>
</div>


</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
