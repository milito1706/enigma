 <div class="row">
  <div class="col-sm-6 col-md-12">
    <div class="col-sm-4">
      <div class="form-group">
        <label>Minimo</label>
        <input type="hidden" name="id" id="id" value="<?php if(isset($Id)){echo $Id;}?>">
        <input type="text" name="minimo" id="minimo" placeholder="Minimo" class="form-control" value="<?php if(isset($r_min)){echo $r_min;}?>">
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        <label>Maximo</label>
        <input type="text" name="maximo" id="maximo" placeholder="Maximo" class="form-control" value="<?php if(isset($r_max)){echo $r_max;}?>">
      </div>
    </div>
    <div class="col-sm-4">
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
</div>