$(document).ready(function () {
  let windowWidth = window.innerWidth;
  let slideWidth = $('.banner__item').innerWidth();
  const banner = new Swiper('.banner-slider', {
    loop: true,
    preloadImages: false,
    allowTouchMove: false,
    lazy: {
      loadOnTransitionStart: true,
    },
    pagination: {
      el: '.pagination',
      type: 'bullets',
      bulletClass: 'pagination__item',
      bulletActiveClass: 'pagination__item_active',
        clickable: true,
    },
    breakpoints: {
      320: {
        spaceBetween: 30,
        navigation: false
      },
      768: {
        spaceBetween: windowWidth - slideWidth,
        navigation: {
          nextEl: '.swiper-next',
          prevEl: '.swiper-prev',
        },
      }
    }
  });

  let docSlider;

  function doDocSlider() {
    docSlider = new Swiper('.doctors__slider', {
      spaceBetween: 20,
      pagination: {
        el: '.pagination',
        type: 'bullets',
        bulletClass: 'pagination__item',
        bulletActiveClass: 'pagination__item_active',
        clickable: true,
      },
      paginationClickable: true,
    });
  }

  if (windowWidth < 1024) {
    doDocSlider()
  }

  $(window).on('resize', function () {
    let windowWidth = window.innerWidth;
    if (windowWidth < 1024) {
      if ( docSlider ) {
        docSlider.destroy( true, true);
      }
      doDocSlider()
    } else {
      if ( docSlider ) {
        docSlider.destroy( true, true);
      }
    }
  });

  const healSlider = new Swiper('.services__slider', {
    loop: true,
    preloadImages: false,
    lazy: {
      loadOnTransitionStart: true,
    },
    watchSlidesProgress: true,
    spaceBetween: 20,
    pagination: {
      el: '.pagination',
      type: 'bullets',
      bulletClass: 'pagination__item',
      bulletActiveClass: 'pagination__item_active',
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });

  const implantSlider = new Swiper('.implant__slider', {
    loop: false,
    preloadImages: false,
    slidesPerView: 1,
    allowTouchMove: false,
    lazy: {
      loadOnTransitionStart: true,
    },
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    },
    watchSlidesProgress: true,
    spaceBetween: 50,
    pagination: {
      el: '.implant__slider-pagination',
      type: 'custom',
      clickable: true,
      currentClass: 'active',
    },
  });

  implantSlider.on('slideChange', function () {
    let pagItem = $('.implant__slider-pagination .button');
    pagItem.removeClass('active');
    pagItem.eq(implantSlider.activeIndex ).addClass('active')
  });
});
