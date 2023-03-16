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
        <li class="nav-item">
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








          <span>
            <a href="/">
              首页
            </a>
          </span>












            <span>Android踩坑 Failed to create EGL context:0x3003</span>








    </span><!-- endof #breadcrumb -->

        <i id="sidebar-trigger" class="fas fa-bars fa-fw"></i>

        <div id="topbar-title">
            文章
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


                    <!--
              Refactor the HTML structure.
            -->


                    <!--
                      In order to allow a wide table to scroll horizontally,
                      we suround the markdown table with `<div class="table-wrapper">` and `</div>`
                    -->


                    <!--
                      Fixed kramdown code highlight rendering:
                      https://github.com/penibelst/jekyll-compress-html/issues/101
                      https://github.com/penibelst/jekyll-compress-html/issues/71#issuecomment-188144901
                    -->


                    <!-- Change the icon of checkbox -->


                    <!-- images -->


                    <!-- Add header for code snippets -->


                    <!-- Create heading anchors -->


                    <!-- Wrap prompt element of blockquote with the <div> tag -->


                    <!-- return -->
                    <?php  while (have_posts()) {
                        the_post();
                    } ?>
                    <h1 data-toc-skip><?php  the_title('<h1>','</h1>'); ?></h1>

                    <div class="post-meta text-muted">
                        <!-- published date -->
                        <span>
      发表于
                            <!--
                        Date format snippet
                        See: ${JS_ROOT}/utils/locale-dateime.js
                      -->





<em class=""
    data-ts="1660127940"
    data-df="YYYY/MM/DD"
    data-toggle="tooltip" data-placement="bottom">
  2022/08/10
