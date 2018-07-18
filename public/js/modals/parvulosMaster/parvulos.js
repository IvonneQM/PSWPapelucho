$(document).ready(function () {
    listAllParvulos();
    $('.rut').Rut({
        on_error : function () {
            swal("Error!",
                "Rut Inválido",
                "warning");
        },
        format_on: 'keyup'
    });

    //INGRESAR PARVULOS//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#register-parvulo').click(function () {
        $('#modal-crear-parvulos').modal();
        $(document).on('submit', '#form-register-parvulo', function (e) {
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
                    $('#form-register-parvulo').trigger('reset');
                    $('#rut').focus();
                    swal("Registro creado!",
                        "El registro se ha generado con exito",
                        "success");
                },
                error   : function (msj) {
                    var rut    = msj.responseJSON.rut;
                    var nombre = msj.responseJSON.full_name;

                    if (rut == null) {
                        rut = ''
                    }
                    if (nombre == null) {
                        nombre = ''
                    }
                    var concatenado = rut + '\n' + nombre;
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
            '<td>'+ data.nivel.name + '</td>'+
            '<td>'+ data.jardin.name + '</td>'+
            '<td>'+ data.apoderado.full_name + '</td>'+
            '<td>'+
            '<div class="t-actions">'+
            '<a class="editar_parvulo" href="#" data-toggle="modal" data-target="#modal-editar-parvulo" role="button" ><i class="fa fa-pencil"></i></a>'+ ' ' +
            '<a href="#" type="submit" class="btn-delete-parvulo"><i class="fa fa-trash-o"></i></a>'+ ' ' +
            '</div>'+
            '</td>'+
            '</tr>';
        $('#t-header-content-principal').after(row);
    }

    //MOSTRAR DATOS PARVULOS//

    $('body').on('click','#editar-parvulo',function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_parvulo').attr('href');
        alert(link);
        var route = link.split('%7Bparvulos%7D').join(id);
        $.get(route, function (resp) {
            $('#parv').html("Editar párvulo: " + resp.full_name);
            $('#idUser').val(resp.id);
            $('.rutParvulo').val(resp.rut);
            $('#full_nameParvulo').val(resp.full_name);
            $('#nivelParvulo').val(resp.nivel.id);
            $('#jornadaParvulo').val(resp.jornada.id);
            $('#jardinParvulo').val(resp.jardin.id);
            $('#apoderadoParvulo').val(resp.apoderado.id);
        })
    });

    //ACTUALIZAR APODERADO//
    $('#btnSaveParvulo').on('click', function (e) {
        e.preventDefault();
        var id     = $('#idUser').val();
        var form   = $('#id_prueba_parvulo');
        var link   = $('#id_update_parvulo').attr('href');
        var metodo = form.attr('method');
        var route = link.split('%7Bparvulos%7D').join(id);
        $.ajax({
            url : route,
            type: metodo,
            data: form.serialize(),
            success: function (data) {
                listAllParvulos();
                swal("Registro actualizado!",
                    "El registro se ha actualizado con exito",
                    "success");
            },
            error   : function (msj) {
                var rut    = msj.responseJSON.rut;
                var nombre = msj.responseJSON.full_name;

                if (rut == null) {
                    rut = ''
                }
                if (nombre == null) {
                    nombre = ''
                }
                var concatenado = rut + '\n' + nombre;
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
    });

    //ELIMINAR PARVULOS//

    $('body').on('click','.btn-delete-parvulo',function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-parvulo');
        var url  = form.attr('action').replace(':PARVULO_ID', id);
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

    /* Buscar los parvulo ajax*/
    $('#search-form-parvulos').on('submit',function (e) {
        e.preventDefault();
        $.ajax({
            type : 'get',
            url : $(this).attr('action'),
            data    : $(this).serialize(),
            success: function (data) {
                $('#list-all-parvulos').empty().html(data)
            }
        })
    })
});

/* Listar los parvulo ajax*/
var listAllParvulos = function () {
    $.ajax({
        type: 'get',
        url: 'listParvulos',
        success: function (data) {
            $('#list-all-parvulos').empty().html(data)
        }
    });
};

/* Paginar los parvulo ajax*/
$(document).on('click','.pagination li a',function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#list-all-parvulos').empty().html(data);
        }
    });
});



