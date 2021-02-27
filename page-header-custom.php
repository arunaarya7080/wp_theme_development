<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package HTML_2_WP
 */

get_header('custom_header');       ////// custom header add for sample pages

?>

  <main id="primary" class="site-main">



  <!-- ======= title page start in page custom ======= -->

  <div id="home" class="slider-area">
   
      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
             
            </div>
          </div>
        </div>
      </div>

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <br><br>
              <br><br>
              <h2>Header Custom making page, add menu button </h2>
            </div>
          </div>
        </div>

<!-- ======= title page end in page custom ======= -->

    
    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'page' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->

<?php

get_footer();
