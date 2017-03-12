@extends("crudbooster::admin_template")
@section("content")



        <div class="box">


            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr style="background-color: #dedede">
                        <th style="width: 30%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 5%" ></th>
                        <th style="width: 15%" ></th>
                        <th style="width: 15%" ></th>
                    </tr>
                    <tr>
                        <td colspan="11">
                            <div class="row">
                                <div class="col-md-5" >
                                    <h2 class="box-title"><i class="ion ion-android-checkbox-outline "></i>  &nbsp; FICHA DE EVALUACIÓN</h2>
                                    <div class="form-group" style="margin-top: 15px;width: 50%; ">
                                        <label>Estudiante</label>
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
                        <td colspan="11" style="background-color:#dedede"><h4> EVALUACIÓN DE MATERIAS</h4></td>
                    </tr>
                    <tr  align="center">
                        <td rowspan="2" style="background-color: #f9f9f9; padding-top: 30px"><h4 style="font-weight: 800 ">ASIGNATURAS</h4>
                            </td>
                        <td colspan="4" style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">QUINESTRE 1</h5>
                            </td>
                        <td colspan="4" style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">QUINESTRE 2</h5>
                        </td>


                        <td rowspan="2" style="background-color: #f9f9f9;  padding-top: 30px"><h5 style="font-weight: 800 ">TOTAL ANUAL</h5>
                            </td>
                        <td rowspan="2" style="background-color: #f9f9f9;  padding-top: 30px"><h5 style="font-weight: 800 ">PROMEDIO ANUAL</h5>
                            </td>

                    </tr>
                    <tr>

                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">P1</h5>
                            </td>
                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">P2</h5>
                            </td>
                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">P3</h5>
                            </td>
                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">PROM</h5>
                            </td>
                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">P1</h5>
                            </td>
                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">P2</h5>
                           </td>
                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">P3</h5>
                           </td>
                        <td style="background-color: #f9f9f9"><h5 style="font-weight: 800 ">PROM</h5>
                           </td>


                    </tr>
                    <tr>
                        <td  style="background-color: #f9f9f9" align="center">Matemática</td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_pp_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_sp_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_tp_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_p_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_pp_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_sp_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_tp_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_p_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_ta_mat">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pa_mat">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  style="background-color: #f9f9f9" align="center">Pintura</td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_pp_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_sp_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_tp_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pq_p_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_pp_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_sp_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_tp_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_sq_p_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_ta_pin">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">
                            <div class="form-group" >
                                <input type="number" class="form-control" style="border: none;  " placeholder=""
                                       id="id_pa_pin">
                            </div>
                        </td>
                    </tr>


                    </tbody>
                </table>
                <div class="row">
                    <div class="col-md-2">
                        <input class="btn btn-success form-control" type="button" style="margin-top: 10px" value="Guardar">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->

        </div>
        <!-- /.box -->



    <script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2();
        });
    </script>






@endsection