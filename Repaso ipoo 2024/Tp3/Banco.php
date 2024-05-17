<?php

class Banco{
    private $colCuentaCorriente;
    private $colCajaAhorro;
    private $ultimoValorCuentaAsignado;
    private $colCliente;

    public function __construct($eColCtaCorriente,$ecolCahorro,$eultmoValor,$ecolCliente){
        $this->colCuentaCorriente=$eColCtaCorriente;
        $this->colCajaAhorro=$ecolCahorro;
        $this->ultimoValorCuentaAsignado=$eultmoValor;
        $this->colCliente=$ecolCliente;
    }
    //metodos de acceso
    public function getColCtaCorriente(){
        return $this->colCuentaCorriente;
    }
    public function getColCajaAhorro(){
        return $this->colCajaAhorro;
    }
    public function getUltimoValor(){
        return $this->ultimoValorCuentaAsignado;
    }
    public function getColClientes(){
        return $this->colCliente;
    }
    //modificadores
    public function setColCtaCoriente($eColCtaCorriente){
        $this->colCuentaCorriente=$eColCtaCorriente;
    }
    public function setColCajaAhorro($ecolCahorro){
        $this->colCajaAhorro=$ecolCahorro;
    }
    public function setUltimoValor($eultmoValor){
        $this->ultimoValorCuentaAsignado=$eultmoValor;
    }
    public function setColClientes($ecolCliente){
        $this->colCliente=$ecolCliente;
    }
    //metodos para Mostrar
    public function mostrarColCtaCorriente(){
        $colCuentas=$this->getColClientes();
        $cadena="Las cuentas Corrientes del Banco son: \n";
        foreach($colCuentas as $cuenta){
            $cadena.="**".$cuenta->__toString()."\n";
        }
        return $cadena;
    }
    public function mostrarColCajaAhorro(){
        $colCuentas=$this->getColCajaAhorro();
        $cadena="Las Cajas de ahorro del Banco son: \n";
        foreach($colCuentas as $cuenta){
            $cadena.="**".$cuenta->__toString()."\n";
        }
        return $cadena;
    }
    public function mostrarColClientes(){
        $colClientes=$this->getColClientes();
        $cadena="Los Clientes del Banco son: \n";
        foreach($colClientes as $cliente){
            $cadena.="**".$cliente->__toString()."\n";
        }
        return $cadena;
    }
    public function __toString(){
        $cadena=" BANCO ". $this->mostrarColCtaCorriente().$this->mostrarColCajaAhorro().mostrarColClientes();
        $cadena.="el Ultimo Valor de cuenta asignada es ". $this->getUltimoValor();
        return $cadena;
    }
    //incorporarCliente(objCliente)
    public function incorporarCliente($objCliente){
        $colClientes=$this->getColClientes();
        $colClientes[]=$objCliente;
        $this->getColClientes($colClientes);
    }
    //incorporarCuentaCorriente(numeroCliente, montoDescubierto)
    public function incorporarCuentaCorriente($numeroCliente, $montoDescubierto){
        $colCliente=$this->getColClientes();
        $colCuenta=$this->getColCtaCorriente();
        $bandera=false;
        $a=0;
        $numCuenta="CC-".$numeroCliente;
        while ($a <count($colCliente) && !$bandera) {
            $numCliente=$colCliente[$a]->getNumCliente();
            if ($numCliente==$numeroCliente) {
                $objCliente=$colCliente[$a];
                $bandera=true;
            }
            $a=$a++;
        }
        $colCuenta[]=new CuentaCorriente($numCuenta,0,"Cuenta Corriente",$objCliente,$montoDescubierto);
        $this->setColCtaCoriente($colCuenta);
        return $bandera;
    }
    //incorporarCajaAhorro(numeroCliente)
    public function incorporarCajaAhorro($numeroCliente){
        $colCliente=$this->getColClientes();
        $colCuenta=$this->getColCajaAhorro();
        $bandera=false;
        $a=0;
        $numCuenta="CA-".$numeroCliente;
        while ($a <count($colCliente) && !$bandera) {
            $numCliente=$colCliente[$a]->getNumCliente();
            if ($numCliente==$numeroCliente) {
                $objCliente=$colCliente[$a];
                $bandera=true;
            }
            $a=$a++;
        }
        $colCuenta[]=new Cuenta($numCuenta,0,"Caja de Ahorro",$objCliente);
        $this->setColCajaAhorro($colCuenta);
        return $bandera;
    }
    //realizarDeposito(numCuenta,monto)
    public function realizarDeposito($numCuenta,$monto){
        $bandera=false;
        $colCtaCorriente=$this->getColCtaCorriente();
        $colCahorro=$this->getColCajaAhorro();
        $a=0;
        $b=0;
        while ($a <count($colCtaCorriente) && !$bandera){ 
            if ($colCtaCorriente[$a]->getNumCuenta()==$numCuenta) {
                $bandera=$colCtaCorriente[$a]->realizarDeposito($monto);
            }
            $a=$a++;
        }
        while ($b < count($colCahorro) && !$bandera) {
            if ($colCahorro[$b]->getNumCuenta()==$numCuenta) {
                $bandera=$colCahorro[$b]->realizarDeposito($monto);  
            }
            $a=$a++;
        }
        return $bandera;
    }
    //realizarRetiro(numCuenta,monto)
    public function realizarRetiro($numCuenta,$monto){
        $bandera=false;
        $exito=false;
        $colCtaCorriente=$this->getColCtaCorriente();
        $colCahorro=$this->getColCajaAhorro();
        $a=0;
        $b=0;
        while ($a <count($colCtaCorriente) && !$bandera){ 
            if ($colCtaCorriente[$a]->getNumCuenta()==$numCuenta) {
                $bandera=true;
                $exito=$colCtaCorriente[$a]->realizarRetiro($monto);
            }
            $a=$a++;
        }
        while ($b < count($colCahorro) && !$bandera) {
            if ($colCahorro[$b]->getNumCuenta()==$numCuenta) {
                $bandera=true;
                $exito=$colCahorro[$b]->realizarRetiro($monto);  
            }
            $a=$a++;
        }
        return $exito;
    }

}