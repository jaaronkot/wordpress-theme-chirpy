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
    
      // 构建查询参数
      $args = array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'date_query' => array(
              array(
                  'year' => $year,
              ),
          ),
      );

      // 获取文章列表
      $posts = get_posts( $args );

      // 循环输出文章信息
      foreach ( $posts as $post ) {
          setup_postdata( $post );
          echo '<li>';
          echo '  <span class="date day"> ' . get_the_date('d') . '</span>';
          echo '  <span class="date month small text-muted ml-1" >' . '/' . get_the_date('m') . '</span>';
          echo '  <a href="' . get_the_permalink() . '">' . get_the_title() . '</a>';
          echo '</li>';
      }
      wp_reset_postdata();
      echo '</ul>';
    }
?>
</div>

