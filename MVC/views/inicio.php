<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INICIO</title>
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
                        <a href="registro.php">REGISTRO</a>
                        <a href="iniciar.php">LOGIN</a>
                        <a>
                           <?php                           
                             if($_SESSION["email"]) {?>BIENVENIDO:  
                                 <?php echo $_SESSION["email"]; ?> <a href="http://localhost/ProyectoChido/MVC/models/dbConnection/Logout.php" title="Logout">Cerrar sesión.
                           <?php } else echo "<a>Por favor inicie sesión.</a>";
                           ?>
                                     </a>   
                        </a>

                    </nav>

                </div>
            </div>
            <!-- Contenedor -->
        </header>

        <main class="contenedor">
            <br>
            <div class="contenido-nosotros">
                <div class="imagen">
                    <img src="assets/img/LogoServicios.jpg" alt="Imagen sobre nosotros">
                </div>
                <div class="texto-nosotros">
                    <blockquote> ¿Quienes Somos? </blockquote>

                    <p>Somos una aplicación de Servicios a Domicilio creada por estudiantes de Ingenieria en Sistemas para la materia 
                        Ingenieria de Software da la UTN Facultad Regional San Francisco.
                    </p>

                    <p>
                        El objetivo de la aplicacion es que las personas tengan a su alcance cualquier tipo de servicio brindado
                        por distintas empresas con el fin de satisfacer sus necesidades.
                    </p>
                </div>
            </div>

        </main>

        <section class="contenedor">
            <br>
            <br>

            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="assets/img/UTN.jpg" alt="Logo UTN">
                    <h3>UTN San Francisco</h3>
                </div>

                <div class="icono">
                    <img src="assets/img/extension.png" alt="Icono Mejor precio">
                    <h3>ENVIOS DIRECTOS</h3>
                    <p> Pedidos seguros, desde el negocio hasta la puerta de tu casa</p>
                </div>
            </div>
        </section>


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