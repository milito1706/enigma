<?php
class Creditos_model extends CI_Model{

    function __construct()
    {
        $this->load->database();
    }
    public function get_Creditos(){
        $query = $this->db->get('book_creditos');
        return $query->result_array();
    }
    public function get_Numero_total(){
        return  $this->db->count_all('book_creditos');
    }
    public function get_Activos(){
        $this->db->like('Estado','ACTIVO');
        $this->db->from('book_creditos');
        return $this->db->count_all_results();
    }
    public function get_Finalizados(){
        $this->db->like('Estado','FINALIZADO');
        $this->db->from('book_clientes');
        return $this->db->count_all_results();
    }
    ///DATOS PARA MOSTRAR AGRUPACION AGRUPACION DE CREDITOS///
    public function get_Creditos_cliente($id){
        $query = $this->db->query("SELECT Id,no_credito,T1,tipo_moneda,T3,T4,tipo_credito,T2,@rownum:=@rownum+1 as num_credito,Estado  FROM book_creditos,(SELECT @rownum:=0)R where id_expediente=$id order by Id desc;");
        return $query->result_array();
    }
    public function get_Total_oi($id_expediente){
        $query = $this->db->query("SELECT COUNT(al.Id) as total FROM book_alertas al  , book_creditos cre, book_clientes cl where  (al.no_credito=cre.no_credito) and (cre.id_expediente=cl.Id) and cl.Id=$id_expediente and al.pldkind='OI'");
        $row = $query->row(); 
        return $row->total;
    }
    public function get_Total_or($id_expediente){
        $query = $this->db->query("SELECT COUNT(al.Id) as total FROM book_alertas al  , book_creditos cre, book_clientes cl where  (al.no_credito=cre.no_credito) and (cre.id_expediente=cl.Id) and cl.Id=$id_expediente and al.pldkind='OR'");
        $row = $query->row(); 
        return $row->total;
    }
    public function get_Total_ip($id_expediente){
        $query = $this->db->query("SELECT COUNT(al.Id) as total FROM book_alertas al  , book_creditos cre, book_clientes cl where  (al.no_credito=cre.no_credito) and (cre.id_expediente=cl.Id) and cl.Id=$id_expediente and al.pldkind='IP'");
        $row = $query->row(); 
        return $row->total;
    }
    public function get_Total_kyc($id_expediente){
        $query = $this->db->query("SELECT COUNT(al.Id) as total FROM book_alertas al  , book_creditos cre, book_clientes cl where  (al.no_credito=cre.no_credito) and (cre.id_expediente=cl.Id) and cl.Id=$id_expediente and al.pldkind='24'");
        $row = $query->row(); 
        return $row->total;
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
    public function get_Divisa(){
        $query = $this->db->get("cat_divisas");
        return $query->result_array();
    }
    public function get_Insert_tabla_creditos($data){
        $this->db->insert('book_creditos',$data); 
    }
}
?>