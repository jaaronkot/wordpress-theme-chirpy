<!-- `site.alt_lang` can specify a language different from the UI -->
<html <?php language_attributes(); ?>>
  <?php get_header(); ?>
  
  <body data-topbar-visible="true">

    <!-- 左侧sidebar -->
    <?php get_template_part('templates/module', 'sidebar') ?>
    <!-- 顶部面包屑和搜索 -->
    <?php get_template_part('templates/module', 'topbar') ?>

    <div id="main-wrapper" class="d-flex justify-content-center">
      <div id="main" class="container pl-xl-4 pr-xl-4">
        <?php get_template_part('templates/module', 'page') ?>
      </div>
    </div> <!-- #main-wrapper -->

    <!-- The Footer -->
    <?php get_footer(); ?>

    <div id="mask"></div>

    <a id="back-to-top" href="#" aria-label="back-to-top" class="btn btn-lg btn-box-shadow" role="button">
      <i class="fas fa-angle-up"></i>
    </a>


    <div id="notification" class="toast" role="alert" aria-live="assertive" aria-atomic="true"
    data-animation="true" data-autohide="false">
    <div class="toast-header">
        <button type="button" class="ml-2 ml-auto close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    </div>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/dayjs/dayjs.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/dayjs/locale/en.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/dayjs/plugin/relativeTime.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/dayjs/plugin/localizedFormat.min.js"></script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/dist/misc.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/lazysizes/lazysizes.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/clipboard/clipboard.min.js"></script>

    <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/dist/post.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/lib/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/lib/tocbot/tocbot.min.css">
  
  </body>

</html>

