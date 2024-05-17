<?php 
class Cuenta{
    private $numeroCuenta;
    private $saldo;
    private $tipo;
    private $objCliente;

    public function __construct($eNumCuenta,$eSaldo,$eTipo,$eObjCliente){
        $this->numeroCuenta=$eNumCuenta;
        $this->saldo=$eSaldo;
        $this->saldo=$eSaldo;
        $this->objCliente=$eObjCliente;
    }
    // metodos de acceso
    public function getNumCuenta(){
        return $this->numeroCuenta;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getObjCliente(){
        return $this->objCliente;
    }
    //modificadores
    public function setNumCuenta($eNumCuenta){
        $this->numeroCuenta=$eNumCuenta;
    }
    public function setSaldo($eSaldo){
        $this->saldo=$eSaldo;
    }
    public function setTipo($etipo){
        $this->tipo=$eTipo;
    }
    public function setObjCliente($eObjCliente){
        $this->objCliente=$eObjCliente;
    }
    //toString
    public function __toString(){
        $cadena="Numero de Cuenta: ". $this->getNumCuenta()."\n";
        $cadena.="Saldo: ". $this->getSaldo(). "\n";
        $cadena.="Tipo: ". $this->getTipo()."\n";
        $cadena.="Datos del Cliente: ". $this->getObjCliente();
    }
    //metodo saldoCuenta() :
    public function saldoCuenta(){
        $saldo=$this->getSaldo();
        return $saldo;
    }
    //realizarDeposito(monto)
    public function realizarDeposito($monto){
        $saldo=$this->saldoCuenta();
        $saldo=$saldo+$monto;
        $this->setSaldo($saldo);
    }
    //realizarRetiro(monto)
    public function realizarRetiro($monto){
        $exito=false;
        $saldo=$this->saldoCuenta();
        $saldo=$saldo-$monto;
        if ($saldo>=0) {
            $this->setSaldo($saldo);
            $exito=true;
        }
        return $exito;
    }
}