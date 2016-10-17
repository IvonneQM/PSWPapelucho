$(window).load(function () {
    accept               = "image/*";
    hiddenInputContainer = false;
    $('#archivosTabs').data('type', 'galerias-jardines');
    Dropzone.forElement(document.getElementById('dropzone')).hiddenFileInput.setAttribute('accept', accept);
    $.ajax({
        url     : $('#row-thumbnails').data('url'),
        type    : 'get',
        data    : {
            type: $('#archivosTabs').data('type')
        },
        dataType: 'html'
    }).done(function (d) {
        $('#row-thumbnails').empty().html(d);
    });

    $(document).on('click', '.pagination li a', function (e) {
        e.preventDefault();
        $.ajax({
            type    : 'get',
            url:     $(this).attr('href'),
            data    : {
                type: $(this).data('type')
            },
            dataType: 'html'
        }).done(function (d) {
            $('#row-thumbnails').empty().html(d);
        });
    });
    console.log($('#archivosTabs').data('type'));
});

// SELECT2//
$(document).ready(function () {
    $('select').select2({
        allowClear : true,
        placeholder: {
            id  : "",
            text: "Seleccione una opción"
        }
    });
    $.fn.populateSelect = function (values) {
        var options = '';
        $.each(values, function (key, row) {
            options += '<option value="' + row.value + '">' + row.text + ' </option>';
        });
        $(this).html(options);
    };
    $('#jardin_id').change(function () {
        var jardin_id = $(this).val();

        if (jardin_id == '') {
            $('#galeria_id').empty();
        }
        else {
            $.getJSON('galerias/jardin/' + jardin_id, null, function (values) {
                $('#galeria_id').populateSelect(values);
            });
        }
    });
// FIN SELECT2//

    $(function () {
            Dropzone.options.dropzone = {
                headers         : {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
                },
                paramName       : "file",
                autoProcessQueue: false,
                uploadMultiple  : true,
                parallelUploads : 10,
                maxFilesize: 3,
                filesizeBase: 1000,
                maxFiles        : 10,
                addRemoveLinks  : true,
                dictRemoveFile  : 'Eliminar',

                maxfilesexceeded: function(file)
                {
                    alert('Estas intentando subir mas de 10 archivos. Sólo se subiran los 10 primeros');
                },
                init: function () {
                        var submitButton     = document.querySelector("#guardar-archivos"),
                            dropzoneImagenes = this;
                        submitButton.addEventListener("click", function (e) {
                            e.preventDefault();
                            //e.stopPropagation();
                            dropzoneImagenes.processQueue();
                            //dropzoneImagenes.processingmultiple();
                        });




                    this.on("addedfile", function (file) {
                        /*var fileName = file.name;
                        if (file.size > 9000000) {
                            this.removeFile(file);
                            alert(fileName + " is larger than 2MiB.");
                        }*/
                        if (this.files[10]!=null){
                            this.removeFile(this.files[0]);
                        }
                    });

                    this.on("successmultiple", function (files) {
                        swal({
                                title: "Registro actualizado!",
                                text : "El registro se ha actualizado con exito",
                                type : "success"
                            });
                           /* function X() {
                                dropzoneImagenes.processQueue(dropzoneImagenes)
                            });*/
                    });

                    /*this.on("queuecomplete", function (files) {
                     swal({
                     title: "Registro actualizado!",
                     text : "El registro se ha actualizado con exito",
                     type : "success"
                     },
                     function X() {
                     dropzoneImagenes.processQueue(dropzoneImagenes)
                     });
                     });*/



                    this.on("complete", function (file) {
                        dropzoneImagenes.processQueue(dropzoneImagenes)
                        dropzoneImagenes.removeFile(file);
                    });
                    this.on("error", function (file) {
                            console.log(file);
                        swal({
                            title             : "¡Error!",
                            text              : "Se ha generado un problema de conexión con el servidor",
                            type              : "warning",
                            confirmButtonColor: "#C32026",
                            confirmButtonText : "Ok",
                            closeOnConfirm    : false
                        })
                        /* var name    = file.name;
                        swal({
                            title             : "¡Error!",
                            text              : "El archivo" + " " +  name  + " "+ "ya existe",
                            type              : "warning",
                            confirmButtonColor: "#C32026",
                            confirmButtonText : "Ok",
                            closeOnConfirm    : false
                        })
                        // Pendiente validacion campos vacios//

                        var jardines = $('#jardin_id').val();
                        var galerias  = msj.responseJSON.galerias;
                        console.log(jardines);
                        if(jardines == null){
                            jardines = ''
                        }
                        if(galerias == null){
                            galerias = ''
                        }
                        var concatenado = jardines + '\n' + galerias;
                        if (concatenado == '') {
                            concatenado = "Se ha generado un problema de conexión con el servidor"
                        }
                        swal({
                            title             : "¡Error!",
                            text              : concatenado,
                            type              : "warning",
                            confirmButtonColor: "#C32026",
                            confirmButtonText : "Ok",
                            closeOnConfirm    : false
                        })
                        */


                    })
                }
            };

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
                switch ($(this).data('type')) {
                    case "galerias-jardines":
                        accept = "image/*",
                            hiddenInputContainer = false
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
                    type    : 'get',
                    data    : {
                        type: $(this).data('type')
                    },
                    dataType: 'html'
                }).done(function (d) {
                    $('#row-thumbnails').empty().html(d);
                });



                $(document).on('click', '.pagination li a', function (e) {
                    e.preventDefault();
                    $.ajax({
                        type    : 'get',
                        url:     $(this).attr('href'),
                        data    : {
                            type: $(this).data('type')
                        },
                        dataType: 'html'
                    }).done(function (d) {
                        $('#row-thumbnails').empty().html(d);
                    });
                });


            })
        }
    );

});



