<?php
include "../tp2/persona.php";
class Cliente extends persona{
    private $nroCliente;

    public function __construct($name,$lastName,$tipoDoc,$numero,$eNumCliente){
        parent::__construct($name,$lastName,$tipoDoc,$numero);
        $this->nroCliente=$eNumCliente;
    }
    public function getNumCliente(){
        return $this->nroCliente;
    }
    public function setNumCliente($eNumCliente){
        $this->nroCliente=$eNumCliente;
    }
    public function __toString(){
        $cadena= parent:: __toString();
        $cadena.="Numero de Cliente: ". $this->getNumCliente();
        return $cadena;
    }
}