<?php
$base = '../';
$current_page = 'about';
$page_description = '紺野工務店の会社概要。代表挨拶、私たちの約束、会社情報、アクセス情報をご案内します。';
$preload_lcp_image = $base . 'images/company.webp';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

    <main id="main-content" class="page-about">
      <header class="page-hero">
        <img
          class="page-hero__media"
          src="<?= htmlspecialchars($base) ?>images/company.webp"
          alt=""
          width="1920"
          height="1080"
          fetchpriority="high"
          decoding="async"
        />
        <div class="page-hero__overlay" aria-hidden="true"></div>
        <h1 class="page-hero__title">会社概要</h1>
      </header>

      <section class="surface section-pad container">
          <h2>代表挨拶</h2>
          <p>私は大工として現場で腕を磨き、この道一筋で歩んでまいりました。「小さな工務店だからこそ、お客様一人ひとりに寄り添える」——これが私たちの信念です。</p>
          <p>大手にはできない、職人の目が隅々まで行き届く施工。社長である私自身が現場に立ち、直接お客様のお話を伺います。網戸の張り替えや、ちょっとした修繕など「こんな小さなことでも頼めるの？」というご相談も大歓迎です。</p>
          <p>地元横浜で20年。これからもこの街と、この街に暮らす皆様の住まいを、誠実に守り続けてまいります。</p>
          <p class="ceo-sign"><strong>紺野 勝逸</strong></p>
      </section>

      <section class="cream section-pad container">
          <h2>私たちの約束</h2>
          <ul class="kpi-list grid-3">
            <li>
              <h3><span class="promise-num">01</span> 誠実な対応</h3>
              <p class="promise-desc">お客様の声にじっくり耳を傾け、最適なプランをご提案。見積もりも明確で、隠れた追加費用はありません。</p>
            </li>
            <li>
              <h3><span class="promise-num">02</span> 職人の技術</h3>
              <p class="promise-desc">大工出身の社長が直接現場を管理。細部まで妥協しない施工品質で、永く住み続けられる家をお届けします。</p>
            </li>
            <li>
              <h3><span class="promise-num">03</span> 地域密着</h3>
              <p class="promise-desc">横浜で20年の実績。地元を知り尽くしているからこそ、アフターフォローも迅速に対応いたします。</p>
            </li>
          </ul>
      </section>

      <section class="surface section-pad container">
          <h2>会社情報</h2>
          <dl class="company-info-dl" aria-label="紺野工務店の会社情報一覧">
            <dt>会社名</dt><dd>紺野工務店</dd>
            <dt>代表者</dt><dd>紺野 勝逸</dd>
            <dt>所在地</dt><dd>〒231-0825 神奈川県横浜市中区本牧間門2-17</dd>
            <dt>電話番号</dt><dd><a href="tel:045-622-0066">045-622-0066</a></dd>
            <dt>事業内容</dt><dd>新築工事 / リフォーム / 増改築 / 修繕・メンテナンス</dd>
            <dt>設立</dt><dd>2004年</dd>
          </dl>
      </section>

      <section class="cream section-pad container grid-2">
          <div class="access-section">
            <h2>アクセス</h2>
            <address>
              <p>紺野工務店</p>
              <p>〒231-0842　中区本牧間門2-17</p>
              <p><a href="tel:045-622-0066" aria-label="電話でお問い合わせ 045-622-0066">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                045-622-0066
              </a></p>
            </address>
          </div>
          <figure class="map-placeholder">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6502.728955031594!2d139.661088!3d35.4210002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601842cd78062053%3A0x75f295d7f6d08371!2z44CSMjMxLTA4MjUg56We5aWI5bed55yM5qiq5rWc5biC5Lit5Yy65pys54mn6ZaT6ZaA77yS4oiS77yR77yX!5e0!3m2!1sja!2sjp!4v1773815931912!5m2!1sja!2sjp"
              width="600"
              height="450"
              style="border:0;"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="紺野工務店の所在地"
            ></iframe>
          </figure>
      </section>
    </main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
