<html>
<head> 
   <title>Ejemplo de PHP</title> 
</head> 
<body> 
<?php 
function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","root","escorpi4ever")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("laboratorio",$link))
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
   
} 

$link=Conectarse(); 


mysql_close($link); //cierra la conexion 
?> 
</body> 
</html> 


