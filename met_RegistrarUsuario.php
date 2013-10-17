<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrarUsuario
 *
 * @author Darko
 */
require_once('../../Connections/proyectoDB.php');
class RegistrarUsuario {
    static function registra(){
        $nombre = $_POST["nombre"];//kkkkkkkkkkkkkkkkkkkk
        $app = $_POST["apellido_paterno"]; //************************
        $apm = $_POST["apellido_materno"]; //************************
        $ci = $_POST["ci"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $telefono = $_POST["telefono"];
        $direccion = $_POST["direccion"];
        $correo = $_POST["correo"];
        $cargo = $_POST["cargo"];
        $area = $_POST["area"];
        $password = $_POST["password"];   //jjsjsjsjsjsjsjsjsjsjs
        
        
        
        
      // primero hacemos una consulta para saber el codigo de area a traves del nombre del area  
        
        $consulta="select cod_area "
        ."from area "
         ."where nombre_area = ".'"'.$area.'"';
        $cod_area='';
        $res2=mysql_query($consulta,  Conexion::con());
            while ($reg=mysql_fetch_assoc($res2))
            {
        	$cod_area=$reg["cod_area"];
            }
       // aqui ya hacemos la insercion del usuario hdhdhdhdhhdhd
        $sql = "insert into usuario (nombre_usuario, app_usuario, apm_usuario, ci_usuario, telefono_usuario, email,fecha_nacimiento, sexo_usuario, password, cargo, cod_area) values ('$nombre','$app', '$apm', $ci,$telefono, '$correo', $edad,'$sexo', '$password', '$cargo', $cod_area)";
        $res=  mysql_query($sql, Conexion::con());
        
      // fin
        
        // aqui redireccionamos a lista usuario.php
        echo '<script type="text/javascript">'
        .'window.location = "ListaUsuarios.php";'
        .'</script>';
    }
}

// aqui llamamos al metodo para que se ejecute
RegistrarUsuario::registra();
?>