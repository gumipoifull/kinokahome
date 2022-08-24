<div class="sidebar">
    <div class="book_small mb20">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/booklet"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/booklet_thumbnail_s.jpg"></a>
    </div>

    <?php
    //メニューIDを取得する
    $menu_name = 'side_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);

    $menu_items = wp_get_nav_menu_items($menu->term_id);
    ?>

    <ul class="side_menu">
        <?php foreach ($menu_items as $item) : ?>
            <li>
                <a href="<?php echo esc_attr($item->url); ?>" class="">
                    <p><?php echo esc_html($item->title); ?></p>
                    <i class="fas fa-caret-right green bai1-5"></i>
                </a></li>
        <?php endforeach; ?>
    </ul>

</div>