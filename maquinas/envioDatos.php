



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resgistro Exitoso</title>
<link rel="Stylesheet"  href="estilos.css" type="text/css"/>
<style type="text/css">
</style>

</head>

<body>
<?php
//Conectarse y seleccionar base de datos
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
e//cho 'Connected successfully';



$db_selected = mysql_select_db('laboratorio', $link);
if (!$db_selected) {
die ('Cant use tarea : ' . mysql_error());


} 
// Tomar los campos provenientes del Formulario
$codInv = $_POST['codInv'];
$modPlaca = $_POST['modPlaca'];
$proc = $_POST['proc'];
$ram = $_POST['ram'];
$hdd = $_POST['hdd'];
$tjVid = $_POST['tjVid'];
$tjEth = $_POST['tjEth'];
$tjWlss = $_POST['tjWlss'];
$key = $_POST['key'];
$mou = $_POST['mou'];
$mon = $_POST['mon'];
$other = $_POST['other'];
echo "datoss:".$hdd.$modPlaca;
// Insertar campos en la Base de Datos

if( !empty($codInv)&&!empty($modPlaca)&&!empty($proc)&&!empty($ram)&&!empty($hdd)&&!empty($tjVid)&&!empty($tjEth)&&!empty($tjWlss)&&!empty($key)&&!empty($mou)&&!empty($mon)&&!empty($other) ){
$que = " insert into hardware (cod_inv,mod_proc,mod_placa,mod_mram,mod_disk,mod_video,mod_eth,mod_wlss,mod_key,mod_mou,mod_display,mod_features) values( '$codInv','$proc','$modPlaca' , '$ram','$hdd','$tjVid','$tjEth','$tjWlss','$key','$mou','$mon','$other'  ) ";
$res = mysql_query($que, $link) or die(mysql_error());


// Cerrar conexión a la Base de Datos
mysql_close($link);
echo "<h1><center>Registro Finalizado</h1>";
echo "<p>&nbsp;</p><p>&nbsp;</p><center><a href=\"RegM.php\" target=\"_self\"> <button ><center>Volver a la Pagina Principal</button></center>";
}else{
	echo "<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>";

	    echo "<h1><center>Existe algunos campos vacios, porfavor vuelva a la pagina de registro y llene los campos correctamente</h1>";
		echo "<p>&nbsp;</p>";

	 	echo "<center><button onclick=\"history.back(-1)\">Volver a la pagina anterior</button></center>";
		
	
	}
?>



</body>
</html>
















 