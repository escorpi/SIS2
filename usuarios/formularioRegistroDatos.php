<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/estilo_caja.css" />
<!-- <script type="text/javascript" src="js/validarDatosUsuario.js"</script> -->
</head>

<body>
<center>
<div class="estilo_caja">
 <p class="estilo_titulo">INGRESE LOS DATOS</p>
<form id="form1" name="form1" method="post" action="insertar.php">
	<table>
    <tr>
    	<td><p class="s">Nombres</p></td>
        <td><input type="text" name="nom_estudiante" /></td>
    </tr>
    <tr>
    	<td><p class="s">Apellido Paterno</p></td>
        <td><input type="text" name="ap_paterno" /></td>
    </tr>
    <tr>
    	<td><p class="s">Apellido Materno</p></td>
        <td><input type="text" name="ap_materno" /></td>
    </tr>
    <tr>
    	<td><p class="s">C.I.</p></td>
        <td><input type="text" name="ci" /></td>
    </tr>
  	<tr>
  		<td><p class="s">Carrera</p></td>
        <td><input type="text" name="carrera" /></td>
  	</tr>
    <tr>
    	<td></td>
        <td><input type="submit" name="insertar" id="boton" value="Inscribir" /></td>
    </tr>
    </table>
</form>
</div>
</center>
<p>&nbsp;</p>
</body>
</html>