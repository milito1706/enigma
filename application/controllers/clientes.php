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
        $listado_grafica=$this->creditos_model->get_Grafica_creditos($id_cliente);
        $listado_riesgo_estado=$this->creditos_model->get_R_estado($id_cliente);
        $listado_riesgo_pais=$this->creditos_model->get_R_pais($id_cliente);
        $listado_riesgo_actividad=$this->creditos_model->get_R_actividad($id_cliente);
        $listado_riesgo_persona=$this->creditos_model->get_R_tipo_persona($id_cliente);
         

        $data['clientes_creditos'] = $listadoCreditos;
        $data['total_oi']=$total_oi;
        $data['total_or']=$total_or;
        $data['total_ip']=$total_ip;
        $data['total_kyc']=$total_kyc;
        $data['tipo_credito'] = $listado_tipocredito;
        $data['frecuencia'] =$listado_frecuencia_pagos;
        $data['tipo_divisa'] =$listado_tipodivisa;
        $data['graficar'] =$listado_grafica;
        $data['r_estado'] = $listado_riesgo_estado;
        $data['r_pais'] =  $listado_riesgo_pais;
        $data['r_actividad'] =$listado_riesgo_actividad;
        $data['r_tipopersona'] =$listado_riesgo_persona;

        $this->load->view('header');
        $this->load->view('pagina_agrupacion_creditos',$data);
        $this->load->view('footer');
    }

    public function get_Insert_credito(){
            $id_credito=$this->input->post('Id');
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
            'T10'=>$this->input->post('T10'),
            'Estado'=>'ACTIVO'
            );
             if($id_credito > 0){
                $this->load->model('creditos_model');
                $this->creditos_model->get_Update_credito($data,$id_credito);
            }
            else{
                $this->load->model('creditos_model');
                $this->creditos_model->get_Insert_tabla_creditos($data);
            }
            

        } 
    public function get_Formulario_credito_consulta(){

            $no_credito=$this->input->post('id_credito');
            $this->load->model('creditos_model');
            $datos_credito=$this->creditos_model->get_consulta_formulario_credito($no_credito);
             foreach ($datos_credito as $item_credito) { 
            $data['titulo']='Editar Crédito';
            $data['id_credito']=$item_credito['Id'];
            $data['no_credito']=$item_credito['no_credito'];
            $data['tipo_credit']=$item_credito['tipo_credito'];
            $data['unidad_credit']=$item_credito['unidad_credito'];
            $data['tipo_mone']=$item_credito['tipo_moneda'];
            $data['T1']=$item_credito['T1'];
            $data['T2']=$item_credito['T2'];
            $data['T3']=$item_credito['T3'];
            $data['T4']=$item_credito['T4'];
            $data['T6']=$item_credito['T6'];
            $data['T7']=$item_credito['T7'];
            $data['T8']=$item_credito['T8'];
            $data['T9']=$item_credito['T9'];
            $data['T10']=$item_credito['T10'];
            $data['limite']=$item_credito['limite_cuota'];
             }

            $listado_tipocredito=$this->creditos_model->get_Catalogotipocredito();
            $listado_frecuencia_pagos=$this->creditos_model->get_Frecuenciapago();
            $listado_tipodivisa=$this->creditos_model->get_Divisa();
            $data['tipo_credito'] = $listado_tipocredito;
            $data['frecuencia'] =$listado_frecuencia_pagos;
            $data['tipo_divisa'] =$listado_tipodivisa;
            $this->load->view('formularios_clientes/form_creditos',$data);

    } 
    public function mostrar_detalle_credito(){
        $id_cliente=$this->input->get('v');
        $id_credito=$this->input->get('v2');
        $this->load->model('expedientes_model/expediente_model');
        $datos_clientes=$this->expediente_model->get_Consulta_formularios($id_cliente);
        $data['datos_clientes'] = $datos_clientes;

        $this->load->model('creditos_model');
        $listadoCreditos=$this->creditos_model->get_Credito_detalle($id_credito);
        $listadoMovimientos=$this->creditos_model->get_Movimientos($id_credito);
        $listado_opercioncargo=$this->creditos_model->get_Tcargo();
        $listado_origenpago=$this->creditos_model->get_Opago();
        





        /*$total_oi=$this->creditos_model->get_Total_oi($id_cliente);
        $total_or=$this->creditos_model->get_Total_or($id_cliente);
        $total_ip=$this->creditos_model->get_Total_ip($id_cliente);
        $total_kyc=$this->creditos_model->get_Total_kyc($id_cliente);*/
        $listado_tipocredito=$this->creditos_model->get_Catalogotipocredito();
        $listado_frecuencia_pagos=$this->creditos_model->get_Frecuenciapago();
        $listado_tipodivisa=$this->creditos_model->get_Divisa();
        $listado_riesgo_estado=$this->creditos_model->get_R_estado($id_cliente);
        $listado_riesgo_pais=$this->creditos_model->get_R_pais($id_cliente);
        $listado_riesgo_actividad=$this->creditos_model->get_R_actividad($id_cliente);
        $listado_riesgo_persona=$this->creditos_model->get_R_tipo_persona($id_cliente);
         
        $data['credito']=$id_credito;
        $data['clientes_creditos'] = $listadoCreditos;
        $data['clientes_movimientos'] = $listadoMovimientos;
        $data['tcargo']=$listado_opercioncargo;
        $data['torigen']=$listado_origenpago;
        //$data['total_oi']=$total_oi;
        //$data['total_or']=$total_or;
        //$data['total_ip']=$total_ip;
        //$data['total_kyc']=$total_kyc;
        $data['tipo_credito'] = $listado_tipocredito;
        $data['frecuencia'] =$listado_frecuencia_pagos;
        $data['tipo_divisa'] =$listado_tipodivisa;
        $data['r_estado'] = $listado_riesgo_estado;
        $data['r_pais'] =  $listado_riesgo_pais;
        $data['r_actividad'] =$listado_riesgo_actividad;
        $data['r_tipopersona'] =$listado_riesgo_persona;


        $this->load->view('header');
        $this->load->view('pagina_detalle_credito',$data);
        $this->load->view('footer');

    } 
     public function get_Insert_movimiento(){
                $id_movimiento=$this->input->post('id_movimiento');
                $this->load->model('movimientos_model');
                $numero_pago=$this->movimientos_model->get_Numero_pago($this->input->post('no_credito'));
                //$this->movimientos_model->

                $data = array( 
                'id_credito'=>$this->input->post('no_credito'),
                'origen_pago'=>$this->input->post('origen_pago'),
                'tipo_cargo'=>$this->input->post('tipo_cargo'),
                'tipo_moneda'=>$this->input->post('tipo_moneda'),
                'T1'=>$this->input->post('T1'),
                'T2'=>$this->input->post('T2'),
                'T3'=>$this->input->post('T3'),
                'T4'=>$numero_pago
                );
                 //if($id_movimiento > 0){
                    //$this->load->model('movimientos_model');
                    //$this->movimientos_model->get_Update_movimiento($data,$id_movimiento);
                //}
                //else{
                    $this->load->model('movimientos_model');
                    $this->movimientos_model->get_Insert_tabla_movimientos($data);
                    $this->movimientos_model->get_Movimiento_datos($this->input->post('no_credito'),$this->input->post('origen_pago'),$this->input->post('tipo_cargo'),$this->input->post('tipo_moneda'),$this->input->post('T1'),$this->input->post('T2'),$this->input->post('T3'),$this->input->post('T4'),$numero_pago);
                    $this->movimientos_model->getDatoscredito($this->input->post('no_credito'));
                    $this->movimientos_model->get_Id_mov();
                    $this->movimientos_model->get_Datosproducto();
                    $this->movimientos_model->get_Unidad_credito();
                    $this->movimientos_model->get_Tolerancia_pago();
                    $this->movimientos_model->getAcumulado_movimiento();
                    $this->movimientos_model->get_DatosFrecuenciapago();
                    $this->movimientos_model->get_Frecuencias();
                    $this->movimientos_model->tipo_persona();
                    $this->movimientos_model->parametros_pld();
                    $this->movimientos_model->alerta_efectivo($this->input->post('origen_pago'),$this->input->post('tipo_moneda'));
                    $this->movimientos_model->alertamensualesmx($this->input->post('origen_pago'),$this->input->post('tipo_moneda'),$this->input->post('T2'));
               // }
                

            } 



}
?>