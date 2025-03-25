function fixedMenu() {
  $(window).bind('scroll', function () {
    if ($(window).scrollTop() > 400) {
      $('.header').addClass('fixed');
    } else {
      $('.header').removeClass('fixed');
    }
  });
}
fixedMenu()
