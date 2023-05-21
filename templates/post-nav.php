<div class="post-navigation d-flex justify-content-between">
    <?php 
        $prev_post = get_adjacent_post( false, '', true );
        $next_post = get_adjacent_post( false, '', false );
        
        if ( $prev_post ) {
            echo '<a href="' . get_permalink( $prev_post->ID ) . '" class="btn btn-outline-primary"
            prompt="上一篇">';
            echo '<p>' . get_the_title( $prev_post->ID ) . '</p></a>';
        
        } else {
            echo '<div class="btn btn-outline-primary disabled"';
            echo 'prompt="上一篇">';
            echo '<p>-</p>';
            echo ' </div>';
        }
        
        if ( $next_post ) {
            echo  '<a href="' . get_permalink( $next_post->ID ) . '" class="btn btn-outline-primary"
            prompt="下一篇">';
            echo '<p>' . get_the_title( $next_post->ID ) . '</p></a>';
        } else {
            echo  '<div class="btn btn-outline-primary disabled"';
            echo  ' prompt="下一篇">';
            echo  ' <p>-</p>';
            echo  '</div>';
        }
    ?>
</div>
