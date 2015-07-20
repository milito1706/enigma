<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controlador_base extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_datos_generales() {
		
		$this->load->model('my_model_base');
        $listadoDatosGenerales = $this->my_model_base->get_datos_generales();
        $data = array(            
            'datos_generales' => $listadoDatosGenerales
        );        
        $this->load->view('formularios_matriz/datos_generales', $data);
    }
    public function get_insert_datos_generales() {
            $respuestaOK = false;
            $mensajeError = "No se puede ejecutar la aplicación";            
            $id = $this->input->post('id');
            $data = array(            
                'empresa'=>$this->input->post('empresa'),
                'entidad_casfim'=>$this->input->post('enttidad_casfim'),
                'direccion_completa'=>$this->input->post('direccion_completa'),
                'cp'=>$this->input->post('cp'),
                'name_operador'=>$this->input->post('oficial_cumplimiento'),
                'email'=>$this->input->post('email')
            );                
            if($id > 0) {                
                $list_datos_generales = $this->matriz_model->get_update_datos_generales($data,$id);
                if ($list_datos_generales == true) {
                    $respuestaOK = true;
                    $mensajeError = "Se han actualizado los datos correctamente";                    
                }
                else {
                    $mensajeError = "No se han podido actualizar los datos";
                }
            } else {                
                $list_datos_generales = $this->matriz_model->get_insert_datos_generales($data);
            }
            $salidaJson = array("respuesta" => $respuestaOK,
                                "mensaje" => $mensajeError);

            echo json_encode($salidaJson);
    }

}

/* End of file MY_controlador_base.php */
/* Location: ./application/controllers/MY_controlador_base.php */