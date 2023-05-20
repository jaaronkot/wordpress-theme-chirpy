<!-- 最近更新文章 -->
<div id="access-lastmod" class="post">
    <div class="panel-heading">最近更新</div>
    <ul class="post-content pl-0 pb-1 ml-1 mt-2">
        <?php
            $recent_posts = wp_get_recent_posts(array('numberposts' => 5));
            foreach( $recent_posts as $recent ){
                echo '<li><a href="' . get_permalink($recent["ID"]) . '">' . $recent["post_title"] . '</a></li>';
            }
            wp_reset_query();
        ?>
    </ul>
</div> <!-- #access-lastmod -->