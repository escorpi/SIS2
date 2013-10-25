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
echo"[[[[[".$codigo."]]]]]]]]";

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
/*
echo "nombre usu:".$nomb.'<br> ';
echo "apellido paterno:".$docente.'<br> ';
echo "CI:".$dias.'<br> ';
echo "carrera:".$conocimientos.'<br> ';
/***
echo "<script languaje='javascript' type='text/javascript'>
javascript:window.opener.document.location.reload();self.close();</script>";
*/
?>
<body>
<center>
<div class="estilo_caja">
 <p class="estilo_titulo">INGRESE LOS DATOS</p>
<h4><dd>POR FAVOR INGRESE LOS DATOS CORRECTAMENTE PARA EL REGISTRO DEL NUEVO CURSO</dd></h4>
<div class="estilo_form">
<form method="post" action="updateCursos.php">
    <table cellpadding="0" cellspacing="8" style="width:300px; margin:auto;">
      <tr>
        <td valign="top" ><font color="#006633">Curso</font></td>
        <td valign="top"><input type="text" value="<?php echo  "$nomb";   ?>" name="nom_curso"  /></td>
             </tr>
             <tr>
                <td valign="top"><font color="#006633">Docente</font></td>
                <td><input type="text" value="<?php echo  "$docente";   ?>" name="nom_docente"/></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Dias</font></td>
                <td><input type="text" value="<?php echo  "$dias";   ?>" name="dias" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Horario</font></td>
                <td><input type="text" value="<?php echo  "$horario";   ?>" name="horas" /></td>
                </tr>
                <tr>
                 <td valign="top"><font color="#006633">Duración</font></td>
                <td><input type="text" value="<?php echo  "$dura";   ?>" name="duracion" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Software Requerido</font></td>
                <td><textarea name="softwareRequerido" ><?php echo  "$requi";   ?></textarea></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Conocimientos previos</font></td>
                <td><textarea name="conocimientoPrev" ><?php echo  "$conocimientos";   ?></textarea></td>
                </tr>
                <tr>
      
                   <td><input type="hidden" name="id" value="<?php echo  "$codigo";   ?>"/></td>
                </tr>
                <tr>
                <td><input type="submit" value="Modificar" name="registrar" id="boton" /></td>
                <td></td>
                </tr>
    </table>
  </form>
</div>
</div>
</center>
<p>&nbsp;</p>
</body>

</html>