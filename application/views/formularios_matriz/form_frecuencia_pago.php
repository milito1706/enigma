 <div class="row">
      <input type="hidden" name="id" id="id" value="<?php if(isset($id)){echo $id;}?>">
  <div class="col-sm-6">
    <div class="form-group">
      <label>Frecuencia</label>
      <input type="text" name="unidad_credito" id="unidad_credito" placeholder="Frecuencia" class="form-control" value="<?php if(isset($unidad_credito)){echo $unidad_credito;}?>" required autofocus>
    </div> 
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Pagos</label>
      <input type="text" name="frecuencia_pago" id="frecuencia_pago" placeholder="Pagos" class="form-control" value="<?php if(isset($frecuencia_pago)){echo $frecuencia_pago;}?>" required>
    </div>
  </div>
</div>
<script>
  $( "input" ).on( "blur", function() {
        $( this ).val(function( i, val ) {
          return val.toUpperCase();
        });
    });
</script>