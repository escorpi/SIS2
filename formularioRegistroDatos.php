<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<table width="566" border="1">
  <tr>
    <td colspan="2"><form id="form1" name="form1" method="post" action="">
        <label for="nom_estudiante"></label>
        <label for="nombre_estudiante">Nombre Completo</label>
        <input type="text" name="nombre_estudiante" id="nombre_estudiante" />
    </form></td>
    <td><form id="form2" name="form2" method="post" action="">
      <label for="ci">C.I.</label>
      <input type="text" name="ci" id="ci" />
    </form></td>
  </tr>
  <tr>
    <td width="100">Ocupación      </td>
    <td width="234"><form id="form3" name="form3" method="post" action="">
      <label for="cmbo_ocupacion"></label>
      <select name="cmbo_ocupacion" id="cmbo_ocupacion">
      </select>
    </form></td>
    <td width="210"><form id="form4" name="form4" method="post" action="">
      <label for="carrera">Carrera</label>
      <input type="text" name="carrera" id="carrera" />
    </form></td>
  </tr>
  <tr>
    <td colspan="2"><form id="form5" name="form5" method="post" action="">
        <label for="nom_universidad"></label>
        <label for="universidad">Universidad</label>
        <input type="text" name="universidad" id="universidad" />
    </form></td>
    <td>Fecha
      <form id="form6" name="form6" method="post" action="">
        <label for="cmbo_calendario"></label>
        <select name="cmbo_calendario" id="cmbo_calendario">
        </select>
    </form></td>
  </tr>

 

</table>
</form>
<form id="form7" name="form7" method="post" action="insertar.php">
  <input type="submit" name="inscribir" id="inscribir" value="Inscribir" />
</form>
<form id="form8" name="form8" method="post" action="cancelar.php">
  <input type="submit" name="cancelar" id="cancelar" value="Cancelar" />
</form>
<p>&nbsp;</p>
</body>
</html>