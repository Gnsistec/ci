@extends("crudbooster::admin_template")
@section("content")

    <div id="alert"></div>
    <form action="#" id="form_uniforme" method="POST">
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
                                <h2 class="box-title"><i class="ion ion-tshirt"></i> &nbsp; AÑADIR UNIFORME
                                </h2>

                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4> Detalles del Uniforme</h4></td>
                </tr>
                <tr>
                    <td colspan="1">
                        <div class="slim"
                             data-label="Arrastre su foto aquí"
                             data-size="150,150"
                             data-ratio="1:1">
                            <input type="file" name="slim[]" required id="foto_uniforme"/>
                        </div>
                    </td>
                    <td colspan="1" style="background-color: #f9f9f9"><label>Nombre:</label>
                        <div class="form-group" style=" margin-top: 5px">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre_uniforme" name="nombre_uniforme">
                        </div>
                        <div class="form-group" style=" margin-top: 5px"><label>Talla:</label>
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_talla" name="talla">
                        </div>
                        <div class="form-group">
                            <label>Sexo:</label>
                            <select class="form-control select2" style="width: 100%;" id="select_sexo" name="sexo">
                                <option selected="selected" value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">
                        <label>Color:</label>
                        <div class="form-group" style=" margin-top: 5px">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_color" name="color">
                        </div>
                        <div class="form-group" style=" margin-top: 5px"><label>Precio $:</label>
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_precio" name="precio">
                        </div>
                    </td>
                    <td colspan="3" style="background-color: #f9f9f9; ">

                    </td>
                </tr>

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="row" >
            <div class="col-md-10" ></div>
            <div class="col-md-2" align="right">
                <div class="form-group" ><input class="btn btn-success " type="button"
                                               style="margin-right: 10px" value="Añadir Uniforme" onclick="addUniforme()"></div>

            </div>
        </div>

    </div>
    <!-- /.box -->

    </form>



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


    <script type="text/javascript" src="{{ asset("js/ci_plugin/slim_crop/slim/slim.kickstart.min.js")}}"></script>


    <script type="text/javascript">

        var form = $('#form_uniforme');
        var data = form.serialize();
        var url = "http://localhost:8080/ci/public/admin/custom_uniformes";


        function addUniforme(){

            //------
            $.fn.serializeObject = function serializeObject() {
                var o = {};
                var a = this.serializeArray();
                $.each(a, function () {
                    if (o[this.name] !== undefined) {
                        if (!o[this.name].push) {
                            o[this.name] = [o[this.name]];
                        }
                        o[this.name].push(this.value || '');
                    } else {
                        o[this.name] = this.value || '';
                    }
                });
                return o;
            };

            var datos =  JSON.stringify(form.serializeObject());
            var  good = JSON.parse(datos);

            $.ajax({
                data: good,
                url: 'http://localhost:8080/ci/public/admin/custom_uniformes',
                type: 'post',
                beforeSend: function () {
                    $("#alert").html('<div class="alert alert-info" role="alert">Insertando uniforme en stock... </div>');
                },
                success: function (response) {
                    $("#alert").html('<div class="alert alert-success" role="alert"> Su '+ response + ' se agregó de forma satisfactoria!!</div>');
                    window.location = "{{ url('/admin/uniformes?m=32') }}";
                }
            }).fail(function(result){
                var resp = JSON.stringify(result)
                $("#alert").html('<div class="alert alert-danger" role="alert">Problema al insertar:'+resp+'</div>');
            });

        }

    </script>

@endsection