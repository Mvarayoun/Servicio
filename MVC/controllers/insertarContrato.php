<?php
    try
    {
        $usuario= 'root';
        $contraseña = '';
	    $base_datos='ATUSERVICIO';
	    $servidor = 'localhost';

        //Datos tabla e inserción de la misma
        $nombreContratante = $_POST["nombreContratante"];
        $direccionContratante = $_POST["direccionContratante"];
        $correoContratante = $_POST["correoContratante"];
        $telefonoContratante = $_POST["telefonoContratante"];
        $idServicioAContratar = $_POST["idServicioAContratar"];
        $fechaSolicitud = $_POST["fechaSolicitud"];
        $horaSolicitud = $_POST["horaSolicitud"];

         $mdb= new PDO("mysql:host=$servidor;dbname=$base_datos",$usuario,$contraseña);

        //consulta insertar
        $sql="Insert into contrato(nombreContratante,direccionContratante,correoContratante,telefonoContratante,idServicioAContratar,fechaSolicitud,horaSolicitud)
		VALUES ('$nombreContratante','$direccionContratante','$correoContratante','$telefonoContratante','$idServicioAContratar','$fechaSolicitud','$horaSolicitud')";
	
		//echo datos;
		$mdb->exec($sql);
		$mdb=null;

        //return
        header ('Location:../views/tiendas.php');
        }catch (PDOException $e){
            print "Error!: ".$e->getMessage()."<br/>";
            die();
    }

?>