<?php
/*
Template Name: 归档
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_header(); ?>
  
  <body data-topbar-visible="true">

    <!-- 左侧sidebar -->
    <?php get_template_part('templates/module', 'sidebar') ?>
    <!-- 顶部面包屑和搜索 -->
    <?php get_template_part('templates/module', 'topbar') ?>

    <div id="main-wrapper" class="d-flex justify-content-center">
      <div id="main" class="container pl-xl-4 pr-xl-4">
        <div class="row">
          <!-- core -->
          <div id="core-wrapper" class="col-12 col-lg-11 col-xl-9 pr-xl-4">
            <div class="post pl-1 pr-1 pl-md-2 pr-md-2">
              <h1 class="dynamic-title">
                <?php echo get_the_title(); ?>
              </h1>
              <div class="post-content">
                <?php get_template_part('templates/post','arch'); ?>
              </div>
            </div>
          </div> <!-- #core-wrapper -->
          <?php get_template_part('templates/widget','panel'); ?>
        </div><!-- #row -->
      </div>
    </div> <!-- #main-wrapper -->

    <!-- The Footer -->
    <?php get_footer(); ?>

    <?php get_template_part('templates/backtop','bar'); ?>
    <?php get_template_part('templates/soda','notification'); ?>
    <?php get_template_part('templates/js','selector'); ?>
  </body>
</html>