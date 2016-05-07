$(document).ready(function () {
    $('#rut').Rut({
        on_error: function(){
            swal("Error!",
                "Rut Inválido",
                "warning");
        },
        format_on: 'keyup'
    });

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
                    var rut     =   msj.responseJSON.rut;
                    var nombre  =   msj.responseJSON.full_name;


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
        })
    });

    //AGREGAR ROW //
    function addRow (data){
        var row = '<tr data-id='+data.id+'>'+
            '<td>'+ data.rut + '</td>'+
            '<td>'+ data.full_name + '</td>'+
            '<td>'+
            '<div class="t-actions">'+
            '<a class="editar_parvulo" href="#" data-toggle="modal" data-target="#modal-editar-parvulo" role="button" ><i class="fa fa-pencil"></i></a>'+ ' ' +
            '<a href="#" type="submit" class="btn-delete-parvulo"><i class="fa fa-trash-o"></i></a>'+ ' ' +
            '</div>'+
            '</td>'+
            '</tr>';
        $('tbody:eq(0)').append(row);

    }


    //ACTUALIZAR APODERADOS//

    $('.editar_parvulo').click(function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_parvulo').attr('href');
        var route = link.split('%7Bparvulos%7D').join(id);

        $.get(route, function (resp) {
            $('#parv').html("Editar párvulo: " + resp.full_name);
            $('#idParvulo').val(resp.id);
            $('#rutParvulo').val(resp.rut);
            $('#full_nameParvulo').val(resp.full_name);
            $('#nivel_id').val(resp.nivel_id);
            $('#jornada_id').val(resp.jornada_id);
            $('#jardin_id').val(resp.jardin_id);

        })
    });


    $('#btn_save_parvulo').on('click', function (e) {

        e.preventDefault();

        var id     = $('#idParvulo').val();
        var form   = $('#form_update_parvulo');
        var link   = $('#id_update_parvulo').attr('href');
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