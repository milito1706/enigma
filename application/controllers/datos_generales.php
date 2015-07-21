<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos_generales extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('datos_model');        
    }

	public function mostrar_datos_generales()
	{
		$listadoDatos = $this->datos_model->get_datos_generales();
        $data = array(
            'datos_generales' => $listadoDatos
        );
		$this->load->view('header');
		$this->load->view("pagina_datos_generales", $data);
        $this->load->view('footer');
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
                $list_datos_generales = $this->datos_model->get_update_datos_generales($data,$id);
                if ($list_datos_generales == true) {
                    $respuestaOK = true;
                    $mensajeError = "Se han actualizado los datos correctamente";                    
                }
                else {
                    $mensajeError = "No se han podido actualizar los datos";
                }
            } else {                
                $list_datos_generales = $this->datos_model->get_insert_datos_generales($data);
            }
            $salidaJson = array("respuesta" => $respuestaOK,
                                "mensaje" => $mensajeError);

            echo json_encode($salidaJson);
    }

}

/* End of file datosGenerales.php */
/* Location: ./application/controllers/datosGenerales.php */