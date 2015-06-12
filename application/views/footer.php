<html>
<body>
    <script type="text/javascript" src="<?= base_url('assets/lib/jquery/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.js')?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/cleanzone.js')?>"></script>
    <script src="<?=base_url('assets/lib/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?=base_url('assets/js/voice-recognition.js')?>"></script>
    <script src="<?=base_url('assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.crop/js/jquery.Jcrop.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.sparkline/jquery.sparkline.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.upload/js/jquery.iframe-transport.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.upload/js/jquery.fileupload.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-profile.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.easypiechart/jquery.easypiechart.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.pie.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.flot/jquery.flot.resize.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-charts.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.datatables/js/jquery.dataTables.min.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/js/page-data-tables.js')?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/lib/jquery.niftymodals/js/jquery.modalEffects.js')?>" type="text/javascript"></script> 
    <script src="//cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript"> 
    $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables(12);
        App.pageProfile();
        App.charts();
        $('.md-trigger').modalEffects();
            ////////////eventos de expedientes///////////////
        $("#frminformacion").submit(function() {
              var formulario=$("#frminformacion").serializeArray();
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_Insert_formularios",
                    data: formulario,
        })
                //return false;
    });        
    $(document).on('click','#editar',function(){
        var id= $(this).attr('data-id');
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id=id);
        console.log(params.persona=persona);
        console.log(params.action=action);
        $('.modal-body').load('get_Formulario_update', params,function(){
         
        })  
    })
    $(document).on('click','#new',function() {
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        console.log(params.persona=persona);
        $('.modal-body').load('get_Formulario_nuevo', params,function(){
         
        }) 
      
    })
    $(document).on('click','#new_moral',function(){
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        console.log(params.persona=persona);
        $('.modal-body').load('get_Formulario_nuevo', params,function(){
         
        })  
    }) 
        ///////////////fin de eventos expedientes////////////////
        //////////////Eventos Clientes//////////////////////////
    $(document).on('click','#id_credito',function(){
        var id= $(this).attr('data-id');
        var url='mostrar_agrupacion_creditos?v='.concat(id);
        document.location=(url);
        }) 
    });

    $("#form-creditos").submit(function() {
              var formulario=$("#form-creditos").serializeArray();
              console.log('hola');
                $.ajax({
                type: "post",
                dataType: 'json',
                url: "get_Insert_credito",
                data: formulario,
        })
                //return false;
    });

     $(document).on('click','#editar_credito',function(){
        var id_credito= $(this).attr('data-id');
        params={};
        console.log(params.id_credito=id_credito);
        console.log(params.action=action);
        $('.modal-body').load('get_Formulariocredito_update', params,function(){
         
            })  
    })

    // Nuevo producto
    $(document).on('click','#new_producto',function(){        
        var action =$(this).attr('data-new');
        params={};        
        $('.modal-body').load('get_nuevo_producto', params,function() {
            console.log("nuevo producto");
        })  
    })
    $("#form-productos").submit(function() {
              var formulario_producto = $("#form-productos").serializeArray();
              console.log('Form Productos');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_Insert_Nuevo_Producto",
                    cache: false,
                    data: formulario_producto
                });
                return false;
    });

     $(document).on('click','#edit_producto',function() {
        var id = $(this).attr('data-id');       
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id = id);        
        console.log(params.action = action);
        $('#form-primary-productos .modal-body').load('get_update_producto', params,function(){
            console.log("editar" + " " + id);
        })
    })

    // Nuevo Tipo Persona
    $(document).on('click','#new_tipo_persona',function(){        
        var action =$(this).attr('data-new');
        params={};        
        $('.modal-body').load('get_nuevo_tipo_persona', params,function() {
            console.log("nuevo tipo persona");
        })  
    })

    $("#form-tipo-persona").submit(function() {
              var formulario_tipo_persona = $("#form-tipo-persona").serializeArray();
              console.log('Form tipo persona');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_tipo_persona",
                    cache: false,
                    data: formulario_tipo_persona
                });
                return false;
    });

    $(document).on('click','#editar_tipo_persona',function() {
        var id = $(this).attr('data-id');       
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id = id);        
        console.log(params.action = action);
        $('#form-primary-tipo-persona .modal-body').load('get_update_tipo_persona', params,function(){
            console.log("editar" + " " + id);
        })
    })

    // Nuevo Movimientos
    $(document).on('click','#new_movimiento',function(){        
        var action =$(this).attr('data-new');
        params={};        
        $('.modal-body').load('get_nuevo_movimiento', params,function() {
            console.log("nuevo movimiento");
        })  
    })

    $("#form-movimientos").submit(function() {
              var formulario_movimiento = $("#form-movimientos").serializeArray();
              console.log('Form movimiento');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_movimiento",
                    cache: false,
                    data: formulario_movimiento
                });
                return false;
    });

    $(document).on('click','#editar_movimiento',function() {
        var id = $(this).attr('data-id');       
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id = id);        
        console.log(params.action = action);
        $('#form-primary-movimiento .modal-body').load('get_update_movimiento', params,function(){
            console.log("editar" + " " + id);
        })
    })

    // Nuevo Frecuencia de Pagos
    $(document).on('click','#new_frecuencia_pago',function(){        
        var action =$(this).attr('data-new');
        params={};        
        $('.modal-body').load('get_nuevo_frecuencia_pago', params,function() {
            console.log("nuevo frecuencia pago");
        })  
    })

    $("#form-frecuencia-pago").submit(function() {
              var formulario_frecuencia_pago = $("#form-frecuencia-pago").serializeArray();
              console.log('Form frecuencia pago');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_frecuencia_pago",
                    cache: false,
                    data: formulario_frecuencia_pago
                });
                return false;
    });

    $(document).on('click','#editar_frecuencia_pago',function() {
        var id = $(this).attr('data-id');       
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id = id);        
        console.log(params.action = action);
        $('#form-primary-frecuencia-pago .modal-body').load('get_update_frecuencia_pago', params,function(){
            console.log("editar" + " " + id);
        })
    })

    // Nuevo Transaccionalidad
    $(document).on('click','#new_transaccionalidad',function(){        
        var action =$(this).attr('data-new');
        params={};        
        $('.modal-body').load('get_nuevo_transaccionalidad', params,function() {
            console.log("nuevo transaccionalidad");
        })  
    })

    $("#form-transaccionalidad").submit(function() {
              var formulario_transaccionalidad = $("#form-transaccionalidad").serializeArray();
              console.log('Form transaccionalidad');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_transaccionalidad",
                    cache: false,
                    data: formulario_transaccionalidad
                });
                return false;
    });

    $(document).on('click','#editar_transaccionalidad',function() {
        var id = $(this).attr('data-id');       
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id = id);        
        console.log(params.action = action);
        $('#form-primary-transaccionalidad .modal-body').load('get_update_transaccionalidad', params,function(){
            console.log("editar" + " " + id);
        })
    })
////////////////////////////////////////////////////////////////////////////////

$('.table').dataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Spanish.json"
        },
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
        "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "<?=base_url('assets/lib/jquery.datatables/extensions/tabletools')?>/swf/copy_csv_xls_pdf.swf"
        }
        
});
</script>

  </body>
</html>
