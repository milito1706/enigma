$(document).on("ready", function() {
    //initialize the javascript
    App.init();
    App.dataTables(12);
    App.uiNotifications();
    App.charts();
    $('.md-trigger').modalEffects();
    
    // Datos Generales
    $('#datos-generales').on('click', function() {        
        var action =$(this).attr('data-new');
        params={};
        console.log(params.action = action);
        $('#mb-datos-generales').load('get_datos_generales', params, function() {
            console.log("Datos Generales")
        }) 
    });
    // Guardar Datos Generales
    $("#form-datos-generales").on("submit", function(e) {
        e.preventDefault();
        var formulario_datos_generales = $("#form-datos-generales").serializeArray();
        console.log('Form Datos Generales activado');
        $.ajax({
            type: "post",
            dataType: 'json',
            url: "get_insert_datos_generales",
            data: formulario_datos_generales,
            success: function(response) {
                if(response.respuesta == true){
                    alert("Datos guardados correctamente");
                } else {
                    alert("Hubo un error al guardar, intenta mas tarde.");
                }
            },
            error: function() {
                console.log('Hubo un error al guardar, intenta mas tarde.!');
            },
            complete: function() {
                console.log("Ajax realizado complete");
            }  
        });

    });
    ////////////eventos de expedientes///////////////
    $("#frminformacion").submit(function(e) {
        e.preventDefault();
        var formulario = $("#frminformacion").serializeArray();
        $.ajax({
            type: "post",
            dataType: 'json',
            url: "get_Insert_formularios",
            data: formulario,
            succes: function() {
                alert("Envio completado");
            },
            error: function(jqxhr, status, error) {
                console.log(error);
            },
            complete: function() {
                console.log("frminformacion complete.");
            }
        });
            //return false;
        });        
    $(document).on('click','#editar', function() {
        var id= $(this).attr('data-id');
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-edit');
        params={};
        console.log(params.id=id);
        console.log(params.persona=persona);
        console.log(params.action=action);
        $('.modal-body').load('get_Formulario_update', params,function() {
        });  
    });
    $(document).on('click','#new',function() {
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        console.log(params.persona=persona);
        $('.modal-body').load('get_Formulario_nuevo', params,function(){

        }); 

    });
    $(document).on('click','#new_moral',function(){
        var persona=$(this).attr('data-persona');
        var action =$(this).attr('data-new');
        params={};
        console.log(params.persona=persona);
        $('.modal-body').load('get_Formulario_nuevo', params,function(){

        });
    });

            ///////////////fin de eventos expedientes////////////////
            //////////////Eventos Clientes//////////////////////////
            $(document).on('click','#id_credito',function(){
                var id= $(this).attr('data-id');
                var url='mostrar_agrupacion_creditos?v='.concat(id);
                document.location=(url);
            }); 


            $("#form-creditos").submit(function(e) {
                e.preventDefault();
                var formulario=$("#form-creditos").serializeArray();
                console.log('hola');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_Insert_credito",
                    data: formulario,
                });
                //return false;
            });

            $(document).on('click','#editar_credito',function(){
                var id_credito= $(this).attr('data-id');
                params={};
                console.log(params.id_credito=id_credito);
                console.log(params.action=action);
                $('.modal-body').load('get_Formulariocredito_update', params,function(){

                })  
            });
            
            


            // Nuevo producto
            $(document).on("click",'#new_producto', function() {        
                var action = $(this).attr('data-new');
                params = {};        
                $('#form-primary-productos #mb-nuevo-producto').load('get_nuevo_producto', params, function() {
                    console.log("Nuevo producto");
                })
            });
            $("#form-productos").submit(function(e) {
                e.preventDefault();
                var formulario_producto = $("#form-productos").serializeArray();
                console.log('Form Productos');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_Insert_Nuevo_Producto",
                    data: formulario_producto
                });
            //return false;
        });

            $(document).on("click",'#edit_producto', function() {
                var id = $(this).attr('data-id');
                var action =$(this).attr('data-edit');
                params={};
                console.log(params.id = id);
                console.log(params.action = action);
                $('#mb-nuevo-producto').load('get_update_producto', params, function(){
                    console.log("editar" + " " + id);
                })
            });

            // Nuevo Tipo Persona
            $(document).on('click','#new_tipo_persona',function(){        
                var action =$(this).attr('data-new');
                params={};        
                $('.modal-body').load('get_nuevo_tipo_persona', params,function() {
                    console.log("nuevo tipo persona");
                });  
            });

            $("#form-tipo-persona").submit(function(e) {
                e.preventDefault();
                var formulario_tipo_persona = $("#form-tipo-persona").serializeArray();
                console.log('Form tipo persona');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_tipo_persona",
                    data: formulario_tipo_persona
                });
            //return false;
        });

            $(document).on('click','#editar_tipo_persona',function() {
                var id = $(this).attr('data-id');       
                var action =$(this).attr('data-edit');
                params={};
                console.log(params.id = id);        
                console.log(params.action = action);
                $('#form-primary-tipo-persona .modal-body').load('get_update_tipo_persona', params,function(){
                    console.log("editar" + " " + id);
                });
            });

            // Nuevo Movimientos
            $(document).on('click','#new_movimiento',function(){        
                var action =$(this).attr('data-new');
                params={};        
                $('.modal-body').load('get_nuevo_movimiento', params,function() {
                    console.log("nuevo movimiento");
                }); 
            });

            $("#form-movimientos").submit(function(e) {
                e.preventDefault();
                var formulario_movimiento = $("#form-movimientos").serializeArray();
                console.log('Form movimiento');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_movimiento",
                    data: formulario_movimiento
                });
            //return false;
        });

            $(document).on('click','#editar_movimiento',function() {
                var id = $(this).attr('data-id');       
                var action =$(this).attr('data-edit');
                params={};
                console.log(params.id = id);        
                console.log(params.action = action);
                $('#form-primary-movimiento .modal-body').load('get_update_movimiento', params,function(){
                    console.log("editar" + " " + id);
                });
            });

            // Nuevo Frecuencia de Pagos
            $(document).on('click','#new_frecuencia_pago',function() {       
                var action =$(this).attr('data-new');
                params={};        
                $('.modal-body').load('get_nuevo_frecuencia_pago', params,function() {
                    console.log("nuevo frecuencia pago");
                });

            });

            $("#form-frecuencia-pago").submit(function(e) {
                e.preventDefault();
                var formulario_frecuencia_pago = $("#form-frecuencia-pago").serializeArray();
                console.log('Form frecuencia pago');

                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_frecuencia_pago",
                    data: formulario_frecuencia_pago,
                    success: function(response) {
                    // Validar mensaje de error
                    if(response.respuesta == false)
                    {
                        //alert(response.mensaje);
                        $.gritter.add({
                            title: 'Error!',
                            text: response.mensaje,
                            class_name: 'danger'
                          });
                    }
                    else 
                    {
                        $('#listaFrecuneciaPagos').append(response.contenido);
                        //alert(response.mensaje);
                        $.gritter.add({
                            title: 'Completado!',
                            text: response.mensaje,
                            class_name: 'success'
                        });                  
                    }
                },
                error:function(){
                    alert('Error general del sistema, intente mas tarde.');
                } 
            });

            //return false;
        });

