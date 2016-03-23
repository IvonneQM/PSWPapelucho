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

 /*   // Eliminar Sin modal//
    $('.btn-delete').click(function(e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':APODERADO_ID', id);
        var data = form.serialize();

        row.fadeOut();
        $.ajax({
            method: $(this).attr('method'),
            type: "POST",
            url: url,
            form: form,
            data: data,
            dataType: "json",
            success: function (data) {
                $('#succes').removeClass('hidden');
                $('#myModal').modal('hide');
            },
            error: function (data) {
                $('#error').removeClass('hidden');
                $('#myModal').modal('hide');
                row.show()
            }

        });
    })
*/

    // Eliminar con modal de confirmacion //

    $('.btn-delete').on('show.bs.modal', function(e){
        $message = $(e.relatedTarget).attr('data-message');
        $(this).find('.modal-body p').text($message);
        $title = $(e.relatedTarget).attr('data-title');
        $(this).find('.modal-title').text($title);

        var form = $(e.relatedTarget).closest('#form-delete');
        $(this).find('.modal-footer #confirm').data('#form-delete', form);
    })

    $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      //  $(this).data('form').submit();

        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':APODERADO_ID', id);
        var data = form.serialize();

        row.fadeOut();
        $.ajax({
            method: $(this).attr('method'),
            type: "POST",
            url: url,
            form: form,
            data: data,
            dataType: "json",
            success: function (data) {
                $('#succes').removeClass('hidden');
                $('#myModal').modal('hide');
            },
            error: function (data) {
                $('#error').removeClass('hidden');
                $('#myModal').modal('hide');
                row.show()
            }
        })
    })


});