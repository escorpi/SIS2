<?php
//creamos la coneccion a la base de datos
$conexion=mysql_connect(LOCALHOST,NAME_USER,PSSWD);
if(!$conexion)
{
    die("Fallo la coneccion a la base de datos".mysql_error());
}

//seleccionamos la base de datos
$bd=mysql_select_db(NAME_DB,$conexion);
if(!$bd)
{
    die("la base de datos no existe".mysl_error());
}
?>