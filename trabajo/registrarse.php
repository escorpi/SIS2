<?php
/*
	require("conexion/conexion_acces.php");
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>REGISTRO DE NUEVO USUARIO</title>
</head>
<body background = "system1280-1024.jpg">
<H1 style="color:#006633">REGISTRO DE NUEVO USUARIO</H1>
    <h4><dd>POR FAVOR INTRODUSCA LOS DATOS CORRECTAMENTE PARA EL REGISTRO DE NUEVO USUARIO</dd></h4>
<form method="post" action="guardar.php">
		<br/>
		<br/>
		<table cellpadding="0" cellspacing="8" style="width:300px; margin:auto;">
			<tr>
				<td valign="top" ><font color="#006633">Nombre</font></td>
				<td valign="top"><input type="text" value="" name="nombre"  /></td>
			</tr>
            
		  <tr>
				<td valign="top"><font color="#006633">Apellidos</font></td>
				<td valign="top"><input  type="text" value="" name="apellidos" /></td>
			</tr>
			
          <tr>
				<td valign="top"><font color="#006633">CI</font></td>
				<td valign="top"><input  type="text" value="" name="CI" /></td>
			</tr>
			
          <tr>
				<td valign="top"><font color="#006633">Telefono</font></td>
				<td valign="top"><input  type="text" value="" name="telefono" /></td>
			</tr>

			<tr>
				<td valign="top"><font color="#006633">Correo electronico</font></td>
				<td valign="top"><input  type="text" value="" name="correo_electronico" /></td>
			</tr>
			
            <tr>
				<td valign="top"><font color="#006633">password</font></td>
				<td valign="top"><input  type="password" value="" name="password" /></td>
			</tr>
            <tr>
				<td valign="top"><font color="#006633">repetir password</font></td>
				<td valign="top"><input  type="password" value="" name="password1" /></td>
			</tr>
            <tr>
				<td valign="top"><font color="#006633">universidad</font></td>
				<td valign="top"><input  type="text" value="" name="universidad" /></td>
			</tr>
            
            <tr>
				<td valign="top"><font color="#006633">tipo de usuario</font></td>
				<td valign="top"><input  type="text" value="" name="tipo_usuario" /></td>
			</tr>
			<tr>
				<td valign="top" colspan="2" style="text-align:right;padding-top:17px;">
       	    <input type="submit" value="Registrarse" /></td>
			</tr>

	
		</table>
	</form>
<div style="padding-top:85px;padding-left:675px;"><a href="principal.php" style="font-family:Georgia, 'Times New Roman', Times, serif; color:red; font-size:19px; text-decoration:none;">Atras</a></div>

</body>
</html>
