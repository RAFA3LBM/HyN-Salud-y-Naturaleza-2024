

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cursos</title>
    <link rel="icon" href="assets/img/hn-icon.ico" title="H&N Salud y Naturaleza">
    <meta name="description" content="H&N Salud y Naturaleza"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mod/css/menu-var.css">
    <link rel="stylesheet" href="mod/css/footer.css">
    <link rel="stylesheet" href="assets/css/cursos/cursos.css">
</head>
<body>
    <header>
        <?php include("mod/menu-var.php"); ?>
    </header>
    <main>
        <!--- Portada Podcast --->
        <div class="cursos-portada">
			<div class="container">
				<h1 class="titulo">Cursos</h1>
				<p class="descripcion"></p>
			</div>
		</div>
        
        <!--- Podcast más recientes--->
        <section class="cursos">
            <div class="container">
                <div class="titulo">
                    <h1>Todos los Cursos</h1>
                </div>
                <div class="caja">
                    <div class="box-cursos">
                        <a href="cursos/mis-manos-hablan/curso.php"><img src="assets/img/cursos/lengua-de-senas/portada.png" alt=""></a>
                        <h2>Mis Manos Hablan</h2>
                        <p>Aprende lengua de señas</p>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php include("mod/footer.php"); ?>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="js/menu-nav.js"></script>
</body>
</html>