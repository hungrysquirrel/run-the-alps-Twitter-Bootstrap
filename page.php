<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>

<div class="container">
  <div class="col-xl-12">
    <div class="row">
      <div class="col-xl-12">
        <header class="page-title">
          <h1><?php the_title();?></h1>
        </header>
        <?php while ( have_posts() ) : the_post(); ?>
  
          <?php the_content();?>
        <?php endwhile; // end of the loop. ?>
      </div><!-- /.span8 -->
    </div>
  </div>
</div>



<?php get_footer(); ?>
