let $ = jQuery;
$(document).ready(function () {
  // $('body').on('mousemove',e=>{
  //   let classes = e.target.className;
  //   if ( classes.includes('button ')) {
  //     console.log('button')
  //   }
  // })
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
    //bgMoz    = "-moz-radial-gradient(" + x + "px " + y + "px 45deg, circle, " + lightColor + " 0%, " + originalBG + " " + gradientSize + "px)";
    bgMoz    = "-moz-radial-gradient(" + x + "px " + y + "px 45deg, circle, " + lightColor + " 0%, " + originalBG + " " + gradientSize + "px)";

    $(this)
      .css({background: bgWebKit})
      .css({background: bgMoz});

  }).mouseleave(function () {
    $(this).css({background: $(this).attr('data-bg')});
  });
});