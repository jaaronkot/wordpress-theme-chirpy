<!-- tags -->

<div class="post-tags">
  <i class="fa fa-tags fa-fw mr-1"></i>
  <?php 
    global $post;
    $post_id = get_the_ID(); 
    setup_postdata( $post_id );
    $tags = get_the_tags();
    
    if ( $tags ) {
        foreach ( $tags as $tag ) {
            echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="post-tag no-text-decoration">' . $tag->name . '</a>';
        }
    }
    wp_reset_postdata(); // 重置文章数据
  ?>
</div>