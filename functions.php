<?php
  

//获取文章分类链接
function get_post_category_link($class = '', $icon = '', $cid = null, $default = null, $index = 0)
{
    return get_post_category_link_exec(false, $class, $icon, $cid, $default, $index);
}

function get_post_category_link_exec($all = true, $class = '', $icon = '', $cid = null, $default = null, $index = 0)
{
    global $cat;
    if ($default == null) {
        $default = __('无分类', PUOCK);
    }
    if ($cid != null) {
        $cate = get_category($cid);
        if ($cate != null) {
            return '<a ' . pk_link_target(false) . ' class="' . $class . '" href="' . get_category_link($cate) . '">' . $icon . $cate->name . '</a>';
        }
    } else {
        $cats = get_the_category();
        if (count($cats) > 0) {
            if ($all) {
                $out = "";
                foreach ($cats as $cate) {
                    $out .= '<a ' . pk_link_target(false) . ' class="' . $class . ' mr5" href="' . get_category_link($cate) . '"><i class="fa-regular fa-folder-open"></i> ' . $icon . $cate->name . '</a> ';
                }
                $out = mb_substr($out, 0, mb_strlen($out) - 1);
                return $out;
            } else {
                if (!is_category()) {
                    $cate = $cats[0];
                } else {
                    $cate = get_category($cat);
                }
                return '<a ' . pk_link_target(false) . ' class="' . $class . '" href="' . get_category_link($cate) . '"><i class="fa-regular fa-folder-open"></i> ' . $icon . $cate->name . '</a>';
            }
        }
    }
    return '<a class="' . $class . '" href="javascript:void(0)">' . $icon . $default . '</a>';
}
//获取阅读数量
function pk_get_post_views()
{
    if (function_exists('the_views')) {
        echo the_views(null, false);
    } else {
        echo 2;
    }
}

?>

