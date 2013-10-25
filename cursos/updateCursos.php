<?php


require_once('../Connections/proyectoDB.php');
//require_once('Connections/constantes.php');
//require_once('Connections/conexiondb.php');

class RegistrarUsuario {
    static function registra(){

 $codigoU=$_POST['id'];		
echo "$codigoU"."--------------";

        $nombre=$_POST['nom_curso'];
       	$doc=$_POST['nom_docente'];
		$dias_curso=$_POST['dias'];
		$horas_curso=$_POST['horas'];
		$dura=$_POST['duracion'];
        $sw=$_POST['softwareRequerido'];
        $cono=$_POST['conocimientoPrev'];
		/*$fecha=$_POST['cmbo_calendario'];*/
		
       // aqui ya hacemos la insercion del usuario
        $sql="UPDATE curso SET nombre_curso='$nombre', profesor_curso='$doc', dias_curso='$dias_curso', horario_curso='$horas_curso', mod_proce='$duracion',descripcion_curso='$sw',conocimientos_prev='$cono'
                WHERE cod_curso=$codigoU";
        
        $res=  mysql_query($sql, Conexion::con());      // fin
        


        echo "<script languaje='javascript' type='text/javascript'>
javascript:window.opener.document.location.reload();self.close();</script>";
        // aqui redireccionamos a lista usuario.php
        echo '<script type="text/javascript">'
        .'window.location = "../salir.php";'
        .'</script>';
    
    }
}

// aqui llamamos al metodo para que se ejecute
RegistrarUsuario::registra();
?>