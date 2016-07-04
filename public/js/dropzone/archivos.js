
$(window).load(function(){
    accept = "image/*";
        hiddenInputContainer = false;
    $('#archivosTabs').data('type','galerias-jardines');

    Dropzone.forElement(document.getElementById('dropzone')).hiddenFileInput.setAttribute('accept', accept);
    $.ajax({
        url     : $('#row-thumbnails').data('url'),
        type    : 'POST',
        data    : {
            type: $('#archivosTabs').data('type')
        },
        dataType: 'html'
    }).done(function (d) {
        $('#row-thumbnails').html(d);
    });
    console.log($('#archivosTabs').data('type'));


});


$(function(){
    Dropzone.options.dropzone = {

        headers         : {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
        },
        paramName       : "file",
        autoProcessQueue: false,
        uploadMultiple  : true,
        parallelUploads : 10,
        maxFilesize     : 10,
        maxFiles        : 20,
        addRemoveLinks  : true,
        dictRemoveFile  : 'Eliminar',


        init: function () {
            var submitButton = document.querySelector("#guardar-archivos"),

            dropzoneImagenes = this;

            submitButton.addEventListener("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                dropzoneImagenes.processQueue();
            });


            this.on("addedfile", function (file) {

            });

            this.on("complete", function (file) {
                dropzoneImagenes.removeFile(file);
            });

            this.on("success", function (file) {
                swal({
                        title: "Registro actualizado!",
                        text : "El registro se ha actualizado con exito",
                        type : "success",

                    },

                    function X() {
                        dropzoneImagenes.processQueue.bind(dropzoneImagenes)
                    });
            })

            this.on("error", function () {
                swal({
                    title: "¡Error!",
                    text : "Se ha generado un problema de conexión con el servidor",
                    type : "error",
                })
            })
        }
    }

        $('body').on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
            console.log($(this).data('type'));

            /*  e.preventDefault();
              if ( dropzoneImagenes.files.length > 0)
              {
                  swal({
                          title             : "¿Està seguro de abandonar el item actual?",
                          text              : "Perderá los cambios",
                          type              : "warning",
                          showCancelButton  : true,
                          confirmButtonClass: "btn-danger",
                          confirmButtonText : "Si",
                          cancelButtonText  : "No",
                          closeOnConfirm    : false,
                          closeOnCancel     : true
                      },
                      function (isConfirm) {
                          if (isConfirm) {
                              dropzoneImagenes.removeAllFiles();
                              swal.close();
                          } else {
                              swal.close();
                             // $(this).data('type').active;
                          }
                      });
              }
              */

            var accept = '';
            switch($(this).data('type')){
                case "galerias-jardines":
                    accept = "image/*",
                    hiddenInputContainer =false
                    break;
                case "parvulos":
                    accept = "application/pdf"
                    break;
                case "niveles":
                    accept = "application/pdf"
                    break;
            }

            Dropzone.forElement(document.getElementById('dropzone')).hiddenFileInput.setAttribute('accept', accept);
            $('#type').attr('value', $(this).data('type'));
            $.ajax({
                url     : $('#row-thumbnails').data('url'),
                type    : 'POST',
                data    : {
                    type: $(this).data('type')
                },
                dataType: 'html'
            }).done(function (d) {
                $('#row-thumbnails').html(d);
            });
        })
    }
);


