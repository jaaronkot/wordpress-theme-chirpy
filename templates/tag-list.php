<div id="page-tag">
  <h1 class="pl-lg-2">
    <i class="far fa-folder-open fa-fw text-muted"></i>
    <?php
        // 当前tag名字
        single_tag_title();
        // 获取当前tag下文章数量
        $tag = get_queried_object();
        $tag_id = $tag->term_id;
        
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'post_tag',
                    'field'    => 'term_id',
                    'terms'    => $tag_id,
                ),
            ),
        );
        
        $query = new WP_Query( $args );
        $count = $query->post_count;
        echo '<span class="lead text-muted pl-2">' . $count . '</span>';
    ?>
  </h1>

  <ul class="post-content pl-0">
  <?php 
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();             
            echo '<li class="d-flex justify-content-between pl-md-3 pr-md-3">';
            echo '<a href="' . get_permalink() . '">' . get_the_title() . '</a>';
            echo ' <span class="dash flex-grow-1"></span>';
            echo '<span class="text-muted small">' . get_the_time('Y/n/d') . ' </span>';
            echo '</li>';
        } // end while
    } // end if
  ?>
  </ul>
</div>