// JavaScript Document
function validarDatos(){
	var valida=true;
	if(!document.form1.nom_estudiante.value){
		alert("Usted debe ingresar un nombre");
		document.form1.nom_estudiante.focus;
		valida="false";
	}
	if(!document.form1.ap_paterno.value){
		alert("Usted debe ingresar el apellido paterno");
		document.form1.ap_paterno.focus;
		valida="false";
	}
	if(!document.form1.ap_materno.value){
		alert("Usted debe ingresar el apellido materno");
		document.form1.ap_materno.focus;
		valida="false";
	}
	if(!document.form1.ci.value){
		alert("Usted debe ingresar el C.I.");
		document.form1.ci.focus;
		valida="false";
	}
	if(!document.form1.carrera.value){
		alert("Usted debe ingresar su carrera");
		document.form1.carrera.focus;
		valida="false";
	}
	if(valida){
		document.form1.submit();
	}
	window.onload=function(){
		document.getElementById('boton').onclick.validarDatos;
	}
}