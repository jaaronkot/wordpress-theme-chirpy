<div id="tags" class="d-flex flex-wrap ml-xl-2 mr-xl-2">
    <div>
    <?php
      // 获取所有标签
      $tags = get_terms( array(
        'taxonomy' => 'post_tag',
        'hide_empty' => false,
      ) );

      // 遍历每个标签
      foreach ( $tags as $tag ) {
        // 获取标签对象
        $tag_obj = get_term( $tag->term_id, 'post_tag' );

        // 获取标签的 URL
        $tag_url = get_tag_link( $tag->term_id );
       
        // 获取标签下文章的数量
        $count = $tag_obj->count;
        echo '<a class="tag" href="' . $tag_url . '">' . $tag->name . '<span class="text-muted">' . $count . '</span> </a>';
      }
    ?>
    </div>
</div>

