<?php
class Formularioscp_model extends CI_Model{

    protected $db_b;
 
    public function __construct() {
        parent::__construct();
        $this->db_b = $this->load->database('conexion_localidad',TRUE);
    }
    public function get_Consulta_formularios($cp){

        $query = $this->db_b->query("select Id,d_asenta from cat_cp where d_cp =$cp;");
        return $query->result_array();
    }
     public function get_Consulta_localidades($id){
        $query = $this->db_b->query("select Id,d_cp,d_asenta,d_mnpio,d_ciudad,d_estado from cat_cp where  Id=$id;");
        return $query->result_array();
    }
    
}
?>