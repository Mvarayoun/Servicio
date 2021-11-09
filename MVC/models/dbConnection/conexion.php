<?php

class conexion{
	
	private $servidor   = 'localhost';
	private $usuario    = 'root';
	private $bd         = 'ATUSERVICIO';
	private	$password   = '';


	public function conexion() {
            $conexion= mysqli_connect(
                    $this->servidor,
                    $this->usuario,
                    $this->password,
                    $this->bd);
            return $conexion;
	}
}