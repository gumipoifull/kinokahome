<section>
        <div class="footer_container">
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/kinokahome_logo.png" width="130" height="130" alt="きのかホームのロゴ">

            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/simplenote_logo.png" width="250" height="70" alt="シンプルノートのロゴ">

            <p><span>千葉中央スタジオ</span></p>

            <div class="footer_info">
                <p>運営会社：株式会社コヤス</p>
                <p>〒264-0020　千葉県千葉市若葉区貝塚2-14-21</p>
                <p>TEL 043-231-0806／FAX 043-232-8131</p>
                <p>営業時間 9:00～18:00　定休日 日曜・祝日</p>
            </div>
            <div class="footer_instagram">
                <a href="https://www.instagram.com/kinoka_home/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/instagram_01.png" width="35" height="35" alt="Instagramのロゴ"></a>
<p>©2021 Koyasu Inc.</p>
            </div>
        </div>
    </div>

                                        
</section>
            </div>

            <!-- モバイルメニュー -->
            <nav class="mobile-menu">


                <?php
                //メニューIDを取得する
                $menu_name = 'smart_nav';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object($locations[$menu_name]);

                $menu_items = wp_get_nav_menu_items($menu->term_id);
                ?>

                <ul class="mobile-menu__main">
                    <?php foreach ($menu_items as $item) : ?>
                        <li class="mobile-menu__item">
                            <a href="<?php echo esc_attr($item->url); ?>" class="mobile-menu__link">
                                <span class="main-title"><?php echo esc_html($item->title); ?></span>
                                <i class="fas fa-caret-right brown bai1-5"></i>
                            </a></li>
                    <?php endforeach; ?>
                </ul>

            </nav>
            </div>

            <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/btn.js"></script>
            <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
            <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>
            <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

            <?php wp_footer(); ?>

            </body>

            </html>