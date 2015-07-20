<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datos_generales extends CI_Controller {

	public function mostrar_datos_generales()
	{
		$this->load->view("pagina_datos_generales");
	}

}

/* End of file datosGenerales.php */
/* Location: ./application/controllers/datosGenerales.php */