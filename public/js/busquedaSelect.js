$(document).ready(function () {
    $('select').select2({
        allowClear : true,
        placeholder: {
            id  : "",
            text: "Seleccione una opción"
        }

    });
    $.fn.populateSelect = function (values) {
        var options = '';
        $('#row').empty(options);
        $.each(values, function (key, row) {
            options += '<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6" id="links">' +
                '<a href="../' + row.text + '" class="thumbnail" data-gallery>' +
                '<img src="' + row.text + '">' +
                '</a>' +
                '</div>'

        });

        $('#row').append(options);

    };

    $('#galeria_id').change(function () {
        var galeria_id = $(this).val();

        if (galeria_id == '') {
            $('#row').empty();
        }
        else {
            $.getJSON('archivos/galeria/' + galeria_id, null, function (values) {
                $('#row').populateSelect(values);
            });
        }
    });

});