<?php

class DetalleProducto{
   private $id;
   private $ProductosPorColor;
   private $DetalleVenta;
   private $cantidad;
   private $precioUnitario;
   private $subTotal;

    public function __construct($id=null, $ProductosPorColor, $DetalleVenta, $cantidad, $precioUnitario){
        $this->id = $id;
        $this->ProductosPorColor = $ProductosPorColor;
        $this->DetalleVenta = $DetalleVenta;
        $this->cantidad = $cantidad;
        $this->precioUnitario = $precioUnitario;
    }

    public function getCantidad(){
        return $this->cantidad;
    }
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    public function getPrecioUnitario(){
        return $this->precioUnitario;
    }
    public function setPrecioUnitario($precioUnitario){
        $this->precioUnitario = $precioUnitario;
    }
    private function subtotalPrecioPorCantidad(){
        return $this->precioUnitario * $this->cantidad;
    }
    public function agregarProducto($ProductosPorColor){
        $ProductosPorColor[]=$ProductosPorColor;
    }
    public function eliminarProducto(){
        
    }



}


?>