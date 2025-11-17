<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>WED | ニュース</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/page.css" />
  </head>
  <body>
    <!-- ヘッダー -->
    <?php get_header(); ?>
    <section class="news-press">
      <div class="section-inner">
        <h2 class="section-title">News & Press</h2>
        <div class="sub-title">ニュース & プレス</div>
        <div class="tabs">
          <!-- Check Box -->
          <input type="radio" name="news-tab" id="news" checked />
          <input type="radio" name="news-tab" id="press" />
          <!-- 見せるラベル -->
          <div class="tab-label">
            <label for="news" class="tab-label">ニュース</label>
            <label for="press" class="tab-label">プレスリリース</label>
          </div>
          <!-- 中身 -->
          <div class="tab-content" id="news-content">
            <ul class="news-list">
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">NEWS</span>
                  <p class="news-title">
                    ニュースタイトル5タイトル5タイトル5タイトル5
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">NEWS</span>
                  <p class="news-title">
                    ニュースタイトル4タイトル4タイトル4タイトル4
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">NEWS</span>
                  <p class="news-title">
                    ニュースタイトル3タイトル3タイトル3タイトル3
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">NEWS</span>
                  <p class="news-title">
                    ニュースタイトル2タイトル2タイトル2タイトル2
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.16</time>
                  <span class="label">NEWS</span>
                  <p class="news-title">
                    ニュースタイトル1タイトル1タイトル1タイトル1
                  </p>
                </a>
              </li>
            </ul>
          </div>

          <div class="tab-content" id="press-content">
            <ul class="news-list">
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">PRESS</span>
                  <p class="news-title">
                    ニュースタイトル5タイトル5タイトル5タイトル5
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">PRESS</span>
                  <p class="news-title">
                    ニュースタイトル5タイトル5タイトル5タイトル5
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">PRESS</span>
                  <p class="news-title">
                    ニュースタイトル4タイトル4タイトル4タイトル4
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">PRESS</span>
                  <p class="news-title">
                    ニュースタイトル3タイトル3タイトル3タイトル3
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.17</time>
                  <span class="label">PRESS</span>
                  <p class="news-title">
                    ニュースタイトル2タイトル2タイトル2タイトル
                  </p>
                </a>
              </li>
              <li>
                <a href="#">
                  <time>2021.11.16</time>
                  <span class="label">PRESS</span>
                  <p class="news-title">
                    ニュースタイトル1タイトル1タイトル1タイトル1
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
  </body>
</html>
