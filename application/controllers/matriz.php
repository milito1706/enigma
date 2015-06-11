<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matriz extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
		$this->load->model('matriz_model');
    }
    
    public function mostrar_pagina_matriz(){

        // Obtengo los productos
		$listadoProductos = $this->matriz_model->get_Productos();
		$listado_total_productos= $this->matriz_model->get_Numero_total_productos();
        
        // Obtengo las frecuencias de pagos
        $listadoFrecuenciaPagos = $this->matriz_model->get_Frecuenciapagos();
        // Obtengo la Transaccionalidad
        $listadoTransaccionalidad = $this->matriz_model->get_Transaccionalidad();

        $listadoActividad = $this->matriz_model->get_Actividad();

        $listadoTipoPersona = $this->matriz_model->get_TipoPersona();

        $listadoNpersonas = $this->matriz_model->get_Npersonas();

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
       
                
                //$this->load->model('matriz_model');
                //$list_nuevo_producto = $this->matriz_model->get_Insert_tabla_cat_productos($data);
                if($id > 0 ){
                $this->load->model('matriz_model');
                $list_nuevo_producto = $this->matriz_model->get_update_tabla_cat_productos($data,$id);
                }
                else{
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
    public function get_nuevo_producto() {
        
        $this->load->view('formularios_matriz/form_productos');
        
    }

}

/* End of file matriz.php */
/* Location: ./application/controllers/matriz.php */