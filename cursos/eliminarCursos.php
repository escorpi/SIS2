<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>modoficando</title>
<link type="text/css" rel="stylesheet" href="../styles/style.css" />
</head>
<?php
/*****
require_once('Connections/proyectoDB.php');
include("manejomysql.php");
conectar_bd();
*/
require_once('../Connections/proyectoDB.php');
$codigo=$_GET['cod'];
echo"[[[[[".$codigo."]]]]]]]]";

$sql="delete from curso where cod_curso=$codigo";

$r10=mysql_query($sql,Conexion::con()) or die("No se pudo ejecutar la consulta del maximo fact");


echo "<script languaje='javascript' type='text/javascript'>
javascript:window.opener.document.location.reload();self.close();</script>";

?>


</html>