<?php
/**
 * Template Name: Races Permalink Page
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
<!-- Begin Template Content -->
<div class="container sbs-content-wrapper">
  <div class="row"> 
      <div class="col-xl-12">
      
        <div class="row">
          <div class="col-xl-8 offset-xl-2 blog-post-top-rule">
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
            </header>
          </div>
        </div>
            
        <div class="row"> 
          <div class="col-xl-8 offset-xl-2">
            <div class="races">
              <div class="row race-overview">
                <div class="col-xl-12">
                  <div class="row">
                    
                    <div class="col-xl-12">
                      <a href="<?php the_field('race_website'); ?>">
                        <img class="img-fluid" src="<?php the_field('race_promo_photo'); ?>" alt="<?php the_title();?>">
                      </a>
                    </div>

                    <div class="col-xl-12">
                      <div class="row">
                        
                      
                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Date</small>
                                  <?php $date = DateTime::createFromFormat('Ymd', get_field('race_date')); print $date->format('m/d/Y')?>
                                  <?php if(get_field('race_end_date')): ?>&ndash; <?php $date = DateTime::createFromFormat('Ymd', get_field('race_end_date')); print $date->format('m/d/Y')?>
                                  <?php endif; ?>
                              </p>
                            </div>
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Country</small>
                                <?php the_field('race_country'); ?>
                              </p>
                            </div>
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Race website</small>
                                <a href="<?php the_field('race_website'); ?>"><?php the_field('race_website'); ?></a>
                              </p>
                            </div>
                          </div>
                        </div>
                        
                        
                        <div class="col-xl-6">
                          <div class="row">
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Distance</small> 
                                <?php the_field('primary_race_distance'); ?>
                                <?php if (get_field('secondary_race_distances')): ?>
                                  ,<?php the_field('secondary_race_distances'); ?>
                                <?php endif; ?>
                              </p>
                            </div>
                            <div class="col-xl-12">
                              <p class="race-info">
                                <small class="text-muted">Elevation</small> 
                                <?php the_field('race_vertical'); ?>
                              </p>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    
                    <div class="col-xl-12">
                      <hr />
                      <p class="race-info my-0">
                        <small class="text-muted">Description</small>
                      </p>
                      <?php the_field('race_details'); ?>
                    </div>

                    <div class="col-xl-12">
                      <p>
                        <a href="<?php $parentLink = get_permalink($post->post_parent); echo $parentLink; ?>">View a listing of all races</a>
                      </p>
                    </div>
                  </div>
                </div>

              </div><!--/race-overview-->
            </div><!--/races-->
          </div>
        </div>

      </div>
    </div><!-- /.span12 -->
    <?php get_footer(); ?>
  </div><!--/row-->  

</body>
</html>