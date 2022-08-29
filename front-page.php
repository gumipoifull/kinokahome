<?php get_header(); ?>
<?php get_template_part('header2'); ?>

<div class="slider_container">
<p class="slider_catchcopy">シンプルに建てるとは、<br>豊かに暮らすコト。</p>
  <ul class="slider">
    <li class="slider_img slider1"></li>
    <li class="slider_img slider2"></li>
    <li class="slider_img slider3"></li>
    <li class="slider_img slider4"></li>
    <li class="slider_img slider5"></li>
  </ul>
  <div class="slider_btn_area">
    <a href="/#contact" class="slider_btn slider_btn-1">資料請求</a>
    <a href="/#contact" class="slider_btn slider_btn-2">お問い合わせ</a>
  </div>
</div>

<section>
    <div class="home_news_container">
      <h2 class="ttl">
        <a name="lineup">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/news.png" width="98" height="46" alt="NEWS">
        </a>
    </h2>
    <?php echo do_shortcode('[showwhatsnew]'); ?>
  </section>

  <section>
  <h2 class="ttl">
      <a name="event">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/pickupevent.png" width="223" height="46" alt="PICK UP EVENT">
      </a>
  </h2>
    <div class="home_event_container">
      <?php get_template_part('event'); ?>
    </div>
  </section>


  <div class="inner">

  <section>
    <div class="home_lineup_container">
      <h2 class="ttl">
        <a name="lineup">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/lineup.png"  width="115" height="46" alt="LINE UP">
        </a>
    </h2>

      <!-- シンプルノート -->

      <article>
        <div class="lineup_container">
          <div class="lineup_main">
            <div class="lineup_left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_main.jpg"  width="650" height="380" alt="SIMPLE NOTE 外観その1">
            </div>

            <div class="lineup_right">
            <h3 class="house__ttl--normal">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/simplenote_logo.png" width="250" height=" 60" alt="シンプルノートのロゴ">
              </h3>
              <p>
                洗練されたデザイナーズ住宅
                <br>
                合理的な設計がもたらす高性能住宅
                <br>
                <br>
                子育てママの家事をラクにする思いやりの家
                <br>
                家族の安全やプライバシーを守る防犯住宅
                <br>
                無駄なコストを省いた賢い家
                <br>
                <br>
                人に自慢したくなるようなセンスの良い個性的な家
                <br>
                それは今までにない、新しい住宅のカタチ。</p>
            </div>
          </div>

          <div class="lineup_sub">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_sub01.jpg" width="325" height="310" alt="SIMPLE NOTE 外観その2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_sub02.jpg" width="325" height="310" alt="SIMPLE NOTE 外観その3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_sub03.jpg" width="325" height="310" alt="SIMPLE NOTE 外観その4">
          </div>

          <a href="https://simple-note.jp/" class="lineup_btn"target="_blank" rel="noopener noreferrer">MORE</a>

        </div> <!-- simplenote_container 閉じdiv -->
      </article>


      <!-- アリエ -->
      <article>
        <div class="lineup_container">
          <div class="lineup_main">
            <div class="lineup_left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_main.jpg"  width="650" height="380" alt="Arie 外観その1">
            </div>
            <div class="lineup_right">
            <h3 class="house__ttl--small">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/arie_logo.png" width="250" height="60" alt="Arieのロゴ">
              </h3>
              <p>
                私らしく、心地よい家。
                <br>
                <br>
                私たち家族にちょうどいい暮らしを実現するため、<br class="br_sp">Arieではちょっと特徴ある暮らし⽅を<br class="br_sp">5つのコンセプト商品でご提案。
                <br>
                「私らしい暮らし⽅」へのカスタマイズができる、<br class="br_sp">そんな家づくりを応援します。
                <br>
                <br>
                プロが⾃信を持ってお勧めする⾼性能住宅を、<br class="br_sp">
                あなた好みの暮らし⽅で実現する、<br class="br_sp">これがArieです。
              </p>
            </div>
          </div>

          <div class="lineup_sub">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_sub01.jpg" width="325" height="310" alt="Arie 外観その2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_sub02.jpg" width="325" height="310" alt="Arie 外観その3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_sub03.jpg" width="325" height="310" alt="Arie 外観その4">
          </div>

          <a href="https://arie-na.com/" class="lineup_btn" target="_blank" rel="noopener noreferrer">MORE</a>

        </div> <!-- arie_container 閉じdiv -->
        <article>


        <!-- レバンテ -->
        <article>
          <div class="lineup_container">
            <div class="lineup_main">
              <div class="lineup_left">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_main.jpg"  width="650" height="380" alt="Levante 外観その1">
              </div>
              <div class="lineup_right">
              <h3 class="house__ttl--small">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/levante_logo.png" width="250" height="70" alt="レバンテのロゴ">
              </h3>
                <p>
                  肌触りの良い無垢材の床、珊瑚や和紙から生まれた壁材、健康にも配慮された自然素材づくしの注文住宅
                  <br>
                  <br>
                  自然素材で造られるビュッフェスタイルの家なので、<br class="br_sp">全て標準仕様でお客様の好きなものを<br class="br_sp">好きなだけお選び頂けます。
                  <br>
                  <br>
                  住宅ラインナップ
                  <br>
                  Levante/Ciao!/ROCKY/木の香
                </p>
              </div>
            </div>

            <div class="lineup_sub">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_sub01.jpg" width="325" height="310" alt="Levante 外観その2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_sub02.jpg" width="325" height="310" alt="Levante 外観その3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_sub03.jpg" width="325" height="310" alt="Levante 外観その4">
            </div>

<!--ラインナップ下層ページ 未完成-->
<span style="text-align:center; font-size:1.5rem; font-weight:bold;"><p>COMING SOON</p></span>
<!-- 一時的のみ使用 下層ページ制作後削除 -->

<a href="" class="lineup_btn">MORE</a>
          </div> <!-- levante_container 閉じdiv -->
        </article>
    </div>
  </section>

  <section>
  <h2 class="ttl">
        <a name="blog">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/blog.png"  width="87" height="46" alt="BLOG">
        </a>
  </h2>

    <div class="home_blog_container">
      <div class="container_background">
      <div class="blog_box">
      <?php
        query_posts('cat=1&posts_per_page=3&paged=' . $paged);
        ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="blog_item">
            <?php if (has_post_thumbnail()) :
                the_post_thumbnail('post-thumbnails', array('width' => '100%', 'alt' => the_title_attribute('echo=0')));
            else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noimage_small.gif" class="noimage">
            <?php endif; ?>
            <h2 class="blog_date"><?php echo get_the_date('Y.m.d'); ?></h2>
            <p class="blog_item_ttl"><?php the_title(); ?></p>
          </div>

        <?php endwhile; ?>
        <?php else : ?>

            <p>記事が見つかりません</p>

        <?php endif; ?>
        <?php wp_reset_postdata();
        wp_reset_query(); ?>
      </div> <!-- blog_box 閉じdiv -->

      <a href="/category/blog/" class="blog_btn">ブログ一覧</a>
      </div> <!-- container_background 閉じdiv -->

    </div> <!-- home_blog_container 閉じdiv -->

  </section>


  <section>
  <div id="contact" class="home_contact_container">
  <h2 class="ttl">
        <a name="contact">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/contact.png" width="153" height="46" alt="CONTACT">
        </a>
</h2>
      <a href="tel:043-231-0806">043-231-0806</a>
      <p class="mb30">不明点・ご相談などお気軽にご連絡ください</p>
  </div>

  <?php echo do_shortcode('[contact-form-7 id="730" title="お問い合わせ"]'); ?>

</section>

<?php get_footer();