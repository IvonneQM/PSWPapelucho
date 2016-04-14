/**
 * Created by YvonneQM on 25-03-16.
 */

$(document).ready(function () {
    //INGRESAR NOTICIAS//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $('#register-noticia').click(function () {
        $('#modal-noticias').modal();


        $(document).on('submit', '#form-register-noticia', function (e) {
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
                        var title = msj.responseJSON.title;
                        var content = msj.responseJSON.content;
                        var publish = msj.responseJSON.publish;

                        if(title == null){title = ''}
                        if(content == null){content = ''}
                        if(publish == null){publish = ''}

                        var concatenado = title + '\n' + content + '\n' + publish;
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
    });

    //ACTUALIZAR NOTICIA

    $('.editar_noticia').click(function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_noticia').attr('href');
        var route = link.split('%7Bnoticias%7D').join(id);


        $.get(route, function (resp) {
            $('#idNoticia').val(resp.id);
            $('#titleNoticia').val(resp.title);
            $('#contentNoticia').val(resp.content);
            $('#publishNoticia').val(resp.publish);
        })
    });

    $('#btnActualizarNoticia').click(function (e) {
        e.preventDefault();

        var id     = $('#idNoticia').val();
        var form   = $('#id_form_noticia');
        var link   = $('#id_update_noticia').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Bnoticias%7D').join(id);

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

    //ELIMINAR NOTICIAS//
    $('.btn-delete-noticia').click(function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-noticia');
        var url  = form.attr('action').replace(':NOTICIA_ID', id);
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