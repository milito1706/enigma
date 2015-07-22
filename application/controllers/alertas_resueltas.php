<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alertas_resueltas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('alertas_pendientes_model');
    }

    public function mostrar_pagina_alertas_resueltas(){
        $listadoOIR = $this->alertas_pendientes_model->get_alertas_oi_r();
        $listadoORR = $this->alertas_pendientes_model->get_alertas_or_r();
        $listadoIPR= $this->alertas_pendientes_model->get_alertas_ip_r();
        $data = array(
                    'alertasOIR' => $listadoOIR,
                    'alertasORR' => $listadoORR,
                    'alertasIPR' => $listadoIPR
                );
        
        $this->load->view('header');
        $this->load->view('pagina_alertas_resueltas', $data);
        $this->load->view('footer');
    }

}

/* End of file alertas_pendientes.php */
/* Location: ./application/controllers/alertas_pendientes.php */