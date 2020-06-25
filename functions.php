<?php


//「メニュー」追加
register_nav_menus(
  array(
    'place_global' => 'グローバル',
    'place_sub' => 'サブメニュー',
  )
);

//記事ページならカテゴリー名、固定ページなら固定ページタイトル、カテゴリー一覧なら親カテゴリー名取得
function get_main_title(){
  if(is_singular('post')):
    $category_obj = get_the_category();
    return $category_obj[0]->name;
  elseif(is_page()):
    return get_the_title();
  elseif(is_category()):
    return single_cat_title();
  elseif(is_archive('video')):
    return "Video";
  endif;
}

//アイキャッチ画像項目追加
add_theme_support('post-thumbnails');


//子ぺーじを取得する関数（サブクエリ）
function get_child_pages($number = -1){
  $parent_id = get_the_ID();
  $args = array(
  'posts_per_page' => $number,
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'post_parent' => $parent_id,
);
$child_pages = new WP_Query($args);
return $child_pages;
}


//トップページで投稿ページの一覧を呼び出す関数
function get_specific_posts($post_type, $category_name = null, $post_per_page = -1){
  $args = array(
    'post_type' => $post_type,
    'category_name' => $category_name,
    'posts_per_page' => $post_per_page,
  );
$specific_posts = new WP_Query($args);
return $specific_posts;
};






// カスタムヘッダー画像を設置する
$custom_header_defaults = array(
  'default-image'          => get_bloginfo('template_url').'assets/img/noimage.png',
  'width'                  => 1200,
  'height'                 => 2167, //iphoneX対応
  'header-text'            => false,	//ヘッダー画像上にテキストをかぶせる
);
add_theme_support( 'custom-header', $custom_header_defaults );



//管理画面のメニューの順番
function custom_menu_order($menu_ord) {
  if(!$menu_ord) return true;
  
  return array(
    'index.php', // ダッシュボード
    'separator1', // 最初の区切り線
    'edit.php', // 投稿
    'edit.php?post_type=video', // ビデオ
    'edit.php?post_type=live', // ライブ情報
    'edit.php?post_type=page', // 固定ページ
    'separator2', // 2番目の区切り線
  //  'edit.php?post_type=mw-wp-form', // mw-wp-form
  );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');







//All In One SEO Pack プラグインを管理画面から非表示
function custom_admin_menu() {
  remove_menu_page( 'all-in-one-seo-pack/aioseop_class.php' );
}
add_action( 'admin_menu', 'custom_admin_menu', 1000 );


//All In One SEO Pack プラグインを投稿画面から非表示
function wp_custom_admin_css() { ?> 
  <style type="text/css">
  .edit-post-layout__metaboxes {
    display:none;
  }
  </style>
  <?php }
  add_action('admin_head', 'wp_custom_admin_css', 100);


//管理画面の「投稿」を「ニュース/ブログ」に変更
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'ニュース/ブログ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'ニュース/ブログ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );




//管理画面の「ニュース/ブログ」のカテゴリーとタグ編集ページを非表示
function hide_taxonomy_from_menu() {
  global $wp_taxonomies;

  // タグの非表示
  if ( !empty( $wp_taxonomies['post_tag']->object_type ) ) {
      foreach ( $wp_taxonomies['post_tag']->object_type as $i => $object_type ) {
          if ( $object_type == 'post' ) {
              unset( $wp_taxonomies['post_tag']->object_type[$i] );
          }
      }
  }
  return true;
}
add_action( 'init', 'hide_taxonomy_from_menu' );
  




?>







