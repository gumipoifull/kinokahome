<?php get_header(); ?>

<?php get_template_part('header2'); ?>

<!-- パンくずリスト -->
<div class="trail_space">
    <div class="archive_container">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </div>
</div>
<!-- メイン-->
<div class="main">
    <div class="archive_container2 mt20">

		<!-- アイキャッチ画像
		
        <?php
        // カテゴリーのアイキャッチ画像を表示する
        $image = get_field('category_image', 'category_' . $cat);
        echo wp_get_attachment_image($image['id'], 'large');
        ?>

        -->



    </div>

    <div class="archive_container">

        <div class="main_contents">

            <div class="article">

                <h1 class="sub_main_title fsize_ll"><?php wp_title(''); ?></h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="article_inner mt30 pb10">

                            <?php if (has_post_thumbnail()) : ?>
                                <div>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php the_post_thumbnail('thumbnail'); ?></a>
                                </div>
                            <?php else : ?>
                                <div>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage_small.gif" class="noimage_small"></a>
                                </div>
                            <?php endif; ?>

                            <div class="ml20">
                                <h2 class="fsize_l"><a href="<?php the_permalink(); ?>" class="brown"><?php the_title(); ?></a></h2>
                                <div class="post_date_single fsize_s">
                                    <div><?php echo get_the_date('Y.m.d'); ?></div>
                                    <div>投稿者：<?php the_author(); ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="excerpt_archive pb10">
                            <?php the_excerpt(); ?>
                        </div>



                    <?php endwhile; ?>
                <?php else : ?>

                    <p>記事が見つかりません</p>

                <?php endif; ?>

            </div>
            <!-- article-end -->

            <!-- ページネーション -->

            <?php
            $args = array(
                'mid-size' => 3,
                'prev_text' => '新しい記事へ',
                'next_text' => '前の記事へ',
                'screen_reader_text' => '　'
            );

            the_posts_pagination($args); ?>


            <div class="book_long mt50">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/booklet_thumbnail_m.jpg">
            </div>
        </div>
        <!-- main_contents end -->

        <?php get_sidebar(); ?>

    </div>
    <!-- inner-end -->
</div>
<!-- mainの終わり -->
<?php get_footer();
