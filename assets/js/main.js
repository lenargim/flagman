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

  $('.menu-item-has-children>a').click(function (e) {
    if (windowWidth <= 1024) {
      e.preventDefault();
      if (windowWidth <= 768) {
        $(this).siblings('.sub-menu').slideToggle();
        $(this).parent().toggleClass('active');
      }
    }
  });

  $('.burger').click(function () {
    $(this).toggleClass('active');
    $('.burger-menu').slideToggle();
  });

  $(document).mouseup( function(e){
    var div = $( ".header" );
    if ( !div.is(e.target)
      && div.has(e.target).length === 0
      && windowWidth < 1024 ) {
      $('.burger').removeClass('active');
      $('.burger-menu').slideUp();
    }
  });

  $('.modal__close').on('click', function () {
    $(this).parents('.modal').removeClass('active');
    $(this).parents('.overlay').removeClass('active');
    $('html, body').css('overflowY', 'initial')
  });

  $('.open-callback').on('click', function () {
    let title = $(this).data('title');
    let modal = $('.modal-callback');
    $('.overlay').addClass('active');
    modal.addClass('active');
    modal.find('.from').val(title);
    $('html, body').css('overflowY', 'hidden')
  });

  let wpcf7Elm = $('.wpcf7');
  wpcf7Elm.on( 'wpcf7mailsent ', function( event ) {
    $('.modal').removeClass('active');
    $('.overlay').addClass('active');
    $('.modal-thx').addClass('active');
    $('html, body').css('overflowY', 'hidden')
  })
});