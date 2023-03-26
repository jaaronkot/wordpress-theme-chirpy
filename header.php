<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/third_party/css2.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/third_party/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/third_party/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/third_party/bootstrap-toc.min.css">
  <!-- Manific Popup -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/third_party/magnific-popup.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
 
  <!-- JavaScript -->

  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/third_party/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/third_party/prettify.min.js"></script>
</head>
