
<div id="related-posts" class="mb-2 mb-sm-4">
  <h3 class="pt-2 mb-4 ml-1"
    data-toc-skip>相关文章</h3>
  <div class="card-deck mb-4">
  <?php 
    $args = array(
      'posts_per_page' => 3,
      'orderby' => 'rand',
    );

    $random_posts = get_posts( $args );
    if ( $random_posts ) {
        foreach ( $random_posts as $post ) {
            setup_postdata( $post );
            echo '<div class="card">';
            echo '<a href="' . esc_url( get_permalink() ) . '">';
            echo '<div class="card-body">';
            echo '<em class="small">';
            echo get_the_date('Y/m/d');
            echo '</em>';
           
            echo '<h4 class="pt-0 my-2" data-toc-skip>' . get_the_title() . '</h4>';
            echo '<div class="text-muted small">';
            echo '<p>';
            echo get_the_excerpt();
            echo '      </p>';
            echo '     </div>';
            echo '   </div>';
            echo '  </a>';
            echo ' </div>';
        }
        wp_reset_postdata();
    }
  ?>
  </div> <!-- .card-deck -->
</div> <!-- #related-posts -->
