(function() {
  var toggle = document.querySelector('header button[aria-controls="main-nav-menu"]');
  var nav = document.getElementById('main-nav');
  var header = document.querySelector('header');
  if (!toggle || !nav || !header) return;

  function toggleNav(open) {
    var isOpen = open !== undefined ? open : !header.classList.contains('nav-open');
    header.classList.toggle('nav-open', isOpen);
    toggle.setAttribute('aria-expanded', isOpen);
    toggle.setAttribute('aria-label', isOpen ? 'メニューを閉じる' : 'メニューを開く');
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
      if (window.innerWidth <= 1024) toggleNav(false);
    });
  });

  window.addEventListener('resize', function() {
    if (window.innerWidth > 1024) toggleNav(false);
  });
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
