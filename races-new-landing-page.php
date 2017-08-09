<?php
/**
 * Template Name: Races New Landing Page
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
            
            <div class="row">
              <div class="col-xl-12 intro">
                <?php the_field('races_intro'); ?>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row"> 
           <div class="col-xl-12">
              <div class="races">
              
          <?php
          $children = get_children( array( 'post_parent' => get_the_ID(4030) ) );
            if ( $children ) {
              ?>
              <table>
                  <thead>
                  <tr>
                      <th data-field="logo" tabindex="0">Race logo</th>
                      <th data-field="name" tabindex="1">Race name</th>
                      <th data-field="country" tabindex="2">Country</th>
                      <th data-field="date" tabindex="3">Date</th>
                      <th data-field="distance" tabindex="4">Distance</th>
                      <th data-field="vertical" tabindex="5">Vertical</th>
                  </tr>
                  </thead>
              <tbody>
              <?php
              foreach( $children as $i => $child ) {
                $country = get_field('race_country', $child->ID); ?>
                <tr data-index="<?php print $i; ?>">
                  <td><img class="img-fluid" src="<?php the_field('race_promo_photo', $child->ID); ?>" alt="<?php echo get_the_title($child->ID); ?>" /></td>
                  <td><a href="<?php echo get_permalink($child->ID); ?>"><?php echo get_the_title($child->ID); ?></a></td>
                    <td><?php print $country . countryFlag($country) ?></td>
                  <td>
                  <?php
                    $date = DateTime::createFromFormat('Ymd', get_field('race_date', $child->ID));
                    print $date->format('d/m/Y')
                  ?></td>
                  <td><?php the_field('race_distance', $child->ID); ?></td>
                  <td><?php the_field('race_vertical', $child->ID); ?></td>
                </tr>

              <?php } ?>
              </tbody></table>
            <?php
            }
          ?>
              </div><!--races-->  
           </div>
        </div>
          
      </div><!-- /.span12 -->
        <?php get_footer(); ?>
      </div><!--/row-->  
    </div><!-- /container -->
  </body>
</html>
<?php
function countryFlag($name) {
    switch ($name) {
      case 'Switzerland':
          return '🇨🇭';
          break;
      case 'France':
          return '🇫🇷';
          break;

      case 'Italy':
          return '🇮🇹';
          break;

      default:
        return '';
    }
}
?>