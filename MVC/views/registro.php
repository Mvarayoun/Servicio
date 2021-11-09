<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>REGISTRO</title>
    </head>

    <body>

        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/Normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

        <header class="site-header ">
            <div class="contenedor contenido-header">
                <div class="barra">
                    <a href="index.php">
                        <img src="assets/img/LogoAplicacion.jpeg" height="70px" width="250px">
                    </a>

                    <nav class="navegacion">
                        <a href="inicio.php">INICIO</a>
                        <a href="tiendas.php">SERVICIOS</a>
                        <a href="iniciar.php">LOGIN</a>
                    </nav>
                </div>
            </div>
            <!-- Contenedor -->
        </header>

        <!-- Anuncios sobre marca GTO-->
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto">REGISTRARSE</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                    <img src="assets/img/vender.jpg" alt="Anuncio casa en el lago">
                    <div class="contenido-anuncio">
                        <h3>OFRECER UN SERVICIO</h3>
                        <p>
                            Llena el formulario con todos los datos de tu negocio.
                            y comienza a ser parte de esta aplicación.
                            <br>
                        </p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="form_negocio.php" Class="boton boton-amarillo d-block">
                            REGISTRARSE</a>
                    </div>
                </div>

                <div class="anuncio">
                    <img src="assets/img/comprar.jpg" alt="Anuncio casa con terminados de lujo">
                    <div class="contenido-anuncio">
                        <h3>CLIENTE</h3>
                        <p>
                            Llena el formulario de registro.
                            Ingresa todos tus datos y accede como cliente para contratar el Servicios
                            que necesites.
                        </p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <a href="form_cliente.php" Class="boton boton-amarillo d-block">
                            REGISTRARSE</a>
                    </div>
                </div>
            </div>

        </main>


        <footer class="site-footer seccion">
            <div class="contenedor contenedor-footer">
                <nav class="navegacion">
                    <a href="inicio.php">INICIO</a>
                    <a href="tiendas.php">SERVICIOS</a>
                    <a href="registro.php">REGISTRO</a>
                    <a href="iniciar.php">LOGIN</a>
                </nav>

                <p class="copyright">Todos los derechos reservados 2021 &copy; Contacto: 03564-15352467<img src=assets/img/iconowhatsapp.png></p>

            </div>
        </footer>

    </body>

</html>