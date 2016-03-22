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

           // $.ajaxSetup({
             //   headers: {
               //     'X-CSRF-TOKEN': $('input[name="_token"]').val()
                //}
           // });

            $.ajax({
                method: $(this).attr('method'),
                type: "POST",
                token:  $('input[name="_token"]').val(),

                cache: false,
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                    function(data) {
                        alert.success('Bien')
                    },
                    error   : function( xhr, err ) {
                        alert.error('MAl')
                    }
                })



            })


    });
});