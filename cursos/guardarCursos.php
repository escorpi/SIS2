<?php
	include("hacer_conexion.php");
	if(isset($_POST['nom_curso']) && !empty($_POST['nom_curso']) && 
	isset($_POST['nom_docente']) && !empty($_POST['nom_docente']) &&
	isset($_POST['dias'])        && !empty($_POST['dias']) && 
	isset($_POST['horas'])  && !empty($_POST['horas']) &&
	isset($_POST['duracion'])     && !empty($_POST['duracion']) && 
	isset($_POST['softwareRequerido'])  && !empty($_POST['softwareRequerido']) &&
	isset($_POST['conocimientoPrev'])  && !empty($_POST['conocimientoPrev']))
	{
		$con=mysql_connect($host,$user,$pw) or die ("problemas al conectarse con el servidor")	;
		mysql_select_db($db,$con) or die ("problemas al conectar db");
		mysql_query("INSERT INTO curso (cod_curso,nombre_curso,profesor_curso,dias_curso,horario_curso,mod_proce,descripcion_curso,conocimientos_prev)
		VALUES ('','$_POST[nom_curso]', '$_POST[nom_docente]', '$_POST[dias]', '$_POST[horas]', '$_POST[duracion]', 
		'$_POST[softwareRequerido]','$_POST[conocimientoPrev]')",$con);
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registro</title>
            <style type="text/css">
    <!--
                .Estilo1 {color: #FF3333}
    -->
            </style>
</head>

<body>
<p>su registro fue realizado satisfactoriamoente</p>
<div style="padding-top:85px;padding-left:300px;"><a href="registrarCurso.php" style="font-family:Georgia, 'Times New Roman', Times, serif; color:red; font-size:20px; text-decoration:none;">Nuevo Registro</a></div>
</body>
</html>
<?php

	}
	else
	{
		echo "verifica que llenaste bien los campos";
		?>
     <input type="button" value="Volver al formulario" 
onclick="javascript:history.back()">		
	<div style="padding-top:85px;padding-left:300px;"><a href="registrarCurso.php" style="font-family:Georgia, 'Times New Roman', Times, serif; color:red; font-size:20px; text-decoration:none;">Volver</a></div>
	<?php
	}
		
?>
