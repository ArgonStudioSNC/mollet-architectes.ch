$('tr[data-href]').on("click", function() {
    document.location = $(this).data('href');
});

$('tr[data-href]').css('cursor', 'pointer');
