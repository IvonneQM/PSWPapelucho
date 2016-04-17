$(document).ready(function () {
    //INGRESAR GALERIAS//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $('#register-galeria').click(function () {
        $('#modal-crear-galeria').modal();


        $(document).on('submit', '#form-register-galerias', function (e) {
            e.preventDefault();

            $('input+small').text('');
            $('input').parent().removeClass('has-error');
            $.ajax({
                method  : $(this).attr('method'),
                type    : "POST",
                token   : $('input[name="_token"]').val(),
                cache   : false,
                url     : $(this).attr('action'),
                data    : $(this).serialize(),
                dataType: "json",
                success : function (data) {
                    swal("Registro creado!",
                        "El registro se ha generado con exito",
                        "success");
                },
                error   : function (msj) {
                   /* var title   = msj.responseJSON.title;
                    var content = msj.responseJSON.content;
                    var publish = msj.responseJSON.publish;

                    if (title == null) {
                        title = ''
                    }
                    if (content == null) {
                        content = ''
                    }
                    if (publish == null) {
                        publish = ''
                    }

                    var concatenado = title + '\n' + content + '\n' + publish;
                    if (concatenado == '') {
                        concatenado = "Se ha generado un problema de conexión con el servidor"
                    }*/
                    swal({
                        title             : "¡Error!",
                        text              : "OOOOO",
                        type              : "warning",
                        confirmButtonColor: "#C32026",
                        confirmButtonText : "Ok",
                        closeOnConfirm    : false
                    })
                }
            });
        })
    })
});