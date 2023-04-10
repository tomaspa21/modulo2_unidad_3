<?php


session_start();
include("conexion.php");
$codigo_captcha = $_POST['captcha'];

if ($codigo_captcha == $_SESSION['codigo_captcha']) {

$nombre_per = $_POST ['nombre']; 
$apellido_per = $_POST ['apellido'];
$funcion_per = $_POST ['funcion'];
$imagen_per = $_POST ['imagen'];
$descripcion_per = $_POST ['descripcion'];



mysqli_query($conexion_db, "INSERT INTO componentes VALUES (DEFAULT, '$nombre_per', '$apellido_per', '$funcion_per' , '$imagen_per' , '$descripcion_per')");
mysqli_close($conexion_db);

header("Location:cargar.php?ok");

} else {

header("Location:cargar.php?error_codigo");

}


?>


