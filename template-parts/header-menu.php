  <?php  //wp_nav_menu( array( 'theme_location' => '' ) ); ?>

  <div class="menuTop">

        <nav id="site-navigation" class="main-navigation" role="navigation">

          	<?php wp_nav_menu( array(
          		'theme_location' => 'menu-header',
          		'menu_id' => 'primary-menu',
          		'items_wrap' => '<ul id="%1$s" class="%2$s menu">%3$s</ul>',
          		) ); ?>

        </nav>

  </div>
