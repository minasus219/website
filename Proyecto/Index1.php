<?php 
// Incluyendo mi Bd
include 'bdprim.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido a mi pagina :D</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Estilos css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Page Preloader -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hola.example@email.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +507 6666-7777
                    </div>
                </div>
                <div class="ht-right">
                    <a href="Login.php" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                    </div>
                    <div class="top-social">
                        <a href="https://www.facebook.com/"><i class="ti-facebook"></i></a>
                        <a href="https://twitter.com/"><i class="ti-twitter-alt"></i></a>
                        <a href="https://pa.linkedin.com/"><i class="ti-linkedin"></i></a>
                        <a href="https://www.pinterest.es/"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>TODOS LOS DEPARTAMENTOS</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="tienda.php">Mujeres</a></li>
                            <li><a href="tienda.php">Hombres</a></li>
                            <li><a href="tienda.php">Niños</a></li>
                            <li><a href="tienda.php">Calzado</a></li>
                            <li><a href="tienda.php">Juguetes</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a>Home</a></li>
                        <li><a href="tienda.php">Tienda</a></li>
                        <li><a href="tienda.php">Colección</a>
                            <ul class="dropdown">
                                <li><a href="tienda.php">Hombre</a></li>
                                <li><a href="tienda.php">Mujer</a></li>
                                <li><a href="tienda.php">Niño</a></li>
                            </ul>
                        </li>
                        <li><a>Contacto</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="bolsa.php">Carrito de compras</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="#">Preguntas</a></li>
                                <li><a href="Login.php">Registro</a></li>
                                <li><a href="Login.php">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hu2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Hombres</span>
                            <h1>Ofertas Flash</h1>
                            <p>Tenemos ofertas rápidas en el departamento de hombres una vez al mes!</p>
                            <a href="#" class="primary-btn">Compra ahora!</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/mu2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Calzado</span>
                            <h1>Las mejores marcas de calzado.</h1>
                            <p>Hay ofertas en zapatos americanos y zapatillas fuera de temporada.</p>
                            <a href="#" class="primary-btn">compra ahora!</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/hombre.jpg" alt="">
                        <div class="inner-text">
                            <h4>Hombre</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/mujer.png" alt="">
                        <div class="inner-text">
                            <h4>Mujer</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/calzado2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Calzado</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>Mujer</h2>
                        <a href="tienda.php">Descubre más</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Prendas</li>
                            <li class="active">Pantalones</li>
                            <li>Calzado</li>
                            <li>Accesorios</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                    <?php 
                        $query= $db ->query("SELECT * FROM products WHERE id ='8'");
                        if ($query ->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                          <div class="product-item">
                                <div class="pi-pic">
                                    <img src="<?php echo $row["image"]?>" alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="Login.php"><i class="icon_bag_alt"></i></a></i></a></li>
                                        <li class="quick-view"><a href="Login.php">+ Quick View</a></li>
                                        <li class="w-icon"><a href="Login.php"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $row["seccion"]?></div>
                                    <a href="#">
                                        <h5>Cardigan</h5>
                                    </a>
                                    <div class="product-price">
                                        $ <?php echo $row["price"]?> USD
                                        <span>$30.31 USD</span>
                                    </div>
                                </div>
                            </div>      
                        <?php     }
                        } else { ?>
                        <p>No hay productos...</p>
                        <?php    } ?>

                        <?php 
                        $query= $db ->query("SELECT * FROM products WHERE id ='9'");
                        if ($query ->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                          <div class="product-item">
                                <div class="pi-pic">
                                    <img src="<?php echo $row["image"]?>" alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="Login.php"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="Login.php">+ Quick View</a></li>
                                        <li class="w-icon"><a href="Login.php"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $row["seccion"]?></div>
                                    <a href="#">
                                        <h5>Pack de camisetas</h5>
                                    </a>
                                    <div class="product-price">
                                        $ <?php echo $row["price"]?> USD
                                        <span>$20.71 USD</span>
                                    </div>
                                </div>
                            </div>      
                        <?php     }
                        } else { ?>
                        <p>No hay productos...</p>
                        <?php    } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <?php 
    $query= $db ->query("SELECT * FROM products WHERE id ='10'");
    if ($query ->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
    ?>
    <section class="deal-of-week set-bg spad" data-setbg="<?php echo $row["image"]?>">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Oferta de la semana</h2>
                    <p><?php echo $row["name"]?> <?php echo $row["description"]?> </p>
                    <div class="product-price">
                        $<?php echo $row["price"]?> USD
                        <span>/ Figura</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="Login.php" class="primary-btn">Compra ahora</a>
            </div>
        </div>
    </section>                  
    <?php     }
    } else { ?>
    <p>No hay productos...</p>
    <?php    } ?>
    
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Prendas</li>
                            <li class="active">Pantalones</li>
                            <li>Calzado</li>
                            <li>Accesorios</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        <?php 
                        $query= $db ->query("SELECT * FROM products WHERE id ='1'");
                        if ($query ->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                          <div class="product-item">
                                <div class="pi-pic">
                                    <img src="<?php echo $row["image"]?>" alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="Login.php"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="Login.php">+ Quick View</a></li>
                                        <li class="w-icon"><a href="Login.php"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $row["seccion"]?></div>
                                    <a href="#">
                                        <h5>Chaqueta de jeans</h5>
                                    </a>
                                    <div class="product-price">
                                        $ <?php echo $row["price"]?> USD
                                        <span>$90.81 USD</span>
                                    </div>
                                </div>
                            </div>      
                        <?php     }
                        } else { ?>
                        <p>No hay productos...</p>
                        <?php    } ?>

                        <?php 
                        $query= $db ->query("SELECT * FROM products WHERE id ='2'");
                        if ($query ->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                          <div class="product-item">
                                <div class="pi-pic">
                                    <img src="<?php echo $row["image"]?>" alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="Login.php"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="Login.php">+ Quick View</a></li>
                                        <li class="w-icon"><a href="Login.php"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $row["seccion"]?></div>
                                    <a href="#">
                                        <h5>Chaqueta de invierno</h5>
                                    </a>
                                    <div class="product-price">
                                        $ <?php echo $row["price"]?> USD
                                        <span>$35.05</span>
                                    </div>
                                </div>
                            </div>      
                        <?php     }
                        } else { ?>
                        <p>No hay productos...</p>
                        <?php    } ?>
                        <?php 
                        $query= $db ->query("SELECT * FROM products WHERE id ='3'");
                        if ($query ->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                          <div class="product-item">
                                <div class="pi-pic">
                                    <img src="<?php echo $row["image"]?>" alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="Login.php"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="Login.php">+ Quick View</a></li>
                                        <li class="w-icon"><a href="Login.php"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $row["seccion"]?></div>
                                    <a href="#">
                                        <h5>Chaqueta estilo militar</h5>
                                    </a>
                                    <div class="product-price">
                                        $ <?php echo $row["price"]?> USD
                                        <span>$65.99 USD</span>
                                    </div>
                                </div>
                            </div>      
                        <?php     }
                        } else { ?>
                        <p>No hay productos...</p>
                        <?php    } ?>
                        <?php 
                        $query= $db ->query("SELECT * FROM products WHERE id ='4'");
                        if ($query ->num_rows > 0) {
                            while ($row = $query->fetch_assoc()) {
                        ?>
                          <div class="product-item">
                                <div class="pi-pic">
                                    <img src="<?php echo $row["image"]?>" alt="">
                                    <div class="sale">Sale</div>
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="Accion.php?action=addToCart&id=<?php echo $row["id"]; ?>"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="Accion.php?action=addToCart&id=<?php echo $row["id"]; ?>">+ Quick View</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $row["seccion"]?></div>
                                    <a href="#">
                                        <h5>Abrigo con capucha</h5>
                                    </a>
                                    <div class="product-price">
                                        $ <?php echo $row["price"]?> USD
                                        <span>$30.00 USD</span>
                                    </div>
                                </div>
                            </div>      
                        <?php     }
                        } else { ?>
                        <p>No hay productos...</p>
                        <?php    } ?>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                        <h2>Hombre</h2>
                        <a href="tienda.php">Descubre más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>Todo lo que esté encima de 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery a cualquier hora</h6>
                                <p>Bueno y seguro</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Pago seguro</h6>
                                <p>100% seguro de compra</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Dirección: La chorrera</li>
                            <li>Telefono: +507 6855-7456</li>
                            <li>Email: angel.fernandez1@utp.ac.pa</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Información</h5>
                        <ul>
                            <li><a href="#">Sobre nosotros</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Servicio</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Mi cuenta</h5>
                        <ul>
                            <li><a href="#">Mi cuenta</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Carrito</a></li>
                            <li><a href="#">Tienda</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Enterate de todo lo nuevo ahora.</h5>
                        <p>Ingrese su E-mail para recibir notificaciones </p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Ingrese su Email">
                            <button type="button">Subscríbete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Hecho por <a href="https://colorlib.com" target="_blank">Angel</a>
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>