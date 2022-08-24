     <div class="footer_info">
                <div class="inner">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/newlogo.png">
					    <p>住宅建築を木材のプロがサポート</p>
                    <!-- <div>
                        <p>自然素材を選び放題の家　　　レバンテ</p>
                        <p>省エネ住宅を手ごろな値段で　アリエ</p>
                        <p>千葉市四街道市で家を建てるなら　きのかホーム</p>
                     </div> -->
					</div>

                </div>
            </div>

            <!-- お問合せ -->
            <div class="contact mt50">
                <div class="inner">
                    <div class="inner_left">
                        <div class="inner_in1">
							<p>お電話でのお問い合わせは</p>
							<p>今すぐこちらから</p>
						<div class="tel_num2">
                        <p><span style="font-size:22px;"><a href="tel:043-231-0806">043-231-0806</a></span></p>
						</div>
                        </div>
                        <div class="inner_in2 mb10">
                            <p>営業時間：9：00～18：00</p>
                            <p>定休日：日曜日、祝日</p>
                        </div>
                    </div>

                    
<!-- お電話・お問合せアイコン　ここから -->
<!--
                    <div class="inner_in3">
                        <div class="inner_in3_1">
                            <a href="tel:0463-39-6940">
                                <i class="fas fa-phone fa-2x white mb5"></i>
                                <p>お電話</p>
                            </a>
                        </div>

                        <div class="inner_in3_2">
                            <a href="<?php echo get_stylesheet_directory_uri(); ?>/contact/">
                                <i class="far fa-envelope white fa-2x mb5"></i></a>
                                <a href="<?php echo get_stylesheet_directory_uri(); ?>/contact/"><p>お問合せ</p>
                            </a>
                        </div>
                    </div>
                    
-->
<!-- お電話・お問合せアイコン　ここまで -->                    
                    
                </div>
            </div>



<!--
            <div class="footer_navi">


               <ul>
                    <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/contact/">
                            <i class="far fa-envelope white fa-2x mb5"></i>
                            <p class="white">お問合せ</p>
                        </a></li>
                    <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/booklet/">
                            <i class="fas fa-book-open fa-2x mb5 white"></i>
                            <p class="white">小冊子請求</p>
                        </a></li>
                    <li><a href="/">         
                            <i class="fas fa-arrow-alt-circle-up fa-2x mb5 white"></i>
                            <p class="white">TOP</p>
                        </a></li>
                </ul>
            </div>
-->

            <!-- サイドナビ -->

            <?php
            //メニューIDを取得する
            $menu_name = 'side_nav2';
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object($locations[$menu_name]);

            $menu_items = wp_get_nav_menu_items($menu->term_id);
            ?>

            <ul class="side_navi">
                <?php foreach ($menu_items as $item) : ?>
                    <li><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                <?php endforeach; ?>
            </ul>



            <!-- デスクトップ用フッターメニュー　/* 一時消し */ --> 
            <!--<div class="desk_fnavi">
                <div class="inner">

                    <div class="finner_in">


                        <?php
                        //メニューIDを取得する
                        $menu_name = 'footer_nav';
                        $locations = get_nav_menu_locations();
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);

                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        ?>

                        <ul class="fnavi">
                            <?php foreach ($menu_items as $item) : ?>
                                <li><a href="<?php echo esc_attr($item->url); ?>" class="current"><?php echo esc_html($item->title); ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>

                </div>
										<p class="copyright noto_sj">Copyright &copy;株式会社コヤス 2020</p>
            </div>　-->

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