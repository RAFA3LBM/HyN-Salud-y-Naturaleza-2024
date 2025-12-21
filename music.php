
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Musicoterapia</title>
    <link rel="icon" href="assets/img/hn-icon.ico" title="H&N Salud y naturaleza">
    <meta name="description" content="Descripción del Proyecto"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mod/css/menu-var.css">
    <link rel="stylesheet" href="mod/css/footer.css">
    <link rel="stylesheet" href="assets/css/musicoterapia.css">
</head>
<body>
    <header>
        <?php include("mod/menu-var.php"); ?>
    </header>
    <main>
        <!--- Portada Podcast --->
        <div class="podcast-portada">
			<div class="container">
				<h1 class="titulo">Musicoterapia</h1>
				<p class="descripcion"></p>
			</div>
		</div>
        
        <!--- Podcast más recientes--->
        <section class="podcast">
            <div class="container">
                <div class="titulo">
                    <h1>Todas nuestras sesiones</h1>
                </div>
                <div class="caja">
                    <div class="box-podcast">
                        <a href="sesiones-music/musicoterapia-de-sanacion/sesion.php"><img src="assets/img/sesiones/musicoterapia.png" alt=""></a>
                        <h2>Musicoterapia de Sanación</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="sesiones-music/espiritual/sesion.php"><img src="assets/img/sesiones/espiritual.png" alt=""></a>
                        <h2>Sesión Música Espiritual</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="sesiones-music/tareas-lectura-y-concentracion/sesion.php"><img src="assets/img/sesiones/concentracion.png" alt=""></a>
                        <h2>Sesión Música para la Concentración</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="sesiones-music/meditacion/sesion.php"><img src="assets/img/sesiones/meditacion.png" alt=""></a>
                        <h2>Sesión Música para Meditación</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="sesiones-music/sesion-para-ninos/sesion.php"><img src="assets/img/sesiones/sesion-para-ninos.png" alt=""></a>
                        <h2>Sesiones Música para Niños</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include("mod/footer.php"); ?>
    <script src="js/menu-nav.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</body>
</html>