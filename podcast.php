

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Podcast | H&N Salud y Naturaleza</title>
    <link rel="icon" href="assets/img/hn-icon.ico" title="H&N Salud y Naturaleza">
    <meta name="description" content="Podcast | H&N Salud y Naturaleza"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mod/css/menu-var.css">
    <link rel="stylesheet" href="mod/css/footer.css">
    <link rel="stylesheet" href="assets/css/podcast.css">
</head>
<body>
    <header>
        <?php include("mod/menu-var.php"); ?>
    </header>
    <main>
        <!--- Portada Podcast --->
        <div class="podcast-portada">
			<div class="container">
				<h1 class="titulo">Pódcast</h1>
				<p class="descripcion">Programas de Salud y Bienestar</p>
			</div>
		</div>
        
        <!--- Podcast más recientes--->
        <section class="podcast">
            <div class="container">
                <div class="titulo">
                    <h1>Todos nuestros podcast</h1>
                </div>
                <div class="caja">
                    <div class="box-podcast">
                        <a href="podcast/meditacion-guiada/podcast.php"><img src="assets/img/podcast/programas/meditaciones-guiadas.png" alt=""></a>
                        <h2>Meditaciones Guiadas</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="podcast/carpe-diem/podcast.php"><img src="assets/img/podcast/programas/carpe-diem.png" alt=""></a>
                        <h2>Carpe Diem</h2>
                        <p>Un programa que estimula la charla de diferentes temas, con el objetivo de chatear menos y conversar más.</p>
                    </div>
                    <div class="box-podcast">
                        <a href="podcast/espacio-ludico/podcast.php"><img src="assets/img/podcast/programas/espacio-ludico.png" alt=""></a>
                        <h2>Espacio Lúdico</h2>
                        <p>Un programa donde hablaremos de viajes, literatura actividades, eventos y todo lo que nos ocurra</p>
                    </div>
                    <div class="box-podcast">
                        <a href="podcast/hector-malvaez-presenta/podcast.php"><img src="assets/img/podcast/programas/hector-malvaez-presenta.png" alt=""></a>
                        <h2>Héctor Malváez Presenta</h2>
                        <p>Un espacio de literatura.</p>
                    </div>
                    <div class="box-podcast">
                        <a href="podcast/hombro-con-hombro/podcast.php"><img src="assets/img/podcast/programas/hombro-con-hombro.png" alt=""></a>
                        <h2>Hombro con Hombro</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="podcast/mi-bebe-nuestro-bebe/podcast.php"><img src="assets/img/podcast/programas/mi-bebe-nuestro-bebe.png" alt=""></a>
                        <h2>Mi Bebé, nuestro bebé</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="podcast/somos-lo-que-comemos/podcast.php"><img src="assets/img/podcast/programas/somos-lo-que-comemos.png" alt=""></a>
                        <h2>Somos lo que comemos</h2>
                        <p></p>
                    </div>
                    <div class="box-podcast">
                        <a href="podcast/ser-natural/podcast.php"><img src="assets/img/podcast/programas/ser-natural.png" alt=""></a>
                        <h2>Ser Ntural</h2>
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