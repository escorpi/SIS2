<?php


require_once('../Connections/proyectoDB.php');
//require_once('Connections/constantes.php');
//require_once('Connections/conexiondb.php');

class RegistrarUsuario {
    static function registra(){

 $codigoU=$_POST['id'];		
//echo "$codigoU"."--------------";

        $nombre=$_POST['nomb'];
       	$apPaterno=$_POST['ap'];
		$ci=$_POST['ci'];
		$tele=$_POST['tele'];
		$mail=$_POST['correo'];
        $pas1=$_POST['pas1'];
        $uni=$_POST['uni'];
        $tipo_usu=$_POST['tipo_usu'];
		/*$fecha=$_POST['cmbo_calendario'];*/
		
       // aqui ya hacemos la insercion del usuario
        $sql="UPDATE usuario SET nombre='$nombre', apellidos='$apPaterno', ci='$ci', telefono=$tele, correo_electronico='$mail',password='$pas1',universidad='$uni',tipo_usuario='$tipo_usu'
                WHERE cod_usuario=$codigoU";
        
        $res=  mysql_query($sql, Conexion::con());      // fin
        


        echo "<script languaje='javascript' type='text/javascript'>
javascript:window.opener.document.location.reload();self.close();</script>";
        // aqui redireccionamos a lista usuario.php
        echo '<script type="text/javascript">'
        .'window.location = "salir.php";'
        .'</script>';
    
    }
}

// aqui llamamos al metodo para que se ejecute
RegistrarUsuario::registra();
?>