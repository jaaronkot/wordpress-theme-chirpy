<!-- 最近更新文章 -->
<div id="access-lastmod" class="post">
    <div class="panel-heading">最近更新</div>
    <ul class="post-content pl-0 pb-1 ml-1 mt-2">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                }
            } else {
                // 如果没有找到文章，显示一条消息
                echo '没有找到文章。';
            }
            
            wp_reset_postdata();
        ?>
    </ul>
</div> <!-- #access-lastmod -->