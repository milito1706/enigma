 <div class="row">  
  <div class="col-sm-6">
    <div class="form-group">
      <label>Movimiento</label>
      <input type="text" name="etiqueta" id="etiqueta" placeholder="Movimiento" class="form-control" value="<?php if(isset($etiqueta)){echo $etiqueta;}?>">
      <input type="hidden" name="id" id="id" value="<?php if(isset($Id)){echo $Id;}?>">
    </div>    
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Calificación</label>
      <select name="calificacion" id="calificacion" class="form-control">
        <option value=""></option>
        <option value="1" <?php if (isset($calificacion) && !empty($calificacion == 1) ) echo 'selected="selected"'; ?> > 1 </option>
        <option value="2" <?php if (isset($calificacion) && !empty($calificacion == 2) ) echo 'selected="selected"'; ?> > 2 </option>
        <option value="3" <?php if (isset($calificacion) && !empty($calificacion == 3) ) echo 'selected="selected"'; ?> > 3 </option>
      </select>
    </div>
  </div>
</div>