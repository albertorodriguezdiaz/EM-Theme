
<?php if ( is_user_logged_in() ) { ?>
  <?php global $current_user; get_currentuserinfo(); ?>
<?php } ?>




<div class="menuBarTop">
  <div class="row collapse ">
    <div class="column large-4 medium-12 logoHeader">
      <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logoap.jpg" alt="emotion"></a>
    </div>
    <div class="column large-8 medium-12">
      <div class="row botonesTop">
        
        <div class="column medium-5">
           <div class="botonR20 botonPrincipal"><i class="fas fa-user-circle"></i> Hola <?php echo $current_user->user_firstname; ?></div>
        </div>
         
        <div class="column medium-3">
          <a href="<?php echo wp_logout_url( home_url() ); ?>">
           <div class="botonR20 botonRojo"><i class="fas fa-times-circle"></i> <b>Salir</b></div>
          </a>
        </div>

        <div class="column medium-2 small-6">
          <a href="https://emotion.co:2096/">
           <div class="botonR20 botonBlanco"><i class="far fa-envelope"></i> Email</div>
          </a>
        </div>


        <div class="column medium-2 small-6">
          <a href="#">
           <div class="botonR20 botonBlanco"><i class="far fa-comment"></i> Chat</div>
          </a>
        </div>


      </div>
    </div>
  </div>
</div>

<div class="clear"></div>

<div class="menuTopHeader">
  <div class="row">
    <?php get_template_part('template-parts/header-menu'); ?>
  </div>
</div>


