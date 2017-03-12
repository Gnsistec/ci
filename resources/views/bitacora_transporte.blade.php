@extends("crudbooster::admin_template")
@section("content")



    <div class="box">


        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr style="background-color: #dedede">
                    <th style="width: 20%" ></th>
                    <th style="width: 20%" ></th>
                    <th style="width: 20%" ></th>
                    <th style="width: 20%" ></th>
                    <th style="width: 20%" ></th>

                </tr>
                <tr>
                    <td colspan="5">
                        <div class="row">
                            <div class="col-md-5" >
                                <h2 class="box-title"><i class="ion ion-android-bus "></i>  &nbsp; BITACORA DE TRANSPORTE</h2>

                                <div class="form-group" style="margin-top: 23px; width: 50%">
                                    <label>Fecha del Registro:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>

                                        <input type="text" class="form-control pull-right" id="datpick">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>1 - DATOS DEL TRANSPORTISTA</h4></td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">Nombre del permisionario:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Domicilio:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_apellido">
                        </div>
                    </td>


                    <td style="background-color: #f9f9f9">Tipo de servicio:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_cedula">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Modalidad:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Marca:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">Modelo:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Placas No.:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_apellido">
                        </div>
                    </td>


                    <td style="background-color: #f9f9f9">Nombre del Conductor:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_cedula">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Licencia:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Vigencia:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9">
                        <div class="form-group">Origen - Destino (Especificar Ruta)
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>2 - BITACORA DEL CONDUCTOR</h4></td>

                </tr>
                <tr>
                    <td rowspan="2" style="background-color: #f9f9f9">
                        <label style="margin-top: 25px">  Fecha Conduciendo</label>
                    </td>
                    <td colspan="4" style="background-color: #f9f9f9">
                        <div class="row">
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                        </div>
                    </td>
                </tr>
                <tr>

                    <td colspan="4" style="background-color: #f9f9f9">
                        <div class="row">
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                            <div class="col-md-1 "><input type="text" class="form-control" style="border: none; " id=""></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9"><label >Casos de Excepción:</label>

                        <textarea class="form-control" id="id_convulciones"
                                  style="border: none; width: 98%;  margin-top: 5px"></textarea></td>
                </tr>

                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>3 - HORARIOS</h4></td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">De salida:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">De llegada:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_apellido">
                        </div>
                    </td>


                    <td style="background-color: #f9f9f9">De servicio conduciendo:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_cedula">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Firma de responsable:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Firma del conductor:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->

        <div class="row">
            <div class="col-md-2">
                <div class="form-group"> <input class="btn btn-success form-control" type="button" style="margin-left: 10px" value="Guardar"></div>

            </div>
        </div>

    </div>
    <!-- /.box -->

    <script>


        $(function () {
            $('#datpick').fdatepicker({

                format: 'dd-mm-yyyy',
                disableDblClickSelection: true,
                leftArrow: '<<',
                rightArrow: '>>'
            });

            document.getElementById("datpick").blur();
        });

    </script>

@endsection