<!-- 最近更新文章 -->
<div id="access-lastmod" class="post">
    <div class="panel-heading">最近更新</div>
    <ul class="post-content pl-0 pb-1 ml-1 mt-2">
        <?php
            $recent_posts = wp_get_recent_posts();
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
            }
            wp_reset_query();
        ?>
    </ul>
</div> <!-- #access-lastmod -->



<div id="access-tags">
        <div class="panel-heading">热门标签</div>
        <div class="d-flex flex-wrap mt-3 mb-1 mr-3">
            <?php if ( function_exists('wp_tag_cloud') ) : ?>
                <?php wp_tag_cloud('smallest=8&largest=22'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

