<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="Stylesheet"  href="estilos.css" type="text/css"/>
<style type="text/css">
.estiloT tr th center h2 b u {
	font-size: 18px;
}
</style>
</head>

<body>


<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td width="61"><font face="verdana" color="#00FF00"><b>Codigo Inventario</b></font></td>
<td width="43"><font face="verdana" color="#00FF00"><b>Modelo de Placa</b></font></td>
<td width="65"><font face="verdana" color="#00FF00"><b>Modelo de Procesador</b></font></td>
<td width="43"><font face="verdana" color="#00FF00"><b>Modulo RAM</b></font></td>
<td width="43"><font face="verdana" color="#00FF00"><b>Modelo Disco Duro</b></font></td>
<td width="44"><font face="verdana" color="#00FF00"><b>Tarjeta de Video</b></font></td>
<td width="50"><font face="verdana" color="#00FF00"><b>Tarjeta Ethernet</b></font></td>
<td width="49"><font face="verdana" color="#00FF00"><b>Tarjeta Wireless</b></font></td>
<td width="55"><font face="verdana" color="#00FF00"><b>Keyboard</b></font></td>
<td width="36"><font face="verdana" color="#00FF00"><b>Mouse</b></font></td>
<td width="43"><font face="verdana" color="#00FF00"><b>Monitor</b></font></td>
<td width="500"><font face="verdana" color="#00FF00"><b>Otros comentarios</b></font></td>
</tr>

<?php  
  $link = @mysql_connect("localhost", "cheroke","1234")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("mysql", $link)
      or die ("Error al conectar a la base de datos.");

  $query = "SELECT * " .
      "FROM registrom";
  $result = mysql_query($query);
  $numero = 0;
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["cod_inv"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_placa"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_proc"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_mram"]. "</font></td>";
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_disk"]. "</font></td>";
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_video"]. "</font></td>"; 
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_eth"]. "</font></td>";   
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_wlss"]. "</font></td>";
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_key"]. "</font></td>";
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_mou"]. "</font></td>";
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["mod_display"]. "</font></td>";
		echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["other_features"]. "</font></td></tr>";
    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Número: " . $numero . 
      "</b></font></td></tr>";
  
  mysql_free_result($result);
  mysql_close($link);
?>
</table>



</body>
</html>

