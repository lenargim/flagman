const $ = jQuery;
$(document).ready(function () {
  let windowWidth = window.innerWidth;
  $('.tel').mask('+7(Z00) 000-00-00', {translation: {'Z': {pattern: /[0-79]/}}});
  $('.button').mousemove(function (e) {
    $(this).attr('data-bg', $(this).css("background-color"));
    let originalBG = $(this).attr('data-bg');
    let x, y, xy, bgWebKit, bgMoz,
      lightColor = "rgba(255,255,255,0.6)",
      gradientSize = 50;

    x = e.pageX - $(this).offset().left;
    y = e.pageY - $(this).offset().top;
    xy = x + " " + y;

    bgWebKit = `-webkit-gradient(radial, ${xy}, 0, ${xy}, ${gradientSize}, from(${lightColor}), to(${originalBG})), ${originalBG}`;
    bgMoz    = "-moz-radial-gradient(" + x + "px " + y + "px 45deg, circle, " + lightColor + " 0%, " + originalBG + " " + gradientSize + "px)";

    $(this)
      .css({background: bgWebKit})
      .css({background: bgMoz});

  }).mouseleave(function () {
    $(this).css({background: $(this).attr('data-bg')});
  });

  $('.menu-item-has-children').click(function (e) {
    if (window.matchMedia("(pointer: coarse)").matches && windowWidth <= 1024) {
      e.preventDefault()
    }
  });

  $('.burger').click(function () {
    $(this).toggleClass('active');
    $('.header__menu').slideToggle();
  })

  $(document).mouseup( function(e){
    var div = $( ".header" );
    if ( !div.is(e.target)
      && div.has(e.target).length === 0
      && windowWidth < 1024 ) {
      $('.burger').removeClass('active');
      $('.header__menu').slideUp();
    }
  });
});