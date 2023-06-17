<?php the_title('<h1 data-toc-skip>', '</h1>'); ?>


<div class="post-meta text-muted">
    <!-- published date -->
    <span>
      发表于: <?php the_time('Y/n/d'); ?>
    </span>
    <div class="mt-3 mb-3">
      <?php
      /*
        if ( has_post_thumbnail() ) { // 判断当前文章是否有特色图片
            $thumb_id = get_post_thumbnail_id(); // 获取特色图片的 ID
            $thumb_url = wp_get_attachment_image_src( $thumb_id, 'large' ); // 获取特色图片的 URL
            echo '<a href="' . $thumb_url[0] . '" class="popup img-link preview-img">';
            echo '<img class="lazyload" data-src="' . $thumb_url[0] . '" alt="' . get_the_title() . '" w="1200" h="630"></a>';
        }
        */
      ?>
    </div>
    <div class="d-flex justify-content-between">
      <!-- author(s) -->
      <span>
        作者:
        <em>
          <a href="<?php global $authordata;
            if ($authordata) {
              echo get_author_posts_url($authordata->ID,
              $authordata->user_nicename);
            } ?>">
            <?php the_author() ?> </a>
        </em>
      </span>

      <div>
        <!-- page views -->
        <span>
          <em id="pv" class="pageviews">
            <i class="fa-regular fa-eye"></i>
          </em>
          <?php echo soda_get_post_views(); ?> 
        </span>
      </div>

    </div> <!-- .d-flex -->
</div> <!-- .post-meta -->

<div class="post-content">
  <?php the_content(); ?>
</div>

<div class="post-tail-wrapper text-muted">

  <!-- categories -->
  <div class="post-meta mb-3">
    <i class="far fa-folder-open fa-fw mr-1"></i>
    <?php foreach ((get_the_category()) as $category) {
        $category_link = esc_url( get_category_link( $category->term_id ) );
        $category_name = esc_html( $category->name );
        echo '<a href="' . $category_link . '">' . $category_name. '</a>';
    } ?>
  </div>
   
  <?php get_template_part('templates/post', 'tag') ?>

  <div class="post-tail-bottom
    d-flex justify-content-between align-items-center mt-3 pt-5 pb-2">
    <div class="license-wrapper">
    本文由作者按照 <a href="https://creativecommons.org/licenses/by/4.0/"> CC BY 4.0 </a> 进行授权
    </div>

  <?php get_template_part('templates/post', 'sharing') ?>

  </div><!-- .post-tail-bottom -->

</div><!-- div.post-tail-wrapper -->

