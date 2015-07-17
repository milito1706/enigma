<?php

class Conexion 
{
	var $con;
	var $db_pld;
	
	function setpld($dato){
		
			$this->db_pld=$dato;
		}
	function getpld(){
		
		echo $this->db_pld;
		}	
	function Conexion()
	{
		$host = "127.0.0.1";
		$usuario = "root";
		$password = "root";
		$bd = "pld_credifuturo";  //        	
		$conect= mysql_connect($host,$usuario,$password);
		if ($conect) 
		{
			mysql_select_db($bd);			
			 $this->con=$conect;
		}
	}
	function getConexion() 
	{
		return $this->con;
	}
	function Close() 
	{
		mysql_close($this->con);
	}	
}

class sQuery   
{
	var $coneccion;
	var $consulta;
	var $resultados;
	function sQuery()  
	{
		$this->coneccion= new Conexion();
	}
	function executeQuery($cons) 
	{
		mysql_query("set names 'utf8'"); 
		$this->consulta= mysql_query($cons,$this->coneccion->getConexion());
		return $this->consulta;
	}	
	function getResults()   
	{return $this->consulta;}
	
	function Close()		
	{$this->coneccion->Close();}	
	
	function Clean() 
	{mysql_free_result($this->consulta);}
	
	function getResultados() 
	{return mysql_affected_rows($this->coneccion->getConexion()) ;}
	
	function getAffect() 
	{return mysql_affected_rows($this->coneccion->getConexion()) ;}

    function fetchAll()
    {
        $rows=array();
		
		if ($this->consulta)
		{
			
			while($row=  mysql_fetch_array($this->consulta))
			{
				$rows[]=$row;
			}
		}
        return $rows;
    }
}



//calse para db de acceso a las base de datos
class Conexion_acc  
{
	var $con_acc;
	 function Conexion_acc()

	{
		$conection_acc['server']="127.0.0.1";  
		$conection_acc['user']="root";         
		$conection_acc['pass']="root";             
		$conection_acc['base']="propld_access";           
		$conect_acc= mysql_connect($conection_acc['server'],$conection_acc['user'],$conection_acc['pass']);

		if ($conect_acc) 
		{
			mysql_select_db($conection_acc['base']);			
			$this->con_acc=$conect_acc;
		}
		}
	
	function getConexion_acc() 
	{
		return $this->con_acc;
	}
	function Close_acc() 
	{
		mysql_close($this->con_acc);
	}	
}

class sQuery_acc  
{
	var $coneccion_acc;
	var $consulta_acc;
	var $resultados_acc;
	function sQuery_acc()  
	{
		$this->coneccion_acc= new Conexion_acc();
	}
	function executeQuery_acc($cons) 
	{
		$this->consulta_acc= mysql_query($cons,$this->coneccion_acc->getConexion_acc());
		return $this->consulta_acc;
	}	
	function getResults_acc()   
	{return $this->consulta_acc;}
	
	function Close_acc()		
	{$this->coneccion_acc->Close_acc();}	
	
	function Clean_acc() 
	{mysql_free_result($this->consulta_acc);}
	
	function getResultados_acc() 
	{return mysql_affected_rows($this->coneccion_acc->getConexion_acc()) ;}
	
	function getAffect_acc() 
	{return mysql_affected_rows($this->coneccion_acc->getConexion_acc()) ;}

    function fetchAll_acc()
    {
        $rows=array();
		
		if ($this->consulta_acc)
		{
			while($row=  mysql_fetch_array($this->consulta_acc))
			{
				$rows[]=$row;
			}
		}
        return $rows;
    }
}
//calse para db de entidades


class Bitacora {

	public static function registro($operacion,$archivo) {
            
            $entidad=$_COOKIE['id_entidad'];
			$operador=$_COOKIE['id_operador'];
            $name_op=$_COOKIE['name_operador'];
			
			$obj_bitacora = new sQuery();//bitacora
			$obj_bitacora->executeQuery("insert into system_log(id_entidad,id_operador,Fecha,name_operador,Operacion,archivo)values('$entidad','$operador',now(),'$name_op','$operacion','$archivo');");

	}

}
class Correo{

