<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alertas_pendientes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('alertas_pendientes_model');
    }

    public function mostrar_pagina_alertas_pendientes(){
        $listadoOI = $this->alertas_pendientes_model->get_alertas_oi();
        $listadoOR = $this->alertas_pendientes_model->get_alertas_or();
        $listadoIP = $this->alertas_pendientes_model->get_alertas_ip();
        $data = array(
                    'alertasOI' => $listadoOI,
                    'alertasOR' => $listadoOR,
                    'alertasIP' => $listadoIP
                );
        
        $this->load->view('header');
        $this->load->view('pagina_alertas_pendientes', $data);
        $this->load->view('footer');
    }

}

/* End of file alertas_pendientes.php */
/* Location: ./application/controllers/alertas_pendientes.php */