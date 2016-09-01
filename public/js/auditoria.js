/**
 * Created by Inger on 01-09-16.
 */
$(document).ready(function () {
    listAuditorias()
});

var listAuditorias = function () {
    $.ajax({
        type: 'get',
        url: 'listAuditorias',
        success: function (data) {
            $('#list-auditoria').empty().html(data)
        }
    });
};

/* Paginar parvulos ajax*/
$(document).on('click','.pagination li a',function (e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $('#list-auditoria').empty().html(data);
        }
    });
});