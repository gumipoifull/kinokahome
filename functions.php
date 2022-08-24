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

