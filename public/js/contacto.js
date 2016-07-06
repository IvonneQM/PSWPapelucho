/**
 * Created by Inger on 05-07-2016.
 */
$(document).ready(function (e) {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $('#contact-button').click(function () {


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
            },
            error   : function (msj) {


            }
        })
    })
});
