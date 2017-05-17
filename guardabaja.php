<?php
include("utilerias.php");
$conexion=conecta(); //servidor y bd
$u=GetSQLValueString($_POST["txtUsuario"],"text");
//esta consulta esta mal :( 
$consulta=sprintf("delete from usuarios where usuario=%s",$u);
msql_query($consulta);
if (msql_affected_rows()>0) {
	print("usuario agregado");
}
else{
	print("usuario no agregado :(");
}
?>