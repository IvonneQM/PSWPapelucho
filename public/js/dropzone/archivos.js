Dropzone.options.dropzoneImagenes = {

    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
    },
    paramName: "file",
    autoProcessQueue: false,
    uploadMultiple: true,
    maxFilesize: 10,
    maxFiles:20,
    addRemoveLinks: true,
    dictRemoveFile: 'Eliminar',



    init: function(){
        var submitButton= document.querySelector("#guardar-archivos")

        dropzoneImagenes = this;


        submitButton.addEventListener("click",function(e){
            e.preventDefault();
            e.stopPropagation();
            dropzoneImagenes.processQueue();
        });


        this.on("addedfile", function(file){
        });

        this.on("complete", function(file){
            dropzoneImagenes.removeFile(file);
        });

        this.on("success",
            dropzoneImagenes.processQueue.bind(dropzoneImagenes)
        );
    }

}

$(function(){
    $('body').on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
        console.log($(this).data('type'));
        $('#type').attr('value',$(this).data('type'));
        $.ajax({
            url: $('#row-thumbnails').data('url'),
            type: 'POST',
            data: {
                type: $(this).data('type')
            },
            dataType: 'html'
        }).done(function(d){
            $('#row-thumbnails').html(d);
        });
    })
});

