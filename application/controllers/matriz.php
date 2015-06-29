<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matriz extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->model('matriz_model');        
    }    
    
    /*  
     * Mostrar Grid Productos
     */
    public function mostrar_productos() {
        $listadoProductos = $this->matriz_model->get_Productos();
        $data = array(
            'productos' => $listadoProductos
        );        
        
        $this->load->view('header');
        $this->load->view('matriz_riesgo/pagina_productos', $data);
        $this->load->view('footer');

    }

    /*  
     * Mostrar Grid Frecuencia de Pagos
     */
    public function mostrar_frecuencia_pagos() {
        $listadoFrecuenciaPagos = $this->matriz_model->get_FrecuenciaPagos();
        $data = array(            
            'frecuencia_pagos' => $listadoFrecuenciaPagos
        );        
        
        $this->load->view('header');
        $this->load->view('matriz_riesgo/pagina_frecuencia_pagos', $data);
        $this->load->view('footer');

    }

    /*  
     * Mostrar Grid Transaccionalidad
     */
    public function mostrar_transaccionalidad() {
        $listadoTransaccionalidad = $this->matriz_model->get_Transaccionalidad();
        $data = array(            
            'transaccionalidad' => $listadoTransaccionalidad
        );        
        
        $this->load->view('header');
        $this->load->view('matriz_riesgo/pagina_transaccionalidad', $data);
        $this->load->view('footer');

    }


    /*  
     * Mostrar Grid Actividad Economica
     */
    public function mostrar_actividad() {
        $listadoActividad = $this->matriz_model->get_Actividad();
        $data = array(            
            'actividades' => $listadoActividad,
        );        
        
        $this->load->view('header');
        $this->load->view('matriz_riesgo/pagina_actividad', $data);
        $this->load->view('footer');

    }

    /*  
     * Mostrar Grid Tipo de Persona
     */
    public function mostrar_tipo_persona() {
        $listadoTipoPersona = $this->matriz_model->get_TipoPersona();
        $data = array(            
            'tipo_personas' => $listadoTipoPersona
        );        
        
        $this->load->view('header');
        $this->load->view('matriz_riesgo/pagina_tipo_persona', $data);
        $this->load->view('footer');

    }

    /*  
     * Mostrar Grid Numero de Personas
     */
    public function mostrar_numero_personas() {
        $listadoNpersonas = $this->matriz_model->get_Npersonas();
        $data = array(            
            'num_personas' => $listadoNpersonas
        );        
        
        $this->load->view('header');
        $this->load->view('matriz_riesgo/pagina_numero_personas', $data);
        $this->load->view('footer');

    }

    /*  
     * Mostrar Grid Movimientos
     */
    public function mostrar_movimientos() {
        $listadoMovimientos = $this->matriz_model->get_Movimientos();
        $data = array(            
            'movimientos' => $listadoMovimientos
        );        
        
        $this->load->view('header');
        $this->load->view('matriz_riesgo/pagina_movimientos', $data);
        $this->load->view('footer');

    }


    public function get_Frecuenciapagos() {
        $listadoFrecuenciaPagos = $this->matriz_model->get_Frecuenciapagos();
        $data = array(            
            'frecuencia_pagos' => $listadoFrecuenciaPagos
        );        
        
        $this->load->view('pagina_matriz', $data, TRUE);
        
    }

    
    
    // Funciones para el tab Productos
    public function get_nuevo_producto() {

        $this->load->view('formularios_matriz/form_productos');
        
    }

    public function get_Insert_Nuevo_Producto(){
            //$id_credito=$this->input->post('id_credito');
            $id = $this->input->post('id');
            $data = array(            
                'Nombre_Producto'=>$this->input->post('T1'),
                'tolerancia_cuota'=>$this->input->post('T2'),
                'tiempo_liquidacion'=>$this->input->post('tiempo_liquidacion'),
                'min_monto'=>$this->input->post('T3'),
                'max_monto'=>$this->input->post('T6'),
                'min_tiempo'=>$this->input->post('T4'),
                'max_tiempo'=>$this->input->post('T7'),
                'tolerancia_cuota_interes'=>$this->input->post('T5'),
                'id_entidad'=>$this->input->post('id_entidad'),
                'id_operador'=>$this->input->post('id_operador'),
                'fecha_alta'=>$this->input->post('fecha_alta')
            );
                
            if($id > 0)
            {
                $this->load->model('matriz_model');
                $list_nuevo_producto = $this->matriz_model->get_update_tabla_cat_productos($data,$id);
            }
            else
            {
                $this->load->model('matriz_model');
                $list_nuevo_producto = $this->matriz_model->get_Insert_tabla_cat_productos($data);
            }
    }
    
    public function get_update_producto() {
        $id_producto = $this->input->post('id');
        $datos_productos = $this->matriz_model->get_consulta_productos($id_producto);
        foreach ( $datos_productos as $item_producto) { 
            $data['Id'] = $item_producto['Id'];
            $data['Nombre_Producto'] = $item_producto['Nombre_Producto'];
            $data['tolerancia_cuota'] = $item_producto['tolerancia_cuota'];
            $data['tiempo_liquidacion'] = $item_producto['tiempo_liquidacion'];
            $data['min_monto'] = $item_producto['min_monto'];
            $data['max_monto'] = $item_producto['max_monto'];
            $data['min_tiempo'] = $item_producto['min_tiempo'];
            $data['max_tiempo'] = $item_producto['max_tiempo'];
            $data['tolerancia_cuota_interes'] = $item_producto['tolerancia_cuota_interes'];
             
        }
        $this->load->view('formularios_matriz/form_productos',$data);
    }
    // Fin Funciones para el tab Productos
    
    // Funciones para el tab Tipo Persona
    public function get_nuevo_tipo_persona() {

        $this->load->view('formularios_matriz/form_tipo_persona');
        
    }
    
    public function get_insert_tipo_persona(){
            //$id_credito=$this->input->post('id_credito');
            $id = $this->input->post('id');
            $data = array(            
                'codigo' => $this->input->post('T2'),
                'etiqueta' => $this->input->post('T1')                
            );
                
            if($id > 0)
            {
                $list_nuevo_tipo_persona = $this->matriz_model->get_update_tipo_persona($data,$id);
            }
            else
            {
                $list_nuevo_tipo_persona = $this->matriz_model->get_insert_tipo_persona($data);
            }
    }
    
    public function get_update_tipo_persona() {
        $id_tipo_persona = $this->input->post('id');
        $datos_tipo_persona = $this->matriz_model->get_consulta_tipo_persona($id_tipo_persona);
        foreach ( $datos_tipo_persona as $item_tipo_persona) { 
            $data['Id'] = $item_tipo_persona['Id'];
            $data['codigo'] = $item_tipo_persona['codigo'];
            $data['etiqueta'] = $item_tipo_persona['etiqueta'];
        }
        $this->load->view('formularios_matriz/form_tipo_persona',$data);
    }
    // Fin Funciones para el tab Tipo Persona
    
    // Funciones para el tab Movimientos
    public function get_nuevo_movimiento() {

        $this->load->view('formularios_matriz/form_movimiento');
        
    }
    
    public function get_insert_movimiento(){
            
            $id = $this->input->post('id');
            $data = array(            
                'etiqueta' => $this->input->post('etiqueta'),
                'calificacion' => $this->input->post('calificacion')
            );
                
            if($id > 0)
            {
                $list_nuevo_movimiento = $this->matriz_model->get_update_movimiento($data,$id);
            }
            else
            {
                $list_nuevo_movimiento = $this->matriz_model->get_insert_movimiento($data);
            }
    }
    
    public function get_update_movimiento() {
        $id_movimiento = $this->input->post('id');
        $datos_movimiento = $this->matriz_model->get_consulta_movimiento($id_movimiento);
        foreach ( $datos_movimiento as $item_movimiento) { 
            $data['Id'] = $item_movimiento['Id'];
            $data['etiqueta'] = $item_movimiento['etiqueta'];
            $data['calificacion'] = $item_movimiento['calificacion'];
        }
        $this->load->view('formularios_matriz/form_movimiento',$data);
    }
    // Fin Funciones para el tab Movimientos

    // Funciones para el tab Frecuencia de Pago
    public function get_nuevo_frecuencia_pago() {

        $this->load->view('formularios_matriz/form_frecuencia_pago');
        
    }
    public function get_update_frecuencia_pago() {
        $id_frecuencia_pago = $this->input->post('id');
        $datos_frecuencia_pago = $this->matriz_model->get_consulta_frecuencia_pago($id_frecuencia_pago);
        foreach ( $datos_frecuencia_pago as $item_frecuencia_pago) { 
            $data['id'] = $item_frecuencia_pago['id'];
            $data['unidad_credito'] = $item_frecuencia_pago['unidad_credito'];
            $data['frecuencia_pago'] = $item_frecuencia_pago['frecuencia_pago'];
        }
        $this->load->view('formularios_matriz/form_frecuencia_pago',$data);
    }
    
    public function get_insert_frecuencia_pago() {
            $respuestaOK = false;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = "";
            $maxid = $this->matriz_model->get_max_frecuencia_pagos();
            $id = $this->input->post('id');
            $data = array(
                'unidad_credito' => $this->input->post('unidad_credito'),
                'frecuencia_pago' => $this->input->post('frecuencia_pago')
            );
                
            if($id > 0)
            {
                $list_nuevo_frecuencia_pago = $this->matriz_model->get_update_frecuencia_pago($data,$id);
                if ($list_nuevo_frecuencia_pago == true) {
                    $respuestaOK = true;
                    $mensajeError = "Frecuencia ". $this->input->post('unidad_credito') ." actualizada";                    
                }               
                else {
                    $mensajeError = "No se ha podido actualizar, intentalo nuevamente.";
                }
            }
            else
            {
                $list_nuevo_frecuencia_pago = $this->matriz_model->get_insert_frecuencia_pago($data);
                if ($list_nuevo_frecuencia_pago == true) {
                    $respuestaOK = true;
                    $mensajeError = "Frecuencia ". $this->input->post('unidad_credito') ." agregada correctamente";
                    $contenidoOK = '
                        <tr>
                            <td>'.$this->input->post('unidad_credito').'</td>                            
                            <td align="center">'.$this->input->post('frecuencia_pago').'</td>                            
                            <td class="center">
                                <button id="editar_frecuencia_pago" class="btn btn-primary btn-xs md-trigger" data-id="'. $maxid .'" data-edit="editFrecuencia" data-modal="form-primary-frecuencia-pago" ><i class="fa fa-pencil"></i></button>
                            </td>
                        <tr>
                    ';
                }               
                else {
                    $mensajeError = "No se ha podido agregar, intentalo nuevamente.";
                }
            }

            $salidaJson = array("respuesta" => $respuestaOK,
                                "mensaje" => $mensajeError,
                                "contenido" => $contenidoOK);

            echo json_encode($salidaJson);
    }
    
    
    

    // Funciones para el tab Transaccionalidad
    public function get_nuevo_transaccionalidad() {

        $this->load->view('formularios_matriz/form_transaccionalidad');
        
    }
    
    public function get_insert_transaccionalidad() {
            
            $id = $this->input->post('id');
            $data = array(            
                'r_min' => $this->input->post('minimo'),
                'r_max' => $this->input->post('maximo'),
                'calificacion' => $this->input->post('clasificacion'),
                'divisa' => $this->input->post('divisa')
            );
                
            if($id > 0)
            {
                $list_nuevo_transaccionalidad = $this->matriz_model->get_update_transaccionalidad($data,$id);
            }
            else
            {
                $list_nuevo_transaccionalidad = $this->matriz_model->get_insert_transaccionalidad($data);
            }
    }
    
    public function get_update_transaccionalidad() {
        $id_transaccionalidad = $this->input->post('id');
        $datos_transaccionalidad = $this->matriz_model->get_consulta_transaccionalidad($id_transaccionalidad);
        foreach ( $datos_transaccionalidad as $item_transaccionalidad) { 
            $data['Id'] = $item_transaccionalidad['Id'];
            $data['r_min'] = $item_transaccionalidad['r_min'];
            $data['r_max'] = $item_transaccionalidad['r_max'];
            $data['calificacion'] = $item_transaccionalidad['calificacion'];
            $data['divisa'] = $item_transaccionalidad['divisa'];
        }
        $this->load->view('formularios_matriz/form_transaccionalidad',$data);
    }
    // Fin Funciones para el tab Transaccionalidad
    
    // Funciones para el tab No Personas
    public function get_nuevo_nopersonas() {

        $this->load->view('formularios_matriz/form_nopersonas');
        
    }
    
    public function get_insert_nopersonas(){
            $respuestaOK = false;
            $mensajeError = "No se puede ejecutar la aplicación";
            $id = $this->input->post('id');
            $data = array(            
                'r_min' => $this->input->post('minimo'),
                'r_max' => $this->input->post('maximo'),
                'calificacion' => $this->input->post('calificacion')      
            );
                
            if($id > 0)
            {
                $list_nuevo_nopersonas = $this->matriz_model->get_update_nopersonas($data,$id);
                if ($list_nuevo_nopersonas == true) {
                    $respuestaOK = true;
                    $mensajeError = "Número de personas actualizado";                    
                }               
                else {
                    $mensajeError = "No se ha podido actualizar, intentalo nuevamente.";
                }
            }
            else
            {
                $list_nuevo_nopersonas = $this->matriz_model->get_insert_nopersonas($data);
            }
            
            $salidaJson = array("respuesta" => $respuestaOK,
                                "mensaje" => $mensajeError);

            echo json_encode($salidaJson);
    }
    
    public function get_update_nopersonas() {
        $id_nopersonas = $this->input->post('id');
        $datos_nopersonas = $this->matriz_model->get_consulta_nopersonas($id_nopersonas);
        foreach ($datos_nopersonas as $item_nopersonas) { 
            $data['Id'] = $item_nopersonas['Id'];
            $data['r_min'] = $item_nopersonas['r_min'];
            $data['r_max'] = $item_nopersonas['r_max'];
            $data['calificacion'] = $item_nopersonas['calificacion'];          
        }
        $this->load->view('formularios_matriz/form_nopersonas',$data);
    }
    // Fin Funciones para el tab No Personas

    // Funciones para el tab Actividad
    public function get_nuevo_actividad() {

        $this->load->view('formularios_matriz/form_actividad');
        
    }
    
    public function get_insert_actividad(){
            
            $id = $this->input->post('id');
            $data = array(            
                'calificacion' => $this->input->post('calificacion'),
                'riesgo' => $this->input->post('riesgo')
            );
                
            if($id > 0)
            {
                $list_nuevo_actividad = $this->matriz_model->get_update_actividad($data,$id);
            }
            else
            {
                $list_nuevo_actividad = $this->matriz_model->get_insert_actividad($data);
            }
    }
    
    public function get_update_actividad() {
        $id_actividad = $this->input->post('id');
        $datos_actividad = $this->matriz_model->get_consulta_actividad($id_actividad);
        foreach ( $datos_actividad as $item_actividad) { 
            $data['Id'] = $item_actividad['Id'];
            $data['actividad_economica'] = $item_actividad['actividad_economica'];
            $data['calificacion'] = $item_actividad['calificacion'];
            $data['riesgo'] = $item_actividad['riesgo'];            
        }
        $this->load->view('formularios_matriz/form_actividad',$data);
    }
    // Fin Funciones para el tab No Personas

}

/* End of file matriz.php */
/* Location: ./application/controllers/matriz.php */