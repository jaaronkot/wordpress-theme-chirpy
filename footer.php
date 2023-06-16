<footer>
    <div class="container pl-lg-4 pr-lg-4">
        <div class="d-flex justify-content-between align-items-center text-muted ml-md-3 mr-md-3">
            <div class="footer-left">
                <p class="mb-0">
                    <!-- 网站备案信息 -->
                    <a href="https://beian.miit.gov.cn" target="_blank" rel="noopener nofollow">京ICP备2023001817号 </a>
                    <?php 
                        $current_year = date( 'Y' ); 
                        echo '© '. $current_year;
                    ?>
                    <a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>.

                    <span data-toggle="tooltip" data-placement="top"
                          title="除非另有说明，本网站上的博客文章均由作者按照知识共享署名 4.0 国际 (CC BY 4.0) 许可协议进行授权。">保留部分权利。</span>

                </p>
            </div>

            <div class="footer-right">
                <p class="mb-0">本站由 <a href="https://wordpress.org/" target="_blank" rel="noopener nofollow">WordPress</a> 生成，采用
                    <a href="https://github.com/gezhaoyou/wordpress-theme-molly" target="_blank" rel="noopener nofollow">Molly</a>
                    主题。
                </p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
    <!-- code highlight | Add by zhaoyou -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("pre").addClass("prettyprint linenums");
            prettyPrint();
        });
    </script>

    <!-- Google tag (gtag.js) | Add by zhaoyou -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TDXWE8K8LF"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-TDXWE8K8LF');
    </script>
</footer>