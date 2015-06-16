 <div class="row">
   <div class="col-sm-6 col-md-12">
    <div class="form-group">
      <label>Actividad Económica</label>
      <input type="hidden" name="id" id="id" value="<?php if(isset($Id)){echo $Id;}?>">
      <!--<input type="text" name="actividad_economica" id="actividad_economica" placeholder="Actividad Económica" class="form-control" value="<?php if(isset($actividad_economica)){echo $actividad_economica;}?>" readonly>-->
      <textarea name="actividad_economica" id="actividad_economica" class="form-control" readonly><?php if(isset($actividad_economica)){echo $actividad_economica;}?></textarea>
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