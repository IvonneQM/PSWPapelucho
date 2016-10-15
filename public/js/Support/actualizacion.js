/**
 * Created by Inger on 02-10-16.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).on('submit', '#form-register-actualizacion', function (e) {
    e.preventDefault();
    $.ajax({
        method  : $(this).attr('method'),
        type    : "POST",
        token   : $('input[name="_token"]').val(),
        cache   : false,
        url     : $(this).attr('action'),
        data    : $(this).serialize(),
        dataType: "json",
        success : function (data) {
            $('#form-register-actualizacion').trigger('reset');

        },
        error   : function (msj) {

        }
    });
});

$(document).ready(function () {
    $('#agregar-item').click(function () {
        addItems();
    });
});


function addItems() {
    $('#add-items').clone().appendTo('#principal-item');
}