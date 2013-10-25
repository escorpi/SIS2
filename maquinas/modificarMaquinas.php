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
 <div class="estilo_form">
<form method="post" action="updateMaquinas.php">
    <table cellpadding="0" cellspacing="8" style="width:300px; margin:auto;">
      <tr>
        <td valign="top" ><font color="#006633">Codigo inventario</font></td>
        <td valign="top"><input type="text" value="<?php echo  "$cod_inv";   ?>" name="cod_inventario"  /></td>
             </tr>
                <tr>
                <td valign="top"><font color="#006633">Modelo Procesador</font></td>
                <td><input type="text" value="<?php echo  "$mod_proc";   ?>" name="procesador"/></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Modelo Placa Madre</font></td>
                <td><input type="text" value="<?php echo  "$mod_placa";   ?>" name="placaM" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Memoria RAM</font></td>
                <td><input type="text" value="<?php echo  "$mod_mram";   ?>" name="ram" /></td>
                </tr>
                <tr>
                 <td valign="top"><font color="#006633">Disco Duro</font></td>
                <td><input type="text" value="<?php echo  "$mod_disk";   ?>" name="hd" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Tarjeta de Video</font></td>
                <td><input type="text" value="<?php echo  "$mod_video";   ?>" name="video" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633"> Tarjeta Ethernet</font></td>
                <td><input type="text" value="<?php echo  "$mod_eth";   ?>" name="red"/></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Tarjeta Wireless</font></td>
                <td><input type="text" value="<?php echo  "$mod_wlss";   ?>" name="inalambrica" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Teclado</font></td>
                <td><input type="text" value="<?php echo  "$mod_k";   ?>" name="teclado" /></td>
                </tr>
                <tr>
                 <td valign="top"><font color="#006633"> Mouse</font></td>
                <td><input type="text" value="<?php echo  "$mod_mou";   ?>" name="mouse" /></td>
                </tr>
                <tr>
                 <td valign="top"><font color="#006633"> Monitor</font></td>
                <td><input type="text" value="<?php echo  "$mod_display";   ?>" name="monitor" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Otros</font></td>
                <td><textarea name="otros" ><?php echo  "$mod_features";   ?></textarea></td>
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