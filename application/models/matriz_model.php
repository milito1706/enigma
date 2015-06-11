<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matriz_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
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
    public function  get_Frecuenciapagos(){
        $query = $this->db->get('cat_unidadcredito');
        return $query->result_array();
    }

    public function  get_Transaccionalidad(){
        $query = $this->db->get('transaccionalidad');
        return $query->result_array();
    }

    public function  get_Actividad(){
        $query = $this->db->get('r_actividad');
        return $query->result_array();
    }

    public function  get_TipoPersona(){
        $query = $this->db->get('cat_tipopersona');
        return $query->result_array();
    }

    public function  get_Npersonas(){
        $query = $this->db->get('r_numpersonas');
        return $query->result_array();
    }

    public function  get_Movimientos(){
        $query = $this->db->get('cat_origen_pago');
        return $query->result_array();
    }
    
    // Tab Productos
    public function get_Insert_tabla_cat_productos($data) {
        $this->db->insert('cat_productos',$data); 
    }

    public function get_consulta_productos($id) {
        $query = $this->db->get_where('cat_productos', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_tabla_cat_productos($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('cat_productos',$data);
    }
    // Fin Tab Productos
    
    // Tab Tipo Persona
    public function get_insert_tipo_persona($data) {
        $this->db->insert('cat_tipopersona',$data); 
    }

    public function get_consulta_tipo_persona($id) {
        $query = $this->db->get_where('cat_tipopersona', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_tipo_persona($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('cat_tipopersona',$data);
    }
    // Fin Tipo Persona
    
}
?>