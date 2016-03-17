$(document).ready(function(){

    $('#register').click(function() {
        $('#myModal').modal();
    });

    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });


    $(document).on('submit', '#formRegister', function(e) {
        e.preventDefault();

        var form = $('#formRegister');
        var url =  form.attr('action');
        var data = form.serialize();
        //alert (data)

        $.post(url, data, function(result){
            alert (result);
        } );

        /*$('input+small').text('');
        $('input').parent().removeClass('has-error');

        $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: 'json',
                success : function(  ) {
                    alert('Submitted' )
                },
                error   : function( data , url, type ) {
                    alert('Error DATA: '+data+' URL: '+url+' TYPE: '+type+'');
                }
            })


            .done(function(data) {
                $('.alert-success').removeClass('hidden');
                $('#myModal').modal('hide');
            })
            .fail(function(data) {
                $.each(data.responseJSON, function (key, value) {
                    var input = '#formRegister input[name=' + key + ']';
                    $(input + '+small').text(value);
                    $(input).parent().addClass('has-error');
                });
            });*/
    });
})