	public static function notificacion($alerta,$credito,$movimiento,$id_mov){

        
        $obj_num=new sQuery();
        $result=$obj_num->executeQuery("select Id from book_alertas where alerta='$alerta' and no_credito='$credito' and id_movimiento='$id_mov';");
        $row=mysql_fetch_array($result);
        $no_alerta=$row[0];

        date_default_timezone_set('america/mexico_city');
        $aviso="";
        //$email = "fabian.bautista@ubcubo.com";
		$email = $_COOKIE["email"];
		
		// asunto del email
		$subject = "Nueva alerta ProPLD :".$no_alerta;
		
		// Cuerpo del mensaje
		$mensaje = "------------------------------------------ \n";
		$mensaje.= "            Contacto               \n";
		$mensaje.= "------------------------------------------ \n";
		$mensaje.= "No. Alerta:   ".$no_alerta."\n";
		$mensaje.= "Alerta:   ".$alerta."\n";
		$mensaje.= "Asociado al Credito : ".$credito."\n";
		$mensaje.= "Asociado al Movimiento : ".$movimiento."\n";
		$mensaje.= "Fecha:    ".date("d/m/Y")."\n";
		$mensaje.= "Hora:     ".date("h:i:s a")."\n";
		//$mensaje.= "IP:       ".$_SERVER['REMOTE_ADDR']."\n\n";
		$mensaje.= "------------------------------------------ \n\n";
		//$mensaje.= $_POST['mensaje']."\n\n";
		$mensaje.= "------------------------------------------ \n";
		$mensaje.= "Enviado desde ProPLD \n";
		
		// headers del email
		$headers = "From: "."propld@gt-servicios.com"."\r\n";
		
		// Enviamos el mensaje
		if (mail($email, $subject, $mensaje, $headers)) 
		{
			$aviso = "Su mensaje fue enviado correctamente";
		} 
		else 
		{
			$aviso = "Error de envío";
		}

	}
	public static function notificacion_pep($alerta,$id_expediente){

        $obj_num=new sQuery();
        $result=$obj_num->executeQuery("select Id from book_alertas where alerta='$alerta' and id_expediente='$id_expediente';");
        $row=mysql_fetch_array($result);
        $no_alerta=$row[0];

		date_default_timezone_set('america/mexico_city');
        $aviso="";
        //$email = "fabian.bautista@ubcubo.com";
		$email = $_COOKIE["email"];
		
		// asunto del email
		$subject = "Nueva alerta ProPLD :".$no_alerta;
		
		// Cuerpo del mensaje
		$mensaje = "------------------------------------------ \n";
		$mensaje.= "            Contacto               \n";
		$mensaje.= "------------------------------------------ \n";
		$mensaje.= "No. Alerta:   ".$no_alerta."\n";
		$mensaje.= "Alerta:   ".$alerta."\n";
		$mensaje.= "Asociado al Expediente : ".$id_expediente."\n";
		$mensaje.= "Fecha:    ".date("d/m/Y")."\n";
		$mensaje.= "Hora:     ".date("h:i:s a")."\n";
		//$mensaje.= "IP:       ".$_SERVER['REMOTE_ADDR']."\n\n";
		$mensaje.= "------------------------------------------ \n\n";
		//$mensaje.= $_POST['mensaje']."\n\n";
		$mensaje.= "------------------------------------------ \n";
		$mensaje.= "Enviado desde ProPLD \n";
		
		// headers del email
		$headers = "From: "."propld@gt-servicios.com"."\r\n";
		
		// Enviamos el mensaje
		if (mail($email, $subject, $mensaje, $headers)) 
		{
			$aviso = "Su mensaje fue enviado correctamente";
		} 
		else 
		{
			$aviso = "Error de envío";
		}

	}
}		

?>
