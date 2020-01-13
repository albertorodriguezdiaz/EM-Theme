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

 <?php get_template_part('template-parts/header-interno'); ?>


 <div id="primary" class="content-area">
 	<main id="main" class="site-main">

			<header class="entry-header">
			  <div class="banner-page-general">
			    <div class="banner-img-general"
			      style="background: #2a2a2a;">
			      <div class="banner-texto-general">
			        <div class="row">
			          <h1>Oops! página no encontrada</h1>
			        </div>
			      </div>
			    </div>
			  </div>
			</header>


 	</main><!-- #main -->
 </div><!-- #primary -->

 <?php
 get_footer();
