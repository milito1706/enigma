      <div class="row">
              <div class="col-sm-6 col-md-12">
                <div class="tab-container">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#Credito" data-toggle="tab">Crédito</a></li>
                    <li><a href="#profile" data-toggle="tab">Reporte de entrevista</a></li>                  
                  </ul>
                  <div class="tab-content">
                    <div id="Credito" class="tab-pane active cont">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>No Crédito</label>
                            <input type="text" name="no_credito" id="no_credito" placeholder="No Crédito" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Frecuancia de pago</label>
                            <select name="unidad_credito" id="unidad_credito" class="form-control">
                                <!--<option value="<?php //if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php //if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?></option>-->
                                <?php foreach ($frecuencia as $dat_frecuencia):?>
                                <option value="<?php echo $dat_frecuencia['unidad_credito'] ?>"><?php echo $dat_frecuencia['unidad_credito'];?></option>
                          <?php endforeach;?>
                      </select>
                          </div>
                          <div class="form-group">
                            <label>Monto del crédito</label>
                            <input type="text" name="T1" id="T1" data-mask="currency" placeholder="$0" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Monto cuota pactado interes</label>
                            <input type="text" name="limite_cuota" value="0" id="limite_cuota" placeholder="Monto cuota pactado interes" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Tipo de Crédito</label>
                            <select name="tipo_credito" id="tipo_credito" class="form-control">
                                <!--<option value="<?php //if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php //if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?></option>-->
                                <?php foreach ($tipo_credito as $dat_credito):?>
                                <option value="<?php echo $dat_credito['TC'] ?>"><?php echo $dat_credito['TC'];?></option>
                          <?php endforeach;?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Divisa</label>
                            <select name="tipo_moneda" id="tipo_moneda" class="form-control">
                             <!--<option value="<?php //if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php //if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?></option>-->
                              <?php foreach ($tipo_divisa as $dat_divisa):?>
                                    <option value="<?php echo $dat_divisa['codigo'] ?>"><?php echo $dat_divisa['codigo'];?></option>
                              <?php endforeach;?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Monto de cuota pactado</label>
                            <input type="text" name="T2" id="T2" placeholder="Monto de cuota pactado" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="profile" class="tab-pane cont">
                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Fecha de inicio</label>
                            <input type="date" name="T3" id="T3" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Fecha de termino</label>
                            <input type="date" name="T4" id="T4" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Nombre del ejecutivo quien entrevisto</label>
                            <input type="text" name="T6" id="T6" placeholder="Nombre del ejecutivo quien entrevisto" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Fecha de la entrevista</label>
                            <input type="date" name="T7" id="T7" class="form-control">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Ingresos reportados (mensuales)</label>
                            <input type="text" name="T8" id="T8" placeholder="Ingresos reportados (mensuales)" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Otros ingresos reportados</label>
                            <input type="text" name="T9" id="T9" placeholder="Otros ingresos reportados" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Comentarios</label>
                            <textarea name="T10" id="T10" placeholder="Comentarios" class="form-control"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>              
              </div>            
            </div>
          </div>