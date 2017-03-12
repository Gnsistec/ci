@extends("crudbooster::admin_template")
@section("content")



    <div class="box">


        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr style="background-color: #dedede">
                    <th style="width: 12.5%" ></th>
                    <th style="width: 12.5%" ></th>
                    <th style="width: 12.5%" ></th>
                    <th style="width: 12.5%" ></th>
                    <th style="width: 12.5%" ></th>
                    <th style="width: 12.5%" ></th>
                    <th style="width: 12.5%" ></th>
                    <th style="width: 12.5%" ></th>

                </tr>
                <tr>
                    <td colspan="8">
                        <div class="row">
                            <div class="col-md-5" >
                                <h2 class="box-title"><i class="ion ion-cash"></i>  &nbsp; PLANILLA DE PAGOS </h2>

                                <div class="form-group" style="margin-top: 10px; width: 50%">
                                    <label>Padres</label>
                                    <select class="form-control select2" style="width: 100%;" id="select_level">
                                        <option selected="selected"></option>
                                        <option>Carlos Alberto</option>
                                        <option>Luis Mejia</option>
                                        <option>Napoleon Simbaña</option>
                                        <option>Julian Villarroel</option>
                                        <option>Eloy Santiago</option>
                                        <option>Elena Borroto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="8" style="background-color:#dedede"><h4>Control de Pagos</h4></td>

                </tr>
                <tr>
                    <td  style="background-color: #f9f9f9">
                        <label style="margin-top: 0px">  Pagos realizados</label>
                    </td>
                    <td colspan="7" style="background-color: #f9f9f9">
                        <div class="row">
                            <div class="col-md-1 "><label for="sep">Sep</label><input type="text" class="form-control" style="border: none; " id="sep"></div>
                            <div class="col-md-1 "><label for="oct">Oct</label><input type="text" class="form-control" style="border: none; " id="oct"></div>
                            <div class="col-md-1 "><label for="nov">Nov</label><input type="text" class="form-control" style="border: none; " id="nov"></div>
                            <div class="col-md-1 "><label for="dic">Dic</label><input type="text" class="form-control" style="border: none; " id="dic"></div>
                            <div class="col-md-1 "><label for="ene">Ene</label><input type="text" class="form-control" style="border: none; " id="ene"></div>
                            <div class="col-md-1 "><label for="feb">Feb</label><input type="text" class="form-control" style="border: none; " id="feb"></div>
                            <div class="col-md-1 "><label for="mar">Mar</label><input type="text" class="form-control" style="border: none; " id="mar"></div>
                            <div class="col-md-1 "><label for="abr">Abr</label><input type="text" class="form-control" style="border: none; " id="abr"></div>
                            <div class="col-md-1 "><label for="may">May</label><input type="text" class="form-control" style="border: none; " id="may"></div>
                            <div class="col-md-1 "><label for="jun">Jun</label><input type="text" class="form-control" style="border: none; " id="jun"></div>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="8" style="background-color: #f9f9f9"><label >Casos de Excepción:</label>

                        <textarea class="form-control" id="id_convulciones"
                                  style="border: none; width: 98%;  margin-top: 5px"></textarea></td>
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