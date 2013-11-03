<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>modoficando</title>
<link type="text/css" rel="stylesheet" href="styles/style.css" />
</head>
<?php
/*****
require_once('Connections/proyectoDB.php');
include("manejomysql.php");
conectar_bd();
*/
require_once('../Connections/proyectoDB.php');
$codigo=$_GET['cod'];
//echo"[[[[[".$codigo."]]]]]]]]";

$query10="SELECT nombre, apellidos, ci,telefono,correo_electronico,password,universidad,tipo_usuario
FROM usuario WHERE cod_usuario='$codigo'";

$r10=mysql_query($query10,Conexion::con()) or die("No se pudo ejecutar la consulta del maximo fact");
$nomb;$app;
$ci;$telefono;
$correo;$pass;
$uni;$tipo_usu;
while($registro=mysql_fetch_row($r10))
{
$nomb=$registro[0];
$app=$registro[1];
$ci=$registro[2];
$telefono=$registro[3];
$correo=$registro[4];
$pass=$registro[5];
$uni=$registro[6];
$tipo_usu=$registro[7];
}
/*
echo "nombre usu:".$nomb.'<br> ';
echo "apellido paterno:".$app.'<br> ';
echo "CI:".$ci.'<br> ';
echo "carrera:".$carrera.'<br> ';
/***
echo "<script languaje='javascript' type='text/javascript'>
javascript:window.opener.document.location.reload();self.close();</script>";
*/
?>
<body>
<center>
<div class="estilo_caja">
 <p class="estilo_titulo">INGRESE LOS DATOS</p>
<form id="form1" name="form1" method="post" action="updateUsuario.php">
	<table>
    <tr>
    	<td><p class="s">Nombres</p></td>
        <td><input type="text" name="nomb" value="<?php echo  "$nomb";   ?>" /></td>
    </tr>
    <tr>
    	<td><p class="s">Apellidos </p></td>
        <td><input type="text" name="ap" value="<?php echo  "$app";   ?>"/></td>
    </tr>
    <tr>
    	<td><p class="s">C.I.</p></td>
        <td><input type="text" name="ci" value="<?php echo  "$ci";   ?>" /></td>
    </tr>
    <tr>
      <td><p class="s">Telefono</p></td>
        <td><input type="text" name="tele" value="<?php echo  "$telefono";   ?>" /></td>
    </tr>
  	<tr>
  		<td><p class="s">Correo</p></td>
        <td><input type="text" name="correo" value="<?php echo  "$correo";   ?>" /></td>
  	</tr>
    <tr>
      <td><p class="s">password</p></td>
        <td><input type="text" name="pas1" value="<?php echo  "$pass";   ?>" /></td>
    </tr>
    <tr>
      <td><p class="s">confirmar pass</p></td>
        <td><input type="text" name="pas2" value="<?php echo  "$pass";   ?>" /></td>
    </tr>
    <tr>
      <td><p class="s">universidad</p></td>
        <td><input type="text" name="uni" value="<?php echo  "$uni";   ?>" /></td>
    </tr>
    <tr>
      <td><p class="s">tipo usuario</p></td>
        <td><input type="text" name="tipo_usu" value="<?php echo  "$tipo_usu";   ?>" /></td>
    </tr>
  	<tr>
  		
        <td><input type="hidden" name="id" value="<?php echo  "$codigo";   ?>"/></td>
  	</tr>
    <tr>
    	<td></td>
        <td><input type="submit" name="insertar" id="boton" value="Modificar" /></td>
    </tr>
    </table>
</form>
</div>
</center>
<p>&nbsp;</p>
</body>

</html>