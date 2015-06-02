<html>
	<body>
		<label for="nombre" class="col-sm-4 control-label">Colonia</label>
        <div class="col-sm-8">
           <select name="T7"  id='T7' class="form-control">
                <option value="0">Seleccione Opci&oacute;n</option>
                    <?php foreach ($colonia as $dat):?>
                    <option value="<?php echo $dat['Id'] ?>"><?php echo $dat['d_asenta'];?></option>
                    <?php endforeach;?>
			</select>
        </div>
    </body>    
</html>
<script>
$(document).ready(function(){
        $("#T7").change(function(){
      var id_entidad = $("#T7 option:selected").val();
      console.log(id_entidad);
    $.post("get_Formulario_entidad", { id_entidad: id_entidad}, function(data){
    $("#entidad").html(data);
        });            
     });
});
</script>



