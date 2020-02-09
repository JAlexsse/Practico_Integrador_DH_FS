<?php 

class Envio{
   private $id;
   private $codigoPostal;
   private $calle;
   private $numeroCalle;

    private function getId(){
        return $this->id;
    }
    private function setId($id){
        $this->id =$id;
    }
    private function getCodigoPostal(){
        return $this->codigoPostal;
    }
    private function setCodigoPostal($codigoPostal){
        $this->codigoPostal =$codigoPostal;
    }
    private function getCalle(){
        return $this->calle;
    }
    private function setCalle($calle){
        $this->calle =$calle;
    }
    private function getNumeroCalle(){
        return $this->numeroCalle;
    }
    private function setNumeroCalle($numeroCalle){
        $this->numeroCalle =$numeroCalle;
    }





}

?>