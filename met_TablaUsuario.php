<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TablaUsuario
 *
 */
require_once('../Connections/proyectoDB.php');
class TablaUsuario {

    static function tabla(){
        $pos=0;
        if(isset($_GET["pos"])){
            $pos=$_GET["pos"];
        }
        // la consulta para seleccionar todos los usuarios ke esta en la bse de datos
        $consulta="select cod_usuario "
        ."from usuario u";
        $usuarios=array();
        $resU=mysql_query($consulta,  Conexion::con());
            while ($reg=mysql_fetch_assoc($resU))
            {
        	$usuarios[]=$reg;
            }
        if($pos<0){
            $pos=0;
        }
		 $sql="SELECT u.cod_usuario, nombre_usuario, app_usuario, apm_usuario, ci_usuario, telefono_usuario, a.nombre_area, cargo
		 		FROM usuario u, area a, pertenece p
				WHERE u.cod_usuario = p.cod_usuario and a.cod_area = p.cod_area";
        $respuesta=array();
        $res=mysql_query($sql,  Conexion::con());
            while ($reg=mysql_fetch_assoc($res))
            {
        	$respuesta[]=$reg;
            }
            
            // los campos se muestran
            echo '<table style="text-align: center; width: 800px" border="1">'
            .'<tr style="background-color: black; color: #fff">'
            .'<td style="font-size: 15px">Nombre</td>'
            .'<td style="font-size: 15px">Apellido Paterno</td>'
                    .'<td style="font-size: 15px">Apellido Materno</td>'
            .'<td style="font-size: 15px ">CI</td>'
            .'<td style="font-size: 15px">Telefono</td>'
            .'<td style="font-size: 15px">Área</td>'
                    .'<td style="font-size: 15px">Cargo</td>'
            .'<td></td>'
            .'<td></td>'
            .'</tr>';
            for($i=0;$i<sizeof($respuesta);$i++){
                $cod_usuario=$respuesta[$i]["cod_usuario"];
                $nombre_usuario=$respuesta[$i]["nombre_usuario"];
                echo '<tr id = "'.$cod_usuario.'" onmouseover="cambiar('."'$cod_usuario'".','."'#4169E1'".')" onmouseout="cambiar('."'$cod_usuario'".','."'transparent'".')">'
                .'<td nowrap="nowrap" style="font-size: 15px ">'.$respuesta[$i]["nombre_usuario"].'</td>'
                .'<td style="font-size: 15px">'.$respuesta[$i]["app_usuario"].'</td>'
                        .'<td style="font-size: 15px">'.$respuesta[$i]["apm_usuario"].'</td>'
                .'<td style="font-size: 15px">'.$respuesta[$i]["ci_usuario"].'</td>'
                .'<td style="font-size: 15px">'.$respuesta[$i]["telefono_usuario"].'</td>'
                .'<td style="font-size: 15px">'.$respuesta[$i]["nombre_area"].'</td>'
                        .'<td style="font-size: 15px">'.$respuesta[$i]["cargo"].'</td>'
                .'<td><img  src="../Images/editar.gif" title="Editar datos de usuario." border="0" onclick="actualizarUsuario('."'$cod_usuario'".')"></td>'
                .'<td><img src="../Images/eliminar.gif" title="Eliminar a usuario." border="0" onclick="eliminarUsuario('."'$nombre_usuario'".','."'$cod_usuario'".')"></td>'
                .'<tr>';
        }
        /*echo '</table>';
        $estadoAnt="";
        $ant=$pos;
        $styleAnt="";
        if($pos<=0){
            $estadoAnt="disabled";
        }else{
            if($pos-10 >= 0){
                $ant=$pos-10;
            }else{
                $ant=0;
            }
            $styleAnt="width: 120px";
        }*/
       
    }
}
?>