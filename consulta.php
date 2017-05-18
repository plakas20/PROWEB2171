<?php
include("utilerias.php");
$conexion=conecta();
$consulta=sprintf("select * from usuarios order by usuario");
$resultado=mysql_query($consulta);
$tabla="<table border=1>";
$tabla.="<tr>";
$tabla.="<th>Usuario</th>";
$tabla.="<th>Nombre</th>";
$tabla.="<th>Departamento</th>";
$tabla.="<th>Vigencia</th>";
$tabla.="<th>Accion</th>";
$tabla.="</tr>";


//resultado es un dataset
if (mysql_num_rows($resultado)>0) {
	while ($registro=mysql_fetch_array($resultado)) {
     $tabla.="<tr>";
     $tabla.="<td>".$registro["usuario"]."</td>";
     $tabla.="<td>".$registro["nombre"]."</td>";
     $tabla.="<td>".$registro["departamento"]."</td>";
     $tabla.="<td>".$registro["vigencia"]."</td>";
     $tabla.="<td></td>";
     $tabla.="</tr>";

	}
	}
	else{//No hay registros
		print("sin datos carnal :(");
	}
	$tabla.="</table>";
?>