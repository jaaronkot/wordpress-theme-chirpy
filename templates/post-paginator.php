<?php
 // 获取当前页码
 $current_page = max(1, get_query_var('paged'));
 // 获取总分页数
 $total_pages = $wp_query->max_num_pages;

 $disable = '';
 $pre_page_url = '';
 if($current_page == 1) {
  $disable = 'disabled';
  $pre_page_url = get_pagenum_link($current_page);
 } else {
  $pre_page_url = get_pagenum_link($current_page - 1);
 }
?>
<ul class="pagination align-items-center mt-4 pl-lg-2">
  <!-- left arrow -->
  <li class="page-item <?php echo $disable ?>">
    <a class="page-link btn-box-shadow" href=" <?php echo $pre_page_url ?>" aria-label="previous-page">
      <i class="fas fa-angle-left"></i>
    </a>
  </li>

  <!-- page numbers -->
  <?php 
  $left_ellipsis = false;
  $right_ellipsis = false;
  
 
  for ($i = 1; $i <= $total_pages; $i++) {
    $pre = $current_page - 1;
    $next = $current_page + 1;
    $pre_less = $pre - 1;
    $next_more = $next + 1;
    $show = false;

    if($current_page == 1) {
      if ($i <= 3 || $i == $total_pages) {
        $show = true;
      }
    } else if ($current_page == $total_pages) {
        if ($i == 1 || $i >= $pre_less) {
          $show = true;
        }
    } else {
        if ($i == 1 || $i == $total_pages) {
          $show = true;
        } else if ($i >= $pre && $i <= $next) {
          $show = true;
        }
    }
    ?>
    <?php if ($show) { ?>
      <li class="page-item <?php if ($i == $current_page) echo 'active';?>">
        <a class="page-link btn-box-shadow" href="<?php if ($i > 1) {echo get_pagenum_link($i); } else { echo get_pagenum_link($i); } ?>"> <?php echo $i ?> </a>
      </li>     
    <?php } else { ?>
      <!-- hide number -->
      <?php if ($i < $pre && $left_ellipsis == false) { ?>
        <li class="page-item disabled">
          <span class="page-link btn-box-shadow">...</span>
        </li>
      <?php  $left_ellipsis = true;
        } else if ($i > $next && $right_ellipsis == false) { ?>
        <li class="page-item disabled">
          <span class="page-link btn-box-shadow">...</span>
        </li>
        <?php $right_ellipsis = true;
        } 
    }
  } // for
?>
  <!-- mobile pagination -->
  <li class="page-index align-middle">
    <span> <?php echo $current_page ?></span>
    <span class="text-muted">/ <?php echo $total_pages ?></span>
  </li>

  <!-- right arrow -->
  <?php 
  $disable = '';
  if($current_page < $total_pages) {
    $next_url = get_pagenum_link($current_page + 1);
  } else {
    $next_url = "#";
    $disable = 'disabled';
  }
  echo '<li class="page-item ' . $disable . '">';
  echo'  <a class="page-link btn-box-shadow" href="' . $next_url . '" aria-label="next-page">';
    ?>
      <i class="fas fa-angle-right"></i>
    </a>
  </li>
</ul> <!-- .pagination -->