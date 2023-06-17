<div id="archives" class="pl-xl-3">
<?php
    $years = $wpdb->get_col("
        SELECT DISTINCT YEAR(post_date)
        FROM $wpdb->posts
        WHERE post_type = 'post'
        AND post_status = 'publish'
        ORDER BY post_date DESC
    ");

    // 输出年份列表
    foreach ($years as $year) {
      echo '<div class="year lead">' . $year . '</div>';
      echo '<ul class="list-unstyled">';
    
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1, // 获取所有文章
        'date_query' => array(
            array(
                'year' => $year,
            ),
        ),
    );
    
    $query = new WP_Query( $args );
    
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            echo '<li>';
            echo '  <span class="date month small text-muted ml-1" >' . '- ' . get_the_date('m') . '-' . get_the_date('d') . '</span>';
            echo '  <a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
            echo '</li>';
        }
    } else {
        // 如果没有找到文章
        echo '没有找到符合条件的文章';
    }
    // 重置查询
    wp_reset_postdata();
    echo '</ul>';
    }
?>
</div>