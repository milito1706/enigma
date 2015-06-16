<?php
class Movimientos_model extends CI_Model{

    function __construct()
    {
        $this->load->database();
    }
    public function get_Numero_pago($no_credito){
        $query=$this->db->query("select count(id_credito)+1 as total from book_movimientos where  id_credito='$no_credito';");
        $row=$query->row(); 
        return $row->total;
    }
    public function get_Insert_tabla_movimientos($data){
    	$this->db->insert('book_movimientos',$data); 
    }

    public function get_Movimiento_datos($no_credito,$origen_pago,$tipo_cargo,$tipo_moneda,$T1,$T2,$T3,$T4,$numero_pago){
    		$this->no_credito=$no_credito;
    		$this->origen_pago=$origen_pago;
    		$this->tipo_cargo=$tipo_cargo;
    		$this->tipo_moneda=$tipo_moneda;
    		$this->T1=$T1;
    		$this->T2=$T2;
    		$this->T3=$T3;
    		$this->T4=$T4;	
    		$this->no_movimiento=$numero_pago;	
    }
   public function getDatoscredito($num_credito){
		$query=$this->db->query("select*from book_creditos where no_credito='$num_credito'"); 
		if($num_credito){
			foreach ($query->result_array() as $row){
			$this->acre_id_expediente=$row['id_expediente'];
			$this->acre_no_credito=$row['no_credito'];
			$this->acre_tipo_credito=$row['tipo_credito'];
			$this->acre_unidad_credito=$row['unidad_credito'];
			$this->acre_tipo_moneda=$row['tipo_moneda'];
			$this->acre_T1=$row['T1'];
			$this->acre_T2=$row['T2'];
			$this->acre_T3=$row['T3'];
			$this->acre_T4=$row['T4'];
			$this->acre_limite_cuota=$row['limite_cuota'];
			}
		}

	}
	public function get_Id_mov(){
		$query=$this->db->query("select max(Id) as max_movimiento from book_movimientos;"); 
  		$row=$query->row(); 
        return $this->id_mov=$row->max_movimiento;
	}
	public function get_Datosproducto(){
		$query=$this->db->query("select * from cat_productos where Nombre_Producto='$this->acre_tipo_credito';");
		if($this->acre_tipo_credito){
			foreach ($query->result_array() as $row){
			$this->apro_Nombre_Producto= $row['Nombre_Producto'];
			$this->apro_tolerancia_cuota= $row['tolerancia_cuota'];
			$this->apro_tiempo_liquidacion= $row['tiempo_liquidacion'];
			$this->apro_min_monto=$row['min_monto'];
			$this->apro_max_monto=$row['max_monto'];
			$this->apro_min_tiempo=$row['min_tiempo'];
			$this->apro_max_tiempo=$row['max_tiempo'];
			$this->apro_tolerancia_cuota_interes= $row['tolerancia_cuota_interes'];
			}
		}
	}
	public function get_Unidad_credito(){
		if($this->acre_unidad_credito){
			$query=$this->db->query("select * from cat_unidadcredito where  unidad_credito='$this->acre_unidad_credito';");
			foreach ($query->result_array() as $row){
			$this->auni_unidad_credito=$row['unidad_credito'];
			$this->auni_frecuencia_pago=$row['frecuencia_pago'];
			}
		}	
	}
	public function get_Tolerancia_pago(){
		$d=floatval($this->apro_tolerancia_cuota);
		$d1=floatval($this->apro_tolerancia_cuota_interes);
		$this->tolerancia_limite_cuota= (($this->acre_T2 *$d)+($this->acre_limite_cuota*$d1)); 
	}
	public function getAcumulado_movimiento(){
		if($this->tipo_cargo!=="PAGO INTERESES"){
			$d=floatval($this->apro_tolerancia_cuota);
			$this->tolerancia_limite_cuota_pagounico= $this->acre_T2 *$d;
		}
		if($this->tipo_cargo=="PAGO INTERESES"){
			if ($this->acre_limite_cuota > 0 ) {
				 $d=floatval($this->apro_tolerancia_cuota_interes);
			     $this->tolerancia_limite_cuota_pagounico= $this->acre_limite_cuota*$d;
			}
			else{
				$d=floatval($this->apro_tolerancia_cuota);
				$this->tolerancia_limite_cuota_pagounico= $this->acre_T2 *$d;
			}
		}
		if("CARGA INICIAL" !== $this->tipo_cargo){
		$cuota_movimiento=$this->T1;
			if($cuota_movimiento > $this->tolerancia_limite_cuota_pagounico){
				$hoy = date("Y-m-d H:i:s");
				$fecha=date("Y-m-d");
				$entidad= $_COOKIE["id_entidad"];
				$operador= $_COOKIE["id_operador"];  
				$alerta="Se excedió el límite de cuota estimado : ".$this->tolerancia_limite_cuota_pagounico."  Monto registrado ".$cuota_movimiento." # Movimiento ".$this->no_movimiento." con fecha ".$this->T2;
				$this->db->trans_start();
				$this->db->query("insert into book_alertas(tipo,id_operador,id_entidad,no_credito,id_movimiento,alerta,fecha_emision,origen,estado,pldkind)values(1,'$operador','$entidad','$this->acre_no_credito','$this->id_mov','$alerta','$hoy','MOVIMIENTOS','PENDIENTE','OI')");
				$this->db->trans_complete();
			}
		}
	}
}
?>