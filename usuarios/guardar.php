<?php
	include("hacer_conexion.php");
	$codigoLabo=101;
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
	isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
	isset($_POST['CI'])        && !empty($_POST['CI']) && 
	isset($_POST['telefono'])  && !empty($_POST['telefono']) &&
	isset($_POST['correo_electronico'])     && !empty($_POST['correo_electronico']) && 
	isset($_POST['password'])  && !empty($_POST['password']) &&
	isset($_POST['password1'])  && !empty($_POST['password1']) &&
	isset($_POST['universidad'])&& !empty($_POST['universidad']) && 
	isset($_POST['tipo_usuario'])&& !empty($_POST['tipo_usuario'])&&
	$_POST['password'] == $_POST['password1'])
	{
		$con=mysql_connect($host,$user,$pw) or die ("problemas al conectarse con el servidor")	;
		mysql_select_db($db,$con) or die ("problemas al conectar db");
		mysql_query("INSERT INTO usuario (nombre, apellidos, CI, telefono, correo_electronico, password, universidad, tipo_usuario)
		VALUES ('$_POST[nombre]','$_POST[apellidos]','$_POST[CI]','$_POST[telefono]','$_POST[correo_electronico]','$_POST[password]','$_POST[universidad]','$_POST[tipo_usuario]')",$con);
       echo "se inserto los datos".$_POST['nombre'];
?>	
<body>
<p>su registro fue realizado satisfactoriamoente XD</p>
<div style="padding-top:85px;padding-left:300px;"><a href="principal.php" style="font-family:Georgia, 'Times New Roman', Times, serif; color:red; font-size:20px; text-decoration:none;">regresar a la pagina principal</a></div>
</body>
<?php
	}
	else
	{
		echo "verifica q llenaste bien los campos";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registro</title>
</head>

<body>
<p>su registro no se realizo, verifique los datos </p>
<div style="padding-top:85px;padding-left:300px;"><a href="registrarse.php" style="font-family:Georgia, 'Times New Roman', Times, serif; color:red; font-size:20px; text-decoration:none;">regresar a registro</a></div>
</body>
</html>
<?php
	}
		
?>
