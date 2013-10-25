<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detalle</title>
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

$query10="SELECT nombre_curso,profesor_curso,dias_curso,horario_curso, mod_proce,descripcion_curso,conocimientos_prev
FROM curso WHERE cod_curso='$codigo'";

$r10=mysql_query($query10,Conexion::con()) or die("No se pudo ejecutar la consulta del maximo fact");
$nomb;$docente;$dias;$horario;$dura;
$requi;$conocimientos;
while($registro=mysql_fetch_row($r10))
{
$nomb=$registro[0];
$docente=$registro[1];
$dias=$registro[2];
$horario=$registro[3];
$dura=$registro[4];
$requi=$registro[5];
$conocimientos=$registro[6];

}

echo "nombre del curso: ".$nomb.'<br> ';
echo "Instructor: ".$docente.'<br> ';
echo "Dias: ".$dias.'<br> ';
echo "Horario: ".$horario.'<br> ';
echo "Duracion: ".$dura.'<br> ';
echo "Requerimientos: ".$requi.'<br> ';
echo "Conocimientos Previos: ".$conocimientos.'<br> ';

/**echo "<script languaje='javascript' type='text/javascript'>
javascript:window.opener.document.location.reload();self.close();</script>";
*/
?>