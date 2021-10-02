<?php 
// Incluyendo mi Bd
include 'bdprim.php';
include 'Carrito.php';
$cart = new Cart;
$nombre=$_SESSION['user'];
$filtro;
if (!isset($nombre)) {
    header("location:index1.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>

<body>
    <!-- Page Preloder -->
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
                    <a href="Salir.php" class="login-panel"><i class="fa fa-user"></i>Salir</a>
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
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <?php
                                         if ($cart->total_items()>0) {
                                             $cartItems= $cart->contents();
                                             foreach($cartItems as $item){
                                         ?>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="<?php echo $item["image"]?>" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$<?php echo $item["price"].' USD';?> x <?php echo $item["qty"]; ?></p>
                                                            <h6><?php echo $item["namep"]?></h6>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php } } ?>
                                    </div>
                                    <div class="select-total">
                                    <?php if($cart->total_items() > 0){ ?>
                                            <span>total:</span>
                                            <h5><?php echo '$'.$cart->total().' USD'; ?></h5>
                                    <?php } ?>
                                        
                                    </div>
                                
                                    <div class="select-button">
                                        <a href="#" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <?php if($cart->total_items() > 0){ ?>
                                <li class="cart-price"><?php echo '$'.$cart->total().' US'; ?></li>
                            <?php } ?>
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
                            <li><a href="tienda.php">Mujeres</a></li>
                            <li><a href="tienda.php">Hombres</a></li>
                            <li><a href="tienda.php">Niños</a></li>
                            <li><a href="tienda.php">Calzado</a></li>
                            <li><a href="tienda.php">Juguetes</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a>Tienda</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Tienda</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="advanced-search">
                <form action="tienda.php" class="input-group" method="POST">
                    <input type="text" id="buscar" name="buscar">
                    <button type="button"><i class="ti-search"></i></button>
                </form>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Price</h4>
                        <div class="filter-range-wrap">
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                data-min="0" data-max="1000">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                        </div>
                        <a href="#" class="filter-btn">Filter</a>
                    </div>
                    <!--<div class="filter-widget">
                        <h4 class="fw-title">Color</h4>
                        <form action="tiendaprueba.php" method="post">
                            <div class="fw-color-choose">
                            <div class="cs-item">
                                <input type="radio" id="negro" name="negro">
                                <label class="cs-black" for="cs-black">Negro</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="violeta" name="violeta">
                                <label class="cs-violet" for="cs-violet">Violeta</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="azul" name="azul">
                                <label class="cs-blue" for="cs-blue">Azul</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="amarillo" name="amarillo">
                                <label class="cs-yellow" for="cs-yellow">Amarillo</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-red">
                                <label class="cs-red" for="cs-red">Rojo</label>
                            </div>
                            <div class="cs-item">
                                <input type="radio" id="cs-green">
                                <label class="cs-green" for="cs-green">Verde</label>
                            </div>
                            </div>
                        </form>
                        
                    </div>-->
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="s-size">
                                <label for="s-size">s</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="m-size">
                                <label for="m-size">m</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="l-size">
                                <label for="l-size">l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <label for="xs-size">xs</label>
                            </div>
                        </div>
                    </div>
                    <!--<div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>-->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="select-option">
                                       <select class="sorting" name="buscategoria" id="buscategoria">
                                            <option value="Todos">Todos</option>
                                            <option value="Hombre">Hombre</option>
                                            <option value="Mujer">Mujer</option>
                                            <option value="Niño">Niño</option>
                                        </select>                                     
                                    <select class="p-show">
                                        <option value="">Mirar:</option>
                                    </select>
                                </div>
                            </div>

                            <?php 
                               
                               if ($_POST['buscar'] == '') {$filtro = '';}
                                else if ($_POST['buscar'] != '') {$filtro="WHERE name LIKE LOWER('%".$_POST["buscar"]."%')";}
                            $busqueda= $db ->query("SELECT * FROM products $filtro");
                            $numeros = mysqli_num_rows($busqueda)?>    
                            <div class="col-lg-5 col-md-5 text-right">
                                <p>Resultados:(<?php echo $numeros?>)</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row mb-3">
                            <div class="col-lg-4 col-sm-5">
                            <?php 
                                    while ($row = mysqli_fetch_assoc($busqueda)) {
                                ?>
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="<?php echo $row["image"]?>" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="Accion.php?action=addToCart&id=<?php echo $row["id"]; ?>"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="#">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $row["seccion"]?></div>
                                        <a href="#">
                                            <h5><?php echo $row["name"]?></h5>
                                        </a>
                                        <div class="product-price">
                                            $ <?php echo $row["price"]?> USD
                                        </div>
                                    </div>
                                </div>      
                            <?php     } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

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
                            <a href="#"><img src="img/Logo.png" alt=""></a>
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