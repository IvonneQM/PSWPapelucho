$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.asociar_chofer').click(function () {
        $('#modal-asociar-chofer').modal();

        var row = $(this).parents('tr');
        var id = row.data('id');
        var link = $('#id_href_vehiculo').attr('href');
        var route = link.split('%7Bvehiculos%7D').join(id);

        $.get(route, function (resp) {
            $('#id-Vehiculo').val(resp.id);

        })

        $(document).on('submit', '#form-register-asociacion', function (e) {
            e.preventDefault();

            var method = $(this).attr('method');
            var type = "POST";
            var token = $('input[name="_token"]').val();
            var cache = false;
            var url = $(this).attr('action');
            var data = $(this).serialize();
            var dataType = "json";

            var user = $('#user_id').val(data.user_id);

            console.log(data);
            $.ajax({
                // method: $(this).attr('method'), 
                // type: "POST",
                // token: $('input[name="_token"]').val(),
                // cache: false,
                // url: $(this).attr('action'),
                // data: $(this).serialize(),
                // dataType: "json",
                success: function (data) {
                    swal("Registro creado!",
                        "El registro se ha generado con exito",
                        "success");
                },
                error: function (msj) {
                    console.log(method),
                        // console.log(msj);
                        // var chofer = msj.responseJSON.user_id;

                        // if (chofer == null) {
                        //     chofer = ''
                        // }
                        // var concatenado = chofer;
                        // if (concatenado == '') {
                        //     concatenado = "Se ha generado un problema de conexión con el servidor"
                        // }

                        swal({
                            title: "¡Error!",
                            text: "concatenado",
                            type: "warning",
                            confirmButtonColor: "#C32026",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false
                        })
                }
            });
        })
    });
})


/*Fin Registrar vehiculos*/


// });