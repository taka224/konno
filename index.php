<?php
// アドレスバーに index.php を出さない（/ へ 301）
if (!empty($_SERVER['REQUEST_URI'])) {
  $req = strtok($_SERVER['REQUEST_URI'], '?');
  if (preg_match('#/index\.php$#', $req)) {
    $basePath = preg_replace('#/index\.php$#', '', $req);
    $target = ($basePath === '') ? '/' : rtrim($basePath, '/') . '/';
    $qs = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : '';
    header('Location: ' . $target . $qs, true, 301);
    exit;
  }
}

$base = '';
$current_page = 'home';
$page_description = '紺野工務店の公式サイト。住まいのリフォーム・介護保険住宅改修工事に対応しています。';
$load_glightbox = true;
$preload_lcp_image = $base . 'images/hero.webp';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

    <main id="main-content">
      <section class="hero-home">
        <img
          class="hero-home__media"
          src="<?= htmlspecialchars($base) ?>images/hero.webp"
          alt=""
          width="1920"
          height="1080"
          fetchpriority="high"
          decoding="async"
        />
        <div class="hero-home__overlay" aria-hidden="true"></div>
        <div class="container">
          <h2>小さな工務店の大きな約束。<br />細部へのこだわりで理想を実現。</h2>
          <p>横浜市で20年。大工の社長が直接対応する、顔の見える工務店です。</p>
          <ul class="hero-actions">
            <li><a class="hero-btn" href="tel:045-622-0066" aria-label="電話で問い合わせ 045-622-0066">☎ 045-622-0066</a></li>
            <li><a class="hero-btn" href="contact/">メールでお問い合わせ <span class="hero-btn-arrow" aria-hidden="true">→</span></a></li>
            <li><a class="hero-btn hero-btn-insta" href="https://www.instagram.com/reformkonnokoumuten/" aria-label="Instagram 最新情報" target="_blank" rel="noopener noreferrer">
              <svg class="hero-btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              <span><strong>Instagram</strong></span><span class="visually-hidden">別ウィンドウで開く</span>
            </a></li>
          </ul>
        </div>
      </section>

      <section class="surface section-pad message-section container grid-2">
          <div class="message-photo" role="img" aria-label="施工現場のイメージ"></div>
          <article class="message-text">
            <h2>誠実をモットーに、地元横浜で20年。</h2>
            <p>
              誠実をモットーに地元で20年、社長は大工の工務店です。小さな工務店だからこそ職人の顔が見えます。お客様の声に直接耳を傾け、一棟一棟に心を込めて施工いたします。網戸の張り替えなど細かなご相談にも直接対応可能です。「こんなこと頼んでいいのかな」というお悩みも、お気軽にご連絡ください。
            </p>
          </article>
      </section>

      <section class="cream section-pad container cases-inner">
          <h2>施工事例</h2>
          <p class="notice">※各画像をクリックすると拡大します</p>
          <ul class="cases-list grid-3">
            <li class="case-card">
                <figure>
                    <a href="images/cases/kitchin01_before.webp">
                      <img src="images/cases/kitchin01_before.webp" alt="キッチン交換工事 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="images/cases/kitchin02_after.webp">
                      <img src="images/cases/kitchin02_after.webp" alt="キッチン交換工事 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <span class="case-cat">水回りリフォーム</span>
                  <dl class="case-meta">
                    <dt>キッチン交換工事</dt>
                    <dd>場所：賃貸住居</dd>
                    <dd>内容：キッチン交換工事</dd>
                  </dl>
                </div>
            </li>
            <li class="case-card">
                <figure>
                    <a href="images/cases/roka_before.webp">
                      <img src="images/cases/roka_before.webp" alt="フロア張り替え工事 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="images/cases/roka_after.webp">
                      <img src="images/cases/roka_after.webp" alt="フロア張り替え工事 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <span class="case-cat">フロア張り替え</span>
                  <dl class="case-meta">
                    <dt>フロア張り替え工事</dt>
                    <dd>場所：O邸リビング</dd>
                    <dd>期間：3日</dd>
                    <dd>内容：フロア張り替え工事</dd>
                  </dl>
                </div>
            </li>
            <li class="case-card">
                <figure>
                    <a href="images/cases/bath_before.webp">
                      <img src="images/cases/bath_before.webp" alt="ユニットバス交換工事 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="images/cases/bath_after.webp">
                      <img src="images/cases/bath_after.webp" alt="ユニットバス交換工事 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <span class="case-cat">水回りリフォーム</span>
                  <dl class="case-meta">
                    <dt>ユニットバス交換工事</dt>
                    <dd>場所：賃貸住居</dd>
                    <dd>内容：ユニットバス交換工事</dd>
                  </dl>
                </div>
            </li>
          </ul>
          <p class="more-link">
            <a class="btn outline btn-more" href="cases/">施工事例をもっと見る <span class="hero-btn-arrow" aria-hidden="true">→</span></a>
          </p>
      </section>

      <section class="green-cta section-pad container cta-inner">
          <h2>まずはお気軽にご相談ください</h2>
          <p>
            新築・リフォーム・修繕など、住まいのことなら何でもお問い合わせください。<br />
            網戸の張り替えなど小さなことでもお気軽にどうぞ。
          </p>
          <ul class="cta-actions">
            <li><a class="btn primary" href="contact/">お問い合わせフォーム</a></li>
            <li><a class="btn primary" href="tel:045-622-0066">お電話で相談</a></li>
          </ul>
      </section>
    </main>

<?php
$glightbox_home_js = __DIR__ . '/js/glightbox-home.js';
$glightbox_home_ver = is_file($glightbox_home_js) ? filemtime($glightbox_home_js) : time();
$body_extra = '    <script defer src="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"></script>' . "\n"
  . '    <script defer src="js/glightbox-home.js?v=' . (int) $glightbox_home_ver . '"></script>';
?>
<?php include __DIR__ . '/includes/footer.php'; ?>
