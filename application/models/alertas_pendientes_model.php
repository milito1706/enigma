<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alertas_pendientes_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
    }
    public function get_alertas_oi(){
        $query = $this->db->where('pldkind', 'OI');
        $query = $this->db->get('book_alertas');
        //$query = $this->db->get('book_alertas');
        return $query->result_array();
    }
    public function get_alertas_or(){
        $query = $this->db->where('pldkind', 'OR');
        $query = $this->db->get('book_alertas');
        //$query = $this->db->get('book_alertas');
        return $query->result_array();
    }
    public function get_alertas_ip(){
        $query = $this->db->where('pldkind', 'IP');
        $query = $this->db->get('book_alertas');
        //$query = $this->db->get('book_alertas');
        return $query->result_array();
    }

    public function get_alertas_oi_r(){
        $query = $this->db->where('pldkind', 'OI');
        $query = $this->db->where('estado', 'RESUELTA');
        $query = $this->db->get('book_alertas');
        //$query = $this->db->get('book_alertas');
        return $query->result_array();
    }
    public function get_alertas_or_r(){
        $query = $this->db->where('pldkind', 'OR');
        $query = $this->db->where('estado', 'RESUELTA');
        $query = $this->db->get('book_alertas');
        //$query = $this->db->get('book_alertas');
        return $query->result_array();
    }
    public function get_alertas_ip_r(){
        $query = $this->db->where('pldkind', 'IP');
        $query = $this->db->where('estado', 'RESUELTA');
        $query = $this->db->get('book_alertas');
        //$query = $this->db->get('book_alertas');
        return $query->result_array();
    }

}

/* End of file alertas_pendientes_model.php */
/* Location: ./application/models/alertas_pendientes_model.php */