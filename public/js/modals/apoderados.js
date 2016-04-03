/**
 * Created by YvonneQM on 25-03-16.
 */

$(document).ready(function() {

    //INGRESAR APODERADOS//
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('#register-apoderado').click(function () {
        $('#modal-crear-apoderados').modal();

        $(document).on('submit', '#form-register-apoderado', function (e) {
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
                    swal(   "Registro creado!",
                            "El registro se ha generado con exito",
                            "success");
                },
                error: function (data) {
                    swal(   "Oops",
                            "Se ha generado un problema de conexión con el servidor",
                            "error");
                }
            });
        })
    });

    //ACTUALIZAR APODERADOS//

    $('.editar-apoderado').click(function () {

        var row = $(this).parents('tr');
        var id = row.data('id');
        $(".form-edit-apoderado").load("http://localhost:8888/PSWPapelucho/public/administrador/apoderado/"+id+"/edit");

        $('#modal-editar-apoderado').modal();

        $(document).on('submit', '#form-editar-apoderado', function (e) {
            e.preventDefault();
            $('input').parent().removeClass('has-error');
            $.ajax({
                method: $(this).attr('method'),
                type: "PUT",
                token: $('input[name="_token"]').val(),
                cache: false,
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                success: function (data) {
                    swal(   "Registro creado!",
                            "El registro se ha generado con exito",
                            "success");
                },
                error: function (data) {
                    swal(   "Oops",
                            "Se ha generado un problema de conexión con el servidor",
                            "error");
                }
            });
        })
    });


//ELIMINAR APODERADOS//
    $('.btn-delete-apoderado').click(function (e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete-apoderado');
        var url = form.attr('action').replace(':APODERADO_ID', id);
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
