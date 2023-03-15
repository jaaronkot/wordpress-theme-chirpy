<?php get_header(); ?>

<body data-spy="scroll" data-target="#toc" data-topbar-visible="true">

<!--
The Side Bar
-->

<div id="sidebar" class="d-flex flex-column align-items-end">
    <div class="profile-wrapper text-center">
        <div id="avatar">
            <a href="/" class="mx-auto">


                <img src="/commons/avatar.jpg" alt="avatar" onerror="this.style.display='none'">

            </a>
        </div>

        <div class="site-title">
            <a href="/">拙巧匠</a>
        </div>
        <div class="site-subtitle font-italic">关注音视频开发的个人博客！</div>

    </div><!-- .profile-wrapper -->

    <ul class="w-100">

        <!-- home -->
        <li class="nav-item active">
            <a href="/" class="nav-link">
                <i class="fa-fw fas fa-home ml-xl-3 mr-xl-3 unloaded"></i>
                <span>首页</span>
            </a>
        </li>
        <!-- the real tabs -->

        <li class="nav-item">
            <a href="/categories/" class="nav-link">
                <i class="fa-fw fas fa-stream ml-xl-3 mr-xl-3 unloaded"></i>


                <span>分类</span>
            </a>
        </li> <!-- .nav-item -->

        <li class="nav-item">
            <a href="/tags/" class="nav-link">
                <i class="fa-fw fas fa-tag ml-xl-3 mr-xl-3 unloaded"></i>


                <span>标签</span>
            </a>
        </li> <!-- .nav-item -->

        <li class="nav-item">
            <a href="/archives/" class="nav-link">
                <i class="fa-fw fas fa-archive ml-xl-3 mr-xl-3 unloaded"></i>


                <span>归档</span>
            </a>
        </li> <!-- .nav-item -->

        <li class="nav-item">
            <a href="/about/" class="nav-link">
                <i class="fa-fw fas fa-info-circle ml-xl-3 mr-xl-3 unloaded"></i>


                <span>关于</span>
            </a>
        </li> <!-- .nav-item -->


    </ul> <!-- ul.nav.flex-column -->

    <div class="sidebar-bottom mt-auto d-flex flex-wrap justify-content-center align-items-center">


        <button class="mode-toggle btn" aria-label="Switch Mode">
            <i class="fas fa-adjust"></i>
        </button>


        <span class="icon-border"></span>


        <a href="https://github.com/gezhaoyou" aria-label="github"


           target="_blank"


           rel="noopener">
            <i class="fab fa-github"></i>
        </a>


        <a href="https://twitter.com/" aria-label="twitter"


           target="_blank"


           rel="noopener">
            <i class="fab fa-twitter"></i>
        </a>

        <a href="
          javascript:location.href = 'mailto:' + ['gezhoayou','126.com'].join('@')" aria-label="email"


        >
            <i class="fas fa-envelope"></i>
        </a>


        <a href="/feed.xml" aria-label="rss"


        >
            <i class="fas fa-rss"></i>
        </a>


    </div> <!-- .sidebar-bottom -->

</div><!-- #sidebar -->


<!--
The Top Bar
-->

<div id="topbar-wrapper">
    <div id="topbar"
         class="container d-flex align-items-center justify-content-between h-100 pl-3 pr-3 pl-md-4 pr-md-4">
    <span id="breadcrumb">
 
      <!-- index page -->
      <span>首页</span>
 
    </span><!-- endof #breadcrumb -->

        <i id="sidebar-trigger" class="fas fa-bars fa-fw"></i>

        <div id="topbar-title">
            拙巧匠
        </div>

        <i id="search-trigger" class="fas fa-search fa-fw"></i>
        <span id="search-wrapper" class="align-items-center">
      <i class="fas fa-search fa-fw"></i>
      <input class="form-control" id="search-input" type="search"
             aria-label="search" autocomplete="off" placeholder="搜索...">
    </span>
        <span id="search-cancel">取消</span>
    </div>

</div>

