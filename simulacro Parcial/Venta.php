<?php
class Venta{
    private $numero;
    private $fecha;
    private $objCliente;
    private $colObjMotos;
    private $precio;

    public function __construct($eNumero,$eFecha,$eObjCliente,$eColObjMotos,$ePrecio){
        $this->numero=$eNumero;
        $this->fecha=$eFecha;
        $this->objCliente=$eObjCliente;
        $this->colObjMotos=$eColObjMotos;
        $this->precio=$ePrecio;
    }
    //Metodos de acceso
    public function getNumero(){
        return $this->numero;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getObjCliente(){
        return $this->objCliente;
    }
    public function getColObjMotos(){
        return $this->colObjMotos;
    }
    public function getPrecio(){
        return $this->precio;
    }
    //Modificadores
    public function setNumero($eNumero){
        $this->numero=$eNumero;
    }
    public function setFecha($eFecha){
        $this->fecha=$eFecha;
    }
    public function setObjCliente($eObjCliente){
        $this->objCliente=$eObjCliente;
    }
    public function setColObjMotos($eColObjMotos){
        $this->colObjMotos=$eColObjMotos;
    }
    public function setPrecio($ePrecio){
        $this->precio=$ePrecio;
    }
    public function mostrarColeccionMotos(){
        $objMotos=$this->getColObjMotos();
        $cadena="";
        for ($i=0; $i <count($objMotos) ; $i++) { 
            $cadena.="|N°".$i."|".$objMotos->__toString()."|";
        }
        return $cadena;
    }
    public function __toString(){
        $cadena="Numero: ". $this->getNumero()."\n";
        $cadena.="Fecha: ". $this->getFecha()."\n";
        $cadena.="================= Datos del Cliente=================\n". $this->getObjCliente()."=================**************=================\n";
        $cadena.="----------------La Coleccion de Motos---------------\n". $this->mostrarColeccionMotos();
        $cadena.="El precio de la Venta es: ". $this->getPrecio();
    }
    public function incorporarMoto($objMoto){
        $Cliente=$this->getObjCliente();
        $colMotosVenta=$this->getColObjMotos();
        $bandera=false;
        if ($objCliente->getEstado()) {
            if ($objMoto->getActivo()) {
                $colMotosVenta[]=$objMoto;
                $this->setColObjMotos($colMotosVenta);
                $precio=$objMoto->darPrecioVenta()+$this->getPrecio();
                $this->setPrecio($precio);
                $bandera=true;
            }
        }
        return $bandera;
    }
}