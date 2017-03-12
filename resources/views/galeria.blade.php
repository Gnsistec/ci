@extends("crudbooster::admin_template")
@section("content")



    <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr style="background-color: #dedede">
                    <th style="width: 20%"></th>
                    <th style="width: 20%"></th>
                    <th style="width: 20%"></th>
                    <th style="width: 20%"></th>
                    <th style="width: 20%"></th>
                </tr>
                <tr>
                    <td colspan="5">
                        <div class="row">

                            <div class="col-md-4">

                                <h2 class="box-title"><i class="fa fa-picture-o text-normal"></i> &nbsp; GALERÍA</h2>

                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4> Cree una Galería</h4></td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9">
                        <label>Titulo Galería:</label>
                        <div class="form-group" style=" margin-top: 5px">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre_nino">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9">

                        <div id="actions" class="row">

                            <div class="col-lg-7">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <span class="btn btn-success fileinput-button dz-clickable">
                                 <i class="glyphicon glyphicon-plus"></i>
                                    <span>Add files...</span>
                                </span>
                                <button type="submit" class="btn btn-primary start">
                                    <i class="glyphicon glyphicon-upload"></i>
                                    <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning cancel">
                                    <i class="glyphicon glyphicon-ban-circle"></i>
                                    <span>Cancel upload</span>
                                </button>
                            </div>
                            <div class="col-lg-5">
                                <!-- The global file processing state -->
                                <span class="fileupload-process">
                            <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0"
                                aria-valuemax="100" aria-valuenow="0" style="opacity: 0;">
                              <div class="progress-bar progress-bar-success" style="width: 100%;" data-dz-uploadprogress=""></div>
                             </div>
                             </span>
                            </div>

                        </div>

                    </td>

                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9">
                        <div  class="files" id="previews">

                            <div id="template" class="row">
                                <!-- This is used as the file preview template -->
                                <div class="col-md-3">
                                    <div>
                                        <span class="preview"><img data-dz-thumbnail /></span>
                                    </div>
                                    <div>
                                        <p class="name" data-dz-name></p>
                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <p class="size" data-dz-size></p>
                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                        </div>
                                    </div></div>
                                <div class="col-md-3">
                                    <div style="margin-top: 23px">
                                        <button class="btn btn-primary start">
                                            <i class="glyphicon glyphicon-upload"></i>
                                            <span>Start</span>
                                        </button>
                                        <button data-dz-remove class="btn btn-warning cancel">
                                            <i class="glyphicon glyphicon-ban-circle"></i>
                                            <span>Cancel</span>
                                        </button>
                                        <button data-dz-remove class="btn btn-danger delete">
                                            <i class="glyphicon glyphicon-trash"></i>
                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->



        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2" align="right">
                <div class="form-group"><input class="btn btn-danger " type="button"
                                               style="margin-right: 10px" value="Cerrar"></div>

            </div>
        </div>

    </div>
    <!-- /.box -->



    <script>


        $(function () {
            $('#fecha_registro').fdatepicker({

                format: 'mm-dd-yyyy',
                disableDblClickSelection: true,
                leftArrow: '<<',
                rightArrow: '>>'
            });

            document.getElementById("fecha_registro").blur();

            $(".select2").select2();
        });


    </script>

    <script type="application/javascript">
       var previewNode = document.querySelector("#template");
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML;
        previewNode.parentNode.removeChild(previewNode);

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        });

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
        });

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
        });

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1";
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
        });

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0";
        });

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
        };
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true);
        };
    </script>


    <script type="text/javascript" src="{{ asset("js/ci_plugin/slim_crop/slim/slim.kickstart.min.js")}}"></script>


@endsection