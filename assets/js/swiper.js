$(document).ready(function () {
  let windowWidth = window.innerWidth;
  let slideWidth = $('.banner__item').innerWidth();
  const banner = new Swiper('.banner-slider', {
    loop: true,
    preloadImages: false,
    watchSlidesProgress: true,
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
        navigation: false,
        allowTouchMove: true,
      },
      768: {
        allowTouchMove: false,
        spaceBetween: 100,
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

  const servicesSlider = new Swiper('.services__slider', {
    loop: false,
    centerInsufficientSlides: true,
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
    loop: true,
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
    let dublicate = $('.swiper-slide-duplicate').length;
    let ind = implantSlider.activeIndex - --dublicate;
    pagItem.removeClass('active');
    if (ind === -1 || ind === 3) {
      ind === -1 ? pagItem.eq(2).addClass('active') : pagItem.eq(0).addClass('active')
    } else {
      pagItem.eq(ind).addClass('active')
    }
  });


  const sertificate = new Swiper('.single-doctor__sertificate', {
    speed: 600,
    allowTouchMove: false,
    slidesPerView: 'auto',
    loop: true,
    preloadImages: false,
    loopedSlides: 0,
    lazy: {
      loadOnTransitionStart: true,
    },
    watchSlidesProgress: true,
    spaceBetween: 20,
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    },
  });
});
