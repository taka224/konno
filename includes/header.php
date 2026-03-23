<?php
// パス内の連続スラッシュを正規化（例: //// → /）
if (!headers_sent() && !empty($_SERVER['REQUEST_URI']) && strpos($_SERVER['REQUEST_URI'], '//') !== false) {
  $path = strtok($_SERVER['REQUEST_URI'], '?');
  $qs = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] !== '' ? '?' . $_SERVER['QUERY_STRING'] : '';
  $norm = preg_replace('#/+#', '/', $path);
  if ($norm === '') {
    $norm = '/';
  }
  if ($norm !== $path) {
    header('Location: ' . $norm . $qs, true, 301);
    exit;
  }
}

if (!isset($base)) $base = '';
$base_root = rtrim((string) $base, '/');
$home_href = ($base_root === '') ? '/' : $base_root . '/';
if (!isset($current_page)) $current_page = '';
if (!isset($page_title)) $page_title = '有限会社 紺野工務店';
if (!isset($page_description)) $page_description = '有限会社 紺野工務店の公式サイト。住まいのリフォーム・介護保険住宅改修工事に対応しています。';
if (!isset($head_extra)) $head_extra = '';
if (!isset($preload_lcp_image)) $preload_lcp_image = '';
if (!isset($load_glightbox)) $load_glightbox = false;

$glightbox_css_url = 'https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css';

if (!isset($site_url)) {
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $site_url = $protocol . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
}

if (!isset($og_image)) $og_image = rtrim($site_url, '/') . '/images/ogp.webp';
if (isset($_SERVER['REQUEST_URI'])) {
  $path = strtok($_SERVER['REQUEST_URI'], '?');
  $path = preg_replace('#/+#', '/', (string) $path);
  if ($path === '') {
    $path = '/';
  }
  $og_url = rtrim($site_url, '/') . $path;
} else {
  $og_url = $site_url . '/' . ($current_page === 'home' ? '' : ($current_page ? $current_page . '/' : ''));
}
$is_home = ($current_page === 'home');
$styles_css_path = __DIR__ . '/../styles.css';
$styles_css_ver = is_file($styles_css_path) ? filemtime($styles_css_path) : time();
$fonts_css_path = __DIR__ . '/../fonts/biz-udpgothic.css';
$fonts_css_ver = is_file($fonts_css_path) ? filemtime($fonts_css_path) : time();
$fonts_css_href = htmlspecialchars($base . 'fonts/biz-udpgothic.css?v=' . $fonts_css_ver);
$styles_css_href = htmlspecialchars($base . 'styles.css?v=' . $styles_css_ver);
?>
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<?php if ($preload_lcp_image !== ''): ?>
    <link rel="preload" as="image" href="<?= htmlspecialchars($preload_lcp_image) ?>" fetchpriority="high" />
<?php endif; ?>
<?php if ($load_glightbox): ?>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net" />
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />
<?php endif; ?>
    <link rel="preload" href="<?= $fonts_css_href ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link rel="stylesheet" href="<?= $fonts_css_href ?>" /></noscript>
    <link rel="preload" href="<?= $styles_css_href ?>" as="style" />
    <link rel="stylesheet" href="<?= $styles_css_href ?>" />
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($og_url) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>" />
    <meta property="og:site_name" content="有限会社 紺野工務店" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>" />
    <link rel="icon" type="image/svg+xml" href="<?= $base ?>images/favicon.svg" />
<?php if ($load_glightbox): ?>
    <link rel="preload" href="<?= htmlspecialchars($glightbox_css_url) ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript><link rel="stylesheet" href="<?= htmlspecialchars($glightbox_css_url) ?>" /></noscript>
<?php endif; ?>
<?= $head_extra ?>
  </head>
  <body class="page-<?= $current_page ?: 'home' ?>">
    <a href="#main-content" class="skip-link">本文へスキップ</a>

    <header>
      <div class="container">
        <a href="<?= htmlspecialchars($home_href) ?>">
          <?php if ($is_home): ?>
          <h1><img src="<?= $base ?>images/logo.svg" alt="有限会社 紺野工務店" width="160" height="52" loading="eager" decoding="async" /></h1>
          <?php else: ?>
          <img src="<?= $base ?>images/logo.svg" alt="有限会社 紺野工務店" width="160" height="52" loading="eager" decoding="async" />
          <?php endif; ?>
        </a>
        <nav id="main-nav" aria-label="メインナビゲーション・お電話">
          <ul id="main-nav-menu">
            <li><a href="<?= htmlspecialchars($home_href) ?>"<?= $current_page === 'home' ? ' aria-current="page"' : '' ?>>ホーム</a></li>
            <li><a href="<?= $base ?>about/"<?= $current_page === 'about' ? ' aria-current="page"' : '' ?>>会社概要</a></li>
            <li><a href="<?= $base ?>cases/"<?= $current_page === 'cases' ? ' aria-current="page"' : '' ?>>施工事例</a></li>
            <li><a href="<?= $base ?>contact/"<?= $current_page === 'contact' ? ' aria-current="page"' : '' ?>>お問い合わせ</a></li>
          </ul>
          <span aria-hidden="true"></span>
          <a href="tel:045-622-0066" aria-label="電話でお問い合わせ 045-622-0066">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            045-622-0066
          </a>
          <button type="button" aria-label="メニューを開く" aria-expanded="false" aria-controls="main-nav-menu" aria-haspopup="true">
            <span aria-hidden="true">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
        </nav>
      </div>
    </header>