<div id="main-wrapper" class="d-flex justify-content-center">
    <div id="main" class="container pl-xl-4 pr-xl-4">

        <div class="row">

            <!-- core -->
            <div id="core-wrapper" class="col-12 col-lg-11 col-xl-9 pr-xl-4">
                <div class="post pl-1 pr-1 pl-md-2 pr-md-2">
                    <!-- Get pinned posts -->
                    <!-- Get default posts -->
                    <div id="post-list">
                        <?php while(have_posts()) : the_post(); ?>
                            <?php get_template_part('templates/module','post') ?>
                        <?php endwhile; ?>
                    </div> <!-- #post-list -->


                    <!--
                    The paginator for post list on HomgPage.
                  -->

                    <ul class="pagination align-items-center mt-4 pl-lg-2">
                        <!-- left arrow -->


                        <li class="page-item disabled">
                            <a class="page-link btn-box-shadow" href="#" aria-label="previous-page">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>

                        <!-- page numbers -->


                        <!-- show number -->
                        <li class="page-item  active">
                            <a class="page-link btn-box-shadow" href="/">1</a>
                        </li>


                        <!-- show number -->
                        <li class="page-item ">
                            <a class="page-link btn-box-shadow" href="/page2">2</a>
                        </li>


                        <!-- mobile pagination -->
                        <li class="page-index align-middle">
                            <span>1</span>
                            <span class="text-muted">/ 2</span>
                        </li>

                        <!-- right arrow -->


                        <li class="page-item ">
                            <a class="page-link btn-box-shadow" href="/page2" aria-label="next-page">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>

                    </ul> <!-- .pagination -->


                </div>
            </div> <!-- #core-wrapper -->

            <!-- panel -->
            <div id="panel-wrapper" class="col-xl-3 pl-2 text-muted">

                <div class="access">

                    <div id="access-lastmod" class="post">
                        <div class="panel-heading">最近更新</div>
                        <ul class="post-content pl-0 pb-1 ml-1 mt-2">

                            <li><a href="/posts/webrtc-Mac-M1-compile/">WebRTC 编译</a></li>


                            <li><a href="/posts/MacOS-Big-Sur_GN_WebRTC_iOS_error/">升级MacOS Big
                                    Sur后GN生成WebRTC-iOS工程报错</a></li>


                            <li><a href="/posts/dong-gua-dun-rou/">防疫居家，冬瓜炖肉</a></li>


                            <li><a href="/posts/Thinking_about_the_problem/">对于问题的思考</a></li>


                            <li><a href="/posts/text-and-typography/">text-and-typography</a></li>

                        </ul>
                    </div> <!-- #access-lastmod -->

                    <div id="access-tags">
                        <div class="panel-heading">热门标签</div>
                        <div class="d-flex flex-wrap mt-3 mb-1 mr-3">


                            <a class="post-tag" href="/tags/%E7%94%9F%E6%B4%BB/">生活</a>


                            <a class="post-tag" href="/tags/webrtc/">WebRTC</a>


                            <a class="post-tag" href="/tags/opengl/">OpenGL</a>


                            <a class="post-tag" href="/tags/android/">Android</a>


                            <a class="post-tag" href="/tags/ffmpeg/">ffmpeg</a>


                            <a class="post-tag" href="/tags/ffmpeg/">FFmpeg</a>


                            <a class="post-tag" href="/tags/git/">git</a>


                            <a class="post-tag" href="/tags/typography/">typography</a>


                            <a class="post-tag" href="/tags/%E6%8A%80%E6%9C%AF%E7%AC%94%E8%AE%B0/">技术笔记</a>


                            <a class="post-tag" href="/tags/%E7%9B%B4%E6%92%AD/">直播</a>


                        </div>
                    </div>


                </div>


            </div>

        </div>

        <!-- tail -->


    </div>

    <!--
