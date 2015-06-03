<?php
class Productos_model extends CI_Model{

    function __construct()
    {
        $this->load->database();
    }
    public function get_Productos(){
        $query = $this->db->get('cat_productos');
        return $query->result_array();
    }
    public function get_Numero_total_productos(){
        return  $this->db->count_all('cat_productos');
    }
    

    ///CATALOGOS DE FORMULARIO fromulario creditos
    public function get_Catalogotipocredito(){
        $query = $this->db->get('cat_tipocredito');
        return $query->result_array();
    }
    public function  get_Frecuenciapago(){
        $query = $this->db->get('cat_unidadcredito');
        return $query->result_array();
    }
    
}
?>