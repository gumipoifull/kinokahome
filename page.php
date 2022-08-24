<?php get_header(); ?>

<?php get_template_part('header2'); ?>

<!-- パンくずリスト -->
        <div class="trail_space">
            <div class="inner">
                <?php
                if(function_exists('bcn_display')){
                    bcn_display();
                }
                ?>
            </div>
        </div>
        <!-- メイン-->
        <div class="main">
            <div class="inner">
                <div class="main_contents">
<!-- アイキャッチ画像 <?php if(has_post_thumbnail()): 
            the_post_thumbnail('post-thumbnails', array('width' => '100%', 'alt' => the_title_attribute('echo=0')));
else: ?>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage.gif" class="noimage">
<?php endif; ?> -->

                    <div class="article">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <h2 class="sub_main_title mb20 fsize_l mt20"><a href="<?php the_permalink(); ?>" class="white"><?php the_title(); ?></a></h2>
                                <div class="">
                                    <div class="post_body_page"><?php the_content(); ?></div>
                                </div>

                            <?php endwhile; ?>
                        <?php else : ?>

                            <p>記事が見つかりません</p>

                        <?php endif; ?>
						
                    </div>
                    </div>
                </div>
                    <div class="book_long mt50">
                     <a href="<?php echo get_stylesheet_directory_uri(); ?>/booklet"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/booklet_thumbnail_m.jpg"></a>
            </div>
        </div>
        <?php get_footer();
