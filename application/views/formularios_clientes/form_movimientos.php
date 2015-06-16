  <div class="row">

              <div class="col-sm-6">
                <div class="form-group">
                  <label>No Crédito</label>
                  <input type="text" placeholder="No Crédito" class="form-control" name="no_credito" id="no_credito" value="<?= $credito;?>" readonly>
                </div>
                <div class="form-group">
                  <label>Origen de Pago</label>
                  <select name="origen_pago" id="origen_pago" class="form-control">
                  <option value="<?php if(isset($origen_pago)){echo $origen_pago;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php if(isset($origen_pago)){echo $origen_pago;}else{echo 'Seleccione Opci&oacute;n';}?></option>
                              <?php foreach ($torigen as $dat_origen):?>
                                    <option value="<?php echo $dat_origen['etiqueta'] ?>"><?php echo $dat_origen['etiqueta'];?></option>
                              <?php endforeach;?>  
                  </select>
                </div>
                <div class="form-group">
                  <label>Tipo de Cargo</label>
                  <select name="tipo_cargo" id="tipo_cargo" class="form-control">
                    <option value="<?php if(isset($tipo_cargo)){echo $tipo_cargo;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php if(isset($tipo_cargo)){echo $tipo_cargo;}else{echo 'Seleccione Opci&oacute;n';}?></option>
                              <?php foreach ($tcargo as $dat_tcargo):?>
                                    <option value="<?php echo $dat_tcargo['etiqueta'] ?>"><?php echo $dat_tcargo['etiqueta'];?></option>
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
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Monto pagado</label>
                  <input type="text" name="T1" id="T1" placeholder="Monto pagado" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fecha de Movimineto</label>
                  <input type="date" name="T2" id="T2" class="form-control">
                </div>
                <div class="form-group">
                  <label>Comentarios</label>
                  <textarea name="T3" id="T3" class="form-control"></textarea>
</div>
