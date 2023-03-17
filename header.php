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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato&family=Source+Sans+Pro:wght@400;600;700;900&display=swap">
 
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/all.min.css">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/afeld/bootstrap-toc@1.0.1/dist/bootstrap-toc.min.css">
  <!-- Manific Popup -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.min.css">
  <!-- JavaScript -->

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js"></script>
</head>