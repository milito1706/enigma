<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="col-sm-6 col-md-12">
      <div class="tab-container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Nombre del acreditado</a></li>
          <li><a href="#profile" data-toggle="tab">Domicilio</a></li>
          <li><a href="#messages" data-toggle="tab">Datos personales</a></li>
          <li><a href="#estructuraCorp" data-toggle="tab">Estructura corporativa</a></li>
          <li><a href="#documentos" data-toggle="tab">Documentos anexados</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active cont form-horizontal" id="home">
            <div class="row">
             <input type="hidden" name="id" id="id" value="<?php if(isset($Id)){echo$Id;}?>">
                <input type="hidden" name="T40" id="T40" value="NULL">
                <input type="hidden" name="R14" id="R14" value="NULL">
                <input type="hidden" name="T43" id="T43" value="NULL">
                <div class="col-md-6"> 
                <div class="form-group">
                    <label for="D1" class="col-md-4 control-label">Tipo de persona</label>
                    <div class="col-md-8">                        
                      <input type="text" class="form-control" name="tipo" id="tipo" value="<?php if(isset($tipo)){echo$tipo;}else{echo'MORAL';}?>"> 
                    </div> 
                    </div>                
                  <div class="form-group">
                    <label for="genero" class="col-sm-4 control-label">Pertenece a</label>
                    <div class="col-sm-8">                        
                     <label class="radio-inline"><input type="radio" name="R30" id='R30' onclick="check1(this.value)" value="EXTERNO" class="icheck" <?php if(isset($R30)){if($R30=="EXTERNO"){ echo 'checked="checked"';}}?>>EXTERNO&nbsp;&nbsp;</label>
                      <label class="radio-inline"><input type="radio" name="R30" id='R30' onclick="check1(this.value)" value="INTERNO" class="icheck" <?php if(isset($R30)){if($R30=="INTERNO"){ echo 'checked="checked"';}}?>>INTERNO</label>
                    </div>
                  </div>                  
                </div>
                <div class="col-md-6">                
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Nombre o Razón Social</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="T1" id="T1" placeholder="Nombre o Razón Social" value="<?php if(isset($nombre)){echo$nombre;}?>">
                    </div>
                  </div>                               
                </div>
            </div>
          </div>
          <div class="tab-pane cont form-horizontal" id="profile">
            <div class="row">
              
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="D1" class="col-md-4 control-label">Calle</label>
                    <div class="col-md-8">                        
                      <input name="T4" id="T4" size="72" type="text" class="form-control" value="<?php if(isset($T4)){echo$T4;}?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="genero" class="col-sm-4 control-label">No. exterior</label>
                    <div class="col-sm-8">                        
                      <input name="T5" id="T5" size="7" type="text" class="form-control" value="<?php if(isset($T5)){echo$T5;}?>">
                    </div>
                  </div>               
                  <div class="form-group">
                    <label for="genero" class="col-sm-4 control-label">No. interior</label>
                    <div class="col-sm-8">                        
                      <input name="T6" id="T6" size="7" type="text" class="form-control" value="<?php if(isset($T6)){echo$T6;};?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="T50" class="col-sm-4 control-label">Codigo Postal</label>
                    <div class="col-sm-8">                        
                      <input id="T8" name='T8' type="text" class="form-control" value="<?php if(isset($T8)){echo $T8;}?>">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">                  
                  <div class="form-group">
                    <div id='select_colonia'>
                        <label for="nombre" class="col-sm-4 control-label">Colonia</label>
                     <div class="col-sm-8">
                        <select  name='T7' id='T7' class="form-control">
                          <option value="<?php if(isset($T7)){echo $T7;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php if(isset($T7)){echo $T7;}else{echo 'Seleccione Opci&oacute;n';}?></option>  
                        </select>
                    </div>
                  </div>
                 </div>
                   <div id='entidad'><div class="form-group">
                    <label for="D1" class="col-md-4 control-label">Delegacion</label>
                    <div class="col-md-8">                        
                      <input name="T9" id="T9" size="72" type="text" class="form-control" value="<?php if(isset($T9)){echo $T9;}?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="D1" class="col-md-4 control-label">Ciudad</label>
                    <div class="col-md-8">                        
                      <input name="T10" id="T10" size="72" type="text" class="form-control" value="<?php if(isset($T10)){echo $T10;}?>">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="D1" class="col-md-4 control-label">Estado</label>
                    <div class="col-md-8">                        
                      <input name="T11" id="T11" size="72" type="text" class="form-control" value="<?php if(isset($T11)){echo $T11;}?>">
                    </div>
                  </div>
                  </div> 
                </div>
            </div>
          </div>
              <div class="tab-pane form-horizontal" id="messages">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="D1" class="col-md-4 control-label">Fecha de constitución</label>
                        <div class="col-md-8">                        
                          <input name="T12" id="T12" size="72" type="date" class="form-control" value="<?php if(isset($T12)){echo $T12;}?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="genero" class="col-sm-4 control-label">Nacionalidad</label>
                          <div class="col-sm-8">                        
                          <input id="T13" name="T13" size="7" type="text" class="form-control" value="<?php if(isset($T13)){echo $T13;} else { echo "MEXICANA"; } ?>">
                          </div>
                      </div>                    
                    <div class="form-group">
                        <label for="T50" class="col-sm-4 control-label">Actividad economica</label>
                        <div class="col-sm-8">                        
                          <select name='T16' id='T16' class="form-control">
                        <option value="<?php if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?></option>
                          <?php foreach ($actividad as $dat_actividad):?>
                        <option value="<?php echo $dat_actividad['actividad_economica'] ?>"><?php echo $dat_actividad['actividad_economica'];?></option>
                          <?php endforeach;?>
                      </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Teléfono</label>
                        <div class="col-sm-8">
                           <input id="T17" name="T17" type="text" class="form-control" value="<?php if(isset($T17)){echo $T17;}?>">
                        </div>
                      </div>
                  </div>
                    
                    <div class="col-md-6">                      
                    <div class="form-group">
                      <label for="genero" class="col-sm-4 control-label">Correo electrónico</label>
                      <div class="col-sm-8">                        
                        <input id="T18" name="T18" size="7" type="text" class="form-control" value="<?php if(isset($T18)){echo $T18;}?>">
                      </div>
                    </div>
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">RFC</label>
                        <div class="col-sm-8">
                          <input id="T19" name="T19" type="text" class="form-control" value="<?php if(isset($T19)){echo $T19;}?>">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">FEA/FIA</label>
                        <div class="col-sm-8">
                           <input id="T21" name="T21" type="text" class="form-control" value="<?php if(isset($T21)){echo $T21;}?>">
                        </div>
                      </div>                      
                    </div>           
              </div>
            </div>
            <div class="tab-pane form-horizontal" id="estructuraCorp">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Forma de administración de la sociedad</label>
                        <div class="col-sm-8">
                          <label class="radio-inline"> &nbsp;&nbsp;&nbsp;<input type="radio" name="R7" id="R7" onclick="check(this.value)" class="icheck" value="SI"<?php if(isset($R7)){if($R7=="SI"){ echo 'checked="checked"';}}?>>Administrador Único</label>
                          <label class="radio-inline"> <input type="radio" name="R7"  id="R7" onclick="check(this.value)" class="icheck" value="NO" <?php if(isset($R7)){if($R7=="NO"){ echo 'checked="checked"';}}?>>Consejo de Administración</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="genero" class="col-sm-4 control-label">Nombre de los socios Accionistas</label>
                          <div class="col-sm-8">                            
                            <textarea name="T41" id="T41" size="7" class="form-control"><?php if(isset($T41)){echo $T41;}?></textarea>
                            <span>Separados por coma(,)</span>
                          </div>
                      </div>                    
                    
                  </div>
                    
                    <div class="col-md-6">                      
                      <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">¿Alguno de los socios ha laborado en el gobierno en los últimos 4 años?</label>
                          <div class="col-sm-8">
                            <label class="radio-inline"> <input type="radio" name='R1' id="R1" onclick="check(this.value)" class="icheck" value="SI" <?php if(isset($R1)){if($R1== "SI"){ echo 'checked="checked"';}}?>> SI</label>
                            <label class="radio-inline"> <input type="radio" name='R1' id="R1" onclick="check(this.value)" class="icheck" value="NO" <?php if(isset($R1)){if($R1== "NO"){ echo 'checked="checked"';}}?>> NO</label>    
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="nombre" class="col-sm-4 control-label">Nombre(s)</label>
                          <div class="col-sm-8">
                           <input id="T42" name="T42" type="text" class="form-control" value="<?php if(isset($T42)){echo $T42;}?>">
                            <span>Separados por coma(,)</span>
                          </div>
                      </div>                                            
                    </div>           
              </div>
            </div>
              <div class="tab-pane form-horizontal" id="documentos">
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Identificación oficial</label>
                        <div class="col-sm-8">
                            <label class="radio-inline"> <input type="radio" name="R9"  id="R9" onclick="check(this.value)" class="icheck" value="SI" <?php if(isset($R9)){if($R9== "SI"){ echo 'checked="checked"';}}?>> SI</label>
                            <label class="radio-inline"> <input type="radio" name="R9"  id="R9" onclick="check(this.value)" class="icheck" value="NO" <?php if(isset($R9)){if($R9== "NO"){ echo 'checked="checked"';}}?>> NO</label>                        
                        </div>
                      </div>                
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">RFC</label>
                        <div class="col-sm-8">
                            <label class="radio-inline"> <input type="radio" name="R10" id="R10" onclick="check(this.value)" class="icheck" value="SI" <?php if(isset($R10)){if($R10== "SI"){ echo 'checked="checked"';}}?>> SI</label>
                            <label class="radio-inline"> <input type="radio" name="R10" id="R10" onclick="check(this.value)" class="icheck" value="NO" <?php if(isset($R10)){if($R10== "NO"){ echo 'checked="checked"';}}?>> NO</label>                         
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Comprobante de domicilio</label>
                        <div class="col-sm-8">
                            <label class="radio-inline"> <input type="radio" name="R11" id="R11" onclick="check(this.value)" class="icheck" value="SI" <?php if(isset($R11)){if($R11== "SI"){ echo 'checked="checked"';}}?>> SI</label>
                            <label class="radio-inline"> <input type="radio" name="R11" id="R11" onclick="check(this.value)" class="icheck" value="NO" <?php if(isset($R11)){if($R11== "NO"){ echo 'checked="checked"';}}?>> NO</label>                        
                        </div>
                      </div>
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Nombre del documento</label>
                        <div class="col-sm-8">
                          <input id="T35" name="T35" type="text" class="form-control" value="<?php if(isset($T35)){echo $T35;}?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Nombre del documento</label>
                        <div class="col-sm-8">
                          <input id="T36" name="T36" type="text" class="form-control" value="<?php if(isset($T36)){echo $T36;}?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nombre" class="col-sm-4 control-label">Nombre del documento</label>
                        <div class="col-sm-8">
                          <input id="T37" name="T37" type="text" class="form-control" value="<?php if(isset($T37)){echo $T37;}?>">
                        </div>
                      </div>
                    </div>
              </div>
              </div>
            </div>          
          </div>
      </div>
</div>
<script>
    $(document).ready(function(){
   $("#T8").change(function () {
           $("#T8 ").each(function () {
            console.log(cp=$(this).val());
            $.post("get_Formulario_colonia", { cp:cp}, function(data){
            $("#select_colonia").html(data);
            });             
        });
   })
});
$( "input" ).on( "blur", function() {
  $( this ).val(function( i, val ) {
    return val.toUpperCase();
  });
});
</script>