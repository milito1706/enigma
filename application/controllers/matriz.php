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
    

}

/* End of file matriz.php */
/* Location: ./application/controllers/matriz.php */