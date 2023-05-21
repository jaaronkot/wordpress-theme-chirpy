<?php
//分页功能
if (!function_exists('soda_paging')) {
    function soda_paging($pnum = 2)
    {
        if (is_singular()) {
            return;
        };
        global $wp_query, $paged;
        $max_page = $wp_query->max_num_pages;
        if ($max_page == 1) return;
        echo '<ul class="pagination align-items-center mt-4 pl-lg-2">';
        if (empty($paged)) $paged = 1;
        echo '<li class="page-item disabled">';
        echo '<a class="page-link btn-box-shadow" href="/" aria-label="previous-page">';
        echo '<i class="fas fa-angle-left"></i>';
        echo '</a>';
        echo '</li>';
        if ($paged > $pnum + 1) page_link(1);
        if ($paged > $pnum + 2) echo "<li><a href='javascript:void(0)'>...</a></li>";
        for ($i = $paged - $pnum; $i <= $paged + $pnum; $i++) {
            if ($i > 0 && $i <= $max_page) {
                if ($i == $paged) {
                    echo '<li class="page-item  active">';
                    echo "<a class='page-link btn-box-shadow'>{$i}</a>";
                    echo '</li>';
                } else {
                    echo '<li class="page-item">';
                    page_link($i);
                    echo '</li>';
                }
            }
        }

        if ($paged < $max_page - $pnum - 1) {
            echo "<li><a href='javascript:void(0)'>...</a></li>";
            page_link($max_page);
        }

        echo '<li class="page-item ">';
        echo '<a class="page-link btn-box-shadow" href="" aria-label="next-page">';
        echo '<i class="fas fa-angle-right"></i>';
        echo '</a>';
        echo '</ul>';
    }

    function page_link($i, $title = '')
    {
        echo "<a class='page-link btn-box-shadow' href='", esc_html(get_pagenum_link($i)), "'>{$i}</a>";
    }
}

// 获取文章的阅读次数
function get_post_views ($post_id) {

    $count_key = 'views';
    $count = get_post_meta($post_id, $count_key, true);

    if ($count == '') {
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
        $count = '0';
    }

    echo number_format_i18n($count);

}

// 设置更新文章的阅读次数
function set_post_views () {

    global $post;

    $post_id = $post -> ID;
    $count_key = 'views';
    $count = get_post_meta($post_id, $count_key, true);

    if (is_single() || is_page()) {

        if ($count == '') {
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
        } else {
            update_post_meta($post_id, $count_key, $count + 1);
        }

    }

}
add_action('get_header', 'set_post_views');

// 去掉首页文章摘要的中括号
function theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'theme_excerpt_more');

// 文章摘要长度
function theme_excerpt_length($length) {
    return 100;
}
add_filter("excerpt_length", "theme_excerpt_length");



//给图片加上alt/title
function content_img_add_alt_title($content)
{
 
 
    $content = str_replace('<pre class="wp-block-code"><code>', '<div class="language-bash highlighter-rouge"><div class="code-header">
    <span data-label-text="code"><i class="fas fa-code small"></i></span>
  <button aria-label="copy" data-title-succeed="已复制！"><i class="far fa-clipboard"></i></button></div><div class="highlight"><code><table class="rouge-table"><tbody><tr><td class="rouge-gutter gl"></td><td class="rouge-code"><pre>
', $content);

    $content = str_replace('</code></pre>', '</pre></td></tr></tbody></table></code></div></div>', $content);
 
    $pattern = '/<code>(?!<table)/';
    $content = preg_replace($pattern, '<code class="language-plaintext highlighter-rouge">', $content);
    return $content;
}

add_filter('the_content', 'content_img_add_alt_title');


// 文章目录功能
function toc_content($content)
{
    if (is_singular()) {
        global $toc_count;
        global $toc;

        $toc = array();
        $toc_count = 0;
        $toc_depth = 3;

        $regex = '#<h([1-' . $toc_depth . '])(.*?)>(.*?)</h\\1>#';
        $content = preg_replace_callback($regex, 'toc_replace_heading', $content);
    }
    return $content;
}
add_filter('the_content', 'toc_content');

function toc_replace_heading($content)
{
    global $toc_count;
    global $toc;

    $toc_count++;

    $toc[] = array('text' => trim(strip_tags($content[3])), 'depth' => $content[1], 'count' => $toc_count);

    return "<h{$content[1]} id=\"{$content[3]}\"> <span class=\"mr-{$content[1]}\">{$content[3]}</span> <a href=\"#{$content[3]}\" class=\"anchor text-muted\"><i class=\"fas fa-hashtag\"></i></a></h{$content[1]}>";
}
?>