</em>

    </span>

                        <!-- lastmod date -->


                        <div class="d-flex justify-content-between">
                            <!-- author(s) -->
                            <span>


      作者

      <em>


          <a href=""></a>



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
  <em>3 分钟</em>阅读</span>

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

                            <a href='/categories/%E6%8A%80%E6%9C%AF%E7%AC%94%E8%AE%B0/'>技术笔记</a>
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
                    

                <!-- BS-toc.js will be loaded at medium priority -->
                <script src="https://cdn.jsdelivr.net/gh/afeld/bootstrap-toc@1.0.1/dist/bootstrap-toc.min.js"></script>

                <div id="toc-wrapper" class="pl-0 pr-4 mb-5">
                    <div class="panel-heading pl-3 pt-2 mb-2">文章内容</div>
                    <nav id="toc" data-toggle="toc"></nav>
                </div>


            </div>

        </div>

        <!-- tail -->

        <div class="row">
            <div id="tail-wrapper" class="col-12 col-lg-11 col-xl-9 pl-3 pr-3 pr-xl-4 mt-5">


                <!--
           Recommend the other 3 posts according to the tags and categories of the current post,
           if the number is not enough, use the other latest posts to supplement.
          -->

                <!-- The total size of related posts  -->


                <!-- An random integer that bigger than 0  -->


                <!-- Equals to TAG_SCORE / {max_categories_hierarchy}  -->


                <!-- Fill with the other newlest posts  -->


                <div id="related-posts" class="mb-2 mb-sm-4">
                    <h3 class="pt-2 mb-4 ml-1"
                        data-toc-skip>相关文章</h3>
                    <div class="card-deck mb-4">


                        <div class="card">
                            <a href="/posts/Android_GLReadpixles/">
                                <div class="card-body">
                                    <!--
                          Date format snippet
                          See: ${JS_ROOT}/utils/locale-dateime.js
                        -->


                                    <em class="small"
                                        data-ts="1660126440"
                                        data-df="YYYY/MM/DD"
                                    >
                                        2022/08/10
                                    </em>

                                    <h3 class="pt-0 mt-1 mb-3" data-toc-skip>Android美颜OpenGL
                                        GLReadpixles耗时的一种解决方案</h3>
                                    <div class="text-muted small">
                                        <p>


                                            Android美颜

                                            Pipeline:

                                            相机 -&amp;gt; YUV Raw-&amp;gt; 美颜库处理 -&amp;gt; YUV Raw -&amp;gt; 编码


                                            方案在Android 某些系统会遇到glreadpixles 耗时严重;

                                            可改为:

                                            相机 -&amp;gt;texture -&amp;gt; 美颜 -&amp;gt; texure -&amp;gt;mediacodec方案


                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="card">
                            <a href="/posts/Compile-ffmpeg-4.2.1-for-mac-os-with-openssl/">
                                <div class="card-body">
                                    <!--
                          Date format snippet
                          See: ${JS_ROOT}/utils/locale-dateime.js
                        -->


                                    <em class="small"
                                        data-ts="1660127460"
                                        data-df="YYYY/MM/DD"
                                    >
                                        2022/08/10
                                    </em>

                                    <h3 class="pt-0 mt-1 mb-3" data-toc-skip>Compile ffmpeg 4.2.1 for mac os with
                                        openssl</h3>
                                    <div class="text-muted small">
                                        <p>


                                            编译环境：mac os x 10.15.3 ， ffmpeg 4.2.1

                                            ./configure --target-os=darwin \
                                            --disable-programs \
                                            --libdir=./ffmpegbuild/lib \
                                            --incdir=./ffmpegbuild/include \
                                            ...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="card">
                            <a href="/posts/webrtc_pacedsender/">
                                <div class="card-body">
                                    <!--
                          Date format snippet
                          See: ${JS_ROOT}/utils/locale-dateime.js
                        -->


                                    <em class="small"
                                        data-ts="1660127700"
                                        data-df="YYYY/MM/DD"
                                    >
                                        2022/08/10
                                    </em>

                                    <h3 class="pt-0 mt-1 mb-3" data-toc-skip>WebRTC中PacedSender工作原理和代码分析</h3>
                                    <div class="text-muted small">
                                        <p>


                                            摘抄一段 PacedSender 简介，下面的链接对该模块的工作原理做了详细的介绍，今天大致看了下这个模块的代码，记录一下


                                            在estimator根据网络状态决策出新的通信码率（target
                                            bitrate），它会将这个码率设置到pacer当中，要求pacer按照新的码率来计算发包频率。因为在视频通信中，单帧视频可能有上百KB,如果是当视频帧被编码器编码出来后，就立即进行RTP打包发送...
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div> <!-- .card-deck -->
                </div> <!-- #related-posts -->


                <!--
            Navigation buttons at the bottom of the post.
          -->

                <div class="post-navigation d-flex justify-content-between">

                    <a href="/posts/webrtc_pacedsender/" class="btn btn-outline-primary"
                       prompt="上一篇">
                        <p>WebRTC中PacedSender工作原理和代码分析</p>
                    </a>


                    <a href="/posts/android_bitmap_argb8888_to_yuv420_I420_java_code/" class="btn btn-outline-primary"
                       prompt="下一篇">
                        <p>Android bitmap 字节数组Argb8888 转 yuv420p(I420) java 代码实现</p>
                    </a>


                </div>


                <!--  The comments switcher -->


                <!-- https://giscus.app/ -->
                <script type="text/javascript">
                    $(function () {
                        const origin = "https://giscus.app";
                        const iframe = "iframe.giscus-frame";
                        const lightTheme = "light";
                        const darkTheme = "dark_dimmed";
                        let initTheme = lightTheme;

                        if ($("html[data-mode=dark]").length > 0
                            || ($("html[data-mode]").length == 0
                                && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
                            initTheme = darkTheme;
                        }

                        let giscusAttributes = {
                            "src": "https://giscus.app/client.js",
                            "data-repo": "gezhaoyou/blog-comments",
                            "data-repo-id": "MDEwOlJlcG9zaXRvcnkzMjcxNjU1NDc=",
                            "data-category": "General",
                            "data-category-id": "DIC_kwDOE4Ama84CQupv",
                            "data-mapping": "url",
                            "data-reactions-enabled": "1",
                            "data-emit-metadata": "0",
                            "data-theme": initTheme,
                            "data-input-position": "top",
                            "data-lang": "zh-CN",
                            "crossorigin": "anonymous",
                            "async": ""
                        };

                        let giscusScript = document.createElement("script");
                        Object.entries(giscusAttributes).forEach(([key, value]) => giscusScript.setAttribute(key, value));
                        document.getElementById("tail-wrapper").appendChild(giscusScript);

                        addEventListener("message", (event) => {
                            if (event.source === window && event.data &&
                                event.data.direction === ModeToggle.ID) {
                                /* global theme mode changed */
                                const mode = event.data.message;
                                const theme = (mode === ModeToggle.DARK_MODE ? darkTheme : lightTheme);

                                const message = {
                                    setConfig: {
                                        theme: theme
                                    }
                                };

                                const giscus = document.querySelector(iframe).contentWindow;
                                giscus.postMessage({giscus: message}, origin);
                            }

                        });

                    });
                </script>


            </div>
        </div>


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
                        <?php if ( function_exists('wp_tag_cloud') ) : ?>
                            <ul>
                                <li><?php wp_tag_cloud('smallest=8&largest=22'); ?></li>
                            </ul>

                        <?php endif; ?>

<!--                        <a class="post-tag" href="/tags/%E7%94%9F%E6%B4%BB/">生活</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/webrtc/">WebRTC</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/opengl/">OpenGL</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/android/">Android</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/ffmpeg/">ffmpeg</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/ffmpeg/">FFmpeg</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/git/">git</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/typography/">typography</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/%E6%8A%80%E6%9C%AF%E7%AC%94%E8%AE%B0/">技术笔记</a>-->
<!---->
<!---->
<!--                        <a class="post-tag" href="/tags/%E7%9B%B4%E6%92%AD/">直播</a>-->


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
        json: '<?php echo get_template_directory_uri(); ?>/assets/js/data/search.json',
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


<!-- image lazy-loading & popup & clipboard -->


<script src="https://cdn.jsdelivr.net/combine/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js,npm/lazysizes@5.3.2/lazysizes.min.js,npm/clipboard@2.0.11/dist/clipboard.min.js"></script>


<script src="https://cdn.jsdelivr.net/combine/npm/dayjs@1.11.6/dayjs.min.js,npm/dayjs@1.11.6/locale/zh.min.js,npm/dayjs@1.11.6/plugin/relativeTime.min.js,npm/dayjs@1.11.6/plugin/localizedFormat.min.js"></script>


<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/dist/post.min.js"></script>


<!-- commons -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

