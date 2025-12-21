


<!DOCTYPE html>
<html lang="es">
<html>
<head>
    <meta charset="utf-8">
    <title>Registro | H&N Salud y Naturaleza</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="mod/css/footer.css">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>

    <link rel="icon" href="assets/img/hn-icon.ico" title="Registro | H&N Salud y Naturaleza">
    <meta name="description" content="Descripción del Proyecto"/>
</head>
<body>
    <header>
        <div class="logo">
            <div class="container">
                <img src="assets/img/hn-logotype.png" width="200px" alt="H&N Salud y naturaleza">
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

                    <h2>REGISTRO</h2>
                    <form action="signup.php" method="POST">
                        <input name="name" type="text" placeholder="Nombre">
                        <input name="email" type="text" placeholder="Escribe tu email">
                        <input name="password" type="password" placeholder="Contraseña">
                        <p>Intenta utilizar una contraseña diferente en cada cuenta importante.</p>
                        <input type="submit" value="REGISTRARME">
                    </form>
                    <p>¿Ya tienes cuenta? <a href="login.php" target="_Self">Iniciar sesión</a></p>
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
</body>
</html>