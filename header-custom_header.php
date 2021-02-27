<?php
/**
 *Make A header (diffrent header header)custom header, The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package HTML_2_WP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
       
        <?php the_custom_logo(); ?>        

      </div>

      <nav class="nav-menu d-none d-lg-block">

	  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container'        => 'nav-menu d-none d-lg-block',
				)
			);
			?>

      </nav><!-- .nav-menu -->

     
     <a href="<?php echo get_home_url(); ?>"><button type="button" class="btn btn-info">Contact Us</button></a>

    </div>

  </header><!-- End Header -->



















