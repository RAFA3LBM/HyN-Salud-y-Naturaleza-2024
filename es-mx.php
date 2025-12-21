
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio | H&N Salud y Naturaleza</title>
    <link rel="icon" href="assets/img/hn-icon.ico" title="H&N Salud y Naturaleza">
    <meta name="description" content="H&N Salud y Naturaleza"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mod/css/banner.css">
    <link rel="stylesheet" href="mod/css/menu-var.css">
    <link rel="stylesheet" href="mod/css/carrucel.css">
    <link rel="stylesheet" href="assets/css/es-mx.css">
    <link rel="stylesheet" href="mod/css/footer.css">
</head>
<body>
    <header>
        <?php include("mod/menu-var.php"); ?>
    </header>
    <main>
        <!--- Programa de estreno --->
        <aside class="background--banner">
            <video muted autoplay loop poster="mod/home/background-img.webp">
                <source src="mod/home/video-home.mp4" type="video/mp4">
                <img src="mod/home/background-img.webp" alt="Imagen background">
            </video>
            <div class="banner">
                <div class="menu">
                <div class="imagotipo">
                    <h3>Estreno de hoy</h3>
                    <div class="imagotipo--imagen">
                        <img src="mod/home/incluyeme-guiada.webp">
                    </div>
                    <div class="titulo-info">
                        <h1>Inclúyeme</h1>
                        <span class="year">2023</span>
                        <span> | </span>
                        <span class="temporada">Primera Temporada</span>
                        <p class="descripcion"></p>
                        <a class="btn" href="programas/incluyeme/temporada-1/Episodio-1">Empezar a ver</a>
                    </div>
                </div>
            </div>
        </aside>

        <!--- Episodios de Estreno de la Semana--->
        <section id="estrenos">
            <div class="container">
                <h2>Estrenos de la Semana</h2>
                <div class="peliculas-recomendadas contenedor">
                    <div class="contenedor-titulo-controles">
                        <div class="indicadores"></div>
                    </div>

                    <div class="contenedor-principal">
                        <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

                        <div class="contenedor-carousel">
                            <div class="carousel">
                                <div class="pelicula">
                                    <a href="programas/meditacion-guiada/temporada-1/Episodio-3"><img src="assets/content/meditacion-guiada/T01/EP03.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/meditacion-guiada/temporada-1/Episodio-2"><img src="assets/content/meditacion-guiada/T01/EP02.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/espacio-ludico/temporada-1/Episodio-8"><img src="assets/content/espacio-ludico/T01/EP08.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/mi-bebe-nuestro-bebe/temporada-1/Episodio-5"><img src="assets/content/mi-bebe-nuestro-bebe/T01/EP04.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/ser-natural/temporada-1/Episodio-1"><img src="assets/content/ser-natural/T01/EP01.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/salud-holistica/temporada-1/Episodio-1"><img src="assets/content/salud-holistica/T01/EP01.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/qi-mtch/temporada-1/Episodio-1.php"><img src="assets/content/qi-mtch/T01/EP01.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/charly-y-sus-amigos/temporada-1/Episodio-1"><img src="assets/content/charly-y-sus-amigos/T01/EP01.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/persona-personalidad/temporada-1/Episodio-3"><img src="assets/content/persona-personalidad/T01/EP03.png" alt=""></a>
                                </div>
                                <div class="pelicula">
                                    <a href="programas/no-estas-solo/temporada-1/Episodio-1"><img src="assets/content/no-estas-solo/T01/EP01.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </section>
        
        <!--- Programas de TV --->
        <section id="ProgramasTV">
            <div class="container">
                <div class="titulo">
                    <h2>Programas de TV</h2>
                </div>
                <div class="box">
                    <div class="capitulos">
                        <div class="caratula">
                            <a href="programas/emotional/temporada-1/Episodio-4"><img src="assets/content/emotional/01/EP04.png" alt=""></a>
                        </div>
                        <div class="caratula">
                            <a href="programas/carpe-diem/temporada-1/Episodio-4"><img src="assets/content/carpe-diem/T01/EP04.png" alt=""></a>
                        </div>
                        <div class="caratula">
                            <a href="programas/mujer-es/temporada-1/Episodio-2"><img src="assets/content/mujer-es/T01/EP02.png" alt=""></a>
                        </div>
                        <div class="caratula">
                            <a href="programas/momento-presente/temporada-1/Episodio-5"><img src="assets/content/momento-presente/01/EP05.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="texto">
                    <a class="btn" href="programas-tv"><h3>Entra a todos nuestros programas</h3></a>
                </div>
            </div>
        </section>
        
        <!--- Radio Online --->
        <section id="Radio" class="Radio">
            <div class="container">
                <div class="titulo">
                    <h2>Radio Online</h2>
                    <p>Musicoterapia, Reflexiones, Mindfulness y más.</p>
                    <div class="boton">
                        <a class="btn" href="radio-online">Escuchar</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--- Radio Online --->
        <section id="peliculas">
            <div class="container">
                <div class="titulo">
                    <h2>Películas</h2>
                    </div>
                <div class="box">
                    <div class="cartel">
                        <a href="#"><img src="assets/img/peliculas/mujeres-al-espejo/cartel.png" alt=""></a>
                    </div>
                    <div class="cartel">
                        <a href="#"><img src="assets/img/peliculas/a-la-1/cartel.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
        
        <!--- Sesiones --->
        <section id="sesiones">
            <div class="container">
                <div class="titulo">
                    <h2>Sesiones de Musicoterapia</h2>
                </div>
                <div class="box">
                    <div class="sesion">
                        <a href="sesiones-music/musicoterapia-de-sanacion/sesion.php"><img src="assets/img/sesiones/portadas/sesion-musica-sanacion.png" alt=""></a>
                    </div>
                    <div class="sesion">
                        <a href="sesiones-music/espiritual/sesion.php"><img src="assets/img/sesiones/portadas/sesion-musica-espiritual.png" alt=""></a>
                    </div>
                    <div class="sesion">
                        <a href="sesiones-music/tareas-lectura-y-concentracion/sesion.php"><img src="assets/img/sesiones/portadas/sesion-musica-para-concentracion.png" alt=""></a>
                    </div>
                    <div class="sesion">
                        <a href="sesiones-music/meditacion/sesion.php"><img src="assets/img/sesiones/portadas/sesion-musica-para-meditar.png" alt=""></a>
                    </div>
                    <div class="sesion">
                        <a href="sesiones-music/sesion-para-ninos/sesion.php"><img src="assets/img/sesiones/portadas/sesion-musica-para-ninos.png" alt=""></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("mod/footer.php"); ?>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/main.js"></script>
    <script src="js/menu-nav.js"></script>
</body>
</html>