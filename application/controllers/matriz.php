<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matriz extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('matriz_model');
    }
    // Funcion que me consulta todos los resultados de la matriz de riesgo
    public function mostrar_pagina_matriz(){

        // Obtengo los productos
		$listadoProductos = $this->matriz_model->get_Productos();
		$listado_total_productos= $this->matriz_model->get_Numero_total_productos();        
        // Obtengo las frecuencias de pagos
        $listadoFrecuenciaPagos = $this->matriz_model->get_Frecuenciapagos();
        // Obtengo la Transaccionalidad
        $listadoTransaccionalidad = $this->matriz_model->get_Transaccionalidad();
        // Obtengo el catalogo de Actividades
        $listadoActividad = $this->matriz_model->get_Actividad();
        // Obtengo los tipos de Personas
        $listadoTipoPersona = $this->matriz_model->get_TipoPersona();
        // Obtengo el numero de personas dentro de la organizacion
        $listadoNpersonas = $this->matriz_model->get_Npersonas();
        // Obtengo los movimientos
        $listadoMovimientos = $this->matriz_model->get_Movimientos();
        
        $data = array(
            'productos' => $listadoProductos,
            'frecuencia_pagos' => $listadoFrecuenciaPagos,
            'transaccionalidad' => $listadoTransaccionalidad,
            'actividades' => $listadoActividad,
            'tipo_personas' => $listadoTipoPersona,
            'num_personas' => $listadoNpersonas,
            'movimientos' => $listadoMovimientos
        );        
        
        $this->load->view('header');
        $this->load->view('pagina_matriz', $data);
        $this->load->view('footer');
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

    // Funciones para el tab Movimientos
    public function get_nuevo_frecuencia_pago() {

        $this->load->view('formularios_matriz/form_frecuencia_pago');
        
    }
    
    public function get_insert_frecuencia_pago(){
            
            $id = $this->input->post('id');
            $data = array(            
                'unidad_credito' => $this->input->post('unidad_credito'),
                'frecuencia_pago' => $this->input->post('frecuencia_pago')
            );
                
            if($id > 0)
            {
                $list_nuevo_frecuencia_pago = $this->matriz_model->get_update_frecuencia_pago($data,$id);
            }
            else
            {
                $list_nuevo_frecuencia_pago = $this->matriz_model->get_insert_frecuencia_pago($data);
            }
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
    // Fin Funciones para el tab Movimientos

}

/* End of file matriz.php */
/* Location: ./application/controllers/matriz.php */