
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Radio Online | H&N Salud y Naturaleza</title>
    <link rel="icon" href="assets/img/hn-icon.ico" title="Radio Online | H&N Salud y Naturaleza">
    <meta name="description" content="Radio Online | H&N Salud y Naturaleza"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mod/css/menu-var.css">
    <link rel="stylesheet" href="mod/css/footer.css">
    <link rel="stylesheet" href="assets/css/radio-online.css">
</head>
<body>
    <header>
        <?php include("mod/menu-var.php"); ?>
    </header>
    <main>
        <!--- Estreno --->
        <!--<div class="radio-portada">
			<div class="container">
				<h1 class="titulo">Radio Online</h1>
				<p class="descripcion">Escucha nuestros programas, pódcast y musicoterapia<br>donde quieras, cuando quieras.</p>
			</div>
		</div>-->
        
        <!--- Reproductor --->
        <div class="reproductor">
            <div class="container">
                <iframe src="//escucha.los40.com.mx/widget/directo/40_principales/"  width="100%" height="100%"></iframe>
            </div>
        </div>

        <!--- Temas de la Radio --->
        <section id="radio">
            <div class="container">
                <div class="ads-l">
                    <img src="radio/img/elementos-metafisicos-de-la-musica.png">
                </div>
                <div class="temas">
                    <h3>Temas en emisión</h3>
                    <p>Musicoterapia</p>
                    <p>Mensajes de la conciencia despierta</p>
                    <p>Reflexiones</p>
                    <p>Mindfulness</p>
                    <p>Meditaciones Guiadas</p>
                    <p>Talk show</p>
                </div>
                <div class="ads-r">
                    <img src="radio/img/El-impacto-de-la-musica-en-el-cerebro.png">
                </div>
            </div>
        </section>












        <!--- Calendario --->
        <section id="#calendario" class="calendario">
            <div class="container">
                <div class>
                    <h2>Nuestro calendario</h2>
                </div>
            </div>
            <div class="container">
                <img src="assets/img/radio-online/calendario-radio.png" alt="Calendario">
            </div>
        </section>


    </main>
    <?php include("mod/footer.php"); ?>
    <script src="js/menu-nav.js"></script>
</body>
</html>