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
                    var name   = msj.responseJSON.name;
                    var publish = msj.responseJSON.publish;

                    if (name == null) {
                        name = ''
                    }

                    if (publish == null) {
                        publish = ''
                    }

                    var concatenado = name + '\n' + publish;
                    if(concatenado == ''){concatenado = "Se ha generado un problema de conexión con el servidor"}
                    swal({
                        title             : "¡Error!",
                        text              : concatenado,
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