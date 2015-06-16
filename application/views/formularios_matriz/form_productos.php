 <div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="form-group">
      <label>Nombre</label>
      <input type="hidden" name="id" id="id" value="<?php if(isset($Id)){echo $Id;}?>">
      <input type="text" name="T1" id="T1" placeholder="Nombre" class="form-control" value="<?php if(isset($Nombre_Producto)){echo $Nombre_Producto;}?>">
      <input type="hidden" name="tiempo_liquidacion" id="tiempo_liquidacion" class="form-control">
      <input type="hidden" name="id_entidad" id="id_entidad" class="form-control" value="1000">
      <input type="hidden" name="id_operador" id="id_operador" class="form-control" value="1000">
      <input type="hidden" name="fecha_alta" id="fecha_alta" class="form-control" value="2015-06-10">
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Tolerancia de Cuota</label>
      <input type="text" name="T2" id="T2" data-mask="currency" placeholder="Tolerancia de Cuota" class="form-control" value="<?php if(isset($tolerancia_cuota)){echo $tolerancia_cuota;}?>">
    </div>
    <div class="form-group">
      <label>Tolerancia de Cuota interes</label>
      <input type="text" name="T5" id="T5" placeholder="Tolerancia de Cuota interes" class="form-control" value="<?php if(isset($tolerancia_cuota_interes)){echo $tolerancia_cuota_interes;}?>">
    </div>
    <div class="form-group">
      <label>Min Plazo de credito en meses</label>
      <input type="text" name="T4" id="T4" placeholder="Min Plazo de credito en meses" class="form-control" value="<?php if(isset($min_tiempo)){echo $min_tiempo;}?>">
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Min Monto del credito</label>
      <input type="text" name="T3" id="T3" placeholder="Min Monto del credito" class="form-control" value="<?php if(isset($min_monto)){echo $min_monto;}?>">
    </div>

    <div class="form-group">
      <label>Max Monto de credito</label>
      <input type="text" name="T6" id="T6" placeholder="Max Monto de credito" class="form-control" value="<?php if(isset($max_monto)){echo $max_monto;}?>">
    </div>
    <div class="form-group">
      <label>Max Plazo de credito en meses</label>
      <input type="text" name="T7" id="T7" placeholder="Max Plazo de credito en meses" class="form-control" value="<?php if(isset($max_tiempo)){echo $max_tiempo;}?>">
    </div>
  </div>
</div>