<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matriz_model extends CI_Model {    

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
    
    public function get_Catalogotipocredito(){
        $query = $this->db->get('cat_tipocredito');
        return $query->result_array();
    }
    public function  get_FrecuenciaPagos(){
        $query = $this->db->get('cat_unidadcredito');
        return $query->result_array();
    }
    public function get_max_frecuencia_pagos() {
        $this->db->select_max('id');
        $query = $this->db->get('cat_unidadcredito');
        $row = $query->row_array();
        return $max_id = $row['id'] + 1;
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

    public function get_Estados(){
        $this->db->group_by("nombre_estado"); 
        $query = $this->db->get('r_estado');
        return $query->result_array();
    }

    public function get_Paises(){
        $this->db->group_by("nombre_estado"); 
        $query = $this->db->get('r_pais');
        return $query->result_array();
    }
    
    
    // Tab Productos
    public function get_Insert_tabla_cat_productos($data) {

        $Nombre_Producto = $this->input->post('T1');
        $query = $this->db->where('Nombre_Producto', $Nombre_Producto);
        $query = $this->db->get('cat_productos');
        if( $query->num_rows() > 0)
        {
            return false;
        }
        else
        {
            $this->db->insert('cat_productos',$data);
            if($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function get_consulta_productos($id) {
        $query = $this->db->get_where('cat_productos', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_tabla_cat_productos($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('cat_productos',$data);

        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Fin Tab Productos
    
    // Tab Tipo Persona
    public function get_insert_tipo_persona($data) {

        $tipo_persona = $this->input->post('T1');
        $query = $this->db->where('etiqueta', $tipo_persona);
        $query = $this->db->get('cat_tipopersona');
        if( $query->num_rows() > 0)
        {
            return false;
        }
        else
        {
            $this->db->insert('cat_tipopersona',$data);            
            if($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function get_consulta_tipo_persona($id) {
        $query = $this->db->get_where('cat_tipopersona', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_tipo_persona($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('cat_tipopersona',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Fin Tipo Persona
    
    // Tab Movimientos
    public function get_insert_movimiento($data) {

        $movimiento = $this->input->post('etiqueta');
        $query = $this->db->where('etiqueta', $movimiento);
        $query = $this->db->get('cat_origen_pago');
        if( $query->num_rows() > 0)
        {
            return false;
        }
        else
        {
            $this->db->insert('cat_origen_pago',$data);            
            if($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function get_consulta_movimiento($id) {
        $query = $this->db->get_where('cat_origen_pago', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_movimiento($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('cat_origen_pago',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Fin Movimientos
    
    // Tab Frecuencia de Pagos
    public function get_insert_frecuencia_pago($data) {
        $unidad_credito = $this->input->post('unidad_credito');
        $query = $this->db->where('unidad_credito', $unidad_credito);
        $query = $this->db->get('cat_unidadcredito');
        if( $query->num_rows() > 0)
        {
            return false;
        }
        else
        {
            $this->db->insert('cat_unidadcredito',$data);
            if($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }


    }

    public function get_consulta_frecuencia_pago($id) {
        $query = $this->db->get_where('cat_unidadcredito', array('id' => $id));
        return $query->result_array();
    }

    public function get_update_frecuencia_pago($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('cat_unidadcredito',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Fin Frecuenca de Pagos
    
    // Tab transaccionalidad
    public function get_insert_transaccionalidad($data) {

        $r_min = $this->input->post('minimo');
        $query = $this->db->where('r_min', $r_min);
        $query = $this->db->get('transaccionalidad');
        if( $query->num_rows() > 0)
        {
            return false;
        }
        else
        {
            $this->db->insert('transaccionalidad',$data);            
            if($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function get_consulta_transaccionalidad($id) {
        $query = $this->db->get_where('transaccionalidad', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_transaccionalidad($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('transaccionalidad',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Fin transaccionalidad
    
    public function get_consulta_estados($id) {
        $query = $this->db->get_where('r_estado', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_estado($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('r_estado',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function get_consulta_paises($id) {
        $query = $this->db->get_where('r_pais', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_pais($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('r_pais',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // Tab no personas
    public function get_insert_nopersonas($data) {
        $this->db->insert('r_numpersonas',$data); 
    }

    public function get_consulta_nopersonas($id) {
        $query = $this->db->get_where('r_numpersonas', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_nopersonas($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('r_numpersonas',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Fin no personas
    
    // Tab Actividad
    public function get_insert_actividad($data) {
        $this->db->insert('r_actividad',$data); 
    }

    public function get_consulta_actividad($id) {
        $query = $this->db->get_where('r_actividad', array('Id' => $id));
        return $query->result_array();
    }

    public function get_update_actividad($data, $id) {
        $this->db->where('Id', $id);
        $this->db->update('r_actividad',$data);
        if($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    // Fin no personas
}
?>