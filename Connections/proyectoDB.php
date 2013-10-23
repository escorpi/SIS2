<?php
$hostname_proyectoDB = "localhost";
$database_proyectoDB = "laboratorio";
$username_proyectoDB = "root";
$password_proyectoDB = "";
$proyectoDB = mysql_pconnect($hostname_proyectoDB, $username_proyectoDB, $password_proyectoDB) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php
class  Conexion{
    public static function con()
	{
		$conexion=mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("laboratorio");
		return $conexion;
	}
}
?>