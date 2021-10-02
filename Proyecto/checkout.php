<?php
// include database configuration file
include 'bdprim.php';

// initializ shopping cart class
include 'Carrito.php';
$cart = new Cart;

$_SESSION['sessCustomerID'] = 1;


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/Logo.png">
      <h2>Checkout</h2>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus accusamus possimus facilis nemo vero voluptates praesentium beatae doloremque fugiat, delectus incidunt animi. Amet animi eaque incidunt esse similique possimus assumenda.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
      <?php
        if($cart->total_items() > 0){
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Cantidad:</span>
          <span class="badge bg-primary rounded-pill"><?php echo $item["qty"]; ?></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?php echo $item["name"]?></h6>
            </div>
            <span class="text-muted">$<?php echo $item["price"]?> USD</span>
          </li>
        </ul>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>Su carrito no tiene productos......</p></td>
        <?php } ?>
        <?php if($cart->total_items() > 0){ ?>
        <ul>
        <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong><?php echo '$'.$cart->total().' USD'; ?></strong>
          </li>
        </ul>
        <?php } ?>
        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Formas de pago</h4>
        <form class="needs-validation" >
          <hr class="my-4">

          <h4 class="mb-3">Pago</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credito/Debito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Paypal</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Otro</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nombre de la tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero de tarjeta</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiracion</label>
              <input type="date" class="form-control" id="cc-expiration" placeholder="" required>
              
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              
            </div>
          </div>

          <hr class="my-4">

          <a href="Accion.php?action=placeOrder" class="primary-btn">Realizar orden</a>
        </form>
      </div>
    </div>
  </main>

  
</div>
<br>
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
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
