<?php
session_start();
$ruta=$_SESSION['af_ruta_nivel'];
$usuario =$_SESSION['usuario'];

?>
<script type="text/javascript" >
function cerrar()
{
    window.location="../vista/vis_login.php";
}	
</script>
  <table width="1130" border="1">
  <tr>
    <td colspan="2"><img src="../imagenes/logo_conalot_reportes.png" width="1006" height="146" alt="logo_mppe" /></td>
  </tr>
  <tr>
    <td width="218" height="650">
		<iframe name="izquierdo" src="<?php  echo $ruta; ?>" scrolling="No" width="200" height="650" frameborder="No" border="0"></iframe> 	
	</td>
    <td width="900">
	  <iframe name="principal" src="../vista/vis_inicial.html" scrolling="yes" width="900" height="680" frameborder="No" border="0"></iframe> 	
	</td>
  </tr>
</table>
<input type="button" value="Cerrar session" name="cerrar" onclick="cerrar()" >
