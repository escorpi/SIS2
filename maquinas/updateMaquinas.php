<?php


require_once('../Connections/proyectoDB.php');
//require_once('Connections/constantes.php');
//require_once('Connections/conexiondb.php');

class RegistrarUsuario {
    static function registra(){

 $codigoU=$_POST['id'];		
echo "$codigoU"."--------------";

        $inv=$_POST['nom_estudiante'];
       	$pro=$_POST['ap_paterno'];
		$madre=$_POST['ap_materno'];
		$ram=$_POST['ci'];
		$hd=$_POST['carrera'];
        $video=$_POST['nom_estudiante'];
        $ether=$_POST['ap_paterno'];
        $wlss=$_POST['ap_materno'];
        $teclado=$_POST['ci'];
        $mouse=$_POST['carrera'];
        $monitor=$_POST['ci'];
        $otros=$_POST['carrera'];
		/*$fecha=$_POST['cmbo_calendario'];*/
		
       // aqui ya hacemos la insercion del usuario
        $sql="UPDATE usuario SET nombre_usuario='$nombre', apell_paterno_uasuario='$apPaterno', apell_materno_usuario='$apMaterno', ci=$cedulaIdentidad, carrera='$carrera'
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