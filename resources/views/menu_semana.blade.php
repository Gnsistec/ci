@extends("crudbooster::admin_template")
@section("content")


    <script src="{{asset('bower_resources/angular/angular.js')}}"></script>

    <div class="box" ng-app="appMenu" ng-controller="controllerMenu" >
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

                                <h2 class="box-title"><i class="fa fa-cutlery"></i> &nbsp; MENÚ DE LA SEMANA</h2>

                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>Diseña el menú de la semana</h4></td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">
                        <label><h3>Lunes:</h3></label>
                        <br>
                        <label>Desayuno:</label>
                        <textarea class="form-control" id="id_lun_des"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                        <label>Almuerzo:</label>
                        <textarea class="form-control" id="id_lun_alm"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                    </td>
                    <td style="background-color: #f9f9f9">
                        <label><h3>Martes:</h3></label>
                        <br>
                        <label>Desayuno:</label>
                        <textarea class="form-control" id="id_mar_des"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                        <label>Almuerzo:</label>
                        <textarea class="form-control" id="id_mar_alm"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                    </td>
                    <td style="background-color: #f9f9f9">
                        <label><h3>Miercoles:</h3></label>
                        <br>
                        <label>Desayuno:</label>
                        <textarea class="form-control" id="id_mie_des"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                        <label>Almuerzo:</label>
                        <textarea class="form-control" id="id_mie_alm"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                    </td>
                    <td style="background-color: #f9f9f9">
                        <label><h3>Jueves:</h3></label>
                        <br>
                        <label>Desayuno:</label>
                        <textarea class="form-control" id="id_jue_des"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                        <label>Almuerzo:</label>
                        <textarea class="form-control" id="id_jue_alm"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                    </td>
                    <td style="background-color: #f9f9f9">
                        <label><h3>Viernes:</h3></label>
                        <br>
                        <label>Desayuno:</label>
                        <textarea class="form-control" id="id_vie_des"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                        <label>Almuerzo:</label>
                        <textarea class="form-control" id="id_vie_alm"
                                  style="border: none; width: 98%; height: 100px;  margin-top: 5px"></textarea>
                    </td>

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

    var appMenu = angular.module("appMenu",[],function ($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    });

    appMenu.controller("controllerMenu", function($scope,$http){

        &scope.init = function(){
            $scope.item = { };

        };

    });


    </script>


    <script>

        $(function () {
            $('#datpick').fdatepicker({

                format: 'dd-mm-yyyy',
                disableDblClickSelection: true,
                leftArrow: '<<',
                rightArrow: '>>'
            });

            document.getElementById("datpick").blur();

            $(".select2").select2();
        });

    </script>

@endsection