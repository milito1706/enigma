<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_model_base extends CI_Model {
    protected $db_b;
    
	public function __construct()
	{
		parent::__construct();
	}

	public function get_datos_generales() {        
        $this->db_b = $this->load->database('conexion_localidad',TRUE);
        $query = $this->db_b->get_where('access', array('id_operador' => 2301)); 
        return $query->result_array();
    }

    public function get_insert_datos_generales($data) {
        $this->db_b = $this->load->database('conexion_localidad',TRUE);
        $this->db_b->insert('access', $data);
    }

    public function get_update_datos_generales($data, $id) {
        $this->db_b = $this->load->database('conexion_localidad',TRUE);
        $this->db_b->where('id_acc', $id);
        $this->db_b->update('access',$data);
        if($this->db_b->affected_rows() > 0)
        {
            return true;
        }
    }

}

/* End of file MY_controlador_base.php */
/* Location: ./application/controllers/MY_controlador_base.php */