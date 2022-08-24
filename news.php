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