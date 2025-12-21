

<!DOCTYPE html>
<html lang="es">
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="icon" href="assets/img/hn-icon.ico" title="H&N Salud y Naturaleza">
    <meta name="description" content="H&N Salud y Naturaleza"/>
    
    <title>H&N Salud y Naturaleza</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inclusive+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="mod/css/footer.css">
    <link rel="stylesheet" href="mod/css/menu-var.css">
  </head>
  <body>
    <header>
        <!--- Navegacións --->
        <nav>
          <a href="#" class="logotipo"><img src="mod/hn-logotype.png" width="150px"></a>
          <div class="bx bx-menu" id="menu-icon"></div>
          <a href="login"class="btn">Iniciar sesión</a>
        </nav>
    </header>

    <!--- Main --->
    <main>
        <div class="contenedor">
            <div class="superpuesto">
                <h1>TV, DOCUMENTALES, RADIO Y PÓDCAST</h1>
                <h2>Salud Física, Mental, Espíritual, Inspiración, Contacto con la Naturaleza, Ecología y Viajes.</h2>
                <p>Ingresa tu email para <a href="signup">crear una cuenta</a> o <a href="login">inicia sesión</a>.</p>
            </div>
        </div>
        
        <div class="mascara"></div>
     
     
     
      <!--- Slider --->
      <div class="slider">
        <ul class="slides">
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen1.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen2.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen3.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen4.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen5.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen6.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen7.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen8.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen9.jpg');"></li>
            <li class="slide" style="background-image: url('assets/img/home/slider/imagen10.jpg');"></li>
        </ul>
    </div>

      <!--- Preview de Programas --->
      <div class="preview">
        <div class="contenedor">
          <div class="texto">
            <h3>Nuestros programas</h3>
            <p>Explora una gran variedad de series originales sobre nuestra salud, bienestar y naturaleza.</p>
            <a href="es-mx">Explorar</a>
          </div>
          <div class="imagen">
            <img src="assets/img/preview/programas.png" alt="">
          </div>
        </div>
      </div>

      <!--- Mensaje --->

      <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">Logout</a>
    <?php else: ?>
    <?php endif; ?>

    </main>
    <?php include("mod/footer.php"); ?>
    
    <script src="js/slider.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
  </body>
</html>