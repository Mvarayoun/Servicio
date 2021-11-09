<?php
class Contrato{
/*Atributos*/

private $idContrato;
private $nombreContratante;
private $direccionContratante;
private $correoContratante;
private $telefonoContratante;
private $idServicioAContratar;
private $fechaSolicitud;
private $horaContrato;


public function __construct(
        $idContrato,
        $nombreContratante,
        $direccionContratante,
        $correoContratante,
        $telefonoContratante,
        $idServicioAContratar,
        $fechaSolicitud,
        $horaContrato
) {
    $this -> idContrato = $idContrato;
    $this -> nombreContratante = $nombreContratante;
    $this -> direccionContratante = $direccionContratante;
    $this -> correoContratante = $correoContratante;       
    $this -> telefonoContratante = $telefonoContratante;
    $this-> idServicioAContratar = $idServicioAContratar;
    $this-> fechaSolicitud = $fechaSolicitud;
    $this-> horaContrato = $horaContrato;  
}

function getIdContrato(){
        return $this->idContrato;
}

function getNombreContratante(){
        return $this->nombreContratante;
}

function getDireccionContratante(){
        return $this->direccionContratante;
}

function getCorreoContratante(){
        return $this->correoContratante;
}

function getTelefonoContratante(){
        return $this->telefonoContratante;
}

function getIdServicio(){
        return $this->idServicio;
}

function getfechaSolicitud(){
        return $this->fechaContrato;
}

function getHoraContrato(){
        return $this->horaContrato;
}

function setIdContrato($idContrato){
        return $this->idContrato = $idContrato;
}

function setNombreContratante($nombreContratante){
    return $this->nombreContratante = $nombreContratante;
}

function setDireccionContratante($direccionContratante){
    return $this->direccionContratante = $direccionContratante;
}

function setCorreoContratante($correoContratante){
    return $this->correoContratante = $correoContratante;
}

function setTelefonoContratante($telefonoContratante){
    return $this->telefonoContratante = $telefonoContratante;
}

function setIdServicio($idServicio){
    return $this->idServico = $idServicio;
}

function setfechaSolicitud($fechaContrato){
    return $this->fechaContrato = $fechaContrato;
}

function setHoraContrato($horaContrato){
    return $this->horaContrato = $horaContrato;
}

}