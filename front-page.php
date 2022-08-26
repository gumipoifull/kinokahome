<?php get_header(); ?>
<?php get_template_part('header2'); ?>

<ul class="slider">
  <li class="slider1"></li>
  <li class="slider2"></li>
  <li class="slider3"></li>
  <li class="slider4"></li>
  <li class="slider5"></li>
</ul>

<section>
    <div class="home_news_container">
      <h2 class="ttl">
        <a name="lineup">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/news.png" width="98px" height="46px" alt="NEWS">
        </a>
    </h2>
    <?php echo do_shortcode('[showwhatsnew]'); ?>
  </section>

  <section>
  <h2 class="ttl">
      <a name="event">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/pickupevent.png" width="223px" height="46px" alt="PICK UP EVENT">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/lineup.png"  width="115px" height="46px" alt="LINE UP">
        </a>
    </h2>

      <!-- シンプルノート -->

      <article>
        <div class="lineup_container">
          <div class="lineup_main">
            <div class="lineup_left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_main.jpg"  width="650px" height="380px" alt="SIMPLE NOTE 外観その1">
            </div>

            <div class="lineup_right">
            <h3 class="house_ttl">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/simplenote_logo.png" width="450px" height="70px" alt="シンプルノートのロゴ">
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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_sub01.jpg" width="325px" height="310px" alt="SIMPLE NOTE 外観その2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_sub02.jpg" width="325px" height="310px" alt="SIMPLE NOTE 外観その3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/simple_sub03.jpg" width="325px" height="310px" alt="SIMPLE NOTE 外観その4">
          </div>

          <a href="https://simple-note.jp/" class="lineup_btn"target="_blank" rel="noopener noreferrer">MORE</a>

        </div> <!-- simplenote_container 閉じdiv -->
      </article>


      <!-- アリエ -->
      <article>
        <div class="lineup_container">
          <div class="lineup_main">
            <div class="lineup_left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_main.jpg"  width="650px" height="380px" alt="Arie 外観その1">
            </div>
            <div class="lineup_right">
              <h3 class="house_ttl">Arie</h3>
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
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_sub01.jpg" width="325px" height="310px" alt="Arie 外観その2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_sub02.jpg" width="325px" height="310px" alt="Arie 外観その3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/arie_sub03.jpg" width="325px" height="310px" alt="Arie 外観その4">
          </div>

          <a href="https://arie-na.com/" class="lineup_btn" target="_blank" rel="noopener noreferrer">MORE</a>

        </div> <!-- arie_container 閉じdiv -->
        <article>


        <!-- レバンテ -->
        <article>
          <div class="lineup_container">
            <div class="lineup_main">
              <div class="lineup_left">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_main.jpg"  width="650px" height="380px" alt="Levante 外観その1">
              </div>
              <div class="lineup_right">
                <h3 class="house_ttl">Levante Series</h3>
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
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_sub01.jpg" width="325px" height="310px" alt="Levante 外観その2">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_sub02.jpg" width="325px" height="310px" alt="Levante 外観その3">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jpg/levante_sub03.jpg" width="325px" height="310px" alt="Levante 外観その4">
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
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/blog.png"  width="87px" height="46px" alt="BLOG">
        </a>
  </h2>

    <div class="home_blog_container">
      <div class="container_background">
        <div class="blog_box">
          <div class="blog_item">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/blog_dummy.png" width="265px" height="250px" alt="BLOGサムネイル">
          <h2 class="blog_date">2022/08/01(MON)</h2>
          <p class="blog_item_ttl">ここにタイトルが入ります。ここにタイトルが入ります。ここにタイトルが入ります。</p>
          </div>

        <div class="blog_item sp_none">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/blog_dummy.png" width="265px" height="250px" alt="BLOGサムネイル">
          <h2 class="blog_date">2022/08/01(MON)</h2>
          <p class="blog_item_ttl">ここにタイトルが入ります</p>
        </div>

        <div class="blog_item sp_none">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/blog_dummy.png" width="265px" height="250px" alt="BLOGサムネイル">
          <h2 class="blog_date">2022/08/01(MON)</h2>
          <p class="blog_item_ttl">ここにタイトルが入ります</p>
        </div>
      </div> <!-- blog_box 閉じdiv -->

      <a href="" class="blog_btn">ブログ一覧</a>
      </div> <!-- container_background 閉じdiv -->
    </div> <!-- home_blog_container 閉じdiv -->
  </section>


  <section>
  <div class="home_contact_container">
  <h2 class="ttl">
        <a name="contact">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/png/contact.png" width="153px" height="46px" alt="CONTACT">
        </a>
</h2>
      <a href="tel:043-231-0806">043-231-0806</a>
      <p class="mb30">不明点・ご相談などお気軽にご連絡ください</p>
  </div>

  <?php echo do_shortcode('[contact-form-7 id="730" title="お問い合わせ"]'); ?>

</section>

<?php get_footer();