<?php
include("utilerias.php");
$conexion=conecta(); //servidor y bd
$u=GetSQLValueString($_POST["txtUsuario"],"text");
$n=GetSQLValueString($_POST["txtNombre"],"text");
$c=GetSQLValueString(md5$_POST["txtClave"],"text");
$d=GetSQLValueString($_POST["txtDepto"],"int");
$v=GetSQLValueString($_POST["txtVigencia"],"int");
//esta consulta esta mal :( 
$consulta=sprintf("insert into usuarios  values(default,%s,%s,%s,%d,%d)", $u,$n,$c,$d,$v);
msql_query($consulta);
if (msql_affected_rows()>0) {
	print("usuario agregado");
}
else{
	print("usuario no agregado :(");
}
?>