<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="insertar.php">
  <p>Nombres
  <input type="text" name="nom_estudiante" id="nom_estudiante" /> </p>
  <p>Apellido Paterno
  <input type="text" name="ap_paterno" id="ap_paterno" /> </p>
  <p>Apellido Materno
  <input type="text" name="ap_materno" id="ap_materno" /> </p>
  <p>C.I.
    <input type="text" name="ci" id="ci" />
  </p>
  <p>Carrera
    <input type="text" name="carrera" id="carrera" />
  </p>
  <p>Fecha
    <select name="cmbo_calendario" id="cmbo_calendario">
    </select>
  </p>
  <p>
    <input type="submit" name="insertar" id="insertar" value="Inscribir" />
  </p>
  <p>
    <input type="submit" name="cancelar" id="cancelar" value="cancelar" />
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>