$(document).ready(function () {
    listAll();

    $('.rut').Rut({
        on_error : function () {
            swal("Error!",
                "Rut Inválido",
                "warning");
        },
        format_on: 'keyup'
    });

    //INGRESAR ADMINISTRADOR//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#register-administrador').click(function () {
        $('#modal-administradores').modal();
        $(document).on('submit', '#form-register-administrador', function (e) {
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
                    $('#form-register-administrador').trigger('reset');
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
            })
        })
    });

    //AGREGAR ROW //
    function addRow(data) {
        var row = '<tr data-id=' + data.id + '>' +
            '<td>' + data.rut + '</td>' +
            '<td>' + data.full_name + '</td>' +
            '<td>' +
            '<div class="t-actions">' +
            '<a class="editar_admin" href="#" data-toggle="modal" data-target="#modal-editar-administrador" role="button" ><span class="span-actions span-editar">Editar</span></a>' + ' ' +
            '<a href="#" type="submit" class="btn-delete-administrador"><span class="span-actions span-eliminar">Eliminar</span></a>' + ' ' +
            '</div>' +
            '</td>' +
            '</tr>';
        $('#t-header-content-principal').after(row);
    }

//MOSTRAR DATOS ADMINISTRADOR//

    $('body').on('click', '.editar_admin', function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_admin').attr('href');
        var route = link.split('%7Badministradores%7D').join(id);

        $.get(route, function (resp) {
            $('#Admin').html("Editar Administrador: " + resp.full_name);
            $('#idAdmin').val(resp.id);
            $('.rut').val(resp.rut);
            $('#nameAdmin').val(resp.full_name);
            $('#emailAdmin').val(resp.email);
            $('#passAdmin').val("");
        })
    });

    //ACTUALIZAR ADMINISTRADOR//
    $('#btnSaveAdmin').on('click', function (e) {
        e.preventDefault();
        var id     = $('#idAdmin').val();
        var form   = $('#id_form_admin');
        var link   = $('#id_update_admin').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Badministradores%7D').join(id);

        $.ajax({
            url : route,
            type: metodo,
            data: form.serialize(),

            success: function (data) {
                listAll();

                swal("Registro actualizado!",
                    "El registro se ha actualizado con exito",
                    "success");
            },
            error  : function (msj) {
                var nombre = msj.responseJSON.full_name;
                var email  = msj.responseJSON.email;

                if (nombre == null) {
                    nombre = ''
                }
                if (email == null) {
                    email = ''
                }
                var concatenado = nombre + '\n' + email;
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

//ELIMINAR ADMINISTRADOR//
    $('body').on('click', '.btn-delete-administrador', function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-administrador');
        var url  = form.attr('action').replace(':ADMINISTRADOR_ID', id);
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


    });

    /* Buscar los administradores ajax*/
    $('#search-form-admin').on('submit',function (e) {
        e.preventDefault();
        $.ajax({
            type : 'get',
            url : $(this).attr('action'),
            data    : $(this).serialize(),
            success: function (data) {
                $('#list-all').empty().html(data)
            }
        })
    })
});

/* Listar los administradores ajax*/
var listAll = function () {
    $.ajax({
        type: 'get',
        url: 'listAll',
        success: function (data) {
            $('#list-all').empty().html(data)
        }
    });
};

/* Paginar los administradores ajax*/
$(document).on('click','.pagination li a',function (e) {
    e.preventDefault();
   var url = $(this).attr('href');
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#list-all').empty().html(data);
        }
    });
});

