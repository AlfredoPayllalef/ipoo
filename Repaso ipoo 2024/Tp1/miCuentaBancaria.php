<?php
/*14. Crea una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el
saldo actual y el interés anual que se aplica a la cuenta. Define en la clase los siguientes métodos:
14.a. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
14.b. Los método de acceso de cada uno de los atributos de la clase.
14.c. actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual
dividido entre 365 aplicado al saldo actual).
14.d. depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta.
14.e. retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo).
14.f. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
14.g. Crear un script Test_CuentaBancaria que cree un objeto CuentaBancaria e invoque a cada
uno de los métodos implementados*/ 
class miCuentaBancaria{
    private $numeroCuenta;
    //private $dni;
    private $objPersona;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numero,$persona,$saldo,$interes){
        $this->numeroCuenta=$numero;
        $this->objPersona=$persona;
        //$this->dni=$nDoc;
        $this->saldoActual=$saldo;
        $this->interesAnual=$interes;
    }
    //metodos de acceso
    public function getNumeroCuenta(){
        return $this->numeroCuenta;
    }
    /*public function getDni(){
        return $this->dni;
    }*/
    public function getPersona(){
        return $this->objPersona;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    // modificadores
    public function setNumeroCuenta($numero){
        $this->numeroCuenta=$numero;
    }
    /*
    public function setDni($nDoc){
        $this->dni=$nDoc;
    }*/
    public function setPersona($newObjPersona){
        $this->objPersona=$newObjPersona;
    }
    public function setSaldoActual($saldo){
        $this->saldoActual=$saldo;
    }
    public function setInteresAnual($interes){
        $this->interesAnual=$interess;
    }
    //funcion toString
    public function __toString(){
        $cadena="El N° de cuenta es:". $this->getNumeroCuenta()." \n";
        //$cadena.="El N° de Documento del Usuario es:". $this->getDni()." \n";
        $cadena.="El Cliente es: ". $this->getPersona();
        $cadena.="El Saldo actual es:". $this->getSaldoActual()." \n";
        $cadena.="El Interes Anual es:". $this->getInteresAnual()." \n";
        return $cadena;
    }
    //funccion error
    public function error(){
        return "alguno de los datos no es correcto";
    }
    //funcion actualizar saldo 
    public function  actualizarSaldo(){
        $interes=$this->getInteresAnual();
        $saldo=$this->getSaldoActual();
        $saldo=$saldo+$saldo*$interes/36500;
        $this->setSaldoActual($saldo);
    }

    //funcion que permite depositar dinero en la cuenta
     public function depositar($cant){
        $saldo= $this->getSaldoActual();
        $exito=false;
        if ($saldo>0) {
            $this->setSaldoActual($saldo+$cant);
            $exito=true;
        }
        return $exito;
     }
     //funccion retirar saldo si es que tiene disponible la cantidad requerida
     public function retirar($cant){
        $saldo=$this->getSaldoActual();
        $exito=false;
        if ($saldo>=$cant) {
            $this-> setSaldoActual($saldo-$cant);
            $exito=true;
        }
        else {
            $this->error();
        }
        return $exito;
     }
}