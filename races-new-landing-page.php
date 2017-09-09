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

            <?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
              <div class="col-xl-12 intro">
                <?php the_content();?>
              </div>
            </div>
            <?php endwhile; // end of the loop. ?>

          </div>
        </div>

        <div class="row">
           <div class="col-xl-12">
              <div class="races">

          <?php
          $children = get_children( array( 'post_parent' => get_the_ID(4030) ) );
            if ( $children ) {
              ?>
              <table data-toggle="table" data-sort-name="date" data-sort-order="desc">
                  <thead>
                  <tr>
                      <th data-field="logo" tabindex="0" data-sortable="false">Race logo</th>
                      <th data-field="name" tabindex="1" data-sortable="true" data-sorter="alphanum">Race name</th>
                      <th data-field="country" tabindex="2" data-sortable="true" data-sorter="countrySorter">Country</th>
                      <th data-field="date" tabindex="3" data-sortable="true" data-sorter="dateSorter">Date</th>
                      <th data-field="distance" tabindex="4" data-sortable="true" data-sorter="distanceSorter">Distance</th>
                      <th data-field="vertical" tabindex="5" data-sortable="true" data-sorter="distanceSorter">Vertical</th>
                  </tr>
                  </thead>
              <tbody>
              <?php
              foreach( $children as $i => $child ) {
                $country = get_field('race_country', $child->ID); ?>
                <tr data-index="<?php print $i; ?>">
                  <td class="text-center"><img height="34" src="<?php the_field('race_promo_photo', $child->ID); ?>" alt="<?php echo get_the_title($child->ID); ?>" /></td>
                  <td><a href="<?php echo get_permalink($child->ID); ?>"><?php echo get_the_title($child->ID); ?></a></td>
                  <td><?php print countryFlag($country) . ' ' . $country; ?></td>
                  <?php
                    // get raw date
                    $start_date = get_field('race_begin_date', $child->ID, false, false);
                    // make date object
                    $start_date = new DateTime($start_date);
                  ?>
                  <td><?php echo $start_date->format('m/d/Y'); ?></td>

                  <td><?php the_field('primary_race_distance', $child->ID); ?><span><?php the_field('secondary_race_distances', $child->ID); ?></span></td>
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
    <script>
    function countrySorter(a, b) {
      var pattern = /<img .*>/g;
      a = a.replace(pattern, '').trim();
      b = b.replace(pattern, '').trim();
      // a is before b.
      if (a.localeCompare(b) < 0) {
        return -1;
      }
      // a is after b.
      if (a.localeCompare(b) > 0) {
        return 1;
      }
      return 0;
    }

    function dateSorter(a, b) {
      date_a = a.split("/");
      date_b = b.split("/");
      a = new Date(date_a[0]+"/"+date_a[1]+"/"+date_a[2]);
      b = new Date(date_b[0]+"/"+date_b[1]+"/"+date_b[2]);
      if (a.getTime() > b.getTime()) {
        return -1;
      }
      if (a.getTime() < b.getTime()) {
        return 1;
      }
      return 0;
    }
    function distanceSorter(a, b) {
      // Split distance on <span> tag.
      split_a = a.split("<span");
      split_b = b.split("<span");
      var pattern = /(k{0,1}m){1}/g;
      a = split_a[0].replace(pattern, '').trim();
      b = split_b[0].replace(pattern, '').trim();
      if (parseInt(a, 10) > parseInt(b, 10)) {
        return -1;
      }
      if (parseInt(a, 10) < parseInt(b, 10)) {
        return 1;
      }
      return 0;
    }
</script>
  </body>
</html>
<?php
function countryFlag($name) {
    switch ($name) {
      case 'Switzerland':
          return 'ðŸ‡¨ðŸ‡­';
          break;

      case 'France':
          return 'ðŸ‡«ðŸ‡·';
          break;

      case 'Italy':
          return 'ðŸ‡®ðŸ‡¹';
          break;

      case 'Liechtenstein':
          return 'ðŸ‡±ðŸ‡®';
          break;

      case 'Germany':
          return 'ðŸ‡©ðŸ‡ª';
          break;

      case 'Austria':
          return 'ðŸ‡¦ðŸ‡¹';
          break;

      default:
        return '';
    }
}
?>
