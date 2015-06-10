<?php
class Expediente extends CI_Controller{

    public function mostrar_pagina_expedientes(){
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
        $this->load->view('pagina_expedientes', $data);
        $this->load->view('footer');
    }
    public function get_Formulario_nuevo(){
        echo $tipo_persona=$this->input->post('persona');
        $this->load->model('expedientes_model/expediente_model');
        $list_actividad = $this->expediente_model->get_Actividad_economica();
        $data = array(
        'actividad' => $list_actividad
        );
        if($tipo_persona=='FISICA'){
        $this->load->view('formularios_expedientes/form_persona_fisica', $data);}
        if($tipo_persona=='MORAL'){
        $this->load->view('formularios_expedientes/form_persona_moral', $data);}
    }  
    public function get_Formulario_update(){
        $id_cliente=$this->input->post('id');
        $tipo_formulario=$this->input->post('persona');
        $this->load->model('expedientes_model/expediente_model');
        $list_actividad = $this->expediente_model->get_Actividad_economica();
        $data = array(
        'actividad' => $list_actividad
        );
        $datos_empleados=$this->expediente_model->get_Consulta_formularios($id_cliente);
        foreach ( $datos_empleados as $item_cliente) { 
            $data['Id']=$item_cliente['Id'];
            $data['tipo']=$item_cliente['tipo'];
            $data['R30']=$item_cliente['R30'];
            $data['GENERO']=$item_cliente['GENERO'];
            $data['nombre']=$item_cliente['T1'];
            $data['T2']=$item_cliente['T2'];
            $data['T3']=$item_cliente['T3'];
            $data['T4']=$item_cliente['T4'];
            $data['T5']=$item_cliente['T5'];
            $data['T6']=$item_cliente['T6'];
            $data['T7']=$item_cliente['T7'];
            $data['T8']=$item_cliente['T8'];
            $data['T9']=$item_cliente['T9'];
            $data['T10']=$item_cliente['T10'];
            $data['T11']=$item_cliente['T11'];
            $data['T12']=$item_cliente['T12'];
            $data['T13']=$item_cliente['T13'];
            $data['T14']=$item_cliente['T14'];
            $data['T15']=$item_cliente['T15'];
            $data['T16']=$item_cliente['T16'];
            $data['T17']=$item_cliente['T17'];
            $data['T18']=$item_cliente['T18'];
            $data['T19']=$item_cliente['T19'];
            $data['T52']=$item_cliente['T52'];
            $data['T20']=$item_cliente['T20'];
            $data['T21']=$item_cliente["T21"];
            $data['R1']=$item_cliente["R1"];
            $data['T22']=$item_cliente["T22"];
            $data['T23']=$item_cliente["T23"];
            $data['T24']=$item_cliente["T24"];
            $data['T25']=$item_cliente["T25"];
            $data['T26']=$item_cliente["T26"];
            $data['T27']=$item_cliente["T27"];
            $data['T28']=$item_cliente["T28"];
            $data['T29']=$item_cliente["T29"];
            $data['T30']=$item_cliente["T30"];
            $data['T31']=$item_cliente["T31"];
            $data['T32']=$item_cliente["T32"];
            $data['T33']=$item_cliente["T33"];
            $data['T34']=$item_cliente["T34"];
            $data['R2']=$item_cliente["R2"];
            $data['T35']=$item_cliente["T35"];
            $data['R3']=$item_cliente["R3"];
            $data['T36']=$item_cliente["T36"];
            $data['R4']=$item_cliente["R4"];
            $data['T37']=$item_cliente["T37"];
            $data['R5']=$item_cliente["R5"];
            $data['T38']=$item_cliente["T38"];
            $data['R6']=$item_cliente["R6"];
            $data['T39']=$item_cliente["T39"];
            $data['R7']=$item_cliente["R7"];
            $data['R8']=$item_cliente["R8"];
            $data['T40']=$item_cliente["T40"];
            $data['T41']=$item_cliente["T41"];
            $data['T42']=$item_cliente["T42"];
            $data['T43']=$item_cliente["T43"];
            $data['T44']=$item_cliente["T44"];
            $data['T45']=$item_cliente["T45"];
            $data['T46']=$item_cliente["T46"];
            $data['T47']=$item_cliente["T47"];
            $data['T48']=$item_cliente["T48"];
            $data['T49']=$item_cliente["T49"];
            $data['R9']=$item_cliente["R9"];
            $data['R10']=$item_cliente["R10"];
            $data['R11']=$item_cliente["R11"];
            $data['R12']=$item_cliente["R12"];
            $data['R13']=$item_cliente["R13"];
            $data['R14']=$item_cliente["R14"];
            $data['R15']=$item_cliente["R15"];
            $data['R16']=$item_cliente["R16"];
            $data['R17']=$item_cliente["R17"];
            $data['R18']=$item_cliente["R18"];
            $data['R19']=$item_cliente["R19"];
            $data['R20']=$item_cliente["R20"];
            $data['R21']=$item_cliente["R21"];
            $data['R30']=$item_cliente["R30"]; 
            $data['T50']=$item_cliente["T50"];
            $data['T51']=$item_cliente["T51"]; 
          }
        if($tipo_formulario=='FISICA'){
        $this->load->view('formularios_expedientes/form_persona_fisica',$data);
        }
        if($tipo_formulario=='MORAL'){
        $this->load->view('formularios_expedientes/form_persona_moral',$data);}
    }
    public function get_Formulario_colonia(){
        $cp=$this->input->post('cp');
        $this->load->model('expedientes_model/formularioscp_model');
        $list_cp=$this->formularioscp_model->get_Consulta_formularios($cp); 
        $data = array(
        'colonia' => $list_cp
        ); 
        $this->load->view('formularios_expedientes/formulario_select',$data);
    }
    public function get_Formulario_entidad(){
        $id_entidad=$this->input->post('id_entidad');
        $this->load->model('expedientes_model/formularioscp_model');
        $list_localidades=$this->formularioscp_model->get_Consulta_localidades($id_entidad);
        foreach ( $list_localidades as $item_localidades) { 
           $data['d_mnpio']  = $item_localidades['d_mnpio'];
           $data['d_ciudad'] = $item_localidades['d_ciudad'];  
           $data['d_estado'] = $item_localidades['d_estado'];  
           $this->load->view('formularios_expedientes/formulario_entidades',$data);   
        }          
    } 
    public function get_Insert_formularios(){
            $id=$this->input->post('id');
            $data = array( 
            'tipo'=>$this->input->post('tipo'),
            'R30'=>$this->input->post('R30'),
            'GENERO'=>$this->input->post('GENERO'),
            'T1'=>$this->input->post('T1'),
            'T2'=>$this->input->post('T2'),
            'T3'=>$this->input->post('T3'),
            'T4'=>$this->input->post('T4'),
            'T5'=>$this->input->post('T5'),
            'T6'=>$this->input->post('T6'),
            'T7'=>$this->input->post('T7'),
            'T8'=>$this->input->post('T8'),
            'T9'=>$this->input->post('T9'),
            'T10'=>$this->input->post('T10'),
            'T11'=>$this->input->post('T11'),
            'T12'=>$this->input->post('T12'),
            'T13'=>$this->input->post('T13'),
            'T14'=>$this->input->post('T14'),
            'T15'=>$this->input->post('T15'),
            'T16'=>$this->input->post('T16'),
            'T17'=>$this->input->post('T17'),
            'T18'=>$this->input->post('T18'),
            'T19'=>$this->input->post('T19'),
            'T52'=>$this->input->post('T52'),
            'T20'=>$this->input->post('T20'),
            'T21'=>$this->input->post("T21"),
            'R1'=>$this->input->post("R1"),
            'T22'=>$this->input->post("T22"),
            'T23'=>$this->input->post("T23"),
            'T24'=>$this->input->post("T24"),
            'T25'=>$this->input->post("T25"),
            'T26'=>$this->input->post("T26"),
            'T27'=>$this->input->post("T27"),
            'T28'=>$this->input->post("T28"),
            'T29'=>$this->input->post("T29"),
            'T30'=>$this->input->post("T30"),
            'T31'=>$this->input->post("T31"),
            'T32'=>$this->input->post("T32"),
            'T33'=>$this->input->post("T33"),
            'T34'=>$this->input->post("T34"),
            'R2'=>$this->input->post("R2"),
            'T35'=>$this->input->post("T35"),
            'R3'=>$this->input->post("R3"),
            'T36'=>$this->input->post("T36"),
            'R4'=>$this->input->post("R4"),
            'T37'=>$this->input->post("T37"),
            'R5'=>$this->input->post("R5"),
            'T38'=>$this->input->post("T38"),
            'R6'=>$this->input->post("R6"),
            'T39'=>$this->input->post("T39"),
            'R7'=>$this->input->post("R7"),
            'R8'=>$this->input->post("R8"),
            'T40'=>$this->input->post("T40"),
            'T41'=>$this->input->post("T41"),
            'T42'=>$this->input->post("T42"),
            'T43'=>$this->input->post("T43"),
            'T44'=>$this->input->post("T44"),
            'T45'=>$this->input->post("T45"),
            'T46'=>$this->input->post("T46"),
            'T47'=>$this->input->post("T47"),
            'T48'=>$this->input->post("T48"),
            'T49'=>$this->input->post("T49"),
            'R9'=>$this->input->post("R9"),
            'R10'=>$this->input->post("R10"),
            'R11'=>$this->input->post("R11"),
            'R12'=>$this->input->post("R12"),
            'R13'=>$this->input->post("R13"),
            'R14'=>$this->input->post("R14"),
            'R15'=>$this->input->post("R15"),
            'R16'=>$this->input->post("R16"),
            'R17'=>$this->input->post("R17"),
            'R18'=>$this->input->post("R18"),
            'R19'=>$this->input->post("R19"),
            'R20'=>$this->input->post("R20"),
            'R21'=>$this->input->post("R21"),
            'R30'=>$this->input->post("R30"), 
            'T50'=>$this->input->post("T50"),
            'T51'=>$this->input->post("T51")
            );
            if($id > 0 ){
                $this->load->model('expedientes_model/expediente_model');
                $list_actividad = $this->expediente_model->get_Update_expdiente($data,$id);
            }
            else{
                $this->load->model('expedientes_model/expediente_model');
                $list_actividad = $this->expediente_model->get_Insert_expdiente($data);
            }
            
    }     
}
?>