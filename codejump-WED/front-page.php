<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/global.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/page.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <main>
      <!-- メインビジュアル -->
      <div class="main-visual">
        <img src="<?php echo get_template_directory_uri(); ?>/img/mainvisual.jpg" alt="光と緑に包まれたオフィスで、Web制作チームが打ち合わせをしている様子" />
      </div>

      <!-- ニュースセクション -->
      <section id="news" class="news">
  <div class="section-inner">
    <h2 class="section-title">NEWS</h2>
    <div class="sub-title">ニュース</div>

    <div class="news-box">
      <ul>
        <?php
          $args = array(
            'post_type'      => 'post',
            'category_name'  => 'news',
            'posts_per_page' => 3,
          );
          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
          <li class="news-block">
            <div class="news-info">
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                <?php echo get_the_date('Y.m.d'); ?>
              </time>

              <?php
                $cat = get_the_category();
                if ($cat) :
              ?>
                <a class="news-tag" href="<?php echo get_category_link($cat[0]->term_id); ?>">
                  <?php echo esc_html($cat[0]->name); ?>
                </a>
              <?php endif; ?>
            </div>

            <h3 class="news-title">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>
          </li>

        <?php endwhile; endif; wp_reset_postdata(); ?>
      </ul>
    </div>
  </div>
</section>

      <!-- アバウトセクション -->
      <section id="about" class="about">
        <div class="about-inner">
          <div class="about-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="about-img" />
          </div>
          <div class="about-contents">
            <h2 class="section-title">ABOUT</h2>
            <div class="sub-title">私たちについて</div>
            <p class="about-text">
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
              テキストテキストテキストテキストテキストテキスト
            </p>
          </div>
        </div>
      </section>

      <!-- ビジネスセクション -->
      <section id="business" class="business">
        <div class="business-inner">
          <h2 class="section-title">BUSINESS</h2>
          <div class="sub-title">事業内容</div>
          <div class="business-contents">
            <div class="business-flex-left">
              <div class="business-item">
                <div class="item-title">Web制作・マーケティング</div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/business1.jpg" alt="web制作img" />
              </div>
              <div class="business-item">
                <div class="item-title">インターネットメディア事業</div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/business2.jpg" alt="インターネットメディアimg" />
              </div>
            </div>
            <div class="business-flex-right">
              <div class="business-item">
                <div class="item-title">プロモーション企画・制作</div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/business3.jpg" alt="プロモーションimg" />
              </div>
              <div class="business-item">
                <div class="item-title">ソーシャル企画・運営</div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/business4.jpg" alt="ソーシャル企画img" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="company" class="company">
        <div class="company-inner">
          <div class="company-contents">
            <div class="company-info">
              <h2 class="section-title">COMPANY</h2>
              <div class="sub-title">会社情報</div>
              <dl class="company-item">
                <dt class="info-data-title">会社名</dt>
                <dd class="info-data-text">
                  ウェブエンターテイメントデザイン株式会社
                </dd>
                <dt class="info-data-title">所在地</dt>
                <dd class="info-data-text">
                  東京都渋谷区桜丘町99-9 West Building 3F
                </dd>
                <dt class="info-data-title">代表</dt>
                <dd class="info-data-text">XXXXX</dd>
                <dt class="info-data-title">設立</dt>
                <dd class="info-data-text">2021年1月1日</dd>
                <dt class="info-data-title">資本金</dt>
                <dd class="info-data-text">3,000,000円</dd>
                <dt class="info-data-title">事業内容</dt>
                <dd class="info-data-text">
                  Web制作・マーケティング<br />
                  インターネットメディア事業<br />
                  プロモーション企画・制作<br />
                  ソーシャル企画・運営<br />
                </dd>
              </dl>
            </div>
          </div>
          <div class="company-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company.jpg" alt="compamy-img" />
          </div>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>
