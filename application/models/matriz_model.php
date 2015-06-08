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
    
}
?>