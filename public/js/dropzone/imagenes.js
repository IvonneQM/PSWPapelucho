


Dropzone.options.dropzoneImagenes = {


    paramName: "file",
    autoProcessQueue: false,
    uploadMultiple: true,
    maxFilesize: 10,
    maxFiles:20,
    addRemoveLinks: true,
    dictRemoveFile: 'Eliminar',

    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
    },



    sending: function(file, xhr, formData) {
        // Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.
        formData.append("csrf-token", $('[name=csrf-token]').val()); // Laravel expect the token post value to be named _token by default
    },

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