<?php
add_action('init',function(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //メニューをサポート
    register_nav_menus([
      'global_nav' => 'グローバルナビゲーション',
      'footer_nav' => 'フッターナビゲーション',
      'side_nav' => 'サイドナビゲーション',
      'smart_nav' => 'スマートフォンナビゲーション',
      'side_nav2' => 'サイドナビゲーション2',
      'smart_footer_navi' => 'スマートフッターナビ'
    ]);


});

// サムネイルのサイズ自動挿入を削除
add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
function remove_image_attribute( $html ){
$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
$html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
return $html;
}
function is_mobile() {
  $useragents = array(
      'iPhone',          // iPhone
      'iPod',            // iPod touch
      '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
      'dream',           // Pre 1.5 Android
      'CUPCAKE',         // 1.5+ Android
      'blackberry9500',  // Storm
      'blackberry9530',  // Storm
      'blackberry9520',  // Storm v2
      'blackberry9550',  // Storm v2
      'blackberry9800',  // Torch
      'webOS',           // Palm Pre Experimental
      'incognito',       // Other iPhone browser
      'webmate'          // Other iPhone browser
  );
  $pattern = '/'.implode('|', $useragents).'/i';
  return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}