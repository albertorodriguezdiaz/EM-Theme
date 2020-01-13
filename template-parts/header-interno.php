<div class="menuBarTop">
  <div class="row collapse">
    <div class="column large-2 medium-6">
      <div class="logoTop">
        <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-em.png" alt="EM"></a>
      </div>
    </div>

    <div class="column large-7 medium-12">
      <nav id="site-navigation" class="main-navigation menuTop" role="navigation">

            <?php wp_nav_menu( array(
              'theme_location' => 'menu-header',
              'menu_id' => 'primary-menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
              ) ); ?>

        </nav>
    </div>
    <div class="column large-3 medium-12">
      <div class="buscador">
        <div class="campoBusqueda">
          <input type="text" name="busqueda">
          <div class="botonBusqueda"><i class="fas fa-search"></i></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clear"></div>

