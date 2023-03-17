<!-- post list-->
<div class="post-preview">
    <h1>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </h1>
   <div class="post-content">
        <p>
            <?php the_excerpt(); ?>
        </p>
    </div>

    <div class="post-meta text-muted d-flex">
        <div class="mr-auto">
            <!-- posted date -->
            <i class="far fa-calendar fa-fw"></i>

            <em class="">
            <?php the_time('Y年n月d日'); ?>
            </em>

            <!-- categories -->

            <i class="far fa-folder-open fa-fw"></i>
             <?php  foreach((get_the_category()) as $category)  { 
                    echo "<span>";
                    echo $category->cat_name;  
                    echo " </span>";
                    break;
            }  ?> 
                           
        </div>

    </div> <!-- .post-meta -->
</div> <!-- .post-review -->

