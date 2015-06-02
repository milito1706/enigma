<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="col-sm-6 col-md-12">
      <div class="tab-container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#home" data-toggle="tab">Nombre del acreditado</a></li>
          <li><a href="#profile" data-toggle="tab">Domicilio</a></li>
          <li><a href="#messages" data-toggle="tab">Datos personales</a></li>
          <li><a href="#actividad" data-toggle="tab">Actividad</a></li>                  
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
                      <input type="text" class="form-control" name="tipo" id="tipo" value="<?php if(isset($tipo)){echo$tipo;}else{echo'FISICA';}?>"> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="genero" class="col-sm-4 control-label">Pertenece a</label>
                    <div class="col-sm-8">                        
                      <label class="radio-inline"><input type="radio" name="R30" id='R30' onclick="check1(this.value)" value="EXTERNO" class="icheck" <?php if(isset($R30)){if($R30=="EXTERNO"){ echo 'checked="checked"';}}?>>EXTERNO&nbsp;&nbsp;</label>
                      <label class="radio-inline"><input type="radio" name="R30" id='R30' onclick="check1(this.value)" value="INTERNO" class="icheck" <?php if(isset($R30)){if($R30=="INTERNO"){ echo 'checked="checked"';}}?>>INTERNO</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="genero" class="col-sm-4 control-label">Género</label>
                    <div class="col-sm-8">                        
                      <label class="radio-inline"><input type="radio" name="GENERO" id='GENERO' onclick="check(this.value)" value="FEMENINO" class="icheck" <?php if(isset($GENERO)){if($GENERO=="FEMENINO"){ echo 'checked="checked"';}}?>>FEMENINO</label>
                      <label class="radio-inline"><input type="radio" name="GENERO" id='GENERO' onclick="check(this.value)" value="MASCULINO" class="icheck" <?php if(isset($GENERO)){if($GENERO=="MASCULINO"){ echo 'checked="checked"';}}?>>MASCULINO&nbsp;</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">                
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Nombre(s)</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="T1" id="T1"  placeholder="Nombre(s)" value="<?php if(isset($nombre)){echo$nombre;}?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Apellido Paterno</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="T2"  id="T2" placeholder="Apellido Paterno" value="<?php if(isset($T2)){echo$T2;}?>">
                    </div>
                  </div>               
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Apellido Materno</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="T3"  id="T3" placeholder="Apellido Materno" value="<?php if(isset($T3)){echo$T3;}?>">
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
                    <label for="D1" class="col-md-4 control-label">Fecha de nacimiento</label>
                    <div class="col-md-8">                        
                      <input id="T12" name="T12" size="72" type="date" class="form-control" value="<?php if(isset($T12)){echo $T12;}?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="genero" class="col-sm-4 control-label">Nacionalidad</label>
                    <div class="col-sm-8">                        
                      <input id="T13" name="T13" size="7" type="text" class="form-control" value="<?php if(isset($T13)){echo $T13;} else { echo "MEXICANA"; } ?>">
                    </div>
                  </div>               
                  <div class="form-group">
                    <label for="genero" class="col-sm-4 control-label">Pais de nacimiento</label>
                    <div class="col-sm-8">                        
                      <input id="T14" name="T14" size="7" type="text" class="form-control" value="<?php if(isset($T14)){echo $T14;}  else { echo "MÉXICO"; }?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Ocupación/Profesión</label>
                    <div class="col-sm-8">
                      <input id="T15" name="T15" type="text" class="form-control" value="<?php if(isset($T15)){echo $T15;}?>">
                    </div>
                  </div>                  
                </div>

                <div class="col-md-6">                      
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Teléfono</label>
                    <div class="col-sm-8">
                      <input id="T17" name="T17" type="text" class="form-control" value="<?php if(isset($T17)){echo $T17;}?>">
                    </div>
                  </div>
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
                    <label for="nombre" class="col-sm-4 control-label">CURP</label>
                    <div class="col-sm-8">
                      <input id="T52" name="T52" type="text" class="form-control" value="<?php if(isset($T52)){echo $T52;}?>">
                    </div>
                  </div>                  
                </div>           
              
            </div>
          </div>
          <div class="tab-pane form-horizontal" id="actividad">
            <div class="row">
              
                <div class="col-md-6">                  
                  <div class="form-group">
                    <label for="T50" class="col-sm-4 control-label">Actividad economica</label>
                    <div class="col-sm-8">                        
                      <select  id='T16' name='T16' class="form-control">
                        <option value="<?php if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?>"><?php if(isset($T16)){echo $T16;}else{echo 'Seleccione Opci&oacute;n';}?></option>
                          <?php foreach ($actividad as $dat_actividad):?>
                        <option value="<?php echo $dat_actividad['actividad_economica'] ?>"><?php echo $dat_actividad['actividad_economica'];?></option>
                          <?php endforeach;?>
                      </select>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Origen de los recursos</label>
                    <div class="col-sm-8">
                      <input id="T20" name="T20" type="text" class="form-control" value="<?php if(isset($T20)){echo $T20;}?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">FEA/FIA</label>
                    <div class="col-sm-8">
                      <input id="T21" name="T21" type="text" class="form-control" value="<?php if(isset($T21)){echo $T21;}?>">
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Puesto en el gobierno</label>
                    <div class="col-sm-8">
                      <label class="radio-inline"> <input type="radio" name='R1' id="R1" onclick="check(this.value)" value="SI"  class="icheck" <?php if(isset($R1)){if($R1== "SI"){ echo 'checked="checked"';}}?>> SI</label>
                      <label class="radio-inline"> <input type="radio" name='R1' id="R1" onclick="check(this.value)" value="NO"  class="icheck" <?php if(isset($R1)){if($R1== "NO"){ echo 'checked="checked"';}}?>> NO</label>
                    </div>
                  </div>                    
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Describa el puesto</label>
                    <div class="col-sm-8">
                      <input id="T22" name="T22" type="text" class="form-control" value="<?php if(isset($T22)){echo $T22;}?>">
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
                      <label class="radio-inline"> <input type="radio" name="R2"  id="R2" onclick="check(this.value)" value="SI" class="icheck" <?php if(isset($R2)){if($R2== "SI"){ echo 'checked="checked"';}}?>> SI</label>
                      <label class="radio-inline"> <input type="radio" name="R2"  id="R2" onclick="check(this.value)" value="NO" class="icheck" <?php if(isset($R2)){if($R2== "NO"){ echo 'checked="checked"';}}?>> NO</label>          
                    </div>
                  </div>                
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">CURP/RFC</label>
                    <div class="col-sm-8">
                      <label class="radio-inline"> <input type="radio" name="R3" id="R3" onclick="check(this.value)" value="SI" class="icheck" <?php if(isset($R3)){if($R3== "SI"){ echo 'checked="checked"';}}?>>SI</label>
                      <label class="radio-inline"> <input type="radio" name='R3' id="R3" onclick="check
                      (this.value)" value="NO" class="icheck" <?php if(isset($R3)){if($R3== "NO"){ echo 'checked="checked"';}}?>>NO</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Comprobante de domicilio</label>
                    <div class="col-sm-8">
                      <label class="radio-inline"> <input type="radio" name='R4' id="R4" onclick="check3(this.value)" value="SI" class="icheck" <?php if(isset($R4)){if($R4== "SI"){ echo 'checked="checked"';}}?>> SI</label>
                      <label class="radio-inline"> <input type="radio" name='R4' id="R4" onclick="check3(this.value)" value="NO" class="icheck" <?php if(isset($R4)){if($R4== "NO"){ echo 'checked="checked"';}}?>> NO</label>                   
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Nombre del documento</label>
                    <div class="col-sm-8">
                      <input name="T35"  id="T35" type="text" class="form-control" value="<?php if(isset($T35)){echo $T35;}?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="nombre" class="col-sm-4 control-label">Nombre del documento</label>
                    <div class="col-sm-8">
                      <input name="T36"  id="T36" type="text" class="form-control" value="<?php if(isset($T36)){echo $T36;}?>">
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
            cp=$(this).val();
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