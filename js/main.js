(function() {
  var toggle = document.querySelector('header button[aria-controls="main-nav-menu"]');
  var nav = document.getElementById('main-nav');
  var header = document.querySelector('header');
  if (!toggle || !nav || !header) return;

  var menuLinks = function() {
    return nav.querySelectorAll('#main-nav-menu a');
  };

  var BREAKPOINT_MOBILE_NAV = 1024;
  var mqMobileNav = window.matchMedia
    ? window.matchMedia('(max-width: ' + BREAKPOINT_MOBILE_NAV + 'px)')
    : { matches: false };

  function isMobileNavLayout() {
    return mqMobileNav.matches;
  }

  /**
   * CSS flex の order は Tab 順・フォーカス順に効かない。モバイル幅では画面上「電話→ボタン→メニュー」なのに DOM が
   * ul→電話 のままだと、Shift+Tab で電話の直前が「お問い合わせ」（ul末尾）になる。
   * レイアウトは order で維持しつつ、(max-width:1024px) のときだけ子ノードを並べ替える。
   */
  function reorderMainNavForKeyboard() {
    var ul = document.getElementById('main-nav-menu');
    var divider = nav.querySelector('.main-nav-divider');
    var tel = nav.querySelector('a[href^="tel:"]');
    var btn = nav.querySelector('button[aria-controls="main-nav-menu"]');
    if (!ul || !tel || !btn) return;
    var seq = isMobileNavLayout()
      ? [tel, btn, divider, ul]
      : [ul, divider, tel, btn];
    seq.filter(Boolean).forEach(function(node) {
      nav.appendChild(node);
    });
  }

  /** ハンバー横断時のみ: 閉じているときは Tab 順から除外（見えないリンクにフォーカスが迷い込むのを防ぐ） */
  function syncMobileMenuTabbing() {
    var mobile = isMobileNavLayout();
    var open = header.classList.contains('nav-open');
    menuLinks().forEach(function(link) {
      if (mobile && !open) {
        link.setAttribute('tabindex', '-1');
      } else {
        link.removeAttribute('tabindex');
      }
    });
  }

  function onMobileNavMqChange() {
    reorderMainNavForKeyboard();
    syncMobileMenuTabbing();
  }

  if (mqMobileNav.addEventListener) {
    mqMobileNav.addEventListener('change', onMobileNavMqChange);
  } else if (mqMobileNav.addListener) {
    mqMobileNav.addListener(onMobileNavMqChange);
  }

  function toggleNav(open) {
    var isOpen = open !== undefined ? open : !header.classList.contains('nav-open');
    header.classList.toggle('nav-open', isOpen);
    toggle.setAttribute('aria-expanded', isOpen);
    toggle.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
    syncMobileMenuTabbing();
    /* 開いた直後は同一タスク内で focus（iOS Safari 等は requestAnimationFrame 経由だと user gesture が切れフォーカス失敗することがある） */
    if (isOpen && isMobileNavLayout()) {
      var firstOpen = nav.querySelector('#main-nav-menu a');
      if (firstOpen) {
        firstOpen.focus();
      }
    }
  }

  toggle.addEventListener('click', function() {
    toggleNav();
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && header.classList.contains('nav-open')) {
      toggleNav(false);
      toggle.focus();
    }
  });

  nav.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      if (isMobileNavLayout()) toggleNav(false);
    });
  });

  window.addEventListener('resize', function() {
    reorderMainNavForKeyboard();
    if (!isMobileNavLayout()) {
      toggleNav(false);
    }
    syncMobileMenuTabbing();
  });

  reorderMainNavForKeyboard();
  syncMobileMenuTabbing();
})();

document.querySelectorAll('.form-grid').forEach(function(form) {
  form.addEventListener('submit', function() {
    form.classList.add('was-validated');
  });
});

/**
 * GLightbox（モバイル）: ライブラリは glightbox-mobile 時に外側クリックで閉じない。
 * pointer-events の上書きはヒット領域が不揃いになるためやめ、
 * 「画像・ナビ・説明文以外をタップしたら閉じる」を統一判定する。
 */
(function() {
  var touchStart = null;
  var lastBackdropClose = 0;

  function closeGlightbox() {
    var btn = document.querySelector('.glightbox-container .gclose');
    if (btn) btn.click();
  }

  function isBackdropCloseTarget(el) {
    if (!el || typeof el.closest !== 'function') return false;
    if (!document.body.classList.contains('glightbox-open')) return false;
    if (!document.body.classList.contains('glightbox-mobile')) return false;
    if (!el.closest('#glightbox-body')) return false;
    if (el.closest('.gbtn')) return false;
    if (el.closest('button')) return false;
    if (el.tagName === 'IMG') return false;
    if (el.closest('.gslide-image img')) return false;
    if (el.closest('iframe') || el.closest('video')) return false;
    if (el.closest('.gslide-description')) return false;
    return true;
  }

  function tryBackdropClose(e) {
    if (!isBackdropCloseTarget(e.target)) return;
    if (Date.now() - lastBackdropClose < 400) return;
    lastBackdropClose = Date.now();
    closeGlightbox();
  }

  document.addEventListener('click', tryBackdropClose, true);

  document.addEventListener('touchstart', function(e) {
    if (e.touches.length !== 1) return;
    var t = e.touches[0];
    touchStart = { x: t.clientX, y: t.clientY };
  }, { passive: true, capture: true });

  document.addEventListener('touchend', function(e) {
    if (!touchStart) return;
    if (!document.body.classList.contains('glightbox-open')) return;
    if (!document.body.classList.contains('glightbox-mobile')) return;
    var t = e.changedTouches[0];
    if (!t) return;
    var dx = Math.abs(t.clientX - touchStart.x);
    var dy = Math.abs(t.clientY - touchStart.y);
    touchStart = null;
    if (dx > 18 || dy > 18) return;
    var el = document.elementFromPoint(t.clientX, t.clientY);
    if (!el) return;
    tryBackdropClose({ target: el });
  }, { passive: true, capture: true });
})();
