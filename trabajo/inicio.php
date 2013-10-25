<?php
	include("hacer_conexion.php");
	session_start();
    //echo $_POST['correo_electronico']."    ".$_POST["password"];
	if(isset($_POST['correo_electronico']) && !empty($_POST['correo_electronico']) && 
	isset($_POST['password']) && !empty($_POST['password']))
	{
		$con=mysql_connect($host,$user,$pw) or die ("problemas al conectarse con el servidor")	;
		mysql_select_db($db,$con) or die ("problemas al conectar db");
		$sel=mysql_query("select cod_usuario, nombre, apellidos, correo_electronico, password from registro_usuario where password='$_POST[password]'",$con);
		$sesion=mysql_fetch_array($sel);
		
		if($_POST['password']== $sesion['password'])
		{
			$_SESSION['correo_electronico'] = $_POST['correo_electronico'];
//			echo "sesion exitosa";
//		}
//		else
//		{
//			echo "combinacion erronea";
//		}
	?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>Cuenta de usuario</title>
            <style type="text/css">
    <!--
                .links{
                    font-family:Georgia,"Times New Roman", Times, serif;
                    font-size:24px;
                    color:#009900;
                    text-decoration:none;
                }
                .Estilo1 {color: #FF3333}
    -->
            </style>
            </head>
            
            <body background = "Ogame - battleshi 1.jpg">
                <div style="float:right;font-size:25px;"><a href="logout.php"><font color="#0000FF">Cerrar Sesion</font></a>
                </div>
                <span class="Estilo1"></span><font color ="#0000FF"><b style="font-size:35px;">Bienvenido Usuario <?php echo $sesion["nombre"]." ".$sesion["apellidos"]." ".date("d/m/Y h:m:s"); ?></b>
            <br/>
            <br/>
            <br/>
            <br/>
            <p align="left">
            <b style="font-size:16px;">
            </b>
            
                <?php
                
                if($sesion['cod_usuario']=="1")
                {
                ?>
                        <ul>
                			<h2><li>BIENBENIDO ADMINISTRADOR</li></h2> 
            			</ul>
                        <table cellpadding="8" cellspacing="8" style="width:600px; margin:left;">
                        <tr>
                        <td valign="top" colspan="2" style="text-align:left;padding-top:8px;"><a href="clientes.php" class="links">Ver Toda La Lista De Usuarios</a></td>
                        </tr>
                        <tr>
                        <td valign="top" colspan="2" style="text-align:left;padding-top:8px;">
                            <a href="registrarCurso.php" class="links">Crear Un Curso</a>
                        </td>
                        </table>
                <?php
                }
                else
                {
                ?>
                        <table cellpadding="8" cellspacing="8" style="width:300px; margin:left;">
                        <td valign="top" colspan="2" style="text-align:left;padding-top:8px;"><a href="Facturacion.php"><font color="#FF0033">Consulte Su Facturacion</font></a>
                        </td>
                        </tr>
                        <tr>
                        <td valign="top" colspan="2" style="text-align:left;padding-top:8px;"><a href="Atencion_cliente.php"><font color="#FF0033">Problemas Con Su Servicio?</font></a>
                        </td>
                        </tr>
                        </table>
                <?php
                }
                ?>
            </body>
            </html>  
	<?php
	}
		else
		{?>
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>SpaceNet - Error al logearse</title>
            </head>
            
            <body background = "los-mejores-fondos-de-pantalla-hd-taringa.jpg">
           
            
            <b style="font-size:45px;color:#FF0000;">Nombre de usuario o password incorrectos.</b>
            
            <br/>
            <br/>
            <br/>
            <br/>
    
            <a href="principal.php" title="Volver" style="font-size:24px;color:#FF0000;text-decoration:none;">Volver</a>
           
            </body>
            </html>
         <?php   
		}
	}
	else
	{
	?>
		<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>SpaceNet - Error al logearse</title>
		</head>
		
		<body background = "los-mejores-fondos-de-pantalla-hd-taringa.jpg">
       
		
        <b style="font-size:45px;color:#FF0000;">Usted No Esta Registrado</b>
		
		<br/>
        <br/>
        <br/>
        <br/>

        <a href="principal.php" title="Volver" style="font-size:24px;color:#FF0000;text-decoration:none;">Volver</a>
       
 		</body>
		</html>
	<?php
	}
	?>