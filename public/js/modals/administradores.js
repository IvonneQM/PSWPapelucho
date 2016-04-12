/**
 * Created by YvonneQM on 25-03-16.
 */

$(document).ready(function() {

    //INGRESAR ADMINISTRADOR//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $('#register-administrador').click(function () {
        $('#modal-administradores').modal();


        $(document).on('submit', '#form-register-administrador', function (e) {
            e.preventDefault();
            $('input').parent().removeClass('has-error');
            $.ajax({
                method: $(this).attr('method'),
                type: "POST",
                token: $('input[name="_token"]').val(),
                cache: false,
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                success: function (data) {
                    swal("Registro creado!",
                        "El registro se ha generado con exito",
                        "success");
                },
                error: function (data) {
                    swal({
                        title: "!Error¡",
                        text: msj.responseJSON.rut +
                        msj.responseJSON.full_name +
                        msj.responseJSON.email +
                        msj.responseJSON.password,
                        type: "warning",
                        confirmButtonColor: "#C32026",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false
                    })
                }
            })
        })
    });

//ACTUALIZAR ADMINISTRADOR

    $('.editar_admin').click(function(e){
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var link = $('#id_href_admin').attr('href');
        var route = link.split('%7Badministradores%7D').join(id);

        $.get(route, function(resp){
            $('#Admin').html("Editar Administrador: " + resp.full_name);
            $('#idAdmin').val(resp.id);
            $('#rutAdmin').val(resp.rut);
            $('#nameAdmin').val(resp.full_name);
            $('#emailAdmin').val(resp.email);
            $('#passAdmin').val("");
        })
    });

    $('#btnSaveAdmin').click(function(e){
        e.preventDefault();

        var id = $('#idAdmin').val();
        var form = $('#id_form_admin');
        var link = $('#id_update_admin').attr('href');
        var metodo = form.attr('method');
        var route = link.split('%7Badministradores%7D').join(id);

        $.ajax({
            url: route,
            type: metodo,
            data: form.serialize(),

            success: function (data) {
                swal("Registro actualizado!",
                    "El registro se ha actualizado con exito",
                    "success");
            },
            error: function (data) {
                swal("Oops",
                    "Se ha generado un problema de conexión con el servidor",
                    "error");
            }

        })
    })



//ELIMINAR ADMINISTRADOR//
    $('.btn-delete-administrador').click(function (e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete-administrador');
        var url = form.attr('action').replace(':ADMINISTRADOR_ID', id);
        var data = form.serialize();

        swal({
                title: "¿Confirma eliminación?",
                text: "El registro se eliminará permanentementer",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#C32026",
                confirmButtonText: "Eliminar",
                closeOnConfirm: false
            },

            function () {

                row.fadeOut();
                $.ajax({
                    method: $(this).attr('method'),
                    type: "POST",
                    url: url,
                    form: form,
                    data: data,
                    dataType: "json",
                    success: function (data) {
                        swal(   "Registro eliminado!",
                                "El registro ha sido eliminada",
                                "success");
                    },
                    error: function (data) {
                        swal(   "Oops",
                                "Se ha generado un problema de conexión con el servidor",
                                "error");
                        row.fadeIn();
                    }

                });

            });
    })
})