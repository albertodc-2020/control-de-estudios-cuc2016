<?php

Class representante
{
	
Private $codigoalumrep;
Private $cedularepre;
Private $nombrerep;
Private $apellidorep;
Private $fechanacrep;
Private $edadrep;
Private $lugarnacrep ;
Private $nacionrep;
Private $sexorep;
Private $edocivilrep;
Private $parentesco;
Private $ocupacionrep;
Private $direccion;
Private $telefonolocal;
Private $celular;
Private $email;






public function inicializar ($codigoalumrep,$cedularepre,$nombrerep,$apellidorep,$fechanacrep,$edadrep,$lugarnacrep,$nacionrep,$sexorep,$edocivilrep,$parentesco,$ocupacionrep,$direccion,$telefonolocal,$celular,$email,$pgconn) 
{
$this-> af_codigo_alumn_repre = $codigoalumrep;
$this-> af_cedurepre = $cedularepre;
$this-> af_nom_rep = $nombrerep;
$this-> af_ape_rep = $apellidorep;
$this-> dt_fecnac_rep = $fechanacrep;
$this-> nu_edad_rep = $edadrep;
$this-> af_lugarnac = $lugarnacrep;
$this-> ch_nac_rep =  $nacionrep;
$this-> ch_sexo_rep = $sexorep;
$this-> ch_edocivil = $edocivilrep;
$this-> af_parentesco = $parentesco; 
$this-> af_ocupacion = $ocupacionrep;
$this-> af_direccion = $direccion;
$this-> af_telehab =  $telefonolocal;
$this-> af_telcel = $celular;
$this-> af_correo = $email;
}

	Public function registro ($codigoalumrep,$cedularepre,$nombrerep,$apellidorep,$fechanacrep,$edadrep,$lugarnacrep,$nacionrep,$sexorep,$edocivilrep,$parentesco,$ocupacionrep,$direccion,$telefonolocal,$celular,$email,$pgconn) 
	{
    	
		$query="INSERT INTO representante (af_codigo_alumn_repre,af_cedurepre,af_nom_rep,af_ape_rep,dt_fecnac_rep,nu_edad_rep,af_lugarnac,ch_nac_rep,ch_sexo_rep,ch_edocivil,af_parentesco, af_ocupacion,af_direccion,af_telehab,af_telcel,af_correo)VALUES('$codigoalumrep','$cedularepre','$nombrerep','$apellidorep','$fechanacrep','$edadrep','$lugarnacrep','$nacionrep','$sexorep','$edocivilrep','$parentesco','$ocupacionrep','$direccion','$telefonolocal','$celular','$email')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        if ($consulta)
		{
			return ($consulta);
			
		}
    		
	}
	Public function consultarcodigo ($codigoalumrep,$pgconn)
	{
		$query="SELECT * from alumno where  af_codigo_alumn_repre ='$codigoalumrep' ;";
		$consultacod= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		if($consultacod)
		{
 				$nreg= pg_fetch_array($consultacod);
 				return  $nreg;
		}	
		
	}
}

?>