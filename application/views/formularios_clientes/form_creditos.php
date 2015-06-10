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
                            <input type="hidden" name="Id" id="Id" value="<?php if(isset($id_credito)){echo $id_credito;}?>">
                            <input type="text" name="no_credito" id="no_credito" placeholder="No Crédito" class="form-control" value="<?php if(isset($no_credito)){echo$no_credito;}?>">
                          </div>
                          <div class="form-group">
                            <label>Frecuancia de pago</label>
                            <select name="unidad_credito" id="unidad_credito" class="form-control">
                                <option value="<?php if(isset($unidad_credit)){echo $unidad_credit;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php  if(isset($unidad_credit)){echo $unidad_credit;}else{echo 'Seleccione Opci&oacute;n';}?></option>
                                <?php foreach ($frecuencia as $dat_frecuencia):?>
                                <option value="<?php echo $dat_frecuencia['unidad_credito'] ?>"><?php echo $dat_frecuencia['unidad_credito'];?></option>
                          <?php endforeach;?>
                      </select>
                          </div>
                          <div class="form-group">
                            <label>Monto del crédito</label>
                            <input type="text" name="T1" id="T1" data-mask="currency"  class="form-control"  value="<?php if(isset($T1)){echo$T1;}?>">
                          </div>
                          <div class="form-group">
                            <label>Monto cuota pactado interes</label>
                            <input type="text" name="limite_cuota" id="limite_cuota" placeholder="Monto cuota pactado interes" class="form-control" value="<?php if(isset($limite)){echo $limite;}?>">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Tipo de Crédito</label>
                            <select name="tipo_credito" id="tipo_credito" class="form-control">
                                <option value="<?php if(isset($tipo_credit)){echo $tipo_credit;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php if(isset($tipo_credit)){echo $tipo_credit;}else{echo 'Seleccione Opci&oacute;n';}?></option>
                                <?php foreach ($tipo_credito as $dat_credito):?>
                                <option value="<?php echo $dat_credito['TC'] ?>"><?php echo $dat_credito['TC'];?></option>
                          <?php endforeach;?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Divisa</label>
                            <select name="tipo_moneda" id="tipo_moneda" class="form-control">
                             <option value="<?php if(isset($tipo_mone)){echo $tipo_mone;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php if(isset($tipo_mone)){echo $tipo_mone;}else{echo 'Seleccione Opci&oacute;n';}?></option>
                              <?php foreach ($tipo_divisa as $dat_divisa):?>
                                    <option value="<?php echo $dat_divisa['codigo'] ?>"><?php echo $dat_divisa['codigo'];?></option>
                              <?php endforeach;?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Monto de cuota pactado</label>
                            <input type="text" name="T2" id="T2" placeholder="Monto de cuota pactado" class="form-control" value="<?php if(isset($T2)){echo$T2;}?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="profile" class="tab-pane cont">
                      <div class="row">

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Fecha de inicio</label>
                            <input type="date" name="T3" id="T3" class="form-control" value="<?php if(isset($T3)){echo$T3;}?>">
                          </div>
                          <div class="form-group">
                            <label>Fecha de termino</label>
                            <input type="date" name="T4" id="T4" class="form-control"  value="<?php if(isset($T4)){echo$T4;}?>">
                          </div>
                          <div class="form-group">
                            <label>Nombre del ejecutivo quien entrevisto</label>
                            <input type="text" name="T6" id="T6" placeholder="Nombre del ejecutivo quien entrevisto" class="form-control"  value="<?php if(isset($T6)){echo$T6;}?>">
                          </div>
                          <div class="form-group">
                            <label>Fecha de la entrevista</label>
                            <input type="date" name="T7" id="T7" class="form-control" value="<?php if(isset($T7)){echo$T7;}?>">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Ingresos reportados (mensuales)</label>
                            <input type="text" name="T8" id="T8" placeholder="Ingresos reportados (mensuales)" class="form-control" value="<?php if(isset($T8)){echo$T8;}?>">
                          </div>
                          <div class="form-group">
                            <label>Otros ingresos reportados</label>
                            <input type="text" name="T9" id="T9" placeholder="Otros ingresos reportados" class="form-control" value="<?php if(isset($T9)){echo$T9;}?>">
                          </div>
                          <div class="form-group">
                            <label>Comentarios</label>
                            <textarea name="T10" id="T10" placeholder="Comentarios" class="form-control"><?php if(isset($T10)){echo$T10;}?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>              
              </div>            
            </div>
          </div>