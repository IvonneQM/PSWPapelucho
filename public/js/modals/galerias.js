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

                    if (name == null) {
                        name = ''
                    }

                    var concatenado = name;
                    if (concatenado == '') {
                        concatenado = "Se ha generado un problema de conexión con el servidor"
                    }
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

    //ACTUALIZAR GALERIA

    $('.editar_galeria').click(function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_galeria').attr('href');
        var route = link.split('%7Bgalerias%7D').join(id);


        $.get(route, function (resp) {
            $('#nombre_galeria').html("Editar Galería: " + resp.name);
            $('#idGaleria').val(resp.id);
            $('#nameGaleria').val(resp.name);
            $('#publishGaleria').val(resp.publish);
        })
    });


    $('#btnActualizarGaleria').click(function (e) {
        e.preventDefault();

        var id     = $('#idGaleria').val();
        var form   = $('#id_form_galeria');
        var link   = $('#id_update_galeria').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Bgalerias%7D').join(id);

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
                swal( "¡Error!",
                    "Se ha generado un problema de conexión con el servidor",
                    "error");
            }
        })
    })

//ELIMINAR GALERIA//
    $('.btn-delete-galeria').click(function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-galeria');
        var url  = form.attr('action').replace(':GALERIA_ID', id);
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
                        swal( "¡Error!",
                            "Se ha generado un problema de conexión con el servidor",
                            "error");
                    }

                });

            });
    })

});