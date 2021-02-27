<?php
/**
 * all post by defaults, The template for displaying all single posts 
 *
 * @package HTML_2_WP
 
 */

get_header();
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
              <h2>single Page tech post, for single blog</h2>
            </div>
          </div>
        </div>

<!-- ======= title page end in page custom ======= -->

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'html_2_wp' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'html_2_wp' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
 