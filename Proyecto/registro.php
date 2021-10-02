<?php
include("bdprim.php");

$nombre=trim($_POST['nombre']);
$email=trim($_POST['email']);
$telefono=trim($_POST['telefono']);
$clave=trim($_POST['pass']);
$direccion=trim($_POST['direccion']);


$consulta= "INSERT INTO customers(nombre, email, telefono, clave, direccion) VALUES ('$nombre','$email','$telefono','$clave','$direccion')";
$ejecutar=mysqli_query($db,$consulta);
if ($ejecutar) {
    echo '
       <script>
       alert("Usuario registrado");
       window.location = "Login.php";
       </script>
    ';   
}
?>