<div class="card categories">
  <!-- top-category -->
      <?php
      $categories = get_categories();
      $parent_categories = array();
      foreach ($categories as $category) {
          if ($category->parent == 0) { // 如果分类没有父分类，则为父分类
              $parent_categories[$category->cat_ID] = array(
                  'name' => $category->name,
                  'url' => get_category_link($category->term_id),
                  'id' => $category->term_id,
                  'count' => $category->count, // 父分类数量为所有子分类数量之和
                  'children' => array()
              );
          } else { // 如果分类有父分类，则为子分类，将其添加到对应的父分类中
              if (isset($parent_categories[$category->parent])) {
                  $parent_categories[$category->parent]['children'][] = array(
                      'name' => $category->name,
                      'url' => get_category_link($category->term_id),
                      'count' => $category->count // 子分类数量
                  );
                  $parent_categories[$category->parent]['count'] += $category->count; // 父分类数量为所有子分类数量之和
              }
          }
      }
    
      foreach ($parent_categories as $parent_category) {
            echo '<div id="h_0" class="card-header d-flex justify-content-between hide-border-bottom">';
            echo '<span>';
            $sub_cats_count = $parent_category['count'];
            $parent_category_id = $parent_category['id']; 
            $child_category_ids = get_term_children($parent_category_id, 'category'); // 获取父分类下所有子分类的 ID 数组
            $has_sub_category = !empty($child_category_ids);
            if ($has_sub_category) { // 如果父分类没有子分类，则只获取父分类的文章数量
              echo '<i class="far fa-folder-open fa-fw"></i>';
            } else { 
              echo '<i class="far fa-folder fa-fw"></i>';
            }
           
            echo '<a href="' . $parent_category['url'] . '" class="ml-1 mr-2">' . $parent_category['name'] . '</a>';
            echo '<span class="text-muted small font-weight-light">';
            echo $sub_cats_count . ' 篇文章';
            echo '</span>';
            echo '</span>';

            if($has_sub_category) { 
              echo '<a href="/" data-toggle="collapse"';
              echo '  aria-expanded="true" aria-label="h_0-trigger"';
              echo '  class="category-trigger hide-border-bottom">';
              echo '  <i class="fas fa-fw fa-angle-down"></i>';
              echo '</a>';
            } else {
              echo '<span data-toggle="collapse" class="category-trigger hide-border-bottom disabled">';
              echo '  <i class="fas fa-fw fa-angle-right"></i>';
              echo '</span>';
          }
            echo ' </div>';

          foreach ($parent_category['children'] as $child_category) {
              echo '<div id="l_0" class="collapse show" aria-expanded="true">';
              echo '	<ul class="list-group">';
              echo '	  <li class="list-group-item">';
              echo '	    <i class="far fa-folder fa-fw"></i>';
              echo '	    <a href="' . $child_category['url'] . '" class="ml-1 mr-2">' . $child_category['name'] . '</a>';
              echo '	    <span class="text-muted small font-weight-light">';
              echo        $child_category['count'] . ' 篇文章';
              echo '	    </span>';
              echo '	  </li>';
              echo '	</ul>';
              echo '</div>';
          }
      }
      ?>
</div> <!-- .card -->