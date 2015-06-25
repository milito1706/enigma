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
function get_DatosFrecuenciapago(){
			
			if($this->auni_unidad_credito=='SEMANAL'){

					$dias=7;
			}
			if($this->auni_unidad_credito=='QUINCENAL'){

					$dias=15;
			}
			if($this->auni_unidad_credito=='MENSUAL'){

					$dias=30;
			}
			if($this->auni_unidad_credito=='BIMESTRAL'){

					$dias=60;
			}
			if($this->auni_unidad_credito=='TRIMESTRAL'){

					$dias=90;
			}
			if($this->auni_unidad_credito=='SEMESTRAL'){

					$dias=180;
			}
			if($this->auni_unidad_credito=='ANUAL'){

					$dias=360;
			}
			if($this->auni_unidad_credito=='AL VENCIMIENTO'){
					
					$this->fecha_movimiento=$this->T2;//'2014-07-24';
					$this->a=$this->acre_T3;
					$this->b=$this->acre_T4;
					if ($this->b > $this->fecha_movimiento) {
						$this->rango_fecha=$this->a;
						$this->rango_fecha2=$this->b;
					$query=$this->db->query("select id_credito,count(T1) as contar,sum(T1) as suma from book_movimientos where id_credito='$this->acre_no_credito' and T2 between '$this->a' and '$this->b' group by id_credito;");
					$row=$query->row(); 
					$this->frecuenciasuma_pagos=$row->contar;
					$this->frecuencia_suma=$row->suma;
					}
					if ($this->b < $this->fecha_movimiento) {
						$this->rango_fecha=$this->a;
						$this->rango_fecha2=$this->fecha_movimiento;
					$query=$this->db->query("select id_credito,count(T1) as contar,sum(T1) as suma from book_movimientos where id_credito='$this->acre_no_credito' and T2 between '$this->a' and '$this->fecha_movimiento' group by id_credito;");
					$row=$query->row();			
					$this->frecuenciasuma_pagos=$row->contar;
					$this->frecuencia_suma=$row->suma;
					}
			}
			if($dias){
					$fecha_movimiento=$this->T2;//'2014-07-24';
					$a=$this->acre_T3;
					$b=$this->acre_T4;

					$query=$this->db->query("SELECT TO_DAYS('$a') as dias;");
					$row=$query->row();
					$rango_fechainicial=$row->dias;

					$query=$this->db->query("SELECT TO_DAYS('$b' as diasb);");
					$row=$query->row();
					$rango_fechafinal=$row->diasb;

					for($j=$rango_fechainicial; $j<$rango_fechafinal;  $j=$j+$dias ){		
							$query=$this->query("SELECT from_DAYS($j) as diasc;");
							$row=$query->row();
							$frecuencia_pagos=$row->diasc;

					if ($fecha_movimiento >= $frecuencia_pagos) {
							$this->rango_fecha=$frecuencia_pagos;
							$query=$this->query("SELECT from_days(TO_DAYS('$this->rango_fecha')+$dias as diasd);");
							$row=$query->row();
							$this->rango_fecha2=$row->diasd;
						}
					$query=$this->db->query("select id_credito,count(T1) as contar,sum(T1) as suma from book_movimientos where id_credito='$this->acre_no_credito' and T2 between '$this->rango_fecha' and '$this->rango_fecha2' group by id_credito;");
					$row=$query->row();
					$this->frecuenciasuma_pagos=$row->contar;
					$this->frecuencia_suma=$row->suma;
					}
					
				}
		}

	public function get_Frecuencias(){
				
		if("CARGA INICIAL" !== $this->tipo_cargo){
				if($this->frecuenciasuma_pagos){
				$entidad= $_COOKIE["id_entidad"];
				$operador= $_COOKIE["id_operador"];
				$hoy = date("Y-m-d H:i:s"); 
					
				if($this->frecuenciasuma_pagos > $this->auni_frecuencia_pago){
				$alerta="Se excedio el numero de pagos permitidos en la unidad de credito: ".$this->apro_Nombre_Producto." Frecuencia  ".$this->auni_unidad_credito." pagos permitidos: ". $this->auni_frecuencia_pago." Frecuencia ".$this->auni_unidad_credito." Pagos registrados: ".$this->frecuenciasuma_pagos." periodo: ".$this->rango_fecha." a ".$this->rango_fecha2;
				$this->db->trans_start();
				$this->db->query("insert into book_alertas(tipo,id_operador,id_entidad,no_credito,id_movimiento,alerta,fecha_emision,origen,estado,pldkind)values(2,'$operador','$entidad','$this->acre_no_credito','$this->id_mov','$alerta','$hoy','MOVIMIENTOS','PENDIENTE','OI')");
				$this->db->trans_complete();
				}
			}
				
				if( $this->auni_unidad_credito =='AL VENCIMIENTO' OR $this->auni_unidad_credito =='ANUAL' OR $this->auni_unidad_credito =='SEMESTRAL' OR $this->auni_unidad_credito=='TRIMESTRAL' OR $this->auni_unidad_credito=='BIMESTRAL'){
					if($this->frecuencia_suma){
						if($this->frecuencia_suma > $this->tolerancia_limite_cuota){
							$entidad= $_COOKIE["id_entidad"];
							$operador= $_COOKIE["id_operador"];
							$hoy = date("Y-m-d H:i:s"); 
							$alerta="Excedio el monto maximo acumulado en un periodo ". $this->auni_unidad_credito ." :".$this->tolerancia_limite_cuota."  Monto acumulado".$this->frecuencia_suma." periodo: ".$this->rango_fecha." a ".$this->rango_fecha2;
							$this->db->trans_start();
							$this->db->query("insert into book_alertas(tipo,id_operador,id_entidad,no_credito,id_movimiento,alerta,fecha_emision,origen,estado,pldkind)values(2,'$operador','$entidad','$this->acre_no_credito','$this->id_mov','$alerta','$hoy','MOVIMIENTOS','PENDIENTE','OI')");
							$this->db->trans_complete();
						}
					}
				}

				if ($this->auni_unidad_credito =='MENSUAL') {
					      $fech= $this->T2;
                     $fechaac= explode("-",$fech);
                     $año = $fechaac[0]; // porción1
                     $mes = $fechaac[1];
                     $entidad= $_COOKIE["id_entidad"];
					$operador= $_COOKIE["id_operador"];
					$hoy = date("Y-m-d H:i:s"); 
					$query=$this->db->query("select id_credito,count(T1),sum(T1) as sumaa from book_movimientos where id_credito='$this->acre_no_credito' and  DATE_FORMAT(T2,'%c')=$mes  AND DATE_FORMAT(T2,'%Y')=$año  group by id_credito;");
					$row=$query->row();
					$this->frecuenciaquincena_suma=$row->sumaa;
					
					$acumulado = $this->tolerancia_limite_cuota;
					if($this->frecuenciaquincena_suma > $acumulado){
							$alerta="Excedio el monto maximo acumulado Mensual: ".$acumulado."  Monto acumulado".$this->frecuenciaquincena_suma." periodo: ".$año."-".$mes;
							$this->db->trans_start();
							$this->db->query("insert into book_alertas(tipo,id_operador,id_entidad,no_credito,id_movimiento,alerta,fecha_emision,origen,estado,pldkind)values(2,'$operador','$entidad','$this->acre_no_credito','$this->id_mov','$alerta','$hoy','MOVIMIENTOS','PENDIENTE','OI')");
							$this->db->trans_complete();
					}
								
				}




				if ($this->auni_unidad_credito =='QUINCENAL') {

							$fech= $this->T2;
                     $fechaac= explode("-",$fech);
                     $año = $fechaac[0]; // porción1
                     $mes = $fechaac[1];
                     $entidad= $_COOKIE["id_entidad"];
					$operador= $_COOKIE["id_operador"];
					$hoy = date("Y-m-d H:i:s"); 
					
						
					$query=$this->db->query("select id_credito,count(T1),sum(T1) as sumab from book_movimientos where id_credito='$this->acre_no_credito' and  DATE_FORMAT(T2,'%c')=$mes  AND DATE_FORMAT(T2,'%Y')=$año  group by id_credito;");
					$row=$query->row();
					$this->frecuenciaquincena_suma=$row->sumab;
					
					$acumulado = $this->tolerancia_limite_cuota*2;
					if($this->frecuenciaquincena_suma> $acumulado){
							$alerta="Excedio el monto maximo acumulado Mensual: ".$acumulado."  Monto acumulado".$this->frecuenciaquincena_suma." periodo: ".$año."-".$mes;
							$this->trans_start();
							$this->db->query("insert into book_alertas(tipo,id_operador,id_entidad,no_credito,id_movimiento,alerta,fecha_emision,origen,estado,pldkind)values(2,'$operador','$entidad','$this->acre_no_credito','$this->id_mov','$alerta','$hoy','MOVIMIENTOS','PENDIENTE','OI')");
							$this->trans_complete();
					}
								
				}

				if ($this->auni_unidad_credito =='SEMANAL') {

					$fech= $this->T2;
                    $fechaac= explode("-",$fech);
                    $año = $fechaac[0]; // porción1
                    $mes = $fechaac[1]; 
                    $entidad= $_COOKIE["id_entidad"];
					$operador= $_COOKIE["id_operador"];
					$hoy = date("Y-m-d H:i:s"); 
					$query=$this->db->query("select id_credito,count(T1),sum(T1) as sumac from book_movimientos where id_credito='$this->acre_no_credito' and  DATE_FORMAT(T2,'%c')=$mes  AND DATE_FORMAT(T2,'%Y')=$año  group by id_credito;");
					$row->$query->row();
					$this->frecuenciasemana_suma=$row->sumac;
					$acumulado = $this->tolerancia_limite_cuota*5;
					if($this->frecuenciasemana_suma > $acumulado){
					$alerta="Excedio el monto maximo acumulado Mensual: ".$acumulado."Monto acumulado".$this->frecuenciasemana_suma." periodo: ".$año."-".$mes;
					$this->trans_start();
					$this->db->query("insert into book_alertas(tipo,id_operador,id_entidad,no_credito,id_movimiento,alerta,fecha_emision,origen,estado,pldkind)values(2,'$operador','$entidad','$this->acre_no_credito','$this->id_mov','$alerta','$hoy','MOVIMIENTOS','PENDIENTE','OI')");
					$this->trans_complete();
					}
				}
			}

		}	


}
?>