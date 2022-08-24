<?php get_header(); ?>

<?php get_template_part('header2'); ?>

<ul class="slider">
    <li class="slider1">
        <p>希望あふれる豊かな未来を</p>
    </li>
    <li class="slider2">
        <p>笑顔あふれる楽しい毎日を</p>
    </li>
    <li class="slider3">
        <p>あなたと共に創造します</p>
    </li>
</ul>

<!-- コンセプト -->
<div class="mt50">
    <div class="inner">
        <h2 class="t_center fsize_ll green bold t_shadow noto_sj">コンテンツ</h2>
        <p class="t_center green t_shadow mb30 noto_sj">- CONTENTS -</p>
        <div class="contents">
            <div class="mb30">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/concept"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/concept.jpg" class="concept_img mb10"></a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/concept">
                    <p class="t_center fsize_l green">コンセプト</p>
                </a>
            </div>
            <div class="mb30">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/booklet"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/booklet.jpg" class="booklet_img mb10"></a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/booklet">
                    <p class="t_center fsize_l green">小冊子</p>
                </a>
            </div>
            <div class="mb30">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/line-up"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lineup.jpg" class="lineup_img mb10"></a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/line-up">
                    <p class="t_center fsize_l green">商品ラインナップ</p>
                </a>
            </div>
            <div class="mb30">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/look-for"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lookfor.jpg" class="lookfor_img mb10"></a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/look-for">
                    <p class="t_center fsize_l green">土地探し</p>
                </a>
            </div>
            <div class="mb30">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/financing"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/financing.jpg" class="financing_img mb10"></a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/financing">
                    <P class="t_center fsize_l green">住宅ローン</P>
                </a>
            </div>
            <div class="mb30">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/maintenance"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/maintenance.jpg" class="maintenance_img mb10"></a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/maintenance">
                    <p class="t_center fsize_l green">アフターメンテナンス</p>
                </a>
            </div>
            <div class="mb30">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/voice"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice.jpg" class="voice_img mb10"></a>
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/voice">
                    <p class="t_center fsize_l green">お客様の声</p>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- イベント -->
<div class="event mt50">
    <h2 class="t_center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/titleevent.png" class="title_event"></h2>
    <div class="inner">
        <?php
        query_posts('cat=2&posts_per_page=1&paged=' . $paged);
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="event_block1 mt20">
                    <?php if (has_post_thumbnail()) :
                        the_post_thumbnail('post-thumbnails', array('width' => '100%', 'alt' => the_title_attribute('echo=0')));
                    else : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage.gif" class="noimage">
                    <?php endif; ?>
                </div>


                <div class="event_block2">

                    <div class="">
                        <h3 class="t_center bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post_date"><?php echo get_the_date('Y.m.d'); ?></div>
                        <div class="post_body"><?php echo mb_substr(strip_tags($post->post_content), 0, 300) . '...'; ?></div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>

                <p>記事が見つかりません</p>

            <?php endif; ?>
                </div>

                <?php wp_reset_postdata();
                wp_reset_query(); ?>

    </div>
</div>
<!-- ニュース -->
<div class="news mt50">
    <h2 class="t_center fsize_ll green bold t_shadow noto_sj">ニュース</h2>
    <p class="t_center green t_shadow mb10 noto_sj">- NEWS -</p>
    <div class="inner">

        <?php
        query_posts('cat=3&posts_per_page=3&paged=' . $paged);
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="news_inner_in">
                    <div class="news_top_thumbnail">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail('post-thumbnails', array('width' => '100%', 'alt' => the_title_attribute('echo=0')));
                        else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage_small.gif" class="noimage">
                        <?php endif; ?>
                    </div>



                    <div class="news_top_contents pb10">

                        <h3 class="t_center bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post_date fsize_s"><?php echo get_the_date('Y.m.d'); ?></div>
                        <div class="post_body"><?php echo mb_substr(strip_tags($post->post_content), 0, 80) . '...'; ?></div>
                    </div>
                </div>
            <?php endwhile; ?>

        <?php else : ?>

            <p>記事が見つかりません</p>

        <?php endif; ?>
        <?php wp_reset_postdata();
        wp_reset_query(); ?>
    </div>
</div>
<!-- ブログ -->
<div class="blog_part mt50">
    <h2><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/title_blog.png" class="title_blog"></h2>
    <div class="inner">
        <?php
        query_posts('cat=1&posts_per_page=3&paged=' . $paged);
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog_part_inner_in">
                    <div class="blog_part_top_thumbnail">
                        <?php if (has_post_thumbnail()) :
                            the_post_thumbnail('post-thumbnails', array('width' => '100%', 'alt' => the_title_attribute('echo=0')));
                        else : ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage_small.gif" class="noimage">
                        <?php endif; ?>
                    </div>


                    <div class="blog_part_top_contents pb10">

                        <h3 class="t_center bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post_date fsize_s"><?php echo get_the_date('Y.m.d'); ?></div>
                        <div class="post_body"><?php echo mb_substr(strip_tags($post->post_content), 0, 80) . '...'; ?></div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else : ?>

            <p>記事が見つかりません</p>

        <?php endif; ?>
        <?php wp_reset_postdata();
        wp_reset_query(); ?>

    </div>
</div>
<!-- その他 -->
<div class="other mt50">
    <div class="inner">
        <div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagram.jpg" class="instagram_img mb10">
            <a href="https://www.instagram.com/kinoka_home/">
                <p class="t_center fsize_l green">インスタグラム</p>
            </a>
        </div>
    </div>
</div>

<?php get_footer();
