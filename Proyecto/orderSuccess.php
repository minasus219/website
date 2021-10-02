<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Orden Realizada</title>
    <meta charset="utf-8">
    <style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Estatus de orden</h1>
    <p>Su orden se ha realizado exitosamente!. El ID de su orden es #<?php echo $_GET['id']; ?></p>
    <a href="Tienda.php">Regresar</a>
</div>
</body>
</html>