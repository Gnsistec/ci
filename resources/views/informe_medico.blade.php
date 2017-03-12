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

                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-12"><h2 class="box-title"><i
                                                    class="ion ion-ios-pulse-strong "></i> &nbsp; INFORME MÉDICO</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" style="margin-top: 15px">
                                            <label>Fecha del Registro:</label>
                                            <div class="input-group date">
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>

                                                <input type="text" class="form-control pull-right" id="fecha_registro">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="margin-top: 15px">

                                            <label>Doctor:</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=""
                                                       id="id_doctor">
                                            </div>

                                    </div>
                                </div>


                            </div>


                            <div class="col-md-3">

                                <div class="form-group" style="margin-top: 77px">
                                    <label>Especialidad:</label>
                                    <select class="form-control select2" style="width: 100%;" id="select_especialidad">
                                        <option selected="selected">PSICOPEDAGOGÍA</option>
                                        <option>PEDIATRÍA</option>
                                        <option>PSICOLOGÍA</option>
                                    </select>
                                </div>

                            </div>


                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>1 - Detalles de Evaluación</h4></td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">Nombre:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre_nino">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Apellido:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_apellido_nino">
                        </div>
                    </td>


                    <td style="background-color: #f9f9f9">Edad:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_edad_nino">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9; ">
                        <div class="form-group">
                            <label>Sexo</label>
                            <select class="form-control select2" style="width: 100%;" id="select_sexo">
                                <option selected="selected">Masculino</option>
                                <option>Femenino</option>

                            </select>
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9; ">

                    </td>

                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9">Observaciones:
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
                                               style="margin-left: 10px" value="Guardar"></div>

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
        });


    </script>


    <script type="text/javascript" src="{{ asset("js/ci_plugin/slim_crop/slim/slim.kickstart.min.js")}}"></script>


@endsection