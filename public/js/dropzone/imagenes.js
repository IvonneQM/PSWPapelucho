


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
            alert("Se agrego un archivo");
        });

        this.on("complete", function(file){
           // dropzoneImagenes.removeFile(file);
        });

        this.on("success",
            dropzoneImagenes.processQueue.bind(dropzoneImagenes)
        );
    }

}