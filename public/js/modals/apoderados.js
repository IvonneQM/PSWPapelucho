$(document).ready(function () {
    listAllApo();
    $('.rut').Rut({
        on_error : function () {
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
    });

    $('#register-apoderado').click(function () {
        $('#modal-crear-apoderados').modal();

        $(document).on('submit', '#form-register-apoderado', function (e) {
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
                    $('#form-register-apoderado').trigger('reset');
                    $('#rut').focus();
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
        });
    });

    //AGREGAR ROW //
    function addRow (data){
        var row = '<tr data-id='+data.id+'>'+
            '<td>'+ data.rut + '</td>'+
            '<td>'+ data.full_name + '</td>'+
            '<td>'+
            '<div class="t-actions">'+
            '<a class="parvulos-del-apoderado" href="parvulos?user='+data.id+'"><i class="fa fa-child"></i></a>'+ ' ' +
            '<a class="editar_apo" href="#" data-toggle="modal" data-target="#modal-editar-apoderado" role="button" ><i class="fa fa-pencil"></i></a>'+ ' ' +
            '<a href="#" type="submit" class="btn-delete-apoderado"><i class="fa fa-trash-o"></i></a>'+ ' ' +
            '</div>'+
            '</td>'+
            '</tr>';
        $('#t-header-content-principal').after(row);
    }

    //MOSTRAR DATOS APODERADOS//

    $('body').on('click','.editar_apo',function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href').attr('href');
        var route = link.split('%7Bapoderados%7D').join(id);
        $.get(route, function (resp) {
            $('#yo').html("Editar apoderado: " + resp.full_name);
            $('#idUser').val(resp.id);
            $('.rut').val(resp.rut);
            $('#nameApo').val(resp.full_name);
            $('#emailApo').val(resp.email);
            $('#passApo').val("");
        })
    });

    //ACTUALIZAR APODERADO//
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
                listAllApo();
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

    $('body').on('click','.btn-delete-apoderado',function (e) {
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
});

/* Listar los apoderados ajax*/
var listAllApo = function () {
    $.ajax({
        type: 'get',
        url: 'listApo',
        success: function (data) {
            $('#list-all-apo').empty().html(data)
        }
    });
};

/* Paginar los apoderados ajax*/
$(document).on('click','.pagination li a',function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#list-all-apo').empty().html(data);
        }
    });
});

