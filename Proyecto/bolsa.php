<?php
include 'Carrito.php';
$cart = new Cart;

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de compras</title>

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
                        hola.example@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +507 6754-5432
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
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                       <!-- <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="#" class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                        </div>-->
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
                                                            <h6><?php echo $item["name"]?></h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
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
                            <li><a href="tienda.php">Ni??os</a></li>
                            <li><a href="tienda.php">Calzado</a></li>
                            <li><a href="tienda.php">Juguetes</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a>Tienda</a></li>
                        <li><a href="tienda.php">Colecci??n</a>
                            <ul class="dropdown">
                                <li><a href="tienda.php">Hombre</a></li>
                                <li><a href="tienda.php">Mujer</a></li>
                                <li><a href="tienda.php">Ni??o</a></li>
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
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="tienda.php">Tienda</a>
                        <span>Carrito de compras</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Nombre del producto</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($cart->total_items()>0) {
                                    $cartItems= $cart->contents();
                                    foreach($cartItems as $item){
                                ?> 
                                <tr>
                                    <td class="cart-pic first-row"><img src="<?php echo $item["image"]?>" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5><?php echo $item["name"]?></h5>
                                    </td>
                                    <td class="p-price first-row">$<?php echo $item["price"].' USD';?></td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row"><?php echo '$'.$item["subtotal"].' USD'; ?></td>
                                    <td class="close-td first-row"><a href="Accion.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Estas seguro?')"><i class="ti-close"></i></a></td>
                                </tr>       
                                <?php } } else{ ?>
                                    <tr><td colspan="5"><p>Su carrito esta vacio.....</p></td>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="tienda.php" class="primary-btn continue-shop">Continue</a>
                                <a href="tienda.php" class="primary-btn up-cart">Actualizar carrito</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Codigos de descuento</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Ingresa su codigo">
                                    <button type="submit" class="site-btn coupon-btn">Aceptar</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                            <?php if($cart->total_items() > 0){ ?>
                                <ul>
                                    <li class="subtotal">Subtotal <span><?php echo '$'.$cart->total().' USD'; ?></span></li>
                                    <li class="cart-total">Total <span><?php echo '$'.$cart->total().' USD'; ?></span></li>
                                </ul>
                                <?php } ?>
                                <a href="checkout.php" class="proceed-btn">PROCEDE AL CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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
                            <li>Direcci??n: La chorrera</li>
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
                        <h5>Informaci??n</h5>
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
                            <button type="button">Subscr??bete</button>
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