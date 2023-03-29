<?php get_header(); ?>

<body data-spy="scroll" data-target="#toc" data-topbar-visible="true">

<!-- 左侧sidebar -->
<?php get_template_part('templates/module', 'sidebar') ?>
<!-- 顶部面包屑和搜索 -->
<?php get_template_part('templates/module', 'topbar') ?>
<!-- 主文章区域 + 右sidebar -->
<div id="main-wrapper" class="d-flex justify-content-center">
    <div id="main" class="container pl-xl-4 pr-xl-4">
        <div class="row">
            <!-- core -->
            <div id="core-wrapper" class="col-12 col-lg-11 col-xl-9 pr-xl-4">
                <div class="post pl-1 pr-1 pl-md-2 pr-md-2">
                    <!-- Get pinned posts -->
                    <!-- Get default posts -->
                    <div id="post-list">
                        <?php while(have_posts()) : the_post();
                            get_template_part('templates/module','post');
                            endwhile;
                        ?>
                    </div> <!-- #post-list -->

                    <!--
                    The paginator for post list on HomgPage.
                  -->
                    <?php soda_paging(); ?>


                </div>
            </div> <!-- #core-wrapper -->

            <!-- panel -->
            <div id="panel-wrapper" class="col-xl-3 pl-2 text-muted">
                <div class="access">
                    <?php get_sidebar() ?>
                </div>
            </div>
            <!-- tail -->
    </div>
</div> <!-- #main-wrapper -->

<!-- The Footer -->
<?php get_footer(); ?>

<div id="mask"></div>
<!-- 返回顶部 -->
<a id="back-to-top" href="#" aria-label="back-to-top" class="btn btn-lg btn-box-shadow" role="button">
    <i class="fas fa-angle-up"></i>
</a>

<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/dist/home.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/3party/localizedFormat.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/3party/bootstrap.bundle.min.js"></script>
</body>

</html>

