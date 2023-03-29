<div class="post-navigation d-flex justify-content-between">
    <!-- previous -->
    <?php $prev_post = get_previous_post();$next_post = get_next_post();?>
    <a href="<?php echo get_permalink( $prev_post->ID );?>" class="btn btn-outline-primary"
        prompt="上一篇">
        <p><?php echo $prev_post->post_title; ?></p>
    </a>
    <!-- next -->
    <a href="<?php echo get_permalink( $next_post->ID );?>" class="btn btn-outline-primary"
        prompt="下一篇">
         <p><?php echo $next_post->post_title; ?></p>
    </a>
 
</div>