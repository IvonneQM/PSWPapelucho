
function ajaxRenderSection(url) {
    $.ajax({
        type: 'GET',
        url: url,
        dataType: 'json',
        success: function (data) {
            $('#principalPanel').empty().append($(data));
        },
        error: function (data) {
            var errors = data.responseJSON;
            if (errors) {
                $.each(errors, function (i) {
                    console.log(errors[i]);
                });
            }
        }
    });
}

$(document).on('click','.addFile',function(event){
    $(this).ajaxPost('CreateFile','POST','file');
})

$(document).on('click','.deleteFile',function(event){
    var id = $(this).attr('data-id');
    $(this).ajaxPost('file/'+id,'DELETE','file');
});