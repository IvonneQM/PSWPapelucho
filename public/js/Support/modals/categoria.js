/**
 * Created by Inger on 02-10-16.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).on('submit', '#form-register-categoria', function (e) {
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

            $('#form-register-categoria').trigger('reset');
            $('#title-categoria').focus();
            swal("Registro creado!",
                "El registro se ha generado con exito",
                "success");
        },
        error   : function (msj) {
            swal({
                title             : "¡Error!",
                text              : "Se ha generado un problema de conexión con el servidor",
                type              : "warning",
                confirmButtonColor: "#C32026",
                confirmButtonText : "Ok",
                closeOnConfirm    : false
            })
        }
    });
});