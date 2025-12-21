


<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <meta charset="utf-8">
    <title>Iniciar sesion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="mod/css/footer.css">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>

    <link rel="icon" href="assets/img/hn-icon.ico" title="H&N Salud y Naturaleza">
    <meta name="description" content="Iniciar sesión"/>
</head>
<body>
    <header>
        <div class="logo">
            <div class="container">
                <img src="assets/img/hn-logotype.png" href="index.php" width="200px" alt="H&N Salud y naturaleza">
            </div>
        </div>
    </header>

    <main>
        <div class="register">
            <div class="container">
                <div class="cuadro">
                    <?php if(!empty($message)): ?>
                      <h3> <?= $message ?></h3>
                    <?php endif; ?>
                    <h2>INICIAR SESIÓN</h2>
                    <form action="login.php" method="POST">
                    <input name="email" type="text" placeholder="Correo Electrónico">
                    <input name="password" type="password" placeholder="Contraseña">
                    <input type="submit" value="Entrar">
                    </form>

                    <p>¿No tienes cuenta? <a href="signup.php" target="_Self">Registrate</a></p>
                    <div class="preguntas">
                        <p>¿Preguntas? Llama al 800 000 000</p>
                    </div>
                    <div class="privacidad">
                        <a href="#" target="_blank">Política de Privacidad</a>
                        <a href="#" target="_blank">Términos de Uso</a>
                        <a href="#" target="_blank">Información</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("mod/footer.php"); ?>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</body>
</html>