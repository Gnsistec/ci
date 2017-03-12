@extends("crudbooster::admin_template")
@section("content")



    <div class="box">


        <!-- /.box-header -->
        <form role="form" action="">
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

                                <div class="col-md-5">

                                    <div class="row">
                                        <div class="col-md-12"><h2 class="box-title"><i
                                                        class="fa fa-list-alt text-normal"></i> &nbsp; FICHA DE
                                                INSCRIPCIÓN</h2></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top: 15px">
                                                <label>Fecha:</label>
                                                <div class="input-group date">
                                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>

                                                    <input type="text" class="form-control pull-right" id="datpick">
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" style="margin-top: 15px">
                                                <label>Nivel</label>
                                                <select class="form-control select2" style="width: 100%;" id="select_level">
                                                    <option selected="selected">A</option>
                                                    <option>B</option>
                                                    <option>C</option>
                                                </select>
                                            </div>

                                    </div>
                                    </div>


                                </div>

                                <div class="col-md-3">




                                </div>
                                <div class="col-md-2">
                                </div>
                                <div class="col-md-2" style="height: 150px">

                                    <div class="slim"
                                         data-label="Arrastre su foto aquí"
                                         data-size="150,150"
                                         data-ratio="1:1">
                                        <input type="file" name="slim[]" required id="foto_estudiante"/>
                                    </div>


                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>1 - DATOS PERSONALES DE ESTUDIANTES</h4>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Nombre:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_nombre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Apellido:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_apellido">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Nacionalidad:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_nacionalidad">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Lugar de Nacimiento:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_lugar_nacimiento">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Fecha de Nacimiento:
                            <div class="input-group date" style=" margin-top: 5px">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="text" class="form-control pull-right" id="datepicker_fecha_nacimiento">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9 ;">Edad actual:</td>
                        <td colspan="4">7 años, 3 meses, 23 dias</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background-color: #f9f9f9; ">Dirección:
                            <div class="form-group">
                                <input class="form-control" style="border: none;  margin-top: 5px" placeholder=""
                                       id="id_direccion" data-validation="custom" data-validation-regexp="^([a-z]+)$">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Teléfono:
                            <div class="form-group">
                                <input class="form-control" style="border: none;  margin-top: 5px"
                                       data-validation="length number" data-validation-length="max10">

                            </div>
                        </td>
                        <td colspan="2" style="background-color: #f9f9f9">Representante:
                            <div class="row">
                                <div class="checkbox col-md-4">
                                    <label>
                                        <input type="checkbox" id="cb_id_padre">
                                        Padre </label>
                                </div>
                                <div class="checkbox col-md-4" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_madre">
                                        Madre </label>
                                </div>
                                <div class="checkbox col-md-4" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_representante">
                                        Representante </label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Cédula:
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;  margin-top: 5px "
                                       placeholder=""
                                       id="id_cedula">
                            </div>
                        </td>
                        <td colspan="4" style="background-color: #f9f9f9">Persona con quien vive el niño:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;  margin-top: 5px"
                                       placeholder=""
                                       id="id_conviviente">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>1.2 - DATOS DE LA MADRE</h4></td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Nombre:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;  margin-top: 5px"
                                       placeholder=""
                                       id="id_nombre_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Apellido:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;  margin-top: 5px"
                                       placeholder=""
                                       id="id_apellido_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Edad:
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;  margin-top: 5px"
                                       placeholder=""
                                       id="id_edad_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Estado Civil :
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_estado_civil_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Profesión:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_profesion_madre">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Empresa de trabajo:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top:5px"
                                       placeholder=""
                                       id="id_empresa_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Cargo que desempeña:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_cargo_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Teléfonos del lugar de trabajo:
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_telefono_trabajo_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Celular:
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_celular_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Dirección domicilio:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_direccion_domicilio_madre">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background-color: #f9f9f9">Teléfono del domicilio:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_telef_domicilio_madre">
                            </div>
                        </td>
                        <td colspan="2" style="background-color: #f9f9f9">Email:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_email_madre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9"></td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>1.3 - DATOS DEL PADRE</h4></td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Nombre:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;  margin-top: 5px"
                                       placeholder=""
                                       id="id_nombre_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Apellido:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;  margin-top: 5px"
                                       placeholder=""
                                       id="id_apellido_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Edad:
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;  margin-top: 5px"
                                       placeholder=""
                                       id="id_edad_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Estado Civil:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_estado_civil_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Profesión:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_profesion_padre">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Empresa de trabajo:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top:5px"
                                       placeholder=""
                                       id="id_empresa_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Cargo que desempeña:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_cargo_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Teléfonos del lugar de trabajo:
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_telefono_trabajo_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Celular
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_celular_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Dirección domicilio:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_direccion_domicilio_padre">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background-color: #f9f9f9">Teléfono del domicilio:
                            <div class="form-group">
                                <input type="number" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_telef_domicilio_padre">
                            </div>
                        </td>
                        <td colspan="2" style="background-color: #f9f9f9">Email:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none;margin-top:5px"
                                       placeholder=""
                                       id="id_email_padre">
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9"></td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"></td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color: #f9f9f9">De necesitar la presencia inmediata de
                            ustedes, a qué número (s) telefónico (s) nos comunicamos:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top:5px"
                                       placeholder=""
                                       id="id_telef_urgencia">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>2 - INFORMACION FAMILIAR</h4></td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Relacion entre padres:
                            <div class="row">
                                <div class="checkbox col-md-5">
                                    <label>
                                        <input type="checkbox" id="cb_id_casados">
                                        Casados </label>
                                </div>
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_separados">
                                        Separados </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_divorciados">
                                        Divorciados </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_viudos">
                                        Viudos </label>
                                </div>
                            </div>
                        </td>
                        <td colspan="1" style="background-color: #f9f9f9">¿Tiene Hermanos?:
                            <div class="row">
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_hermanos_si">
                                        SI </label>
                                </div>
                                <div class=" col-md-9" style="margin-top: 10px"> ¿Cuantos?:
                                    <select name="cant_hermanos" id="id_cant_hermanos">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-2" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_hermanos_no">
                                        NO </label>
                                </div>
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9">Lugar que ocupa:
                            <div class="form-group">
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_luga_ocupa">
                            </div>
                        </td>
                        <td colspan="2" style="background-color: #f9f9f9">¿Con qué persona(s) pasa la mayor parte del
                            tiempo su hijo(a)?:
                            <div class="row">
                                <div class="checkbox col-md-2">
                                    <label>
                                        <input type="checkbox" id="cb_id_papa">
                                        Papá </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_mama">
                                        Mamá </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_abuelo">
                                        Abuelo </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label style="margin-top: 10px">
                                        <input type="checkbox" id="cb_id_empleda">
                                        Empleada </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-1" style="margin-top: 5px"> ¿Otros?:</div>
                                <div class=" col-md-6" style="border: none; padding-left:40px;">
                                    <input type="text" class="form-control" style="border: none; " placeholder=""
                                           id="id_tiempo_otros">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>3 - ESTRUCTURA FAMILIAR</h4></td>
                    </tr>
                    <tr>
                        <td style="background-color: #f9f9f9">Tipo de hogar:
                            <div class="row">
                                <div class="checkbox col-md-5">
                                    <label>
                                        <input type="checkbox" id="cb_id_comleto">
                                        Completo </label>
                                </div>
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_incompleto">
                                        Incompleto </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_reorganizado">
                                        Reorganizado </label>
                                </div>
                            </div>
                        </td>
                        <td colspan="1" style="background-color: #f9f9f9"> Clima Familiar entre Padres:
                            <div class="row">
                                <div class="checkbox col-md-5">
                                    <label>
                                        <input type="checkbox" id="cb_id_clim_padre_bueno">
                                        Bueno </label>
                                </div>
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_clim_padre_regular">
                                        Regular </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_clim_padre_malo">
                                        Malo </label>
                                </div>
                            </div>
                        </td>
                        <td style="background-color: #f9f9f9"> Clima Familiar entre Hermanos:
                            <div class="row">
                                <div class="checkbox col-md-5">
                                    <label>
                                        <input type="checkbox" id="cb_id_clim_herma_bueno">
                                        Bueno </label>
                                </div>
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_clim_herma_regular">
                                        Regular </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_clim_herma_malo">
                                        Malo </label>
                                </div>
                            </div>
                        </td>
                        <td colspan="2" style="background-color: #f9f9f9">Principales problemas que afectan a la
                            familia:
                            <div class="row">
                                <div class="checkbox col-md-5">
                                    <label>
                                        <input type="checkbox" id="cb_id_prob_sociales">
                                        Sociales </label>
                                </div>
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_prob_econ">
                                        Económicos </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_prob_cult">
                                        Culturales </label>
                                </div>
                                <div class="checkbox col-md-3" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_prob_salud">
                                        Salud </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-2" style="margin-top: 15px">
                                    <label>
                                        <input type="checkbox" id="cb_id_prob_otros">
                                        Otros </label>
                                </div>
                                <div class=" col-md-10" style="margin-top: 10px">
                                    <input type="text" class="form-control" style="border: none;"
                                           placeholder="Observaciones..." id="id_prob_observ">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color: #f9f9f9">Familiares con algún tipo de discapacidad:
                            <div class="row">
                                <div class="checkbox col-md-1">
                                    <label>
                                        <input type="checkbox" id="cb_id_disc_si">
                                        SI </label>
                                </div>
                                <div class="checkbox col-md-1" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_disc_no">
                                        NO </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-12" style="margin-top: 10px"> ¿Quien?
                                    <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                           placeholder="" id="id_disc_quien">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-12" style="margin-top: 10px"> Observaciones
                                    <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                           placeholder="" id="id_disc_observ">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>4 - REFERENCIAS SOCIOECONÓMICOS
                                GENERALES</h4></td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color: #f9f9f9">Condiciones de Vida: <br>
                            <br>
                            <div class="row">
                                <div class=" col-md-1">
                                    <label for="id_tiempo_otros" class="control-label">VIVIENDA:</label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_propia">
                                        Propia </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_arrendada">
                                        Arrendada </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_prestada">
                                        Prestada </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_anticresisa">
                                        Anticresis </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_prestamo">
                                        Con presatmo </label>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class=" col-md-1">
                                    <label for="id_tiempo_otros" class="control-label">SERVICIOS:</label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_luz">
                                        Luz eléctrica </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_agua">
                                        Agua potable </label>
                                </div>
                                <div class="checkbox col-md-1" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_serv_telef">
                                        Teléfono </label>
                                </div>
                                <div class="checkbox col-md-1" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_cable">
                                        Cable </label>
                                </div>
                                <div class="checkbox col-md-1" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_serv_celular">
                                        Celular</label>
                                </div>
                                <div class="checkbox col-md-1" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_serv_internet">
                                        Internet</label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 1px">
                                    <label>
                                        <input type="checkbox" id="cb_id_serv_computadora">
                                        Computadora</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>5 - DATOS DE SALUD</h4></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background-color: #f9f9f9">Presenta alguna dificultad de aprendizaje /
                            discapacidad física:
                            <div class="row">
                                <div class="checkbox col-md-2">
                                    <label>
                                        <input type="checkbox" id="cb_id_dif_si">
                                        SI </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_dif_no">
                                        NO </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-12" style="margin-top: 10px"> Determionar cuál es:</div>
                                <div class=" col-md-12" style="margin-top: 10px">
                                    <input type="text" class="form-control" style="border: none;" placeholder=""
                                           id="id_disc_cual">
                                </div>
                            </div>
                        </td>
                        <td colspan="2" style="background-color: #f9f9f9">Presenta alguna condición médica específica:
                            <div class="row">
                                <div class="checkbox col-md-2">
                                    <label>
                                        <input type="checkbox" id="cb_id_condic_si">
                                        SI </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_condic_no">
                                        NO </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-12" style="margin-top: 10px"> Determionar cuál es:</div>
                            </div>
                            <div class="row">
                                <div class=" col-md-12" style="margin-top: 10px">
                                    <input type="text" class="form-control" style="border: none;" placeholder=""
                                           id="id_condic_cual">
                                </div>
                            </div>
                        </td>
                        <td colspan="1" style="background-color: #f9f9f9">Padece de alergias:
                            <div class="row">
                                <div class="checkbox col-md-3">
                                    <label>
                                        <input type="checkbox" id="cb_id_alergias_si">
                                        SI </label>
                                </div>
                                <div class="checkbox col-md-2" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_alergias_no">
                                        NO </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-12" style="margin-top: 10px"> Especificar cuál:</div>
                            </div>
                            <div class="row">
                                <div class=" col-md-12" style="margin-top: 10px">
                                    <input type="text" class="form-control" style="border: none;" placeholder=""
                                           id="id_alergias_cual">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color: #f9f9f9">Especificar medicamentos que utiliza
                            <div class="row">
                                <div class=" col-md-12"></div>
                                <textarea class="form-control" id="id_medicamentos"
                                          style="border: none; width: 96%; margin-left: 20px; margin-top: 10px"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>6 - DATOS ACADÉMICOS</h4></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="background-color: #f9f9f9">Institución educativa de la que procede:
                            <div class="row">
                                <div class=" col-md-12"></div>
                                <textarea class="form-control" id="id_procede"
                                          style="border: none; width: 92%; margin-left: 20px; margin-top: 10px"></textarea>
                            </div>
                        </td>
                        <td colspan="3" style="background-color: #f9f9f9">Razón por la cual busca otra opción educativa:
                            <div class="row">
                                <div class=" col-md-12"></div>
                                <textarea class="form-control" id="id_razon"
                                          style="border: none; width: 94%; margin-left: 20px; margin-top: 10px"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>7 - A través de qué medio obtuvo la
                                información de nuestra Institución</h4></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="background-color: #f9f9f9">FUENTES:
                            <div class="row">
                                <div class="checkbox col-md-5">
                                    <label>
                                        <input type="checkbox" id="cb_id_volantes">
                                        Hojas volantes </label>
                                </div>
                                <div class="checkbox col-md-7" style="margin-top: 10px">
                                    <label>
                                        <input type="checkbox" id="cb_id_rec">
                                        Recomendación de amigos o familiares </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="checkbox col-md-5" style="margin-top: 15px">
                                    <label>
                                        <input type="checkbox" id="cb_id_revista">
                                        Publicidad de Revista (¿Cual?) </label>
                                </div>
                                <div class="checkbox col-md-6" style="margin-top: 15px">
                                    <label>
                                        <input type="checkbox" id="cb_id_web">
                                        Página Web (¿Cual?) </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-5" style="margin-top: 10px">
                                    <input type="text" class="form-control" style="border: none;"
                                           placeholder="Ej: Revista 'Cielo Azul'" id="id_nombre_rev">
                                </div>
                                <div class=" col-md-7" style="margin-top: 10px">
                                    <input type="text" class="form-control" style="border: none;"
                                           placeholder="Ej: 'www.facebook.com'" id="id_nombre_web">
                                </div>
                            </div>
                        </td>
                        <td colspan="2">Firma del Representante:</td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"></td>
                    </tr>
                    <tr>
                        <td colspan="5">NOTA: La persona que firma como representante del / la estudiante es el
                            responsable de cumplir con todos los requerimientos de la institución durante todo el año
                            lectivo. De la misma manera será el representante quién reciba, notificaciones, comunicados
                            o citaciones durante el proceso educativo.
                            Únicamente el representante es quién podrá autorizar cambios en el desenvolvimiento de las
                            actividades dentro de la Institución.
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" style="background-color:#dedede"><h4>8 - CROQUIS DEL DOMICILIO </h4></td>
                    </tr>
                    <tr>
                        <!-- <td><input type="button" id="boton" value="Ver Position" onClick="verPosition()"/></td>-->
                        <td colspan="5">
                            <div class="row">
                                <div class="col-md-4">
                                    <input class="form-control" type="text" id="geo" value=""
                                           placeholder="Ej: 'Republica y Eloy Alfaro, Quito, Ecuador' "/>
                                </div>
                                <div class="col-md-2">
                                    <input class="btn btn-default form-control" type="button" id="buscar"
                                           value="Buscar Domicilio" onClick="buscar()"/>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <div class="row">
                            <td colspan="5">
                                <div class="col-md-12" id="map" style=" height: 300px; background-color: aqua"></div>
                            </td>
                        </div>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </form>

        <div class="row">
            <div class="col-md-2">
                <div class="form-group"><input class="btn btn-success form-control" type="button"
                                               style="margin-left: 10px" value="Guardar"></div>

            </div>
        </div>

    </div>
    <!-- /.box -->

    <script type="text/javascript"
            src="{{ asset("js/ci_plugin/form-validator/jquery.form-validator.min.js")}}"></script>

    <script>
        $.validate({
            lang: 'es'
        });


    </script>
    <script type="text/javascript">


        function buscar() {
            alert("si cogio");
            GMaps.geocode({
                address: $('#geo').val(),
                callback: function (results, status) {
                    if (status == 'OK') {

                        var latlng = results[0].geometry.location;
                        dibujarRuta(latlng.lat(), latlng.lng());

                        map.setCenter(latlng.lat(), latlng.lng());
                        map.markers[0].setPosition(new google.maps.LatLng(latlng.lat(), latlng.lng()));


                    }
                }
            });
        }

        function dibujarRuta(lat_dest, lng_dest) {
            map.cleanRoute();
            var lat = map.markers[0].position.lat();
            var lng = map.markers[0].position.lng();

            map.drawRoute({
                origin: [init_lat, init_lng],
                destination: [lat_dest, lng_dest],
                travelMode: 'driving',
                strokeColor: '#131540',
                strokeOpacity: 0.6,
                strokeWeight: 6
            });

        }

        function dibujarRutaMarcador() {

            map.cleanRoute();
            var lat = map.markers[0].position.lat();
            var lng = map.markers[0].position.lng();

            map.drawRoute({
                origin: [init_lat, init_lng],
                destination: [lat, lng],
                travelMode: 'driving',
                strokeColor: '#131540',
                strokeOpacity: 0.6,
                strokeWeight: 6
            });

        }


        //Date picker
        /*

         $('#datpick').datepicker({
         autoclose: true
         });

         */

    </script>
    <script>


        $(function () {
            $('#datpick').fdatepicker({

                format: 'mm-dd-yyyy',
                disableDblClickSelection: true,
                leftArrow: '<<',
                rightArrow: '>>'
            });

            $('#datepicker_fecha_nacimiento').fdatepicker({

                format: 'mm-dd-yyyy',
                disableDblClickSelection: true,
                leftArrow: '<<',
                rightArrow: '>>'
            });

            document.getElementById("datpick").blur();
        });


    </script>

    <script type="text/javascript">

        var init_lat = '-0.1835729';
        var init_lng = '-78.5022417';
        var map;
        $(document).ready(function () {
            map = new GMaps({
                el: '#map',
                lat: -0.1835729,
                lng: -78.5022417,
                zoomControl: true,
                zoomControlOpt: {
                    style: 'SMALL',
                    position: 'TOP_LEFT'
                },
                panControl: false,
                streetViewControl: false,
                mapTypeControl: false,
                overviewMapControl: false,
                zoom: 17
            });

            var init_lat = -0.1835729;
            var init_lng = -78.5022417;

            map.addMarker({
                lat: -0.1835729,
                lng: -78.5022417,
                draggable: true,
                dragend: function (e) {
                    dibujarRutaMarcador();
                },
                title: 'Marker with InfoWindow',
                infoWindow: {
                    content: '<div><center><p>Mariana de Jesús OE7-02 ' +
                    'y Nuño de Valderrama. <br> Edificio CITIMED, Piso 6, oficina #638 <br>Quito-Ecuador <br>CP: 170147 </p><img src="TNR_6902.JPG"/></center></div>'

                }
            });
        });

    </script>

    <script type="text/javascript" src="{{ asset("js/ci_plugin/slim_crop/slim/slim.kickstart.min.js")}}"></script>


@endsection