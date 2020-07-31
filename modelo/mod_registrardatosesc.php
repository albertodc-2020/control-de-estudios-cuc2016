<?php

Class periodoesc
{
	
Private $codigoalum;
Private $lite1;
Private $periodo1;
Private $lite2;
Private $periodo2;
Private $lite3 ;
Private $periodo3;
Private $lite4;
Private $periodo4;
Private $lite5;
Private $periodo5;
Private $lite6;
Private $periodo6;
Private $fechaegre;





public function inicializar ($lite1,$lite2,$lite3,$lite4,$lite5,$lite6,$periodo1,$periodo2,$periodo3,$periodo4,$periodo5,$periodo6,$codigoalum,$fechaegre,$pgconn) 
{
$this->  af_cod_alumliteral = $codigoalum;
$this-> af_literal_1er 		= $lite1;
$this-> af_periodoesco_1er  = $periodo1;
$this-> af_literal_2do 		= $lite2;
$this-> af_periodoesco_2do 	= $periodo2;
$this-> af_literal_3er 		= $lite3;
$this-> af_periodoesco_3er 	= $periodo3;
$this-> af_literal_4to 		= $lite4;
$this-> af_periodoesco_4to 	= $periodo4;
$this-> af_literal_5to 		= $lite5;
$this-> af_periodoesco_5to 	= $periodo5;
$this-> af_literal_6to 		= $lite6;
$this-> af_periodoesco_6to	= $periodo6;
$this-> af_fec_egre 		= $fechaegre;
}

	Public function registro ($lite1,$lite2,$lite3,$lite4,$lite5,$lite6,$periodo1,$periodo2,$periodo3,$periodo4,$periodo5,$periodo6,$codigoalum,$fechaegre,$pgconn)
	{
    	
		$query="INSERT INTO literal (af_literal_1er,af_literal_2do,af_literal_3er,af_literal_4to,af_literal_5to,af_literal_6to,af_periodoesco_1er,af_periodoesco_2do,af_periodoesco_3er,af_periodoesco_4to,af_periodoesco_5to,af_periodoesco_6to,af_cod_alumliteral,af_fec_egre)VALUES('$lite1','$lite2','$lite3','$lite4','$lite5','$lite6','$periodo1','$periodo2','$periodo3','$periodo4','$periodo5','$periodo6','$codigoalum','$fechaegre')";
		$consulta= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
        if ($consulta)
		{
			return ($consulta);
			
		}
    		
	}	
		Public function consultarcodigo ($codigoalum,$pgconn)
	{
		$query="SELECT * from literal where  af_cod_alumliteral ='$codigoalum' ;";
		$consultacod= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		if($consultacod)
		{
 				$nreg= pg_fetch_array($consultacod);
 				return  $nreg;
		}
	}		
		Public function buscarcodigo ($codigoe,$pgconn)
	{	
		if(isset($_POST['buscar'])){
           $codigoe=$_POST['cod1'];
           $query="SELECT * FROM literal WHERE af_cod_alumliteral='$codigoe'";
           $result=pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
           
           $row=pg_fetch_array($result);
           
           $codigoalum	=			$row['af_cod_alumliteral'];
           $lite1 		= 			$row['af_literal_1er'];
           $periodo1 	= 			$row['af_periodoesco_1er'];
           $lite2	 	= 			$row['af_literal_2do'];
           $periodo2 	= 			$row['af_periodoesco_2do'];
           $lite3 		=			$row['af_literal_3er'];
           $periodo3	=			$row['af_periodoesco_3er'];
           $lite4 		=			$row['af_literal_4to'];
           $periodo4 	=			$row['af_periodoesco_4to'];
           $lite5		=			$row['af_literal_5to'];
           $periodo5	=			$row['af_periodoesco_5to'];
           $lite6		=			$row['af_literal_6to'];
           $periodo6	=			$row['af_periodoesco_6to'];
           $fechaegre	=			$row['af_fec_egre'];
           
           
           if($codigoe!=$codigoalum){
	 			echo "<script>alert('El Codigo de estudiante N° $codigoe no esta registrado en la base de datos')</script>";

  				echo "<script>window.location='../vista/v_actdatosperiodoesc.html'</script>";

		}
		else
		{
	
		echo "<!DOCTYPE html> <html lang='es'> <head> <meta charset='UTF-8'> <title>Administrar Usuario</title> <link rel='stylesheet' type='text/css' href='../css/estilolietral.css'/> <link rel='stylesheet' href='../css/font-awesome.min.css'> </head> <body> <script src='..\js\validarcontra.js'></script> <script src='..\js\jquery-3.1.0.min.js'></script> <script src='..\js\java.js'></script> <div id='general'> <div id='tope'> </div> <div id='menu'> <ul id='menuacordeon' class='menuacordeon'> <li class='abierto'> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Estudiante&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registraralumno.html'>Registrar Estudiante</a></li> <li><a href='../vista/v_menuactualizar.html'>Actualizar Datos de Estudiante</a></li> </ul> <li> <div class='link'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>&nbsp;Gestionar Personal&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarpersonal.html'>Registrar Personal</a></li> <li><a href='../vista/v_menuactualizarper.html'>Actualizar Datos de Personal</a></li> </ul> <li> <div class='link'><i class='fa fa-users' aria-hidden='true'></i>&nbsp;Administrar Usuario&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_registrarusuario.html'>Registar Usuario</a></li> <li><a href='../vista/v_actualizarusuario.html'>Actualizar Datos de Usuario</a></li> </ul> <li> <div class='link'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Reportes&nbsp;<i class='fa fa-chevron-circle-down' aria-hidden='true'></i></div> <ul class='submenu'> <li><a href='../vista/v_generarreporte.html'>Generar Reportes</a></li> </ul> <li> <div class='link'><i class='fa fa-users' ></i><a href='../controladores/cont_cierre.php'>&nbsp;Cerrar Sesión&nbsp;</div><a href='javascript:void(0)'></a></div><a href='javascript:void(0)'><div id='contenedor'><form id ='form1' name='form1' method='post' action='..\controladores\con_buscardatosesc.php'><h2>Actualizar Datos Escolares</h2> <label for='cod1'> Ingrese Codigo de Estudiante:</label> <input type='text' name='cod1' id='cod1' pattern='^([A-Z]{1})([0-9]{3,12})$' placeholder='Escriba Codigo' maxlength='12'><br> <input type='submit' name='buscar' value='Buscar' id='boton'></form> <form id='form1' name='form1' method='post' action='../controladores/con_modidatosesc.php'> <h2>Datos del periodo Escolar</h2> <label class='fontegreso' for='fec_egreso'> Codigo de alumno:</label> <input class='egreso' type='text' name='cod' pattern='^([A-Z]{1})([0-9]{3,12})$' id='cod' value='$codigoalum' readonly ><br> <h2>Literales</h2> <label for='literal'> Literal 1er Grado:</label> <select name='lite_1er' id='lite_1er' ><option value='$lite1' selected>$lite1</option> <option value=''></option> <option value='A'>A</option> <option value='B'>B</option> <option value='C'>C</option> <option value='D'>D</option> <option value='E'>E</option> <option value='F'>F</option> </select> <label for='periodo'> Periodo Escolar:</label> <select class='periodo' name='periodo_1er' id='periodo_1er' ><option value='$periodo1' selected>$periodo1</option> <option value=''></option> <option value='2002-2003'>2002-2003</option> <option value='2003-2004'>2003-2004</option> <option value='2004-2005'>2004-2005</option> <option value='2005-2006'>2005-2006</option> <option value='2006-2007'>2006-2007</option> <option value='2007-2008'>2007-2008</option> <option value='2008-2009'>2008-2009</option> <option value='2009-2010'>2009-2010</option> <option value='2010-2011'>2010-2011</option> <option value='2011-2012'>2011-2012</option> <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option> <option value='2015-2016'>2015-2016</option> <option value='2016-2017'>2016-2017</option> <option value='2017-2018'>2017-2018</option> <option value='2018-2019'>2018-2019</option> <option value='2019-2020'>2019-2020</option> <option value='2020-2021'>2020-2021</option> <option value='2021-2022'>2021-2022</option> <option value='2022-2023'>2022-2023</option> <option value='2023-2024'>2023-2024</option> <option value='2024-2025'>2024-2025</option> <option value='2025-2026'>2025-2026</option> </select> <label for='literal'> Literal 2do Grado:</label> <select name='lite_2do' id='lite_2do' > <option value='$lite2' selected>$lite2</option><option value=''></option> <option value='A'>A</option> <option value='B'>B</option> <option value='C'>C</option> <option value='D'>D</option> <option value='E'>E</option> <option value='F'>F</option> </select> <label for='periodo'> Periodo Escolar:</label> <select class='periodo' name='periodo_2do' id='periodo_2do' > <option value='$periodo2' selected>$periodo2</option> <option value=''></option> <option value='2002-2003'>2002-2003</option> <option value='2003-2004'>2003-2004</option> <option value='2004-2005'>2004-2005</option> <option value='2005-2006'>2005-2006</option> <option value='2006-2007'>2006-2007</option> <option value='2007-2008'>2007-2008</option> <option value='2008-2009'>2008-2009</option> <option value='2009-2010'>2009-2010</option> <option value='2010-2011'>2010-2011</option> <option value='2011-2012'>2011-2012</option> <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option> <option value='2015-2016'>2015-2016</option> <option value='2016-2017'>2016-2017</option> <option value='2017-2018'>2017-2018</option> <option value='2018-2019'>2018-2019</option> <option value='2019-2020'>2019-2020</option> <option value='2020-2021'>2020-2021</option> <option value='2021-2022'>2021-2022</option> <option value='2022-2023'>2022-2023</option> <option value='2023-2024'>2023-2024</option> <option value='2024-2025'>2024-2025</option> <option value='2025-2026'>2025-2026</option> </select> <label for='literal'> Literal 3er Grado:</label> <select name='lite_3er' id='lite_3er' ><option value='$lite3' selected>$lite3</option> <option value=''></option> <option value='A'>A</option> <option value='B'>B</option> <option value='C'>C</option> <option value='D'>D</option> <option value='E'>E</option> <option value='F'>F</option> </select> <label for='periodo'> Periodo Escolar:</label> <select class='periodo' name='periodo_3er' id='periodo_3er' ><option value='$periodo3' selected>$periodo3</option> <option value=''></option> <option value='2002-2003'>2002-2003</option> <option value='2003-2004'>2003-2004</option> <option value='2004-2005'>2004-2005</option> <option value='2005-2006'>2005-2006</option> <option value='2006-2007'>2006-2007</option> <option value='2007-2008'>2007-2008</option> <option value='2008-2009'>2008-2009</option> <option value='2009-2010'>2009-2010</option> <option value='2010-2011'>2010-2011</option> <option value='2011-2012'>2011-2012</option> <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option> <option value='2015-2016'>2015-2016</option> <option value='2016-2017'>2016-2017</option> <option value='2017-2018'>2017-2018</option> <option value='2018-2019'>2018-2019</option> <option value='2019-2020'>2019-2020</option> <option value='2020-2021'>2020-2021</option> <option value='2021-2022'>2021-2022</option> <option value='2022-2023'>2022-2023</option> <option value='2023-2024'>2023-2024</option> <option value='2024-2025'>2024-2025</option> <option value='2025-2026'>2025-2026</option> </select> <label for='literal'> Literal 4to Grado:</label> <select name='lite_4to' id='lite_4to' ><option value='$lite4' selected>$lite4</option> <option value=''></option> <option value='A'>A</option> <option value='B'>B</option> <option value='C'>C</option> <option value='D'>D</option> <option value='E'>E</option> <option value='F'>F</option> </select> <label for='periodo'> Periodo Escolar:</label> <select class='periodo' name='periodo_4to' id='periodo_4to' ><option value='$periodo4' selected>$periodo4</option> <option value=''></option> <option value='2002-2003'>2002-2003</option> <option value='2003-2004'>2003-2004</option> <option value='2004-2005'>2004-2005</option> <option value='2005-2006'>2005-2006</option> <option value='2006-2007'>2006-2007</option> <option value='2007-2008'>2007-2008</option> <option value='2008-2009'>2008-2009</option> <option value='2009-2010'>2009-2010</option> <option value='2010-2011'>2010-2011</option> <option value='2011-2012'>2011-2012</option> <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option> <option value='2015-2016'>2015-2016</option> <option value='2016-2017'>2016-2017</option> <option value='2017-2018'>2017-2018</option> <option value='2018-2019'>2018-2019</option> <option value='2019-2020'>2019-2020</option> <option value='2020-2021'>2020-2021</option> <option value='2021-2022'>2021-2022</option> <option value='2022-2023'>2022-2023</option> <option value='2023-2024'>2023-2024</option> <option value='2024-2025'>2024-2025</option> <option value='2025-2026'>2025-2026</option> </select> <label for='literal'> Literal 5to Grado:</label> <select name='lite_5to' id='lite_5to' ><option value='$lite5' selected>$lite5</option> <option value=''></option> <option value='A'>A</option> <option value='B'>B</option> <option value='C'>C</option> <option value='D'>D</option> <option value='E'>E</option> <option value='F'>F</option> </select> <label for='periodo'> Periodo Escolar:</label> <select class='periodo' name='periodo_5to' id='periodo_5to' ><option value='$periodo5' selected>$periodo5</option> <option value=''></option> <option value='2002-2003'>2002-2003</option> <option value='2003-2004'>2003-2004</option> <option value='2004-2005'>2004-2005</option> <option value='2005-2006'>2005-2006</option> <option value='2006-2007'>2006-2007</option> <option value='2007-2008'>2007-2008</option> <option value='2008-2009'>2008-2009</option> <option value='2009-2010'>2009-2010</option> <option value='2010-2011'>2010-2011</option> <option value='2011-2012'>2011-2012</option> <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option> <option value='2015-2016'>2015-2016</option> <option value='2016-2017'>2016-2017</option> <option value='2017-2018'>2017-2018</option> <option value='2018-2019'>2018-2019</option> <option value='2019-2020'>2019-2020</option> <option value='2020-2021'>2020-2021</option> <option value='2021-2022'>2021-2022</option> <option value='2022-2023'>2022-2023</option> <option value='2023-2024'>2023-2024</option> <option value='2024-2025'>2024-2025</option> <option value='2025-2026'>2025-2026</option> </select> <label for='literal'> Literal 6to Grado:</label> <select name='lite_6to' id='lite_6to' ><option value='$lite6' selected>$lite6</option> <option value=''></option> <option value='A'>A</option> <option value='B'>B</option> <option value='C'>C</option> <option value='D'>D</option> <option value='E'>E</option> <option value='F'>F</option> </select > <label for='periodo'> Periodo Escolar:</label> <select class='periodo' name='periodo_6to' id='periodo_6to' > <option value='$periodo6' selected>$periodo6</option><option value='></option> <option value='2002-2003'>2002-2003</option> <option value='2003-2004'>2003-2004</option> <option value='2004-2005'>2004-2005</option> <option value='2005-2006'>2005-2006</option> <option value='2006-2007'>2006-2007</option> <option value='2007-2008'>2007-2008</option> <option value='2008-2009'>2008-2009</option> <option value='2009-2010'>2009-2010</option> <option value='2010-2011'>2010-2011</option> <option value='2011-2012'>2011-2012</option> <option value='2012-2013'>2012-2013</option> <option value='2013-2014'>2013-2014</option> <option value='2014-2015'>2014-2015</option> <option value='2015-2016'>2015-2016</option> <option value='2016-2017'>2016-2017</option> <option value='2017-2018'>2017-2018</option> <option value='2018-2019'>2018-2019</option> <option value='2019-2020'>2019-2020</option> <option value='2020-2021'>2020-2021</option> <option value='2021-2022'>2021-2022</option> <option value='2022-2023'>2022-2023</option> <option value='2023-2024'>2023-2024</option> <option value='2024-2025'>2024-2025</option> <option value='2025-2026'>2025-2026</option> </select> <label class='fontegreso' for='fec_egreso'> Fecha de egreso de estudiante:</label> <input class='egreso' name='fec_egreso' type='date' id='fec_egreso' value='$fechaegre' ><br> <input type='submit' name='guardar' value='Actualizar Datos' id='boton' > </form></form></div><br></div><a href='javascript:void(0)'></a></body></html>"; 
		}
	}
}
		Public function modificar  ($lite1,$lite2,$lite3,$lite4,$lite5,$lite6,$periodo1,$periodo2,$periodo3,$periodo4,$periodo5,$periodo6,$codigoalum,$fechaegre,$pgconn)
		{
			$query="UPDATE literal SET af_literal_1er='$lite1',af_literal_2do='$lite2',af_literal_3er='$lite3',af_literal_4to='$lite4',af_literal_5to='$lite5',af_literal_6to='$lite6',af_periodoesco_1er='$periodo1',af_periodoesco_2do='$periodo2',af_periodoesco_3er='$periodo3',af_periodoesco_4to='$periodo4',af_periodoesco_5to='$periodo5',af_periodoesco_6to='$periodo6',af_cod_alumliteral='$codigoalum',af_fec_egre='$fechaegre' WHERE af_cod_alumliteral='$codigoalum'";
		$MODI= pg_query($pgconn,$query) or die ("Consulta errónea:  ".pg_last_error());
		

		 if($MODI=true)
		 {
 				 echo "<script>alert('Los Datos Han Sido Actualizados')</script>";

  				echo "<script>window.location='../vista/v_actdatosperiodoesc.html'</script>";
 		}		
 		else
 		{

 				 echo "<script>alert('Datos no pudieron ser registrados')</script>";
 		}
 }		

}
?>