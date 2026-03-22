<?php
$base = '../';
$current_page = 'contact';
$page_title = 'お問い合わせ | 有限会社 紺野工務店';
$page_description = '紺野工務店へのお問い合わせ。住まいのリフォームや改修工事のご相談を受け付けています。';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

    <main id="main-content" class="page-contact">
      <h1>お問い合わせ</h1>

      <section class="surface section-pad container">
          <form class="form-grid" action="https://ssgform.com/s/N6nCbK4dqkSK" method="post">
            <p>以下のフォームに必須項目をご記入の上、送信してください。</p>
            <p class="field">
              <span class="label-row">
                <label for="name">お名前</label>
                <span class="badge" aria-hidden="true">必須</span>
              </span>
              <input
                id="name"
                name="お名前"
                type="text"
                autocomplete="name"
                required
              />
            </p>
            <p class="field">
              <span class="label-row">
                <label for="phone">電話番号</label>
                <span class="badge" aria-hidden="true">必須</span>
              </span>
              <input
                id="phone"
                name="電話番号"
                type="tel"
                autocomplete="tel"
                required
                pattern="[0-9\-\(\)\s]+"
                title="半角数字、ハイフン、カッコ、スペースのみ入力してください"
              />
            </p>
            <p class="field">
              <span class="label-row">
                <label for="email">メールアドレス</label>
                <span class="badge" aria-hidden="true">必須</span>
              </span>
              <input
                id="email"
                name="メールアドレス"
                type="email"
                autocomplete="email"
                required
              />
            </p>
            <p class="field">
              <span class="label-row">
                <label for="message">お問い合わせ内容</label>
                <span class="badge" aria-hidden="true">必須</span>
              </span>
              <textarea
                id="message"
                name="お問い合わせ内容"
                rows="8"
                required
              ></textarea>
            </p>
            <button class="btn primary submit-btn" type="submit">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              送信する
            </button>
          </form>
      </section>

      <section class="cream section-pad container">
          <aside class="phone-panel" aria-label="お電話でのお問い合わせ">
            <h2>お電話でのお問い合わせ</h2>
            <a href="tel:045-622-0066" class="phone-link">045-622-0066</a>
          </aside>
      </section>
    </main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
