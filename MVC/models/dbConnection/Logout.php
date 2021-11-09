<?php
session_start();
session_unset($_SESSION["id"]);
session_unset($_SESSION["email"]);
heather('Location:htdocs/Aplicacion de Servicios a Domicilio/MVC/views/inicio.php');
?>