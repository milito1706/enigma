 <div class="row">  
  <div class="col-sm-6">
    <div class="form-group">
      <label>Frecuencia</label>
      <input type="hidden" name="id" id="id" value="<?php if(isset($id)){echo $id;}?>">
      <input type="text" name="unidad_credito" id="unidad_credito" placeholder="Frecuencia" class="form-control" value="<?php if(isset($unidad_credito)){echo $unidad_credito;}?>">
    </div>    
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Pagos</label>
      <input type="text" name="frecuencia_pago" id="frecuencia_pago" placeholder="Pagos" class="form-control" value="<?php if(isset($frecuencia_pago)){echo $frecuencia_pago;}?>">
    </div>
  </div>
</div>