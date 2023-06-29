 <div id="access-tags">
    <div class="panel-heading">热门标签</div>
        <div class="d-flex flex-wrap mt-3 mb-1 mr-3">
            <?php 
            $count = 0;
            $tags = get_tags( array(
                'number' => 10
            ) );
            foreach ( $tags as $tag ) {
                $tag_name = $tag->name;
                $tag_url = get_tag_link( $tag->term_id );
                echo '<a class="post-tag" href="' . $tag_url . '">' . $tag_name . '</a>';
            }
            ?>
        </div>
    </div>
</div>

<?php if(is_single()) {
    get_template_part('templates/post', 'toc');
}?>   
