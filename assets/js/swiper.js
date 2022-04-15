$(document).ready(function () {
  const banner = new Swiper('.banner-slider', {
    loop: true,
    preloadImages: false,
    lazy: true,
    spaceBetween: 9999,
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    },
    pagination: {
      el: '.pagination',
      type: 'bullets',
      bulletClass: 'pagination__item',
      bulletActiveClass: 'pagination__item_active',
      clickable: true,
    },
  });
});