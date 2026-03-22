(function () {
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof GLightbox === 'undefined') return;

    var lightboxHtml =
      '<div id="glightbox-body" class="glightbox-container" tabindex="-1" role="dialog" aria-hidden="false">' +
      '<div class="gloader visible"></div>' +
      '<div class="goverlay"></div>' +
      '<div class="gcontainer">' +
      '<div id="glightbox-slider" class="gslider"></div>' +
      '<button type="button" class="gclose gbtn" aria-label="閉じる" data-taborder="1">{closeSVG}</button>' +
      '<button type="button" class="gprev gbtn" aria-label="前へ" data-taborder="2">{prevSVG}</button>' +
      '<button type="button" class="gnext gbtn" aria-label="次へ" data-taborder="3">{nextSVG}</button>' +
      '</div></div>';

    GLightbox({
      selector: "body.page-home ul.cases-list .case-card a[href$='.webp']",
      touchNavigation: true,
      loop: true,
      openEffect: 'zoom',
      closeEffect: 'fade',
      lightboxHTML: lightboxHtml
    });
  });
})();
