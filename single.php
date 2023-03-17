<?php get_header(); ?>

<body data-spy="scroll" data-target="#toc" data-topbar-visible="true">

<?php get_template_part('templates/module', 'sidebar') ?>

<?php get_template_part('templates/module', 'topbar') ?>

<div id="main-wrapper" class="d-flex justify-content-center">
    <div id="main" class="container pl-xl-4 pr-xl-4">


        <div class="row">

            <!-- core -->
            <div id="core-wrapper" class="col-12 col-lg-11 col-xl-9 pr-xl-4">
                <div class="post pl-1 pr-1 pl-md-2 pr-md-2">
                    <?php  while (have_posts()) {
                        the_post();
                    } ?>
                    <h1 data-toc-skip><?php  the_title('<h1>','</h1>'); ?></h1>

                    <div class="post-meta text-muted">
                        <!-- published date -->
                        <span>
                        发表于: 
                        <em class=""
                            data-toggle="tooltip" data-placement="bottom">
                            <?php the_time('Y年n月d日'); ?>
                        </em>
                        </span>
                        <!-- lastmod date -->


                        <div class="d-flex justify-content-between">
                            <!-- author(s) -->
                        <span>
                            作者:
                        <em>
                            <a href="<?php global $authordata;
                                if ($authordata) {
                                    echo get_author_posts_url($authordata->ID,
                                        $authordata->user_nicename);
                                } ?>"><?php the_author() ?> </a>
                        </em>
                        </span>

                            <div>
                                <!-- page views -->


                                <!-- read time -->
                                <!--
                            Calculate the post's reading time, and display the word count in tooltip
                           -->


                                <!-- words per minute  -->


                                <!-- return element -->
                                <span class="readtime" data-toggle="tooltip" data-placement="bottom"
                                      title="602 字">
                                    <em><?php echo "100"; ?> </em> 次阅读</span>

                            </div>

                        </div> <!-- .d-flex -->

                    </div> <!-- .post-meta -->

                    <div class="post-content">

                        <?php the_content(); ?>
                        
                    </div>

                    <div class="post-tail-wrapper text-muted">

                        <!-- categories -->

                        <div class="post-meta mb-3">
                            <i class="far fa-folder-open fa-fw mr-1"></i>
                        <?php  foreach((get_the_category()) as $category)  { 
                            echo " <a href=''>";
                             echo $category->cat_name;  
                             echo "</a>";
                            }  ?> 
                        </div>


                        <!-- tags -->

                        <div class="post-tags">
                            <i class="fa fa-tags fa-fw mr-1"></i>

                            <a href="/tags/opengl/"
                               class="post-tag no-text-decoration">OpenGL</a>

                        </div>


                        <div class="post-tail-bottom
    d-flex justify-content-between align-items-center mt-3 pt-5 pb-2">
                            <div class="license-wrapper">


                                本文由作者按照
                                <a href="https://creativecommons.org/licenses/by/4.0/">
                                    CC BY 4.0
                                </a>
                                进行授权


                            </div>

                            <!--
                         Post sharing snippet
                        -->

                            <div class="share-wrapper">
                                <span class="share-label text-muted mr-1">分享</span>
                                <span class="share-icons">





        <a href="https://twitter.com/intent/tweet?text=Android踩坑 Failed to create EGL context:0x3003 - 拙巧匠&url=https%3A%2F%2Ffifo.site%2Fposts%2FAndroid%25E8%25B8%25A9%25E5%259D%2591-Failed-to-create-EGL-context-0x3003%2F"
           data-toggle="tooltip" data-placement="top"
           title="Twitter" target="_blank" rel="noopener" aria-label="Twitter">
          <i class="fa-fw fab fa-twitter"></i>
        </a>


        <a href="https://www.facebook.com/sharer/sharer.php?title=Android踩坑 Failed to create EGL context:0x3003 - 拙巧匠&u=https%3A%2F%2Ffifo.site%2Fposts%2FAndroid%25E8%25B8%25A9%25E5%259D%2591-Failed-to-create-EGL-context-0x3003%2F"
           data-toggle="tooltip" data-placement="top"
           title="Facebook" target="_blank" rel="noopener" aria-label="Facebook">
          <i class="fa-fw fab fa-facebook-square"></i>
        </a>


        <a href="https://t.me/share/url?url=https%3A%2F%2Ffifo.site%2Fposts%2FAndroid%25E8%25B8%25A9%25E5%259D%2591-Failed-to-create-EGL-context-0x3003%2F&text=Android踩坑 Failed to create EGL context:0x3003 - 拙巧匠"
           data-toggle="tooltip" data-placement="top"
           title="Telegram" target="_blank" rel="noopener" aria-label="Telegram">
          <i class="fa-fw fab fa-telegram"></i>
        </a>


    <i id="copy-link" class="fa-fw fas fa-link small"
       data-toggle="tooltip" data-placement="top"
       title="分享链接"
       data-title-succeed="链接已复制！">
    </i>

  </span>
                            </div>


                        </div><!-- .post-tail-bottom -->

                    </div><!-- div.post-tail-wrapper -->


                </div>
            </div> <!-- #core-wrapper -->

            <!-- panel -->
            <div id="panel-wrapper" class="col-xl-3 pl-2 text-muted">

                <div class="access">
                    <?php get_sidebar() ?>
                </div>
            </div>

        <!-- tail -->

        <div class="row">
            <div id="tail-wrapper" class="col-12 col-lg-11 col-xl-9 pl-3 pr-3 pr-xl-4 mt-5">
                <?php get_template_part('templates/module', 'andb') ?>
            </div>
        </div>
    </div>
 


<div id="mask"></div>

<a id="back-to-top" href="#" aria-label="back-to-top" class="btn btn-lg btn-box-shadow" role="button">
    <i class="fas fa-angle-up"></i>
</a>

 
<!--
JS selector for site.
-->

<!-- layout specified -->


<!-- image lazy-loading & popup & clipboard -->


<script src="https://cdn.jsdelivr.net/combine/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js,npm/lazysizes@5.3.2/lazysizes.min.js,npm/clipboard@2.0.11/dist/clipboard.min.js"></script>


<script src="https://cdn.jsdelivr.net/combine/npm/dayjs@1.11.6/dayjs.min.js,npm/dayjs@1.11.6/locale/zh.min.js,npm/dayjs@1.11.6/plugin/relativeTime.min.js,npm/dayjs@1.11.6/plugin/localizedFormat.min.js"></script>


<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/dist/post.min.js"></script>


<!-- commons -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

