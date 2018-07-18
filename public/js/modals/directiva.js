$(document).ready(function () {
    listAllDirectiva();

    $('.rut').Rut({
        on_error : function () {
            swal("Error!",
                "Rut Inválido",
                "warning");
        },
        format_on: 'keyup'
    });

    //INGRESAR CHOFER//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#register-directiva').click(function () {
        $('#modal-directiva').modal();
        $(document).on('submit', '#form-register-directiva', function (e) {
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
                    $('#form-register-directiva').trigger('reset');
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
            '<a class="editar_directiva" href="#" data-toggle="modal" data-target="#modal-editar-directiva" role="button" ><span class="span-actions span-editar">Editar</span></a>' + ' ' +
            '<a href="#" type="submit" class="btn-delete-chofer"><span class="span-actions span-eliminar">Eliminar</span></a>' + ' ' +
            '</div>' +
            '</td>' +
            '</tr>';
        $('#t-header-content-principal').after(row);
    }

//MOSTRAR DATOS CHOFER//

    $('body').on('click', '.editar_directiva', function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_directiva').attr('href');
        var route = link.split('%7Bdirectiva%7D').join(id);

        $.get(route, function (resp) {
            $('#nameDirectivaTitle').html("Editar Directiva: " + resp.full_name);
            $('#idDirectiva').val(resp.id);
            $('.rut').val(resp.rut);
            $('#nameDirectiva').val(resp.full_name);
            $('#emailDirectiva').val(resp.email);
            $('#passDirectiva').val("");
        })
    });

    //ACTUALIZAR CHOFER//
    $('#btnSaveDirectiva').on('click', function (e) {
        e.preventDefault();
        var id     = $('#idDirectiva').val();
        var form   = $('#id_form_directiva');
        var link   = $('#id_update_directiva').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Bdirectiva%7D').join(id);

        $.ajax({
            url : route,
            type: metodo,
            data: form.serialize(),

            success: function (data) {
                listAllDirectiva();

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

//ELIMINAR DUEÑOS//
    $('body').on('click', '.btn-delete-directiva', function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-directiva');
        var url  = form.attr('action').replace(':DIRECTIVA_ID', id);
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

    /* Buscar los choferes ajax*/
    $('#search-form-Directiva').on('submit',function (e) {
        e.preventDefault();
        $.ajax({
            type : 'get',
            url : $(this).attr('action'),
            data    : $(this).serialize(),
            success: function (data) {
                $('#list-all-directiva').empty().html(data)
            }
        })
    })
});

/* Listar los choferes ajax*/
var listAllDirectiva = function () {
    $.ajax({
        type: 'get',
        url: 'listDirectiva',
        success: function (data) {
            $('#list-all-directiva').empty().html(data)
        }
    });
};

/* Paginar los choferes ajax*/
$(document).on('click','.pagination li a',function (e) {
    e.preventDefault();
   var url = $(this).attr('href');
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#list-all-directiva').empty().html(data);
        }
    });
});

