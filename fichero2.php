<?php

$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$fechaNac=$_POST['fechaNac'];
$localidad=$_POST['localidad'];



$line=$nombre;

$line=str_pad($nombre,(2+strlen($line)),"#");


$line=$line.$apellido1;
$line=str_pad($line,(2+strlen($line)),"#");

$line=$line.$apellido2;
$line=str_pad($line,(2+strlen($line)),"#");

$line=$line.$fechaNac;
$line=str_pad($line,(2+strlen($line)),"#");

$line=$line.$localidad;


$file = fopen("alumnos2.txt","a");

fwrite($file,$line.PHP_EOL);

fclose($file);

?>
