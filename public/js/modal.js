$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    $('#register').click(function() {
        $('#myModal').modal();


        $(document).on('submit', '#formRegister', function(e) {
            e.preventDefault();

            $('input+small').text('');
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
                    $('.alert-success').removeClass('hidden');
                    $('#myModal').modal('hide');
                },
                error: function (data) {
                    $('.alert-danger').removeClass('hidden');
                    $('#myModal').modal('hide');
                },
            });
        })
    });

    // Eliminar //
    $('.btn-delete').click(function(e){
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':APODERADO_ID', id);
        var data = form.serialize();

        row.fadeOut();
        $.post(url, data, function(result){
            alert(result.message);
        }).fail(function(){
            alert('El usuario no fue eliminado');
            row.show();
        })

    });
});