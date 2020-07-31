<?php


Class usuario

{
	
	
	private $usuario;
	private $cedula;
	private $clave;
	private $nivel;
	private $ruta;
	private $nu_status;
	private $pgconn;
	
	Function inicializar($usuario,$cedula,$clave,$nivel,$pgconn)
	{
		
		$this->af_cedula	=$cedula;
		$this->af_usuario	=$usuario;
		$this->af_contrasena	=$clave;
		$this->nu_nivel	=$nivel;
		$this->pgconn	=$pgconn;
		
	}
	public function agregar($cedula,$usuario,$clave,$nivel,$pgconn)
	{
		$query="insert into Login (af_cedula,af_usuario,af_contrasena,nu_nivel,nu_status)values('$cedula','$usuario','$clave','$nivel',1)";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:".pg_last_error());
		return $consulta;
	
	}
	
	public function modificar($cedula,$usuario,$nivel,$ruta,$status,$pgconn)
	{
		$query="update login set af_cedula='$cedula',af_usuario='$usuario',nu_nivel='$nivel',af_ruta_nivel='$ruta',nu_status=$status where cedula='$cedula'";
		$rec =pg_query($pgconn,$query) or die ("Consulta errónea:" .pg_last_error());
		
		if ($rec)
		{
			
			return "ok";
		}
		else
		{
			return "nok";
		}
	}
	public function modificarDesactivado($cedula,$status,$pgconn)
	{
		
		$query ="update Login set af_cedula='$cedula',nu_status=$status where af_cedula ='$cedula'";
		$rec=pg_query($pgconn,$query) or die ("Consulta errónea:".pg_last_error());
		if ($rec)
		{
			return "ok";
		}
		else
		{
			return "nok";
		}
	}
	public function eliminar($cedula,$pgconn)
	{
		$query= "update login set nu_status=2 where af_cedula ='$cedula'";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:" .pg_last_error());
		return $consulta;
	}
	
	public function autenticar($usuario,$clave,$pgconn)
	{
		$query="select * from login where af_usuario='$usuario' and af_contrasena='$clave';";
		$consulta = pg_query($pgconn,$query) or die ("Consulta errónea:".pg_last_error());
		if ($consulta)
		{
			$columna =pg_fetch_array($consulta);
			return $columna;
		}
		else
		{
			echo "Error en la consulta a la base de datos". "<br>";
		}
	}
	public function consultarusuarios($pgconn)
	{
		$query="select af_cedula,af_usuario,nu_nivel from login where nu_status=1 order by cedula";
		$consulta =pg_query($query) or die ("Consulta errónea:" .pg_last_error());
		if ($consulta)
		{
			return $consulta;
		}
		
	}
	public function consultarUNusuario($cedula_emp)
	{
		$query="select from login where af_cedula='$cedula_emp'";
		$consulta=pg_query($query) or die ("Consulta errónea:" .pg_last_error());
		if ($consulta)
		{
			$nreg =pg_fetch_array($consulta);
			return $nreg;
		}
	}
}