$(document).on('click','#editar_frecuencia_pago',function() {
    var id = $(this).attr('data-id');       
    var action =$(this).attr('data-edit');        
    params={};
    console.log(params.id = id);        
    console.log(params.action = action);
    $('#form-primary-frecuencia-pago #modal-body-frecuencia').load('get_update_frecuencia_pago', params,function(){
        console.log("editar" + " " + id);
    });

});

            // Nuevo Transaccionalidad
            $(document).on('click','#new_transaccionalidad',function(){        
                var action =$(this).attr('data-new');
                params={};        
                $('.modal-body').load('get_nuevo_transaccionalidad', params,function() {
                    console.log("nuevo transaccionalidad");
                });  
            });

            $("#form-transaccionalidad").submit(function(e) {
                e.preventDefault();
                var formulario_transaccionalidad = $("#form-transaccionalidad").serializeArray();
                console.log('Form transaccionalidad');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_transaccionalidad",        
                    data: formulario_transaccionalidad
                });
            //return false;
        });

            $(document).on('click','#editar_transaccionalidad',function() {
                var id = $(this).attr('data-id');       
                var action =$(this).attr('data-edit');
                params={};
                console.log(params.id = id);        
                console.log(params.action = action);
                $('#form-primary-transaccionalidad .modal-body').load('get_update_transaccionalidad', params,function(){
                    console.log("editar" + " " + id);
                });
            });

            // Nuevo No personas
            $(document).on('click','#new_nopersonas',function(){        
                var action =$(this).attr('data-new');
                params={};        
                $('.modal-body').load('get_nuevo_nopersonas', params,function() {
                    console.log("nuevo nopersonas");
                });  
            });

            $("#form-nopersonas").submit(function(e) {
                e.preventDefault();
                var formulario_nopersonas = $("#form-nopersonas").serializeArray();
                console.log('Form nopersonas');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_nopersonas",
                    cache: false,
                    data: formulario_nopersonas
                });
            //return false;
        });

            $(document).on('click','#editar_nopersonas',function() {
                var id = $(this).attr('data-id');       
                var action =$(this).attr('data-edit');
                params={};
                console.log(params.id = id);        
                console.log(params.action = action);
                $('#form-primary-nopersonas .modal-body').load('get_update_nopersonas', params,function(){
                    console.log("editar" + " " + id);
                });
            });

            // Nuevo Actividad
            $(document).on('click','#new_actividad',function(){        
                var action =$(this).attr('data-new');
                params={};        
                $('.modal-body').load('get_nuevo_actividad', params,function() {
                    console.log("nuevo actividad");
                }); 
            });

            $("#form-actividad").submit(function(e) {
                e.preventDefault();
                var formulario_actividad = $("#form-actividad").serializeArray();
                console.log('Form actividad');
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "get_insert_actividad",
                    cache: false,
                    data: formulario_actividad
                });
            //return false;
        });

            $(document).on('click','#editar_actividad',function() {
                var id = $(this).attr('data-id');       
                var action =$(this).attr('data-edit');
                params={};
                console.log(params.id = id);        
                console.log(params.action = action);
                $('#form-primary-actividad .modal-body').load('get_update_actividad', params,function(){
                    console.log("editar" + " " + id);
                });
            });

}); // Fin ready
$('#tabla-productos').dataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Spanish.json"
    },
    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
        "sSwfPath": "//cdn.datatables.net/tabletools/2.2.0/swf/copy_csv_xls_pdf.swf"
    }

});
$('#datatable-frecuencia').dataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.7/i18n/Spanish.json"
    },
    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
        "sSwfPath": "//cdn.datatables.net/tabletools/2.2.0/swf/copy_csv_xls_pdf.swf"
    }

});


