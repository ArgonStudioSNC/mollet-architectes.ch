$('.reveal-external-control').click( function(e) {
    var slideId = $(e.delegateTarget).data('slide');
    var chosenSlide = $('.orbit .orbit-slide').filter(function (index) {
        return index === slideId;
    })

    $('.orbit').foundation('changeSlide', true, chosenSlide, slideId);
});

$('#reveal-gallery').on('closeme.zf.reveal', x => {
    $(window).resize();
});
