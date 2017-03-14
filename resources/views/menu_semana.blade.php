@extends("crudbooster::admin_template")
@section("content")


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>-->
    <script src = "{{asset('bower_resources/angular/angular.js')}}"></script>

    <div class = "box" ng-app = "MyApp" ng-controller = "controllerMenu" ng-init = "response = 'Respuesta'">
        <form action = "#" id = "form_menu" method = "POST">
        {{ csrf_field() }}
        <!-- /.box-header -->
            <div class = "box-body">
                <table class = "table table-bordered">
                    <tbody>
                    <tr style = "background-color: #dedede">
                        <th style = "width: 20%"></th>
                        <th style = "width: 20%"></th>
                        <th style = "width: 20%"></th>
                        <th style = "width: 20%"></th>
                        <th style = "width: 20%"></th>

                    </tr>
                    <tr>
                        <td colspan = "5">
                            <div class = "row">
                                <div class = "col-md-4">

                                    <h2 class = "box-title"><i
                                                class = "fa fa-cutlery"></i> &nbsp; MENÚ DE LA SEMANA</h2>

                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan = "5" style = "background-color:#dedede"><h4>Diseña el menú de la semana</h4></td>
                    </tr>
                    <tr>
                        <td style = "background-color: #f9f9f9">
                            <label><h3>Lunes:</h3></label>
                            <br>
                            <label>Desayuno:</label>
                            <textarea class = "form-control" id = "lun_des"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "lun_des"></textarea>
                            <label>Almuerzo: </label>

                            <textarea class = "form-control" id = "lun_alm"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "lun_alm"></textarea>
                        </td>
                        <td style = "background-color: #f9f9f9">
                            <label><h3>Martes:</h3></label>
                            <br>
                            <label>Desayuno:</label>
                            <textarea class = "form-control" id = "mar_des"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "mar_des"></textarea>
                            <label>Almuerzo:</label>
                            <textarea class = "form-control" id = "mar_alm"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "mar_alm"></textarea>
                        </td>
                        <td style = "background-color: #f9f9f9">

                            <label><h3>Miercoles:</h3></label>
                            <br>
                            <label>Desayuno:</label>
                            <textarea class = "form-control" id = "mie_des"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "mie_des"></textarea>
                            <label>Almuerzo:</label>
                            <textarea class = "form-control" id = "mie_alm"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "mie_alm"></textarea>
                        </td>
                        <td style = "background-color: #f9f9f9">
                            <label><h3>Jueves:</h3></label>
                            <br>
                            <label>Desayuno:</label>
                            <textarea class = "form-control" id = "jue_des"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "jue_des"></textarea>
                            <label>Almuerzo:</label>
                            <textarea class = "form-control" id = "jue_alm"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "jue_alm"></textarea>
                        </td>
                        <td style = "background-color:#f9f9f9">
                            <label><h3>Viernes:</h3></label>
                            <br>
                            <label>Desayuno:</label>
                            <textarea class = "form-control" id = "vie_des"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "vie_des"></textarea>
                            <label>Almuerzo:</label>
                            <textarea class = "form-control" id = "vie_alm"
                                      style = "border: none; width: 98%; height: 100px;  margin-top: 5px"
                                      name = "vie_alm" ng-bind = "response"></textarea>
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->

            <div class = "row">
                <div class = "col-md-2">
                    <div class = "form-group"><input class = "btn btn-success form-control" type = "button"
                                                     style = "margin-left: 10px" value = "Guardar" ng-click = "test()"></div>
                </div>
            </div>
        </form>

    </div>
    <!-- /.box -->

    <script>


        var app = angular.module('MyApp', [], function ($interpolateProvider)
        {
            $interpolateProvider.startSymbol('[[');
            $interpolateProvider.endSymbol(']]');
        });

        app.constant('API_URL', 'http://localhost:8080/ci/public/admin/');

        app.controller("controllerMenu", function ($scope, $http, API_URL)
        {
            $scope.init = function ()
            {
                $scope.response = 'Respuesta';
            };

            $scope.init();

            $scope.serializeObject = function (obj)
            {
                var o = {};
                var a = obj.serializeArray();
                $.each(a, function ()
                {
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

            $scope.test = function ()
            {
                console.log($scope.serializeObject($("#form_menu")));
                $http({
                    url    : API_URL + 'custom_menu_semana',
                    method : 'POST',
                    params : $scope.serializeObject($("#form_menu")),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(function (response)
                {
                    console.log(response);

                    if (response.data.response) {
                        swal("Buen trabajo!", "El menú se ha guardado!", "success");
                    } else {
                        swal("Error", "El menú no se pudo guardar", "error");
                    }

                });
            }
        });

    </script>





@endsection