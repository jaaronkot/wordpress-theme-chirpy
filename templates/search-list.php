  <div class="card post-preview">
      <a href="<?php the_permalink() ?>">
      <div class="card-body">
          <?php
            if ( !has_post_thumbnail() ) {
                soda_gen_thumb_image(get_the_ID());
            }
            if ( has_post_thumbnail() ) {
                $thumb_id = get_post_thumbnail_id(); // 获取特色图片的 ID
                $thumb_url = wp_get_attachment_image_src( $thumb_id, 'large' )[0]; // 获取特色图片的 URL
                echo '<img class="card-thumb-small" src="' . $thumb_url . '" alt="' . get_the_title() . '">';
            }
          ?>
          <h1 class="card-title">
          <?php the_title() ?>
          </h1>
          <div class="card-text post-content">
          <p>
            <?php 
                // 获取搜索关键词
                $search_query = get_search_query();
                // 获取文章摘要
                $excerpt = get_the_excerpt();
                $excerpt_highlighted = preg_replace('/(' . $search_query . ')/i', '<span class="search-highlight">$1</span>', $excerpt);
                // 输出带有高亮样式的文章摘要
                echo $excerpt_highlighted;
            ?>
          </p>
          </div>

          <div class="post-meta text-muted d-flex">
          <div class="mr-auto">
              <!-- posted date -->
              <i class="far fa-calendar fa-fw"></i>
              <?php the_time('Y/n/d'); ?>
              <!-- categories -->

              <i class="far fa-folder-open fa-fw"></i>
              <span>
                  <?php  foreach((get_the_category()) as $category)  { 
                      echo "<span>";
                      echo $category->cat_name;  
                      echo " </span>";
                      break;
                  }  ?>
              </span>
          </div>        
          </div>
          <!-- .post-meta -->
      </div>
      </a>
  </div>
  <!-- .post-review -->
  