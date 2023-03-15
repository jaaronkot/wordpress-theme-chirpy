<!-- post list-->
<div class="post-preview">
    <h1>
        <?php the_title();  echo "<a href=".get_permalink().">";
        ?>
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

            <em class=""
                data-ts="1660127700"
                data-df="YYYY/MM/DD"
            >
                2022/08/10
            </em>

            <!-- categories -->

            <i class="far fa-folder-open fa-fw"></i>
            <span> 技术笔记 </span>
        </div>

    </div> <!-- .post-meta -->
</div> <!-- .post-review -->

