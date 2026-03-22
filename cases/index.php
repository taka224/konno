<?php
$base = '../';
$current_page = 'cases';
$img = $base . 'images/cases/';
$page_title = '施工事例 | 有限会社 紺野工務店';
$page_description = '紺野工務店の施工事例。リビング・洗面所・トイレ・キッチン・手すり取付などのリフォーム事例を掲載しています。';
$head_extra = '    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css" />' . "\n";
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

    <main id="main-content" class="page-cases">
      <h1>施工事例</h1>

      <div class="cases-content section-pad">
        <div class="project-group">
            <p class="cases-notice">※各画像をクリックすると拡大します</p>
            <ul class="cases-list">
              <li class="case-item case-card case-card-y">
                <div class="project-images" aria-label="施工写真">
                    <figure>
                      <a href="<?= $img ?>y-living_before.webp">
                        <img src="<?= $img ?>y-living_before.webp" alt="リビング施工前" width="768" height="512" loading="lazy" decoding="async" />
                        <span class="img-label before">Before</span>
                      </a>
                    </figure>
                    <figure>
                      <a href="<?= $img ?>y-living_after.webp">
                        <img src="<?= $img ?>y-living_after.webp" alt="リビング施工後" width="768" height="512" loading="lazy" decoding="async" />
                        <span class="img-label after">After</span>
                      </a>
                    </figure>
                  <p class="project-card-label">リビング 施工前後</p>
                </div>
                <div class="project-images" aria-label="施工写真">
                    <figure>
                      <a href="<?= $img ?>y-senmen_before.webp">
                        <img src="<?= $img ?>y-senmen_before.webp" alt="洗面所施工前" width="768" height="512" loading="lazy" decoding="async" />
                        <span class="img-label before">Before</span>
                      </a>
                    </figure>
                    <figure>
                      <a href="<?= $img ?>y-senmen_after.webp">
                        <img src="<?= $img ?>y-senmen_after.webp" alt="洗面所施工後" width="768" height="512" loading="lazy" decoding="async" />
                        <span class="img-label after">After</span>
                      </a>
                    </figure>
                  <p class="project-card-label">洗面所 施工前後</p>
                </div>
                <div class="project-images" aria-label="施工写真">
                    <figure>
                      <a href="<?= $img ?>y-toilet-before.webp">
                        <img src="<?= $img ?>y-toilet-before.webp" alt="トイレ施工前" width="768" height="512" loading="lazy" decoding="async" />
                        <span class="img-label before">Before</span>
                      </a>
                    </figure>
                    <figure>
                      <a href="<?= $img ?>y-toilet-after.webp">
                        <img src="<?= $img ?>y-toilet-after.webp" alt="トイレ施工後" width="768" height="512" loading="lazy" decoding="async" />
                        <span class="img-label after">After</span>
                      </a>
                    </figure>
                  <p class="project-card-label">トイレ 施工前後</p>
                </div>
                <div class="case-body">
                  <span class="case-cat">二世帯住宅リフォーム</span>
                  <dl class="case-meta">
                    <dt>y邸 リビング・洗面所・トイレ</dt>
                    <dd>場所：y邸リビング・洗面所・トイレ</dd>
                    <dd>内容：二世帯住宅の1階（親世帯）は、お掃除のし易さを考えた設備と思い切ったモダンなクロスで一新しました。</dd>
                  </dl>
                </div>
              </li>
              <?php /* 以下、Pencil「CASES - 施工事例」cGrid と同一順 */ ?>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>kitchin01_before.webp">
                      <img src="<?= $img ?>kitchin01_before.webp" alt="キッチン交換工事 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>kitchin02_after.webp">
                      <img src="<?= $img ?>kitchin02_after.webp" alt="キッチン交換工事 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>キッチン交換工事 施工前後</dt>
                    <dd>場所：賃貸住居</dd>
                    <dd>内容：キッチン交換工事</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>kitchin02_before.webp">
                      <img src="<?= $img ?>kitchin02_before.webp" alt="キッチン交換工事 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>kitchin02_after.webp">
                      <img src="<?= $img ?>kitchin02_after.webp" alt="キッチン交換工事 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>キッチン交換工事 施工前後</dt>
                    <dd>場所：賃貸住居</dd>
                    <dd>内容：キッチン交換工事</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>roka_before.webp">
                      <img src="<?= $img ?>roka_before.webp" alt="フロア張り替え工事 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>roka_after.webp">
                      <img src="<?= $img ?>roka_after.webp" alt="フロア張り替え工事 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>フロア張り替え工事 施工前後</dt>
                    <dd>場所：O邸リビング</dd>
                    <dd>期間：3日</dd>
                    <dd>内容：フロア張り替え工事</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>bath_before.webp">
                      <img src="<?= $img ?>bath_before.webp" alt="ユニットバス交換工事 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>bath_after.webp">
                      <img src="<?= $img ?>bath_after.webp" alt="ユニットバス交換工事 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>ユニットバス交換工事 施工前後</dt>
                    <dd>場所：賃貸住居</dd>
                    <dd>内容：ユニットバス交換工事</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>sassi_before.webp">
                      <img src="<?= $img ?>sassi_before.webp" alt="サッシ取り替え 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>sassi_after.webp">
                      <img src="<?= $img ?>sassi_after.webp" alt="サッシ取り替え 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>サッシ取り替え、フロア貼り替え 施工前後</dt>
                    <dd>場所：賃貸住居</dd>
                    <dd>内容：サッシ取り替え、フロア貼り替え、他</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>nail_after.webp">
                      <img src="<?= $img ?>nail_after.webp" alt="ネイルサロン 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>nail_after2.webp">
                      <img src="<?= $img ?>nail_after2.webp" alt="ネイルサロン 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>ネイルサロン施工後</dt>
                    <dd>場所：ネイルサロン</dd>
                    <dd>期間：4日</dd>
                    <dd>内容：フロア張り替え、クロス貼り替え、照明設置用電気工事</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>toilet-after.webp">
                      <img src="<?= $img ?>toilet-after.webp" alt="トイレ 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>toilet-after2.webp">
                      <img src="<?= $img ?>toilet-after2.webp" alt="トイレ 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>トイレ 施工後</dt>
                    <dd>場所：トイレ</dd>
                    <dd>期間：2日</dd>
                    <dd>内容：クロス張り替え</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>childroom_before.webp">
                      <img src="<?= $img ?>childroom_before.webp" alt="子供部屋 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>childroom_after.webp">
                      <img src="<?= $img ?>childroom_after.webp" alt="子供部屋 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>子供部屋 施工前後</dt>
                    <dd>場所：8畳子供部屋</dd>
                    <dd>期間：3日</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>bath-handrail1_before.webp">
                      <img src="<?= $img ?>bath-handrail1_before.webp" alt="浴室手すり その1 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>bath-handrail1_after.webp">
                      <img src="<?= $img ?>bath-handrail1_after.webp" alt="浴室手すり その1 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>浴室手すり その1</dt>
                    <dd>介護保険住宅改修工事</dd>
                    <dd>内容：バスルーム手すり取付</dd>
                    <dd>期間：1日</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>bath-handrail2_before.webp">
                      <img src="<?= $img ?>bath-handrail2_before.webp" alt="浴室手すり その2 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>bath-handrail2_after.webp">
                      <img src="<?= $img ?>bath-handrail2_after.webp" alt="浴室手すり その2 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>浴室手すり その2</dt>
                    <dd>介護保険住宅改修工事</dd>
                    <dd>内容：バスルーム手すり取付</dd>
                    <dd>期間：1日</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>roka1_handrail_before.webp">
                      <img src="<?= $img ?>roka1_handrail_before.webp" alt="廊下手すり その1 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>roka1_handrail_after.webp">
                      <img src="<?= $img ?>roka1_handrail_after.webp" alt="廊下手すり その1 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>廊下手すり その1</dt>
                    <dd>介護保険住宅改修工事</dd>
                    <dd>内容：廊下手すり取付工事</dd>
                    <dd>期間：1日</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>roka2_handrail_before.webp">
                      <img src="<?= $img ?>roka2_handrail_before.webp" alt="廊下手すり その2 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>roka2_handrail_after.webp">
                      <img src="<?= $img ?>roka2_handrail_after.webp" alt="廊下手すり その2 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>廊下手すり その2</dt>
                    <dd>介護保険住宅改修工事</dd>
                    <dd>内容：廊下手すり取付工事</dd>
                    <dd>期間：1日</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>entrance_before.webp">
                      <img src="<?= $img ?>entrance_before.webp" alt="玄関手すり 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>entrance_after.webp">
                      <img src="<?= $img ?>entrance_after.webp" alt="玄関手すり 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>玄関手すり</dt>
                    <dd>介護保険住宅改修工事</dd>
                    <dd>内容：玄関アプローチに手すり取付</dd>
                    <dd>期間：1日</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>toilet-handrail-before.webp">
                      <img src="<?= $img ?>toilet-handrail-before.webp" alt="トイレ手すり 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>toilet-handrail-after.webp">
                      <img src="<?= $img ?>toilet-handrail-after.webp" alt="トイレ手すり 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>トイレ手すり</dt>
                    <dd>介護保険住宅改修工事</dd>
                    <dd>内容：トイレ手すり取付</dd>
                    <dd>期間：1日</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card">
                <figure>
                    <a href="<?= $img ?>y-senmen_before.webp">
                      <img src="<?= $img ?>y-senmen_before.webp" alt="洗面所 施工前" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label before">Before</span>
                    </a>
                  </figure>
                  <figure>
                    <a href="<?= $img ?>y-senmen_after.webp">
                      <img src="<?= $img ?>y-senmen_after.webp" alt="洗面所 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>洗面所 施工前後</dt>
                    <dd>場所：洗面所</dd>
                    <dd>内容：内装リフォーム</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card case-card-single">
                <figure>
                    <a href="<?= $img ?>catroom_after.webp">
                      <img src="<?= $img ?>catroom_after.webp" alt="ネコちゃん部屋 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>ネコちゃん部屋 施工後</dt>
                    <dd>場所：ネコちゃん部屋</dd>
                    <dd>期間：2日</dd>
                    <dd>内容：クロス張り替え</dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card case-card-single">
                <figure>
                    <a href="<?= $img ?>hairsalon.webp">
                      <img src="<?= $img ?>hairsalon.webp" alt="美容室 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>美容室施工後</dt>
                    <dd>場所：美容室</dd>
                    <dd>期間：10日</dd>
                    <dd>内容：フロア張り替え、壁クロス貼り替え、オーダーブラインド、設備工事</dd>
                    <dd>URL：<a href="http://queen-anne-ave8.webnode.jp/" target="_blank">http://queen-anne-ave8.webnode.jp/<span class="visually-hidden">別ウィンドウで開く</span></a></dd>
                  </dl>
                </div>
              </li>
              <li class="case-item case-card case-card-single">
                <figure>
                    <a href="<?= $img ?>bord_after.webp">
                      <img src="<?= $img ?>bord_after.webp" alt="黒板ボードをつけた対面キッチン 施工後" width="768" height="512" loading="lazy" decoding="async" />
                      <span class="img-label after">After</span>
                    </a>
                  </figure>
                <div class="case-body">
                  <dl class="case-meta">
                    <dt>黒板ボードをつけた対面キッチン</dt>
                    <dd>施工期間：2日</dd>
                  </dl>
                </div>
              </li>
            </ul>
        </div>
      </div>
    </main>

<?php
$body_extra = '    <script src="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var lightboxHtml = \'<div id="glightbox-body" class="glightbox-container" tabindex="-1" role="dialog" aria-hidden="false">\' +
          \'<div class="gloader visible"></div>\' +
          \'<div class="goverlay"></div>\' +
          \'<div class="gcontainer">\' +
          \'<div id="glightbox-slider" class="gslider"></div>\' +
          \'<button class="gclose gbtn" aria-label="閉じる" data-taborder="3">{closeSVG}</button>\' +
          \'<button class="gprev gbtn" aria-label="前へ" data-taborder="2">{prevSVG}</button>\' +
          \'<button class="gnext gbtn" aria-label="次へ" data-taborder="1">{nextSVG}</button>\' +
          \'</div></div>\';
        GLightbox({
          selector: ".project-group a[href$=\'.webp\']",
          touchNavigation: true,
          loop: true,
          openEffect: "zoom",
          closeEffect: "fade",
          lightboxHTML: lightboxHtml
        });
      });
    </script>';
?>
<?php include __DIR__ . '/../includes/footer.php'; ?>
