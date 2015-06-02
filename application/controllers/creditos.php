<?php
class Creditos extends CI_Controller{

    public function mostrar_pagina_creditos(){
        $this->load->model('creditos_model');
        $listadoCreditos = $this->creditos_model->get_Creditos();
        $listado_total_creditos= $this->creditos_model->get_Numero_total();
        $listado_creditos_activos=$this->creditos_model->get_Activos();
        $listado_creditos_finalizados=$this->creditos_model->get_Finalizados();
        $data = array(
        'creditos' => $listadoCreditos
        );
        $data['count_creditos']=$listado_total_creditos;
        $data['count_creditos_activos'] = $listado_creditos_activos;
        $data['count_creditos_finalizados']=$listado_creditos_finalizados;
        $this->load->view('header');
        $this->load->view('pagina_creditos', $data);
        $this->load->view('footer');
    }
}
?>