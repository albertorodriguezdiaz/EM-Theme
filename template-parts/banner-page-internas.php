<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Full'); ?>

<header class="entry-header">
  <div class="banner-page-general">
    <div class="banner-img-general"
      style="background: url(<?php print_r($thumb[0]); ?>), url(<?php echo get_template_directory_uri(); ?>/img/bgemproduct.jpg);">
      <div class="banner-texto-general">
        <div class="row">
          <h2 class="areaServicios"><?php the_field('area'); ?></h2>
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <h2 class="categoriaServicios"><?php the_field('categoria'); ?></h2>
          <h2 class="categoriaServicios"><?php the_field('text_description'); ?></h2>
        </div>
      </div>
    </div>
  </div>
</header>
