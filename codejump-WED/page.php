<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>WED | お問い合わせ</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/page.css" />
  </head>
  <!-- ヘッダー -->
  <body>
  <?php get_header(); ?>
    <section class="contact-form">
      <div class="section-inner">
        <h2 class="section-title">CONTACT</h2>
        <p class="title-text">お仕事のご依頼やご相談は下記のフォームからお問い合わせください。</p>
        <form action="">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
          </div>

          <div class="form-group">
            <label for="name"> E-mail</label>
            <input type="email" name="email" id="email" required>
          </div>

          <div class="form-group">
            <label for="name">Message</label>
            <textarea name="message" id="message" required></textarea>
          </div>
          <button type="submit">送信</button>
        </form>
      </div>
    </section>

    <?php get_footer(); ?>
  </body>
</html>
