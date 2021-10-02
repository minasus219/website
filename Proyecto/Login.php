<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="log.php" method="POST" class="sign-in-form">
                <h2 class="title">Login</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="clave" placeholder="Clave">
                </div>
                <input type="submit" value="Login" class="btn solid">
                <p class="social-text">O logueate con tus redes sociales!</p>
                <div class="social-media">
                   <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                   </a>
                   <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                   </a>
                   <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                   </a>
                   <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                   </a>
                </div>
            </form>
            <form action="registro.php" method="POST" class="sign-up-form">
                <h2 class="title">Registrate</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-map-marker-alt"></i>
                    <input type="text" name="direccion" placeholder="Direccion">
                </div>
                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input type="tel" name="telefono" placeholder="Telefono">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" placeholder="Clave">
                </div>
                <input type="submit" name="registro" value="Registrate" class="btn solid">
            </form>
        </div>

    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Primera vez?</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn transparent" id="sign-up-btn">Registrate</button>
            </div>
            <img src="img/img1.svg" class="image" alt="">
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>De nuevo aqui?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn transparent" id="sign-in-btn">Inicia sesión</button>
            </div>
            <img src="img/img2.svg" class="image" alt="">
        </div>
    </div>
</div>

    <script src="js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>
</body>
</html>