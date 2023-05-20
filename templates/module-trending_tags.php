<div id="access-tags">
        <div class="panel-heading">热门标签</div>
        <div class="d-flex flex-wrap mt-3 mb-1 mr-3">
            <?php if ( function_exists('wp_tag_cloud') ) : ?>
                <?php wp_tag_cloud('smallest=8&largest=22'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php if(is_single()) {
    get_template_part('templates/post', 'toc');
}?>   
