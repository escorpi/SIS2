<html>
<head>
<title>Listado de Cursos</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<body bgcolor="#ffffff">
<?
/*session_name("admin");
session_start();
if(isset($_SESSION['nombre'])){*/
/**include("manejomysql.php"); 
conectar_bd();
$sql="select * from sufijo";
$res=mysql_query($sql,$enlace)or die("error en el SQyreyL");
*/
?>


<!--<div style="position:absolute; overflow:hidden; left:18px; top:213px; width:210px; height:307px; z-index:2"><img width=210 height=307  border=0 src="imgS1ODV.gif"></DIV>!-->
<form name="administrador" method="post" >
  <div align="center"><img src="../images/fondo.JPG" width="800" height="200"> 
   <tr>VOLVER AL REGISTRO
    <td><a href="registrarCurso.php"><img src="../images/atras.PNG" width="25" height="24" border="0"></a></td> </tr>
  </div>
 
</form>
<!--/////////////////7-->

<link rel="stylesheet" href="../style2.css" />

<div id="content">

<h1>Modificar Eliminar Cursos</h1>
<div id="pdf" style="width: 870px; height: 380; overflow-y: auto;">
 
 

  <?php
  $dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

$db=mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('laboratorio');
  $sql="select  nombre_curso as nombreDias, profesor_curso,cod_curso from curso";
//$res=mysql_query($sql,$enlace)or die("error en el SQyreyL");
 //$strConsulta = "SELECT cod_usuario,  nombre_usuario, app_usuario, apm_usuario from usuario";
	$pacientes = mysql_query($sql);
	$numfilas = mysql_num_rows($pacientes);
 
 
echo '<table cellpadding="0" cellspacing="0" width="100%">';
	echo '<thead><tr><td>Nro</td><td>Nombre Curso- Dias</td><td>Instructor</td><td>VerDetalle</td><td>Modificar</td><td>Eliminar</td></tr></thead>';
	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$numlista = $i + 1;
		echo '<tr><td>'.$numlista.'</td>';
		echo '<td>'.$fila['nombreDias'].'</td>';
        echo '<td>'.$fila['profesor_curso'].'</td>';
		// echo '<td>'.$fila['ubicacion'].'</td>';
		//echo '<td><a href="'.$fila['ubicacion'].'" target="popup"  onclick="window.open("","popup","width=980, height=500")" >ver</a></td></tr>';
		//echo '<td><a href="VerSufijos.php" target="popup"  onclick="window.open("","popup","width=980, height=500")" >cambiar</a></td></tr>';
		
		
		//echo '<td><a href="VerSufijos.php" target="popup"  onclick="window.open("","popup","width=500, height=350")"><img src="imagenes/inicio.PNG" width="24" height="24" border="0"></a></td></tr>';
		?> 
		<td width="10%"><a href="detalleCursos.php?cod=+<?php  echo $fila['cod_curso'];?>" target="popup"  onclick="window.open('','popup','width=500, height=550')"><img src="../images/ver.PNG" width="24" height="24" border="0"></a></td>
<?php
	?> 
		<td width="10%"><a href="modificarCursos.php?cod=+<?php  echo $fila['cod_curso'];?>" target="popup"  onclick="window.open('','popup','width=500, height=550')"><img src="../images/cambiar.PNG" width="24" height="24" border="0"></a></td>
<?php
?> 
		<td width="10%"><a href="eliminarCursos.php?cod=+<?php  echo $fila['cod_curso'];?>" target="popup"  onclick="window.open('','popup','width=500, height=550')"><img src="../images/eliminar.GIF" width="24" height="24" border="0"></a></td></tr>
<?php
	}
	echo "</table>";
	?>
    </div> 
        </div>
<!--/////////////////fin///-->
<br>

 <? /*}
 else{
echo "NO EXISTE UNA CESION ABIERTA"; }*/ ?>

</body>
</html>