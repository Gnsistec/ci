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
                                <h2 class="box-title"><i class="ion ion-paper-airplane "></i>  &nbsp; ENVIO DE MENSAJES</h2>


                                <div class="form-group" style="margin-top: 23px; width: 70%">
                                    <label>Fecha del Mensaje:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>

                                        <input type="text" class="form-control pull-right" id="fecha_registro">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                            </div>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4> Detalles del Mensaje</h4></td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color: #f9f9f9">Título:
                        <div class="form-group" style=" margin-top: 5px">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre_nino">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Para Quien (Padres):
                        <div class="form-group" style=" margin-top: 5px" >

                            <select class="form-control select2" style="width: 100%; margin-top: 5px" id="select_level">
                                <option selected="selected"></option>
                                <option>Carlos Alberto</option>
                                <option>Luis Mejia</option>
                                <option>Napoleon Simbaña</option>
                                <option>Julian Villarroel</option>
                                <option>Eloy Santiago</option>
                                <option>Elena Borroto</option>
                            </select>
                        </div>
                    </td>


                    <td colspan="3" style="background-color: #f9f9f9; ">

                    </td>

                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9">Texto del Mensaje:
                        <textarea class="form-control" id="id_observaciones"
                                  style="border: none; width: 96%;  margin-top: 5px"></textarea>
                    </td>
                </tr>
                <tr>
                </tr>


                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="row">
            <div class="col-md-2">
                <div class="form-group"><input class="btn btn-success form-control" type="button"
                                               style="margin-left: 10px" value="Enviar"></div>

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


    <script type="text/javascript" src="{{ asset("js/ci_plugin/slim_crop/slim/slim.kickstart.min.js")}}"></script>


@endsection