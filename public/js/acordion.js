function toggleChevron(e) {
    
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);



/*$(document).on('show', '.accordion', function (e) {
        //$('.accordion-heading i').toggleClass(' ');
        $(e.target).prev('.accordion-heading').addClass('accordion-opened');
        console.log('hola');
    });

    $(document).on('hide', '.accordion', function (e) {
        $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
        //$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
    });*/

