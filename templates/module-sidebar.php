
<!--
The Side Bar
-->

<div id="sidebar" class="d-flex flex-column align-items-end">
    <div class="profile-wrapper text-center">
        <div id="avatar">
            <a href="/" class="mx-auto">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar.jpg" alt="avatar" onerror="this.style.display='none'">
            </a>
        </div>

        <div class="site-title">
            <a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
        </div>
        <div class="site-subtitle"><?php echo get_bloginfo('description'); ?></div>

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
