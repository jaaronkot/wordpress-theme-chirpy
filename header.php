<head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>">
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="#f7f7f7">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#1b1b1e">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta
    name="viewport"
    content="width=device-width, user-scalable=no initial-scale=1, shrink-to-fit=no, viewport-fit=cover"
  >
 
  <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/fonts/main.css">
  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/jquery/jquery.min.js"></script>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/tocbot/tocbot.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/fontawesome-free/css/all.min.css">

  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/simple-jekyll-search/simple-jekyll-search.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/mermaid/mermaid.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/dayjs/plugin/localizedFormat.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/countup.js/countUp.min.js"></script>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/magnific-popup/magnific-popup.css">

  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/polyfill-v3-es6/polyfill.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/mathjax/tex-chtml.js"></script>


  <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/google-code-prettify/prettify.js"></script>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/google-code-prettify/tomorrow.css">

  <?php get_template_part('templates/mode','toggle'); ?>
</head>
