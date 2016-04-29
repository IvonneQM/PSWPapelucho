$(document).ready(function () {

    //Listar parvulos de un apoderado//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('#register-parvulo').click(function () {
        $('#modal-crear-parvulos').modal();

        $(document).on('submit', '#form-register-parvulo', function (e) {
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
            });
        })
    });

    //ACTUALIZAR APODERADOS//

    $('.editar_parvulo').click(function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_parvulo').attr('href');
        var route = link.split('%7Bparvulos%7D').join(id);

        $.get(route, function (resp) {
           console.log(resp)
            $('#parv').html("Editar párvulo: " + resp.full_name);
            $('#idParvulo').val(resp.id);
            $('#rutParvulo').val(resp.rut);
            $('#full_nameParvulo').val(resp.full_name);
        })
    });


    $('#btnSave').on('click', function (e) {

        e.preventDefault();

        var id     = $('#idUser').val();
        var form   = $('#id_prueba');
        var link   = $('#id_update').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Bparvulos%7D').join(id);

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

    //ELIMINAR NOTICIAS//
    $('.btn-delete-parvulo').click(function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-parvulo');

        var url  = form.attr('action').replace(':PARVULO_ID',id);
        console.log(url);
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
                        swal("Oops",
                            "Se ha generado un problema de conexión con el servidor",
                            "error");
                    }

                });

            });
    })
});