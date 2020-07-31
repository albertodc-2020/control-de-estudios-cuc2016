<?php

Class registrar
{
private $cedula;
private $nombre ;
private $apellido ;
private $correo ;
private $usuario;
private $contrasena;
private $nivelusuario ;
private $statususer;
private $pgconn;

public function inicializar ($cedula,$nombre,$apellido,$correo,$usuario,$contrasena,$nivelusuario,$statususer)
{
      $this->	af_cedula = $cedula;
	  $this->	af_nombreusuario = $nombre;
	  $this->	af_apellidousuario = $apellido;
	  $this->	af_correousuario = $correo;
	  $this->	af_usuario = $usuario;
	  $this->	af_contrasena = $contrasena;
	  $this->	nu_nivel = $nivelusuario;
	  $this->	nu_status = $statususer;  
}

	Public function registro ($cedula,$nombre,$apellido,$correo,$usuario,$contrasena,$nivelusuario,$statususer,$pgconn)
	{
    	
		$query="INSERT INTO login (af_cedula,af_nombreusuario,af_apellidousuario,af_correousuario,af_usuario,af_contrasena,nu_nivel,nu_status)
		    VALUES('$cedula','$nombre','$apellido','$correo','$usuario','$contrasena',$nivelusuario,$statususer)";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        if ($consulta)
		{
			return ($consulta);
			
		}
    		
	}	
		Public function consultarced ($cedula,$pgconn)
	{
		$query="SELECT * from login where af_cedula='$cedula'";
		$consultaced= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		if($consultaced)
		{
 				$nreg= pg_fetch_array($consultaced);
				return  $nreg;
		}
	}		

		Public function consultarcorreo ($correo,$pgconn)
	{
		$query="SELECT * from login where af_correousuario='$correo'";
		$consultacor= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		if($consultacor)
		{
 				$nreg= pg_fetch_array($consultacor);
				return  $nreg;
		}
	}		
	Public function consultarusuario ($usuario,$pgconn)
	{
		$query="SELECT * from login where af_usuario='$usuario'";
		$consultausu= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		if($consultausu)
		{
 				$nreg= pg_fetch_array($consultausu);
				return  $nreg;
		}
	}
	Public function buscarmodificar ($cedula,$pgconn)
	{		
	if(isset($_POST['buscar'])){
	$cedula2=$_POST['cod1'];
	$query="SELECT * FROM login  WHERE af_cedula='$cedula2' ";
	$result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());

	$row=pg_fetch_array($result);

	$cedula 			=        $row['af_cedula'];
	$nombre 			=        $row['af_nombreusuario'];
	$apellido 			=        $row['af_apellidousuario'];
	$correo 			=        $row['af_correousuario'];
	$usuario 			=        $row['af_usuario'];
	$contrasena 		=        $row['af_contrasena'];
	$nivelusuario 		=        $row['nu_nivel'];
	$statususer 		=        $row['nu_status'];
	
	if($cedula2!=$cedula)
{
	 			echo "<script> alert('La Cedula de Identidad N° $cedula no esta registrada en la base de datos')</script>";
  				echo "<script> window.location='../vista/v_actualizarusuario.html'</script>";




}
else
{
	echo "<!DOCTYPE html> <html lang='es'> <head> <meta charset='UTF-8'> <title>Administrar Usuario</title> <link rel='stylesheet' type='text/css' href='../css/estilo.css'/> <link rel='stylesheet' href='../css/font-awesome.min.css'> </head> <body> <script src='..\js\validarcontra.js'></script> <script src='..\js\jquery-3.1.0.min.js'></script> <script src='..\js\java.js'></script> <div id='general'> <div id='tope'> </div> <div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li> <li><a href='../vista/v_actualizarusuario.html'>Actualizar Datos de Usuario</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'> </a> </div><a href='javascript:void(0)'> <div id='contenedor'> <form id ='form1' name='form1' method='post' action='..\controladores\con_bususuario.php'> <h2>Actualizar Datos de Usuario</h2> <label for='cod1'> Ingrese La Cedula de Identidad:</label> <input type='text' name='cod1' id='cod1' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 E1234567' maxlength='12'><br> <input type='submit' name='buscar' value='Buscar' id='boton'> </form> <form id='form1' name='form1' method=post  action='..\controladores\con_modiusuario.php'> <h2>Actualizar Datos de Usuario </h2> <label for='cedula'> Cedula de Identidad:</label> <input type='text' name='cedu' id='cedu' pattern='^([VE]{1})([0-9]{7,12})$' placeholder='V1234567 o E1234567' maxlength='12' readonly value='$cedula'> <label for='nombre'> Nombres:</label> <input type='text' name='name' id='name' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Nombres' maxlength='30' value='$nombre'> <label for='cedula'> Apellidos:</label> <input type='text' name='ape' id='ape' pattern='[A-Za-z ]{2,30}' placeholder='Escriba Apellidos' maxlength='30' value='$apellido'> <label for='correo'> Correo Electronico:</label> <input type='text' name='email' id='email' pattern='[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9.-]+' maxlength='30' placeholder='abc123@aol.com' Readonly value='$correo' > <label for='nombre'> Usuario:</label> <input type='text' name='user' id='user' pattern='^([a-z0-9]){5,12}$' placeholder='Escriba usuario en minusculas' maxlength='30' Readonly value='$usuario'> <label for='correo'>  Contraseña:</label> <input type='password' name='contra2' id='contra2' pattern='[A-Za-z0-9!?-]{6,12}' maxlength='15' placeholder='Repita contraseña' value='$contrasena'><label for='tipo'> Nivel de Usuario:</label> <select name='nivel' id='nivel' > <option value='$nivelusuario' selected>$nivelusuario</option> <option value='1'>Administrador</option> <option value='2'>Director(a)</option> <option value='3'>Secretaria</option> </select> <label for='sexo'> Status:</label> <select name='status' id='status' > <option value='$statususer' selected>$statususer</option> <option value='1'>Activo</option> <option value='0'>Inactivo</option> </select> <input type='submit' name='guardar' value='Registrar Datos' id='boton' onclick='return(verif(this.form)); MM_validateForm()'> </form> </div><br> </div><a href='javascript:void(0)'> </a></body> </html>";
	}
  }

}
			Public function modificar ($cedula,$nombre,$apellido,$correo,$usuario,$contrasena,$nivelusuario,$statususer,$pgconn)
			{
			$query="UPDATE login SET  af_nombreusuario='$nombre',af_apellidousuario='$apellido',af_contrasena='$contrasena',nu_nivel='$nivelusuario',nu_status='$statususer'WHERE af_cedula='$cedula'";
			$modi= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
			if($modi=true)
		 {
 				 echo "<script>alert('Los datos de usuario se han actualizado correctamente')</script>";

  				echo "<script>window.location='../vista/v_actualizarusuario.html'</script>";
 		}		
 		else
 		{

  		

  				echo "<script>alert('Datos no pudieron ser registrados')</script>";
 	}
		                 
  }
}
?>