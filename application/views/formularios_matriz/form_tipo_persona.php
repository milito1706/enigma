 <div class="row">  
  <div class="col-sm-6">
    <div class="form-group">
      <label>Tipo de Persona</label>
      <input type="text" name="T1" id="T1" placeholder="Tipo de Persona" class="form-control" value="<?php if(isset($etiqueta)){echo $etiqueta;}?>">
      <input type="hidden" name="id" id="id" value="<?php if(isset($Id)){echo $Id;}?>">
    </div>    
  </div>
  <div class="col-sm-6">
    <div class="form-group">
      <label>Calificación</label>
      <select name="T2" id="T2" class="form-control">
        <option value=""></option>
        <option value="1" <?php if (isset($codigo) && !empty($codigo == 1) ) echo 'selected="selected"'; ?> > 1 </option>
        <option value="2" <?php if (isset($codigo) && !empty($codigo == 2) ) echo 'selected="selected"'; ?> > 2 </option>
        <option value="3" <?php if (isset($codigo) && !empty($codigo == 3) ) echo 'selected="selected"'; ?> > 3 </option>
      </select>
    </div>
  </div>
</div>