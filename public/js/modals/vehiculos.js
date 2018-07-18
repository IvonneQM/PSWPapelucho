$(document).ready(function () {

    //REGISTRAR VEHICULOS//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $('#register-vehiculo').click(function () {
        $('#modal-crear-vehiculos').modal();

        $(document).on('submit', '#form-register-vehiculos', function (e) {
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
					console.log(data);

                    addRow(data);
                    $('#form-register-vehiculos').trigger('reset');
                    $('#patente').focus();
                    swal("Registro creado!",
                        "El registro se ha generado con exito",
                        "success");
                },
                error   : function (msj) {
                    var patente    = msj.responseJSON.patente;
					var marca = msj.responseJSON.marca;
					var modelo = msj.responseJSON.modelo;

                    if (patente == null) {
                        patente = ''
                    }
                    if (marca == null) {
                        marca = ''
					}
					if (modelo == null) {
                        modelo = ''
                    }
                    var concatenado = patente + '\n' + marca + '\n' + modelo;
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
    /*Fin Registrar vehiculos*/

    //AGREGAR ROW //
    function addRow(data) {
        var row = '<tr data-id=' + data.id + ' id="row' + data.id + '">' +
            '<td>' + data.patente + '</td>' +
			'<td>' + data.marca + '</td>' +
			'<td>' + data.modelo + '</td>' +
            '<td>' +
            '<div class="t-actions">' +
            '<a class="asociar_chofer" href="#" role="button"><span class="span-actions span-vehiculo">+ Chofer</span></a>'+ ' ' +
            '<a class="editar_vehiculo" href="#" data-toggle="modal" data-target="#modal-editar-vehiculo" role="button"><span class="span-actions span-editar">Editar</span></a>' + ' ' +
            '<a href="#" type="submit" class="btn-delete-vehiculo"><span class="span-actions span-eliminar">Eliminar</span></a>' + ' ' +
            '</div>' +
            '</td>' +
            '</tr>';
        $('#t-header-content-principal').after(row);
    }

    //MOSTRAR VEHICULOS//

    $('body').on('click', '.editar_vehiculo', function (e) {
        e.preventDefault();
        var row   = $(this).parents('tr');
        var id    = row.data('id');
        var link  = $('#id_href_vehiculo').attr('href');
        var route = link.split('%7Bvehiculos%7D').join(id);

        $.get(route, function (resp) {
            $('#nameVehiculoTitle').html("Editar Auto: " + resp.marca);
            $('#idVehiculo').val(resp.id);
            $('#patenteVehiculo').val(resp.patente);
			$('#marcaVehiculo').val(resp.marca);
			$('#modeloVehiculo').val(resp.modelo);
        })
    });

    //ACTUALIZAR VEHICULOS//

    $('#btn_save_vehiculo').on('click', function (e) {
        e.preventDefault();
        var id     = $('#idVehiculo').val();
        var form   = $('#form_update_vehiculo');
        var link   = $('#id_update_vehiculo').attr('href');
        var metodo = form.attr('method');
        var route  = link.split('%7Bvehiculos%7D').join(id);
        $.ajax({
            url    : route,
            type   : metodo,
            data   : form.serialize(),
            success: function (data) {
                $("#row" + id).html(
                    '<td>' + data.patente + '</td>' +
					'<td>' + data.marca + '</td>' +
					'<td>' + data.modelo + '</td>' +
                    '<td>' +
                    '<div class="t-actions">' +
                    '<a class="asociar_chofer" href="#" role="button"><i class="fa fa-pencil"></i></a>'+ ' ' +
                    '<a class="editar_vehiculo" href="#" data-toggle="modal" data-target="#modal-editar-vehiculo" role="button" ><i class="fa fa-pencil"></i></a>' + ' ' +
                    '<a href="#" type="submit" class="btn-delete-vehiculo"><i class="fa fa-trash-o"></i></a>' + ' ' +
                    '</div>' +
                    '</td>' +
                    '</tr>');
                swal("Registro actualizado!",
                    "El registro se ha actualizado con exito",
                    "success");
            },
            error  : function (msj) {
                var patente    = msj.responseJSON.patente;
				var marca = msj.responseJSON.marca;
				var modelo = msj.responseJSON.modelo;

                if (patente == null) {
                    patente = ''
                }
                if (marca == null) {
                    marca = ''
				}
				if (modelo == null) {
                    modelo = ''
                }
                var concatenado = patente + '\n' + marca + '\n' + modelo;
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

    //ELIMINAR VEHICULOS//
    $('body').on('click', '.btn-delete-vehiculo', function (e) {
        e.preventDefault();
        var row  = $(this).parents('tr');
        var id   = row.data('id');
        var form = $('#form-delete-vehiculo');
        var url  = form.attr('action').replace(':VEHICULO_ID', id);
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
                    success : function () {
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



