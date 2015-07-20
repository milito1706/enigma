<form id="form-datos-generales">
<?php foreach ( $datos_generales as $datos_general):?>
 <div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="form-group">
      <label>Nombre o razón social</label>
      <input type="hidden" name="id" id="id" value="<?php echo $datos_general['id_acc'];?>">
      <input type="text" name="empresa" id="empresa" placeholder="Nombre" class="form-control" value="<?php echo $datos_general['empresa'];?>">      
    </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Clave CASFIM</label>
      <input type="text" name="enttidad_casfim" id="enttidad_casfim" placeholder="Clave CASFIM" class="form-control" value="<?php echo $datos_general['entidad_casfim'];?>">
    </div>
    <div class="form-group">
      <label>Dirección</label>
      <input type="text" name="direccion_completa" id="direccion_completa" placeholder="Dirección" class="form-control" value="<?php echo $datos_general['direccion_completa'];?>">
    </div>
    <div class="form-group">
      <label>Codigo Postal</label>
      <input type="text" name="cp" id="cp" placeholder="Codigo Postal" class="form-control" value="<?php echo $datos_general['cp'];?>">
    </div>    
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Oficial de cumplimiento</label>
      <input type="text" name="oficial_cumplimiento" id="oficial_cumplimiento" placeholder="Oficial de Cumplimiento" class="form-control" value="<?php echo $datos_general['name_operador'];?>">
    </div>
    <div class="form-group">
      <label>Email Oficial de cumplimiento</label>
      <input type="text" name="email" id="email" placeholder="Email Oficial de cumplimiento" class="form-control" value="<?php echo $datos_general['email'];?>">
    </div>
  </div>
</div>
<?php endforeach;?>
</form>