<?php
// record visitors
function record_visitors() {
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

// get post read times
function molly_get_post_views() {
  global $post;
  $post_ID = $post->ID;
  $views = (int)get_post_meta($post_ID, 'views', true);
  return $views;
}

// replace excerpt read more
function theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'theme_excerpt_more');

// Set post excerpt size
function theme_excerpt_length($length) {
    return 120;
}
add_filter("excerpt_length", "theme_excerpt_length");

// code high light  
function  molly_replace_pre($content) {
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

add_filter('the_content', 'molly_replace_pre');

/****************** POST TOC BEGIN ***********************/
function toc_replace_heading($content) {
    global $toc_count;
    global $toc;
    $toc_count++;
    $toc[] = array('text' => trim(strip_tags($content[3])), 'depth' => $content[1], 'count' => $toc_count);
    return "<h{$content[1]} id=\"{$content[3]}\"> <span class=\"mr-{$content[1]}\">{$content[3]}</span> <a href=\"#{$content[3]}\" class=\"anchor text-muted\"><i class=\"fas fa-hashtag\"></i></a></h{$content[1]}>";
}

function toc_content($content) {
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
/****************** POST TOC END ***********************/

/************* generate random thumb image - BEGIN *********/
// private
function molly_get_attachment_id ($img_url) {
	$cache_key	= md5($img_url);
	$post_id	= wp_cache_get($cache_key, 'molly_attachment_id' );
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

		wp_cache_set( $cache_key, $post_id, 'molly_attachment_id', 86400);
	}
	return $post_id;
}

// generate random thumb image
function molly_gen_thumb_image ($post_id) {
    $url = 'https://fifo.site/wp-content/uploads/2023/05/thumb-' . rand(1, 36) . '.jpg';
    $attachment_id = molly_get_attachment_id($url);
    set_post_thumbnail( $post_id, $attachment_id);
}

// post enable thumb.
add_theme_support( 'post-thumbnails' );
// set post thumb size.
set_post_thumbnail_size( 180, 120, true );
/*********** generate random thumb image -- END ************/

// Image add lightbox
function img_light_box_text_replace($content) {
    $pattern = '/<img [\w\W]*? src="(.*?)" ([\w\W]*?)\/>/';
    $replacement = '<a href="$1" class="popup img-link"> <img class="lazyload" data-src="$1" $2></a>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}
add_filter('the_content', 'img_light_box_text_replace', 99);

//Image add alt/title
function content_img_add_alt_title($content) {
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

/**  ------------------ SHORT CODE BEGIN------------------- ****/
// short code - tip
function molly_shortcode_tip( $atts, $content = null ) {
    return '<blockquote class="prompt-tip">' . $content . '</blockquote>';
}
add_shortcode( 'molly-sc-tip', 'molly_shortcode_tip' );

// short code - info
function molly_shortcode_info( $atts, $content = null ) {
    return '<blockquote class="prompt-info">' . $content . '</blockquote>';
}
add_shortcode( 'molly-sc-info', 'molly_shortcode_info' );

// short code - warning
function molly_shortcode_warning( $atts, $content = null ) {
    return '<blockquote class="prompt-warning">' . $content . '</blockquote>';
}
add_shortcode( 'molly-sc-warning', 'molly_shortcode_warning' );

// short code - danger
function molly_shortcode_danger( $atts, $content = null ) {
    return '<blockquote class="prompt-danger">' . $content . '</blockquote>';
}
add_shortcode( 'molly-sc-danger', 'molly_shortcode_danger' );
//  ------------------ SHORT CODE END------------------- //
?>