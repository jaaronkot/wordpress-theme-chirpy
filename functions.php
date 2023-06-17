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
/* 访问计数 */
function record_visitors()
{
	if (is_singular())
	{
	  global $post;
	  $post_ID = $post->ID;
	  if($post_ID)
	  {
		  $post_views = (int)get_post_meta($post_ID, 'views', true);
		  if(!update_post_meta($post_ID, 'views', ($post_views+1)))
		  {
			add_post_meta($post_ID, 'views', 1, true);
		  }
	  }
	}
}
add_action('wp_head', 'record_visitors');

/// 函数名称：soda_get_post_views
/// 函数作用：取得文章的阅读次数
function soda_get_post_views()
{
  global $post;
  $post_ID = $post->ID;
  $views = (int)get_post_meta($post_ID, 'views', true);
  return $views;
}

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

 
function soda_replace_pre($content)
{
    $content = str_replace('<pre class="wp-block-code"><code>', '<pre><code class="language-code">', $content);

    $content = preg_replace('/<pre><code class="language-(.*?)">/', '<div class="language-$1 highlighter-rouge"><div class="code-header">
    <span data-label-text="$1"><i class="fas fa-code small"></i></span>
    <button aria-label="copy" data-title-succeed="已复制！"><i class="far fa-clipboard"></i></button></div><div class="highlight"><code><table class="rouge-table"><tbody><tr><td class="rouge-gutter gl"></td><td class="rouge-code"><pre>
', $content);

    $content = str_replace('</code></pre>', '</pre></td></tr></tbody></table></code></div></div>', $content);
 
    $pattern = '/<code>(?!<table)/';
    $content = preg_replace($pattern, '<code class="language-plaintext highlighter-rouge">', $content);
    return $content;
}

add_filter('the_content', 'soda_replace_pre');


// 文章目录功能
function toc_content($content)
{
    if (is_singular()) {
        global $toc_count;
        global $toc;

        $toc = array();
        $toc_count = 0;
        $toc_depth = 3;

        $regex = '#<h([1-' . $toc_depth . '])(.*?).*>(.*?)</h\\1>#';
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

function soda_get_attachment_id ($img_url) {
	$cache_key	= md5($img_url);
	$post_id	= wp_cache_get($cache_key, 'wpjam_attachment_id' );
	if($post_id == false){

		$attr		= wp_upload_dir();
		$base_url	= $attr['baseurl']."/";
		$path = str_replace($base_url, "", $img_url);
		if($path){
			global $wpdb;
			$post_id	= $wpdb->get_var("SELECT post_id FROM $wpdb->postmeta WHERE meta_value = '{$path}'");
			$post_id	= $post_id?$post_id:'';
		}else{
			$post_id	= '';
		}

		wp_cache_set( $cache_key, $post_id, 'wpjam_attachment_id', 86400);
	}
	return $post_id;
}

function soda_gen_thumb_image ($post_id) {
    $url = 'https://fifo.site/wp-content/uploads/2023/05/thumb-' . rand(1, 36) . '.jpg';
    $attachment_id = soda_get_attachment_id($url);
    set_post_thumbnail( $post_id, $attachment_id);
}

// 添加文章缩略图
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 180, 120, true );

// 短代码
// 自定义短代码
function soda_custom_shortcode_tip( $atts, $content = null ) {
    return '<blockquote class="prompt-tip">' . $content . '</blockquote>';
}
add_shortcode( 'soda-sc-tip', 'soda_custom_shortcode_tip' );

function soda_custom_shortcode_info( $atts, $content = null ) {
    return '<blockquote class="prompt-info">' . $content . '</blockquote>';
}
add_shortcode( 'soda-sc-info', 'soda_custom_shortcode_info' );

function soda_custom_shortcode_warning( $atts, $content = null ) {
    return '<blockquote class="prompt-warning">' . $content . '</blockquote>';
}
add_shortcode( 'soda-sc-warning', 'soda_custom_shortcode_warning' );

function soda_custom_shortcode_danger( $atts, $content = null ) {
    return '<blockquote class="prompt-danger">' . $content . '</blockquote>';
}
add_shortcode( 'soda-sc-danger', 'soda_custom_shortcode_danger' );




//给文章内容添加灯箱
function light_box_text_replace($content)
{
    $pattern = '/<img [\w\W]*? src="(.*?)" [\w\W]*?\/>/';
    $replacement = '<a href="$1" class="popup img-link"> <img class="lazyload" data-src="$1" data-proofer-ignore></a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}

add_filter('the_content', 'light_box_text_replace', 99);


//给图片加上alt/title
function content_img_add_alt_title($content)
{
    global $post;
    preg_match_all('/<img (.*?)\/>/', $content, $images);
    if (!is_null($images)) {
        $title = @$post->post_title;
        foreach ($images[1] as $index => $value) {
            $new_img = str_replace('<img', '<img title="' . $title . '"
             alt="' . $title . '"', $images[0][$index]);
            $content = str_replace($images[0][$index], $new_img, $content);
        }
    }
    return $content;
}

add_filter('the_content', 'content_img_add_alt_title', 99);
?>