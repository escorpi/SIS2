<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Maquinas</title>
<link rel="Stylesheet"  href="estilos.css" type="text/css"/>
<style type="text/css">
.estiloT tr th center h2 b u {
	font-size: 18px;
}
</style>
</head>

<body>
<form method="post" action="envioDatos.php">
<table  class="estiloT"  border="6px" align="center" cellpadding="0px" cellspacing="10px"> 
  <th colspan="2"><center><h2><b><u>Formulario de Registro de Maquinas</u></b></h2></center></th>
 

	<tr>
        <td><h5>Codigo de Inventario:</h5></td>
        <td><input type="text" name="codInv" size="50px" /></td>
    </tr>
        
        
    <tr>
    	<td><h5>Modelo de placa:</h5></td>
        <td><input type="text" name="modPlaca" size="50px"/></td>
    </tr>
    
    <tr>
    	<td><h5>Procesador:</h5></td>
        <td><input type="text" name="proc" size="50px"/></td>
    </tr>
    
	<tr>
    	<td><h5>Memoria Ram:</h5></td>
        <td><input type="text" name="ram" size="50px"/></td>
    </tr>
    
    <tr>
    	<td><h5>Disco Duro:</h5></td>
        <td><input type="text" name="hdd" size="50px"/></td>
    </tr>
    
    <tr>
    	<td><h5>Tarjeta de video:</h5></td>
        <td><input type="text" name="tjVid"size="50px" /></td>
    </tr>
    
    <tr>
    	<td><h5>Tarjeta Ethernet:</h5></td>
        <td><input type="text" name="tjEth"size="50px" /></td>
    </tr>
    
    <tr>
    	<td><h5>Tarjeta Wireless:</h5></td>
        <td><input type="text" name="tjWlss"size="50px" /></td>
    </tr>
    
    <tr>
    	<td><h5>Keyboard</h5></td>
        <td><input type="text" name="key"size="50px" /></td>
    </tr>
    
    <tr>
    	<td height="24"><h5>Mouse:</h5></td>
      <td><input type="text" name="mou"size="50px" /></td>
    </tr>
    
    <tr>
    	<td><h5>Monitor:</h5></td>
        <td><input type="text" name="mon" size="50px"/></td>
    </tr>
    
    <tr>
    	<td><h5>Otros Datos:</h5></td>
        <td><textarea name="other" cols="40" rows="10"  > </textarea></td>
    </tr>
    
        
</table>
  
<center>
  <input type="submit" name "submit" id="buttom" value="Registrar"     />
<input type="reset" name="clearForm" value="Limpiar Datos"></center>









</body>
</html>
