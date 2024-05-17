<?php
include("Cuenta.php");
class CuentaCorriente extends Cuenta{
    private $giro;

    public function __construct($eNumCuenta,$eSaldo,$eTipo,$eObjCliente,$eGiro){
        parent::__construct($eNumCuenta,$eSaldo,$eTipo,$eObjCliente);
        $this->giro=$eGiro;
    }
    public function getGiro(){
        return $this->giro;
    }
    public function setGiro($eGiro){
        $this->giro=$eGiro;
    }
    public function __toString(){
        $cadena= parent:: __toString();
        $cadena.= "El monto de Giro disponible es: ". $this->getGiro();
    }
    //realizarRetiro($monto)
    public function realizarRetiro($monto){
        $exito=false;
        $saldo=$this->saldoCuenta();
        $saldo=$saldo-$monto;
        if ($saldo>=-($this->getGiro())) {
            $this->setSaldo($saldo);
            $exito=true;
        }
        return $exito;
    }
}