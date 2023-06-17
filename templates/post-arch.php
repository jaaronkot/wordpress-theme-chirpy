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
      for ($month = 1; $month <= 12; $month++) {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1, // 获取所有文章
            'year' => $year,
            'monthnum' => $month,
            );
        
            $query = new WP_Query( $args );
            
            if ( $query->have_posts() ) {
                echo '<span class="title-month small text-muted ml-1" >' . $month . ' 月 </span>';
                while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '<li>';
                    echo '  <span class="date month small text-muted ml-1" >' . get_the_date('m') . '-' . get_the_date('d') . '</span>';
                    echo '  <a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
                    echo '</li>';
                }
            } else {
                continue;
            }
            // 重置查询
            wp_reset_postdata();
            echo '</ul>';
      }
    }
?>
</div>