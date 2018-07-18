$(document).ready(function () {
    listAllChofer();

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
    $('#register-chofer').click(function () {
        $('#modal-chofer').modal();
        $(document).on('submit', '#form-register-chofer', function (e) {
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
                    $('#form-register-chofer').trigger('reset');
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
            '<a class="editar_chofer" href="#" data-toggle="modal" data-target="#modal-editar-chofer" role="button" ><span class="span-actions span-editar">Editar</span></a>' + ' ' +
            '<a href="#" type="submit" class="btn-delete-chofer"><span class="span-actions span-eliminar">Eliminar</span></a>' + ' ' +
            '</div>' +
            '</td>' +
            '</tr>';
        $('#t-header-content-principal').after(row);
    }

//MOSTRAR DATOS CHOFER//

    $('body').on('click', '.editar_chofer', function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_chofer').attr('href');
        var route = link.split('%7Bchofer%7D').join(id);

        $.get(route, function (resp) {
            $('#nameChofertitle').html("Editar Chofe: " + resp.full_name);
            $('#idChofer').val(resp.id);
            $('.rut').val(resp.rut);
            $('#nameChofer').val(resp.full_name);
            $('#emailChofer').val(resp.email);
            $('#passChofer').val("");
        })
    });

    //ACTUALIZAR CHOFER//
    $('#btnSaveChofer').on('click', function (e) {
        e.preventDefault();
        var id     = $('#idChofer').val();
        var form   = $('#id_form_chofer');
        var link   = $('#id_update_chofer').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Bchofer%7D').join(id);

        $.ajax({
            url : route,
            type: metodo,
            data: form.serialize(),

            success: function (data) {
                listAllChofer();

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
    $('body').on('click', '.btn-delete-chofer', function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-chofer');
        var url  = form.attr('action').replace(':CHOFER_ID', id);
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
    $('#search-form-chofer').on('submit',function (e) {
        e.preventDefault();
        $.ajax({
            type : 'get',
            url : $(this).attr('action'),
            data    : $(this).serialize(),
            success: function (data) {
                $('#list-all-chofer').empty().html(data)
            }
        })
    })
});

/* Listar los choferes ajax*/
var listAllChofer = function () {
    $.ajax({
        type: 'get',
        url: 'listChofer',
        success: function (data) {
            $('#list-all-chofer').empty().html(data)
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
            $('#list-all-chofer').empty().html(data);
        }
    });
});

