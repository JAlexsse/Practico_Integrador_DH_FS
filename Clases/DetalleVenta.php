<?php

class DetalleVenta{
private $id;
private $Personas;
private $fecha;
private $FormaPago;
private $cantidadCuotas;
private $descuento;
private $Envio;
private $total;
private $Estado;

public function getId(){
    return $this->id;
}
public function setId($id){
     $this->id= $id;
}
public function getPersonas(){
    return $this->Personas;
}
public function getFecha(){
    return $this->fecha;
}
public function getFormaPago(){
    return $this->FormaPago;
}
public function setFormaPago($FormaPago){
     $this->FormaPago= $FormaPago;
}
public function getCantidadCuotas(){
    return $this->cantidadCuotas;
}
public function setCantidadCuotas($cantidadCuotas){
     $this->cantidadCuotas= $cantidadCuotas;
}
public function getDescuento(){
    return $this->descuento;
}
public function setDescuento($descuento){
     $this->descuento= $descuento;
}
private function calcularDescuento(){

}
public function getEnvio(){
    return $this->Envio;
}
public function setEnvio($Envio){
     $this->Envio= $Envio;
}
private function calcularSubtotal(){

}
private function calcularTotal(){

}





}


?>