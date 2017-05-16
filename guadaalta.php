<?php
include("utilerias.php");
$conexion=conecta(); //servidor y bd
$u=GetSQLValueString($_POST["txtUsuario"],"text");
$n=GetSQLValueString($_POST["txtNombre"],"text");
$c=GetSQLValueString($_POST["txtClave"],"text");
$d=GetSQLValueString($_POST["txtDepto"],"int");
$v=GetSQLValueString($_POST["txtVigencia"],"int");
$consulta=sprintf("insert into usuarios values(%s,%s,%s,%d,%d)", $u,$n,$c,$d,$v);


?>