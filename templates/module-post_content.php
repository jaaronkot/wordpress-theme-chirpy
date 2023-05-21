<?php the_title('<h1 data-toc-skip>', '</h1>'); ?>

<div class="post-meta text-muted">
    <!-- published date -->
    <span>
      发表于: <?php the_time('Y/n/d'); ?>
    </span>

 
 

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
          <i class="fas fa-spinner fa-spin fa-fw"></i>
        </em>
        <?php get_post_views($post -> ID); ?> 
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
                  echo " <a href=''>";
                  echo $category->cat_name;
                  echo "</a>";
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

