<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EV
 */

?>

<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'Full'); ?>

<header class="entry-header">
  <div class="banner-page-general">
    <div class="banner-img-general banner-img-description"
      style="background: #012e5e url(<?php print_r($thumb[0]); ?>);">
      <div class="banner-texto-general">
        <div class="row">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<h2><?php the_field('text_description'); ?></h2>
				</div>
      </div>
    </div>
  </div>
</header>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="row">
		<div class="column contenido-page-general">
			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ureformada' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'efectovirtual' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
