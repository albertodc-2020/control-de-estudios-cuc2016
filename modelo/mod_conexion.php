<?php
class connex
{
	private $user;
	private $clave;
	private $servidor;
	private $db;
	private $port;
	private $pgconn;
	
	
	function connex()
	{
		$this->user='postgres';
		$this->clave='localhost';
		$this->servidor='localhost';
		$this->db='ebntap';
		$this->port='5434';
		$this->pgconn='';
	} 
	
	public function conectar () 
	{
					//$conexion=pg_connect("host= $this->servidor dbname= $this->db port= $this->port password= $this->clave user= $this->user")))
					//$this->pgconn= pg_connect("host=".$this->servidor."port=" .$this->port." password=" .$this->clave." user=".$this->user." dbname=" .$this->db."") or die ("ERROR DE CONEXION");
			$this->pgconn =pg_connect("host= $this->servidor dbname= $this->db port= $this->port password= $this->clave user= $this->user") or die ("ERROR DE CONEXION");
			$pgconn = $this->pgconn;
			$_SESSION['pgconn']=$pgconn;
			return $this->pgconn;
	}
}
?>
