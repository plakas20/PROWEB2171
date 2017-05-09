<?php
include("utilerias.php");
function validausuario($usuario,$clave){
//Computadora, usuario,contraseña
	$conexion=msql_connect("localhost","root","");
	msql_select_db("pw2171");
	$usuario=GetSQLValueString($usuario,"text");
	$clave=GetSQLValueString(md5($clave),"text");
$consulta=sprintf("select usuario,clave from usuarios where usuario=%s and clave=%s",$usuario,$clave);

	//$consulta="select usuario,clave from usuarios where usuario='".$usuario"and clave='".md5($clave)."' limit 1";
    $resultado=msql_query($consulta);
if (msql_numrows($resultado)>0) {
print("Bievenido".$usuario.":)");
}else{
	print("NO ERES BIENVENIDO");
}
if (isset($_POST["txtusuario"])&& isset($_POST["txtClave"])) {
	

$usuario=$_POST["txtusuario"];
$clave=$_POST["txtClave"]
validausuario($usuario,$clave);

}
else{
	print("<a href='acceso.html'>Valida tus datos</a>");
}
?>