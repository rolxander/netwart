function validar(){
	var nombre, apellido,areacode, telnum, emailid, comentario, expresion;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	areacode = document.getElementById("areacode").value;
	telnum = document.getElementById("telnum").value;
	emailid = document.getElementById("emailid").value;
	comentario = document.getElementById("comentario").value;

	if(nombre === "" || apellido === "" || areacode === "" || telnum === "" || emailid === "" || comentario === ""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	else if (nombre.length>30){
		alert("El nombre es muy largo");
		return false;
	}
	else if (apellidos.length>50){
		alert("El apellido es muy largo");
		return false;
	}
}