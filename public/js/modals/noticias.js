$(document).ready(function () {
    listNoticia();
    //INGRESAR NOTICIAS//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#register-noticia').click(function () {
        $('#modal-noticias').modal();

        $(document).on('submit', '#form-register-noticia', function (e) {
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
                    addRow(data);
                    $('#form-register-noticia').trigger('reset');
                    $('#title').focus();
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

    //AGREGAR ROW //
    function addRow (data){
        var row = '<tr data-id='+data.id+'>'+
            '<td>'+ data.title + '</td>'+
            '<td>'+ data.content + '</td>'+
            '<td>'+ data.publish + '</td>'+
            '<td>'+
            '<div class="t-actions">'+
            '<a class="editar_noticia" href="#" data-toggle="modal" data-target="#modal-editar-noticia" role="button"><i class="fa fa-pencil"></i></a>'+ ' ' +
            '<a href="#" type="submit" class="btn-delete-noticia"><i class="fa fa-trash-o"></i></a>'+ ' ' +
            '</div>'+
            '</td>'+
            '</tr>';
        $('#t-header-content-principal').after(row);
    }
    //MOSTRAR DATOS NOTICIA //

    $('body').on('click','.editar_noticia',function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_noticia').attr('href');
        var route = link.split('%7Bnoticias%7D').join(id);
        $.get(route, function (resp) {
            $('#nombre_noticia').html("Editar noticia: " + resp.title);
            $('#idNoticia').val(resp.id);
            $('#titleNoticia').val(resp.title);
            $('#contentNoticia').val(resp.content);

            var pub;
            if (resp.publish == 'Si')
            {
                pub = $('#publishNoticia').prop('checked', true);
            }
            else
            {
                pub = $('#publishNoticia').prop('checked', false);
            }
            $('#publishNoticia').val(pub);
        })
    });

    //ACTUALIZAR NOTICIA //
    $('#btnActualizarNoticia').on('click', function (e) {
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
                listNoticia();

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
    $('body').on('click','.btn-delete-noticia',function (e) {
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

/* Listar noticias ajax*/
var listNoticia = function () {
    $.ajax({
        type: 'get',
        url: 'listNoticias',
        success: function (data) {
            $('#list-noticia').empty().html(data)
        }
    });
};

/* Paginar noticias ajax*/
$(document).on('click','.pagination li a',function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#list-noticia').empty().html(data);
        }
    });
});