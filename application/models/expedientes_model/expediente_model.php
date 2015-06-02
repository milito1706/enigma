<?php
class Expediente_model extends CI_Model{

    function __construct()
    {
        $this->load->database();
    }
    public function get_Expedientes(){
        $query = $this->db->get('book_clientes');
        return $query->result_array();
    }
    public function get_Numero_total(){
        return  $this->db->count_all('book_clientes');  
    }
    public function get_Empleados_fisica(){
        $this->db->like('tipo','FISICA');
        $this->db->from('book_clientes');
        return $this->db->count_all_results();
    }
    public function get_Empleados_moral(){
        $this->db->like('tipo','MORAL');
        $this->db->from('book_clientes');
        return $this->db->count_all_results();
    }
    public function get_Actividad_economica(){
        $query = $this->db->get('r_actividad');
        return $query->result_array(); 
    }
    public function get_Consulta_formularios($id){
        $query = $this->db->get_where('book_clientes', array('Id' => $id));
        return $query->result_array();
    }
    public function get_Insert_expdiente($data){
        $this->db->insert('book_clientes',$data); 
    }
    public function get_Update_expdiente($data,$id){
        $this->db->where('Id', $id);
        $this->db->update('book_clientes',$data); 

    }

}
?>