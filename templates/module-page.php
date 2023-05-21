<div class="row">

  <!-- core -->
  <div id="core-wrapper" class="col-12 col-lg-11 col-xl-9 pr-xl-4">
    <div class="post pl-1 pr-1 pl-md-2 pr-md-2">
     
      <?php 
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); 
            if (is_single() || is_page()) {
              get_template_part('templates/module', 'post_content');
            } else {
              echo ' <div id="post-list">';
              get_template_part('templates/module', 'post_list');
              soda_paging();
              echo ' </div> <!-- #post-list -->';
            }
          } // end while
        } // end if
      ?>
    </div>
  </div> <!-- #core-wrapper -->

  <!-- panel -->
  <div id="panel-wrapper" class="col-xl-3 pl-2 text-muted">
    <div class="access">
      <?php get_template_part('templates/module','update_list'); ?>
      <?php get_template_part('templates/module','trending_tags'); ?>
    </div>
  </div>

  <div class="row">
  <div id="tail-wrapper" class="col-12 col-lg-11 col-xl-9 pl-3 pr-3 pr-xl-4 mt-5">
  <?php 
  if (is_single() || is_page()) {
    get_template_part('templates/related','posts'); 
  }
  ?>
  </div>
</div>
</div>
