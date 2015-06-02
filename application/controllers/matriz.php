<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matriz extends CI_Controller {

	public function mostrar_pagina_matriz(){

        $this->load->view('header');      
        $this->load->view('pagina_matriz');
        $this->load->view('footer');
    }

}

/* End of file matriz.php */
/* Location: ./application/controllers/matriz.php */