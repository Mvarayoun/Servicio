<?php
require_once '../models/dbConnection/conexion.php';
require_once '../models/dbConnection/NegocioDAO.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        <a href="registro.php">REGISTRO</a>
                        <a href="iniciar.php">LOGIN</a>
                    </nav>
                </div>
            </div>
            <!-- Contenedor -->
        </header>

        <main class="contenedor seccion contenido-centrado">

<table table border="1" style="width: 990px; height: 200px; background: rgba(255,165,0,0.7)";>
    <tr>
        <td><h1>ID</h1></td>
        <td><h1>Negocio</h1></td>
        <td><h1>Tipo de servicio</h1></td>
        <td><h1>Direccion</h1></td>
        <td><h1>Telefono</h1></td>
    </tr>

    <?php
                $obj = new NegocioDAO();
                $sql = "SELECT id,name,tipo,address,telefono from negocio ORDER BY tipo";
                $datos = $obj->mostrarDatos($sql);
                foreach ($datos as $key) {
                ?>
                <tr bgcolor = white>
                    <td><?php echo $key['id']?></td>
                    <td><?php echo $key['name']?></td>
                    <td><?php echo $key['tipo']?></td>
                    <td><?php echo $key['address']?></td>
                    <td><?php echo $key['telefono']?></td>
                </tr>
                <?php
                }
                ?>

</table>

        <main class="contenedor seccion contenido-centrado">
        <h2 class="fw-300 centrar-texto">
                Llene el formulario de contratacion de servicio
            </h2>

            <form action="../controllers/insertarContrato.php" class="contacto" method="POST">
                <fieldset>

                    <legend>Registrar datos de contratacion</legend>
                    <label for="nombre">Nombre Contratante:</label>
                    <input type="text" id="nombreContratante" name="nombreContratante" placeholder="Escribe tu nombre completo" required>

                    <label for="nombre">Direccion contratante:</label>
                    <input type="text" id="direccionContratante" name="direccionContratante" placeholder="Escribe tu direccion" required>

                    <label for="correo">Correo contratante:</label>
                    <input type="email" id="correoContratante" name="correoContratante" placeholder="Escribe tu correo" required>

                    <label for="nombre">Telefono contratante:</label>
                    <input type="number" id="telefonoContratante" name="telefonoContratante" placeholder="Escribe tu numero telefonico"required>

                    <label for="nombre">Id del servicio a contratar:</label>
                    <input type="number" id="idServicioAContratar" name="idServicioAContratar" placeholder="Escribe el id del servicio a contratar" required>

                    <label for="nombre">Fecha de reserva del servicio:</label>
                    <input type="date" id="fechaSolicitud" name="fechaSolicitud" placeholder="Elija la fecha de reserva del servicio" required>

                    <label for="nombre">Hora de reserva del servicio:</label>
                    <input type="time" id="horaSolicitud" name="horaSolicitud" placeholder="Elija una hora de reserva del servicio" required>
                    
                </fieldset>
                <br>
                <div style="text-align:center;">
                    <button type="submit">Contratar</button>
                </div>
            </form>
        </main>

    </main>

        <br><br>
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