<div class="home_event">
 <div class="event_inner">
	 
   <!-- 20211026 KengakuCloud埋込 START -->
<div id='js-iemiru-cms-index-page'></div>
<script src='https://www.ie-miru.jp/cms/yoyaku/koyasuzaimoku.js?limit=3'></script>
   <!-- 20211026 KengakuCloud埋込 END -->
	 
   <!-- 20211026 KengakuCloud埋込 START -->
	 
<?php /*
<?php
query_posts('cat=10&posts_per_page=1&paged=' . $paged);
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
*/ ?>
<!-- 20211026 KengakuCloud埋込 END -->
</div>
</div>