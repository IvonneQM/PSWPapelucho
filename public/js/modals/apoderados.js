$(document).ready(function () {

    $('#rut').Rut({
        on_error: function(){
            swal("Error!",
                "Rut Inválido",
                "warning");
        },
        format_on: 'keyup'
    });

    //INGRESAR APODERADOS//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('#register-apoderado').click(function () {
        $('#modal-crear-apoderados').modal();

        $(document).on('submit', '#form-register-apoderado', function (e) {
            e.preventDefault();
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
                    var rut    = msj.responseJSON.rut;
                    var nombre = msj.responseJSON.full_name;
                    var email  = msj.responseJSON.email;
                    var pass   = msj.responseJSON.password;

                    if (rut == null) {
                        rut = ''
                    }
                    if (nombre == null) {
                        nombre = ''
                    }
                    if (email == null) {
                        email = ''
                    }
                    if (pass == null) {
                        pass = ''
                    }

                    var concatenado = rut + '\n' + nombre + '\n' + email + '\n' + pass;
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

                /*     var errors = data.responseJSON;

                 console.log(errors);
                 $.each(errors, function(index, value) {
                 alert(value);
                 });

                 }
                 swal("Oops",
                 "Se ha generado un problema de conexión con el servidor",
                 "error");
                 }*/
                /*  swal("Oops",
                 "Se ha generado un problema de conexión con el servidor",
                 "error");
                 }*/
            });
        })
    });

    //ACTUALIZAR APODERADOS//

    $('.editar_apo').click(function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href').attr('href');
        var route = link.split('%7Bapoderados%7D').join(id);

        $.get(route, function (resp) {

            $('#yo').html("Editar apoderado: " + resp.full_name);
            $('#idUser').val(resp.id);
            $('#rutApo').val(resp.rut);
            $('#nameApo').val(resp.full_name);
            $('#emailApo').val(resp.email);
            $('#passApo').val("");
        })
    });


    $('#btnSave').on('click', function (e) {

        e.preventDefault();

        var id     = $('#idUser').val();
        var form   = $('#id_prueba');
        var link   = $('#id_update').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Bapoderados%7D').join(id);

        $.ajax({

            url : route,
            type: metodo,
            data: form.serialize(),

            success: function (data) {
                swal("Registro actualizado!",
                    "El registro se ha actualizado con exito",
                    "success");
            },
            error  : function (data) {
                swal("¡Error!",
                    "Se ha generado un problema de conexión con el servidor",
                    "error");
            }


        })


    });


    //ELIMINAR APODERADOS//
    $('.btn-delete-apoderado').click(function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-apoderado');
        var url  = form.attr('action').replace(':APODERADO_ID', id);
        var data = form.serialize();

        swal({
                title             : "¿Confirma eliminación?",
                text              : "El registro se eliminará permanentementer",
                type              : "warning",
                showCancelButton  : true,
                confirmButtonColor: "#C32026",
                confirmButtonText : "Eliminar",
                closeOnConfirm    : false
            },

            function () {

                row.fadeOut();
                $.ajax({
                    method  : $(this).attr('method'),
                    type    : "POST",
                    url     : url,
                    form    : form,
                    data    : data,
                    dataType: "json",
                    success : function (data) {
                        swal("Registro eliminado!",
                            "El registro ha sido eliminada",
                            "success");
                    },
                    error   : function (data) {
                        swal("¡Error!",
                            "Se ha generado un problema de conexión con el servidor",
                            "error");
                        row.fadeIn();
                    }

                });

            });

    })
})

