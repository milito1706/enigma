<?php
class Clientes extends CI_Controller{
    public function mostrar_pagina_clientes(){
        $this->load->model('expedientes_model/expediente_model');
        $listadoEmpleados = $this->expediente_model->get_Expedientes();
        $listado_total_clientes= $this->expediente_model->get_Numero_total();
        $listado_fisicas=$this->expediente_model->get_Empleados_fisica();
        $listado_moral=$this->expediente_model->get_Empleados_moral(); 
        $data = array(
        'empleados' => $listadoEmpleados
        );
        $data['count_clientes']=$listado_total_clientes;
        $data['count_personas_fisica'] = $listado_fisicas;
        $data['count_personas_moaral']=$listado_moral;
        $this->load->view('header');
        $this->load->view('pagina_clientes', $data);
        $this->load->view('footer');
    }
    public function mostrar_agrupacion_creditos(){
        $id_cliente=$this->input->get('v');
        $this->load->model('expedientes_model/expediente_model');
        $datos_clientes=$this->expediente_model->get_Consulta_formularios($id_cliente);
        $data['datos_clientes'] = $datos_clientes;
        
        $this->load->model('creditos_model');
        $listadoCreditos=$this->creditos_model->get_Creditos_cliente($id_cliente);
        $total_oi=$this->creditos_model->get_Total_oi($id_cliente);
        $total_or=$this->creditos_model->get_Total_or($id_cliente);
        $total_ip=$this->creditos_model->get_Total_ip($id_cliente);
        $total_kyc=$this->creditos_model->get_Total_kyc($id_cliente);
        $listado_tipocredito=$this->creditos_model->get_Catalogotipocredito();
        $listado_frecuencia_pagos=$this->creditos_model->get_Frecuenciapago();
        $listado_tipodivisa=$this->creditos_model->get_Divisa();
        $data['clientes_creditos'] = $listadoCreditos;
        $data['total_oi']=$total_oi;
        $data['total_or']=$total_or;
        $data['total_ip']=$total_ip;
        $data['total_kyc']=$total_kyc;
        $data['tipo_credito'] = $listado_tipocredito;
        $data['frecuencia'] =$listado_frecuencia_pagos;
        $data['tipo_divisa'] =$listado_tipodivisa;

        $this->load->view('header');
        $this->load->view('pagina_agrupacion_creditos',$data);
        $this->load->view('footer');
    }

    public function get_Insert_credito(){
            //$id_credito=$this->input->post('id_credito');
            $data = array( 
            'id_expediente'=>$this->input->post('id_expediente'),
            'no_credito'=>$this->input->post('no_credito'),
            'tipo_credito'=>$this->input->post('tipo_credito'),
            'unidad_credito'=>$this->input->post('unidad_credito'),
            'tipo_moneda'=>$this->input->post('tipo_moneda'),
            'T1'=>$this->input->post('T1'),
            'T2'=>$this->input->post('T2'),
            'T3'=>$this->input->post('T3'),
            'T4'=>$this->input->post('T4'),
            'limite_cuota'=>$this->input->post('limite_cuota'),
            'T6'=>$this->input->post('T6'),
            'T7'=>$this->input->post('T7'),
            'T8'=>$this->input->post('T8'),
            'T9'=>$this->input->post('T9'),
            'T10'=>$this->input->post('T10')
            );
       
                $this->load->model('creditos_model');
                $list_actividad = $this->creditos_model->get_Insert_tabla_creditos($data);

        }   
}
?>