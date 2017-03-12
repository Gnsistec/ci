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

                            <div class="col-md-3">

                                <h2 class="box-title"><i class="ion ion-medkit"></i>  &nbsp; FICHA MÉDICA</h2>

                                <div class="form-group" style="margin-top: 23px">
                                    <label>Fecha del Registro:</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>

                                        <input type="text" class="form-control pull-right" id="datpick">
                                    </div>
                                    <!-- /.input group -->
                                </div>

                            </div>

                            <div class="col-md-2">

                                <div class="form-group" style="margin-top: 76px">
                                    <label>Curso</label>
                                    <select class="form-control select2" style="width: 100%;" id="select_curso">
                                        <option selected="selected">A</option>
                                        <option>B</option>
                                        <option>C</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-2" style="margin-top: 76px">
                                Turno:
                                <div class="form-group">
                                    <input type="text" class="form-control" style=" margin-top: 5px " placeholder=""
                                           id="id_turno">
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-top: 76px">
                                Sección:
                                <div class="form-group">
                                    <input type="text" class="form-control" style=" margin-top: 5px " placeholder=""
                                           id="id_sesion">
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2" style="height: 150px">
                                <div class="slim"
                                     data-label="Arrastre su foto aquí"
                                     data-size="150,150"
                                     data-ratio="1:1">
                                    <input type="file" name="slim[]" id="foto_estudiante" required/>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>1 - DATOS PERSONALES DEL ESTUDIANTE</h4></td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">Nombre:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_nombre">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Apellido:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_apellido">
                        </div>
                    </td>


                    <td style="background-color: #f9f9f9">Cédula:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_cedula">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Teléfono:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono">
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
                    <td style="background-color: #f9f9f9; ">
                        <div class="form-group">
                            <label>Sexo</label>
                            <select class="form-control select2" style="width: 100%;" id="select_sexo">
                                <option selected="selected">Masculino</option>
                                <option>Femenino</option>

                            </select>
                        </div>
                    </td>
                    <td colspan="3" style="background-color: #f9f9f9; ">Dirección:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none;  margin-top: 5px"
                                   placeholder=""
                                   id="id_direccion">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9 ;">Edad actual:
                        <label style="margin-top: 10px">7 años, 3 meses, 23 dias</label></td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>2 - OTROS DATOS</h4></td>
                <tr>
                    <td style="background-color: #f9f9f9">Grupo Sanguíneo:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_grupo_sanguineo">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Seguro médico al que pertenece:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_seg_medico">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">No. Carnet:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_carnet">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Teléfono en caso emergencia:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_telefono_emergencia">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Médico de cabecera:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_medic_cabec">
                        </div>
                    </td>

                </tr>
                <tr>
                    <td colspan="5" style="background-color: #f9f9f9">Sanatorio donde desea ser internado (caso de
                        necesidad):
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_sanatorio">
                        </div>
                    </td>
                </tr>


                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>3 - DATOS ANTROPO BIOMÉTRICOS</h4></td>
                <tr>
                <tr>
                    <td style="background-color: #f9f9f9">Peso:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_peso">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Talla:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_talla">
                        </div>
                    </td>

                    <td style="background-color: #f9f9f9">Perímetro Toraxico Insp.:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_preim_torax_insp">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Perimetro Toraxico Exp.:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_preim_torax_exp">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Presión Arterial:
                        <div class="form-group">
                            <input type="number" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_pre_art">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">F.C. en reposo:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_fc_repo">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">F.C. después de esfuerzo:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_fc_desp_esf">
                        </div>
                    </td>


                    <td style="background-color: #f9f9f9">Amígdalas:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_amigdalas">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Piel:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_piel">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Ojos:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_ojos">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #f9f9f9">Oídos:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_oidos">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Dientes:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_dientes">
                        </div>
                    </td>


                    <td style="background-color: #f9f9f9">Corazón:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none;  margin-top: 5px "
                                   placeholder=""
                                   id="id_corazon">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Columna vertebral:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_col_vert">
                        </div>
                    </td>
                    <td style="background-color: #f9f9f9">Pulmones:
                        <div class="form-group">
                            <input type="text" class="form-control" style="border: none; margin-top: 5px" placeholder=""
                                   id="id_pulmones">
                        </div>
                    </td>
                </tr>
                <td colspan="5" style="background-color: #f9f9f9">Otros:
                    <textarea class="form-control" id="id_otros"
                              style="border: none; width: 96%;  margin-top: 5px"></textarea>
                </td>

                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>4 - INFORMES GENERALES</h4></td>
                <tr>
                <tr>
                    <td style="background-color: #f9f9f9">Alergia:
                        <div class="row">
                            <div class="checkbox col-md-5">
                                <label>
                                    <input type="checkbox" id="cb_id_alergia_si">
                                    Si </label>
                            </div>
                            <div class="checkbox col-md-3" style="margin-top: 10px">
                                <label>
                                    <input type="checkbox" id="cb_id_alergia_no">
                                    No </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                ¿A que?:
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_a_que">
                            </div>
                        </div>
                    </td>
                    <td colspan="1" style="background-color: #f9f9f9">Asma:
                        <div class="row">
                            <div class="checkbox col-md-5">
                                <label>
                                    <input type="checkbox" id="cb_id_asma_si">
                                    Si </label>
                            </div>
                            <div class="checkbox col-md-3" style="margin-top: 10px">
                                <label>
                                    <input type="checkbox" id="cb_id_asma_no">
                                    No </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">Cardiopatía:</div>
                        </div>
                        <div class="row">
                            <div class="checkbox col-md-5">
                                <label>
                                    <input type="checkbox" id="cb_id_cardiopatia_si">
                                    Si </label>
                            </div>
                            <div class="checkbox col-md-3" style="margin-top: 10px">
                                <label>
                                    <input type="checkbox" id="cb_id_cardiopatia_no">
                                    No </label>
                            </div>
                        </div>
                    </td>
                    <td colspan="1" style="background-color: #f9f9f9">Diabetes:
                        <div class="row">
                            <div class="checkbox col-md-5">
                                <label>
                                    <input type="checkbox" id="cb_id_diabetes_si">
                                    Si </label>
                            </div>
                            <div class="checkbox col-md-3" style="margin-top: 10px">
                                <label>
                                    <input type="checkbox" id="cb_id_diabetes_no">
                                    No </label>
                            </div>
                        </div>

                    </td>
                    <td colspan="1" style="background-color: #f9f9f9">Usa anteojos:
                        <div class="row">
                            <div class="checkbox col-md-5">
                                <label>
                                    <input type="checkbox" id="cb_id_anteojos_si">
                                    Si </label>
                            </div>
                            <div class="checkbox col-md-3" style="margin-top: 10px">
                                <label>
                                    <input type="checkbox" id="cb_id_anteojos_no">
                                    No </label>
                            </div>
                        </div>

                    </td>

                    <td colspan="1" style="background-color: #f9f9f9">Tiene vacunación al día:
                        <div class="row">
                            <div class="checkbox col-md-5">
                                <label>
                                    <input type="checkbox" id="cb_id_vacunacion_si">
                                    Si </label>
                            </div>
                            <div class="checkbox col-md-3" style="margin-top: 10px">
                                <label>
                                    <input type="checkbox" id="cb_id_vacunacion_no">
                                    No </label>
                            </div>
                        </div>

                    </td>

                </tr>
                <tr>
                    <td colspan="3" style="background-color: #f9f9f9">Antecedentes quirúrgicos:
                        <textarea class="form-control" id="id_ant_quir"
                                  style="border: none; width: 96%;  margin-top: 5px"></textarea>
                    </td>
                    <td colspan="2" style="background-color: #f9f9f9">Convulciones:
                        <textarea class="form-control" id="id_convulciones"
                                  style="border: none; width: 96%;  margin-top: 5px"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="background-color: #f9f9f9">Trastornos Visuales:
                        <textarea class="form-control" id="id_trat_visua"
                                  style="border: none; width: 96%;  margin-top: 5px"></textarea>
                    </td>
                    <td colspan="2" style="background-color: #f9f9f9">Otras enfermedades:
                        <textarea class="form-control" id="id_otras_enf"
                                  style="border: none; width: 96%;  margin-top: 5px"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"><h4>5 - APTITUD</h4></td>
                <tr>
                <tr>
                    <td colspan="1" style="background-color: #f9f9f9">
                        <div class="checkbox col-md-12">
                            <label>
                                <input type="checkbox" id="cb_id_apto">
                                Apto </label>
                        </div>
                    </td>
                    <td colspan="1" style="background-color: #f9f9f9">
                        <div class="checkbox col-md-12">
                            <label>
                                <input type="checkbox" id="cb_id_no_apto">
                                No Apto </label>
                        </div>
                    </td>
                    <td colspan="3" style="background-color: #f9f9f9">Observaciones:
                        <textarea class="form-control" id="id_observ"
                                  style="border: none; width: 96%;  margin-top: 5px"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color: #f9f9f9">
                        <div class="row">
                            <div class="col-md-6" >Nombre, Firma y sello del médico:</div>

                        </div>
                        <div class="row">
                            <div class="col-md-6" >
                                <input type="text" class="form-control" style="border: none; margin-top: 5px"
                                       placeholder=""
                                       id="id_nomb_medico">
                            </div>
                        </div>
                    </td>
                    <td colspan="2">
                        <div style="margin-bottom: 100px">Firma y Aclaración del Padre/Madre/Tutor legal:</div>
                    </td>
                    <td colspan="1">
                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-bottom: 40px">Recibido por:</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div style="margin-bottom: 30px"> Firmado por:</div>
                            </div>
                        </div>


                    </td>
                </tr>
                <tr>
                    <td colspan="5" style="background-color:#dedede"> *AL MOMENTO DE LA ENTREGA DEL PRESENTE DOCUMENTO,
                        HACERLO CON COPIA, PARA EL ACUSE DE RECIBO.
                    </td>
                <tr>

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


    <script type="text/javascript" src="{{ asset("js/ci_plugin/slim_crop/slim/slim.kickstart.min.js")}}"></script>


@endsection