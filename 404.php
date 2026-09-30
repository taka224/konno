<?php
// Apache の ErrorDocument から呼ばれるため、必ず 404 を返す
if (!headers_sent()) {
  http_response_code(404);
}

// ErrorDocument は任意の URL で呼ばれるため、パスは絶対指定にする。
// SCRIPT_NAME は常にこのファイル自身の web ルートからの位置を指すので、
// ドキュメントルート直下でもサブフォルダ設置でも正しい base が得られる。
$script_name = (string) ($_SERVER['SCRIPT_NAME'] ?? '/404.php');
$slash = strrpos($script_name, '/');
$base = ($slash === false) ? '/' : substr($script_name, 0, $slash + 1);

$current_page = '404';
$page_title = 'ページが見つかりません | 有限会社 紺野工務店';
$page_description = 'お探しのページは見つかりませんでした。URL が変更されたか、削除された可能性があります。';
$head_extra = '<meta name="robots" content="noindex, follow" />' . "\n";
$preload_lcp_image = $base . 'images/hero.webp';
?>
<?php include __DIR__ . '/includes/header.php'; ?>

    <main id="main-content" class="page-404" tabindex="-1">
      <header class="page-hero">
        <img
          class="page-hero__media"
          src="<?= htmlspecialchars($base) ?>images/hero.webp"
          alt=""
          width="1920"
          height="1080"
          fetchpriority="high"
          decoding="async"
        />
        <h1 class="page-hero__title">ページが見つかりません</h1>
      </header>

      <section class="surface section-pad container error-inner">
          <p class="error-code" aria-hidden="true">404</p>
          <h2>お探しのページは見つかりませんでした</h2>
          <p>
            URL が変更されたか、削除された可能性があります。<br />
            お手数ですが、トップページから目的とするページを再度お探しください。
          </p>
          <ul class="cta-actions">
            <li><a class="btn primary" href="<?= htmlspecialchars($home_href) ?>">トップページへ戻る</a></li>
          </ul>
      </section>

      <section class="green-cta section-pad container cta-inner">
          <h2>お急ぎの方はお電話でどうぞ</h2>
          <p>住まいのことなら何でもお気軽にご相談ください。</p>
          <ul class="cta-actions">
            <li><a class="btn primary" href="tel:045-622-0066">045-622-0066</a></li>
          </ul>
      </section>
    </main>

<?php include __DIR__ . '/includes/footer.php'; ?>
