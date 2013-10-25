<?php
	//session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="estilo_form.css" />
<title>REGISTRO DE CURSOS</title>
            <style type="text/css">
    <!--
                .Estilo1 {color: #006633}
    -->
            </style>
</head>
<body background = "Ogame - battleshi 1.jpg">
    <!--
<div style="float:right;font-size:25px;"><a href="logout.php"><font color="#0000FF">Cerrar Sesion</font></a>
</div>
<span class="Estilo1"><font color ="#006633"><b style="font-size:40px;">Bienvenido Administrador</b></span><b style="font-size:40px;"> <?php echo $sesion['nombre']." ".$sesion['apellidos']." ".date('d/m/Y h:m:s'); ?></b>
-->
<H1 style="color:#006633">REGISTRO DE NUEVO CURSO</H1>
<h4><dd>POR FAVOR INGRESE LOS DATOS CORRECTAMENTE PARA EL REGISTRO DEL NUEVO CURSO</dd></h4>
<div class="estilo_form">
<form method="post" action="guardarCursos.php">
		<table cellpadding="0" cellspacing="8" style="width:300px; margin:auto;">
			<tr>
				<td valign="top" ><font color="#006633">Curso</font></td>
				<td valign="top"><input type="text" value="" name="nom_curso"  /></td>
             </tr>
             <tr>
                <td valign="top"><font color="#006633">Docente</font></td>
                <td><input type="text" value ="" name="nom_docente"/></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Dias</font></td>
                <td><input type="text" value="" name="dias" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Horario</font></td>
                <td><input type="text" value="" name="horas" /></td>
                </tr>
                <tr>
                 <td valign="top"><font color="#006633">Duración</font></td>
                <td><input type="text" value="" name="duracion" /></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Software Requerido</font></td>
                <td><textarea name="softwareRequerido"></textarea></td>
                </tr>
                <tr>
                <td valign="top"><font color="#006633">Conocimientos previos</font></td>
                <td><textarea name="conocimientoPrev"></textarea></td>
                </tr>
                <tr>
                <td><input type="submit" value="registrar" name="registrar" id="boton" /></td>
                <td></td>
                </tr>
		</table>
	</form>
</div>
	<?php
	if(isset($sesion['cod_usuario']))
	{
	?>
	<div style="padding-top:25px;padding-left:675px;"><a href="inicio.php" style="font-family:Georgia, 'Times New Roman', Times, serif; color:#009999; font-size:19px;text-decoration:none;">Volver</a></div>       
	<?php
	}
	?>

</body>
</html>