The Search results
-->
    <div id="search-result-wrapper" class="d-flex justify-content-center unloaded">
        <div class="col-12 col-sm-11 post-content">
            <div id="search-hints">
                <div id="access-tags">
                    <div class="panel-heading">热门标签</div>
                    <div class="d-flex flex-wrap mt-3 mb-1 mr-3">
                        <a class="post-tag" href="/tags/%E7%94%9F%E6%B4%BB/">生活</a>


                        <a class="post-tag" href="/tags/webrtc/">WebRTC</a>


                        <a class="post-tag" href="/tags/opengl/">OpenGL</a>


                        <a class="post-tag" href="/tags/android/">Android</a>


                        <a class="post-tag" href="/tags/ffmpeg/">ffmpeg</a>


                        <a class="post-tag" href="/tags/ffmpeg/">FFmpeg</a>


                        <a class="post-tag" href="/tags/git/">git</a>


                        <a class="post-tag" href="/tags/typography/">typography</a>


                        <a class="post-tag" href="/tags/%E6%8A%80%E6%9C%AF%E7%AC%94%E8%AE%B0/">技术笔记</a>


                        <a class="post-tag" href="/tags/%E7%9B%B4%E6%92%AD/">直播</a>


                    </div>
                </div>


            </div>
            <div id="search-results" class="d-flex flex-wrap justify-content-center text-muted mt-3"></div>
        </div>
    </div>


</div> <!-- #main-wrapper -->

<!-- The Footer -->

<footer>
    <div class="container pl-lg-4 pr-lg-4">
        <div class="d-flex justify-content-between align-items-center text-muted ml-md-3 mr-md-3">
            <div class="footer-left">
                <p class="mb-0">
                    <!-- 网站备案信息 -->
                    <a href="https://beian.miit.gov.cn" target="_blank" rel="noopener">京ICP备2023001817号 </a>

                    © 2023
                    <a href="https://github.com/gezhaoyou">zhaoyou</a>.

                    <span data-toggle="tooltip" data-placement="top"
                          title="除非另有说明，本网站上的博客文章均由作者按照知识共享署名 4.0 国际 (CC BY 4.0) 许可协议进行授权。">保留部分权利。</span>

                </p>
            </div>

            <div class="footer-right">
                <p class="mb-0">本站由 <a href="https://jekyllrb.com" target="_blank" rel="noopener">Jekyll</a> 生成，采用
                    <a href="https://github.com/cotes2020/jekyll-theme-chirpy" target="_blank" rel="noopener">Chirpy</a>
                    主题。
                </p>
            </div>
        </div>
    </div>
</footer>


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
    <div class="toast-body text-center pt-0">
        <p class="pl-2 pr-2 mb-3">发现新版本的内容。</p>
        <button type="button" class="btn btn-primary" aria-label="Update">
            更新
        </button>
    </div>
</div>


<!--
Jekyll Simple Search loader
See: <https://github.com/christian-fei/Simple-Jekyll-Search>
-->


<script src="https://cdn.jsdelivr.net/npm/simple-jekyll-search@1.10.0/dest/simple-jekyll-search.min.js"></script>

<script>
    SimpleJekyllSearch({
        searchInput: document.getElementById('search-input'),
        resultsContainer: document.getElementById('search-results'),
        json: './assets/js/data/search.json',
        searchResultTemplate: '<div class="pl-1 pr-1 pl-sm-2 pr-sm-2 pl-lg-4 pr-lg-4 pl-xl-0 pr-xl-0">  <a href="{url}">{title}</a>  <div class="post-meta d-flex flex-column flex-sm-row text-muted mt-1 mb-1">    {categories}    {tags}  </div>  <p>{snippet}</p></div>',
        noResultsText: '<p class="mt-5">搜索结果为空</p>',
        templateMiddleware: function (prop, value, template) {
            if (prop === 'categories') {
                if (value === '') {
                    return `${value}`;
                } else {
                    return `<div class="mr-sm-4"><i class="far fa-folder fa-fw"></i>${value}</div>`;
                }
            }

            if (prop === 'tags') {
                if (value === '') {
                    return `${value}`;
                } else {
                    return `<div><i class="fa fa-tag fa-fw"></i>${value}</div>`;
                }
            }
        }
    });
</script>


<!--
JS selector for site.
-->

<!-- layout specified -->
<?php get_footer(); ?>


<script src="https://cdn.jsdelivr.net/combine/npm/dayjs@1.11.6/dayjs.min.js,npm/dayjs@1.11.6/locale/zh.min.js,npm/dayjs@1.11.6/plugin/relativeTime.min.js,npm/dayjs@1.11.6/plugin/localizedFormat.min.js"></script>


<script defer src="./assets/js/dist/home.min.js"></script>


<!-- commons -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

