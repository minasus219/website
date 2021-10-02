<?php
include ("bdprim.php");
session_start();
$nombre =$_POST['nombre'];
$clave =$_POST['clave'];

$query = "SELECT COUNT(*) as contar FROM customers where nombre='$nombre' and clave='$clave'";
$consulta=mysqli_query($db,$query);
$filas= mysqli_fetch_array($consulta);

if ($filas['contar']>0) {
    $_SESSION['user']=$nombre;
    header("location:index.php");
}else {
    echo "DATOS INCORRECTOS";
}




?>