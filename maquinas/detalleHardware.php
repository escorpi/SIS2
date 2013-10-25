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

$query10="SELECT cod_inv,mod_proc,mod_placa,mod_mram,mod_disk,mod_video,mod_eth,mod_wlss,mod_key,mod_mou,mod_display,mod_features
FROM hardware WHERE cod_inv='$codigo'";

$r10=mysql_query($query10,Conexion::con()) or die("No se pudo ejecutar la consulta del maximo fact");
$cod_inv;$mod_proc;$mod_placa;$mod_mram;$mod_disk;
$mod_video;$mod_eth;
$mod_wlss;$mod_k;$mod_mou;$mod_display;$mod_features;
while($registro=mysql_fetch_row($r10))
{
$cod_inv=$registro[0];
$mod_proc=$registro[1];
$mod_placa=$registro[2];
$mod_mram=$registro[3];
$mod_disk=$registro[4];
$mod_video=$registro[5];
$mod_eth=$registro[6];
$mod_wlss=$registro[7];
$mod_k=$registro[8];
$mod_mou=$registro[9];
$mod_display=$registro[10];
$mod_features=$registro[11];

}

echo "nombre de la maquina: ".$cod_inv.'<br> ';
echo "modelo Procesador: ".$mod_proc.'<br> ';
echo "modelo placa madre: ".$mod_placa.'<br> ';
echo "modelo memoria RAM: ".$mod_mram.'<br> ';
echo "modelo del disco duro: ".$mod_disk.'<br> ';
echo "modelo Tarjeta de video Previos: ".$mod_video.'<br> ';
echo "modelo tarjeta de red ethernet: ".$mod_eth.'<br> ';
echo "modelo de tarjeta red inalambrica: ".$mod_wlss.'<br> ';
echo "modelo del teclado: ".$mod_k.'<br> ';
echo "modelo del mouse: ".$mod_mou.'<br> ';
echo "modelo del monitor: ".$mod_display.'<br> ';
echo "mas datos adicionales: ".$mod_features.'<br> ';

/**echo "<script languaje='javascript' type='text/javascript'>
javascript:window.opener.document.location.reload();self.close();</script>";
*/
?>