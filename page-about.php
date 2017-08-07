<?php
/**
 * Template Name: About
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>
    
      
      <div class="banner-image about">
        <img src="<?php the_field('about_top_image_banner'); ?>" />
        <div class="photographer-credit">
          <small>&copy;<?php the_field('about_image_photo_credit'); ?></small>
        </div>
      </div> 
          
      <div class="container sbs-content-wrapper">
        <div class="row">
            
           <div class="col-xl-12 about-story">
             <div class="row">
               <div class="col-xl-8 about-body-copy">
               
                 <header class="page-title overview no-underline">
                   <h1><?php the_title();?></h1>
                 </header>
                 <?php while ( have_posts() ) : the_post(); ?>
                   <?php the_content();?>
                 <?php endwhile; // end of the loop. ?>
               </div>
               
               <div class="col-xl-4">
                 <div class="sidebar-nav no-border no-left-padding">
                    <!-- Begin MailChimp Signup Form -->
                  <div id="mc_embed_signup" class="laces-homepage row">
                    <form action="http://runthealps.us4.list-manage.com/subscribe/post?u=78f317c106f0e913583f17c21&amp;id=be207286fb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate override clearfix" target="_blank" novalidate>
                      <div class="form-group col-xs-12">
                        <h3>Laces <img class="img-fluid" src="http://runthealps.com/wp-content/uploads/2013/04/lace.gif" /></h3>
                        <p>Get the latest news from Run the Alps.</p>
                      </div>
                      <div class="form-group col-xs-12 col-xl-12">
                      <div class="input-group">
                        <input type="email" value="" name="EMAIL" class="override form-control" id="mce-EMAIL" placeholder="email address" required>
                        <span class="input-group-btn"><input type="submit" value="Signup" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></span>
                      </div>
                      </div>
                    </form>
                  </div> 
                <!--End mc_embed_signup-->
                    <p>
                      <div class="fb-page" data-href="https://www.facebook.com/runalps" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/runalps"><a href="https://www.facebook.com/runalps">Run The Alps</a></blockquote></div></div>
                    </p>
                    
                 </div>
               </div>
               
             </div>
           </div>
           <?php get_footer(); ?>
        </div><!--/row-->  
      </div><!-- /container -->
    </body>
  </html>