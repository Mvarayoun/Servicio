<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SERVICIOS</title>
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
                           session_start();
                             if($_SESSION["email"]) {?>BIENVENIDO:  
                                 <?php echo $_SESSION["email"]; ?>. <a href="http://localhost/ProyectoChido/MVC/models/dbConnection/Logout.php" title="Logout">Cerrar sesión.
                           <?php } else echo "<a>Por favor inicie sesión .</a>";
                           ?>
                                 </a>   
                        </a>
                    </nav>
                </div>
            </div>
            <!-- Contenedor -->
        </header>

        <!-- Anuncios sobre marca GTO-->
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto"> SERVICIOS </h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                    <CENter>
                        <img src="assets/img/ContratarServicio.png" alt="logo contrato">
                    </CENter>
                    <div class="contenido-anuncio">
                        <h3>Contratar un servicio</h3>
                        <p>
                            Contrate el servicio que necesite.
                            <br><br> 
                        </p>
                        <a href="form_contrato.php" Class="boton boton-amarillo d-block">Contratar Servicio</a>
                    </div>
                </div>

                <div class="anuncio">
                    <CEnter>
                        <img src="assets/img/crecimiento.jpg" alt="logo servicios disponibles" width="300px" height="300px">
                    </CEnter>
                    <div class="contenido-anuncio">
                        <h3>Ver Servicios Disponibles</h3>
                        <p>
                           Consulte los servicios disponibles en nuestra aplicación.
                            <br> 
                            <br>
                        </p>
                        <a href="ListaTiendas.php" Class="boton boton-amarillo d-block">Ver Servicios</a>
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