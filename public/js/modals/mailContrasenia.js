$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#forgot-pass').click(function () {
        $('#modal-recuperar-pass').modal();

        $(document).on('submit', '#form-recuperar-pass', function (e) {
            e.preventDefault();
            $.ajax({
                method: $(this).attr('method'),
                type  : "POST",
                token : $('input[name="_token"]').val(),
                cache : false,
                url   : $(this).attr('action'),
                data    : $(this).serialize(),
                dataType: "json",
                beforeSend: function (data) {
                    swal("Correo electrónico enviado!",
                        "Vínculo para recuperación de contraseña enviada al correo electrónico. ",
                        "success");
                }
            });
        })

    });

});