<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matriz extends CI_Controller {

	public function mostrar_pagina_matriz(){

		$this->load->model('productos_model');
		$listadoProductos = $this->productos_model->get_Productos();
		$listado_total_productos= $this->productos_model->get_Numero_total_productos();
		$data = array(
        'productos' => $listadoProductos
        );
        $this->load->view('header');
        $this->load->view('pagina_matriz', $data);
        $this->load->view('footer');
    }

}

/* End of file matriz.php */
/* Location: ./application/controllers/matriz.php */