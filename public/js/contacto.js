/**
 * Created by Inger on 05-07-2016.
 */
$(document).ready(function (e) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('submit', '#formContact', function (e) {
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

            },
            error  : function (msj) {
                var name    = msj.responseJSON.name;
                var email   = msj.responseJSON.email;
                var phone   = msj.responseJSON.phone;
                var subject = msj.responseJSON.subject;

                if (name == null) {
                    name = ''
                }
                if (email == null) {
                    email = ''
                }
                if (phone == null) {
                    phone = ''
                }
                if (subject == null) {
                    subject = ''
                }

                var concatenado = name + '\n' + email + '\n' + phone + '\n' + subject;
                if (concatenado == '') {
                    concatenado = "Se ha generado un problema de conexión con el servidor"
                }

                swal({
                    title             : "¡Error!",
                    text              : concatenado,
                    type              : "warning",
                    confirmButtonColor: "#C32026",
                    confirmButtonText : "Ok",
                    closeOnConfirm    : false
                })
            }
        })
    })
});
