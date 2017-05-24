var iniciaApp=function(){
	//alert("Hola app")
	var entrar=function();
	alert($("#txtUsuario").val());
	alert($("#txtClave").val());
 }
var teclaUsuario=function(tecla){
if(tecla.wich==13){
	$("#txtClave").focus();
}
}
var teclaClave=function(tecla){
	if (tecla.wich==13){  
		entrar();
}
}
 //seccion de declaracion de eventos
$("#btnEntrar").on("click",entrar);
$("#btnUsuario").on("keypress",teclaUsuario);
$("#btnClave").on("keypress",teclaClave);
}

$(document).ready(iniciaApp);

