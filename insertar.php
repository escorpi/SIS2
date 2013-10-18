<?php


require_once('Connections/proyectoDB.php');
//require_once('Connections/constantes.php');
//require_once('Connections/conexiondb.php');

class RegistrarUsuario {
    static function registra(){

        $nombre=$_POST['nom_estudiante'];
       	$apPaterno=$_POST['ap_paterno'];
		$apMaterno=$_POST['ap_materno'];
		$cedulaIdentidad=$_POST['ci'];
		$carrera=$_POST['carrera'];
		/*$fecha=$_POST['cmbo_calendario'];*/
		$correo="escorpi_4ever";
        
        $query2="SELECT MAX(COD_USUARIO) AS id FROM usuario";
        $rs = mysql_query($query2,Conexion::con());
        if ($row = mysql_fetch_row($rs)) {
        $id = trim($row[0]);
        }  
        echo "$id";
       // aqui ya hacemos la insercion del usuario
        $sql = "insert into usuario (cod_usuario,cod_labo,nombre_usuario, apell_paterno_uasuario, apell_materno_usuario, ci,  email, carrera) values ($id,101,'$nombre','$apPaterno', '$apMaterno', $cedulaIdentidad, '$correo',  '$carrera')";
        $res=  mysql_query($sql, Conexion::con());      // fin
        /**
        // aqui redireccionamos a lista usuario.php
        echo '<script type="text/javascript">'
        .'window.location = "ListaUsuarios.php";'
        .'</script>';
        */
    }
}

// aqui llamamos al metodo para que se ejecute
RegistrarUsuario::registra();
?>