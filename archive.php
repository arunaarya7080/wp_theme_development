<?php
/**
 * archive page all bolg show categorised, The template for displaying archive pages
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
              <h2>archive Page, categorised all post show</h2>
            </div>
          </div>
        </div>

<!-- ======= title page end in page custom ======= -->




		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
