<?php
$base = '../';
$current_page = 'contact';
$page_description = 'お問い合わせいただきありがとうございます。内容を確認のうえ、担当者よりご連絡いたします。';
$head_extra = '<meta name="robots" content="noindex" />' . "\n";
$preload_lcp_image = $base . 'images/company.webp';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

    <main id="main-content" class="page-contact page-contact-thanks">
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
        <h1 class="page-hero__title">送信完了</h1>
      </header>

      <section class="surface section-pad container">
          <header class="form-head">
            <p class="form-head-desc">お問い合わせいただきありがとうございます。<br />内容を確認のうえ、担当者よりご連絡いたします。<br />自動返信メールをお送りしましたので、ご確認ください。</p>
          </header>

          <section class="form-result form-result-success thanks-result-box" role="status" aria-label="送信結果">
            <h2>送信が完了しました</h2>
            <p>お急ぎの場合はお電話でもお問い合わせいただけます。</p>
            <p class="thanks-phone"><a href="tel:045-622-0066"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>045-622-0066</a></p>
          </section>
      </section>
    </main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
