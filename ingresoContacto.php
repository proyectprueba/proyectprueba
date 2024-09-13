<?php 

//Requerir la conexion
require_once("conexion.php");

//Cadena de conexion
$conexion = mysqli_connect($servidor, $usuario, $contrasenia);

//Seleccionar la base de datos
mysqli_select_db($conexion, $basedatos);

//Recibir los datos de codigo, nombre y edad
$nombre = $_POST['txtnombre'];
$correo = $_POST['txtcorreo'];
$asunto = $_POST['txtasunto'];
$mensaje = $_POST['txtmensaje'];

//Consulta Insert para guardar los datos
$cadena_sql = "INSERT INTO contacto
(nombre, correo, asunto, mensaje) 
VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

//Realizar la insercion en la base de datos
$insertar = mysqli_query($conexion, $cadena_sql);

?>