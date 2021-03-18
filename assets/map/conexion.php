<?php
header("Acces-Control_Allow-Origin: *");
$hostname="mysqltest.ofertadehoy.innovatest.site";
//$base_de_datos="carito_de_compras";
$base_de_datos="dbofertadehoytest";
$user_name="dba_ofertatest";
$password="innova_3309";
$conexion=mysql_connect($hostname,$user_name,$password) or die(mysql_error());
mysql_select_db($base_de_datos,$conexion);

/*
$hostname="localhost";
//$base_de_datos="carito_de_compras";
$base_de_datos="dbsurtidortest";
$user_name="root";
$password="";
$conexion=mysql_connect($hostname,$user_name,$password) or die(mysql_error());
mysql_select_db($base_de_datos,$conexion);
session_start();
*/
if($conexion)
	{
		echo "exito";
	}
else
	{
echo "error";
	}


