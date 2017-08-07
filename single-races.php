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
          <div class="col-xl-12 blog-post-top-rule">
           
            <header class="page-title overview overview-without-border">
              <h1><?php the_title();?></h1>
            </header>
          </div>
        </div>
            
        <div class="row"> 
           <div class="col-xl-8">
              <div class="races">
                <div class="row race-overview">
                  <div class="col-xl-12 race-overview-top-border">
                    <div class="row">
                      <div class="col-xl-4">
                        <a href="www.snowwalkrun.ch">
                          <img class="img-fluid" src="<?php the_field('race_promo_photo'); ?>" alt="<?php the_title();?>">
                        </a>
                      </div>
                      <div class="col-xl-8">
                        <div class="row">
                          <div class="col-xl-6">
                            <ul class="race-info">
                              <li>
                                <small class="text-muted">Name / Location</small>
                                <h2><?php the_title();?></h2>
                              </li>
                              <li>
                                <small class="text-muted">Date</small>
                                <?php the_field('race_date'); ?>
                              </li>
                              <li>
                                <small class="text-muted">Date</small>
                                <?php the_field('race_end_date'); ?>
                              </li>
                            </ul>
                          </div>
                          <div class="col-xl-6">
                            <ul class="race-info">
                              <li>
                                <small class="text-muted">Distance</small> 
                                <?php the_field('race_distance'); ?>
                              </li>
                              <li>
                                <small class="text-muted">Vertical</small> 
                                <?php the_field('race_vertical'); ?>
                              </li>
                            </ul>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-xl-12">
                            <div class="row">
                              <div class="col-xl-6">
                                <p class="race-info">
                                  <small class="text-muted">Race website</small>
                                  <a href="<?php the_field('race_website'); ?>"><?php the_field('race_website'); ?></a>
                                </p>
                              </div>
                              <div class="col-xl-6">
                                <p class="race-info">
                                  <small class="text-muted">Country</small>
                                  <?php the_field('race_country'); ?>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row"><div class="col-xl-12">
                          <?php the_field('race_description'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--races-->  
           </div>

           <div class="col-xl-4">
             <div class="sidebar-nav race-nav">
               <div class="month-heading">Placeholder</div>
             </div>
           </div>
        </div>
          
      </div><!-- /.span12 -->
        <?php get_footer(); ?>
      </div><!--/row-->  
    </div><!-- /container -->
  </body>
</html>