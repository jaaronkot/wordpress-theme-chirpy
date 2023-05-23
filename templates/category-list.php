<div id="page-category">
  <h1 class="pl-lg-2">
    <i class="far fa-folder-open fa-fw text-muted"></i>
    <?php
        $categories = get_the_category();
        if ( !empty( $categories ) ) {
            $category = $categories[0];
            echo esc_html( $category->name );
            $post_count = $category->count;
            echo '<span class="lead text-muted pl-2">' . $post_count . '</span>';
        }
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