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



  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/fonts/main.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
 
  <!-- JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery/jquery.min.js"></script>
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/tocbot/tocbot.min.css">

  <!-- Manific Popup -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/magnific-popup/magnific-popup.css">
 
</head>
