$(window).scroll(slideRibbon);
$(window).on('changed.zf.mediaquery', slideRibbon);

function slideRibbon() {
    var ribbon = $('.sticky-slider-wrapper');
    var navbar = $('#desktop-navbar');
    if (navbar.position().top + navbar.height() < window.pageYOffset) {
        ribbon.addClass('active');
    }
    else ribbon.removeClass('active');
}
