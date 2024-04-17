<?php
class Moto{
    private $codigo;
    private $costo;
    private $anioFabricacion;
    private $descripcion;
    private $porcentajeIncrementoAnual;
    private $activa;

    public function __construct($eCodigo,$eCosto,$eAnioFabricacion,$eDescripcion,$ePorcentaje,$eActiva){
        $this->codigo=$eCodigo;
        $this->costo=$eCosto;
        $this->anioFabricacion=$eAnioFabricacion;
        $this->descripcion=$eDescripcion;
        $this->porcentajeIncrementoAnual=$ePorcentaje;
        $this->activa=$eActiva;
    }
    //metodos de acceso
    public function getCodigo(){
        return $this->codigo;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getAnioFabricacion(){
        return $this->anioFabricacion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPorcentajeIncrementoAnual(){
        return $this->porcentajeIncrementoAnual;
    }
    public function getActivo(){
        return $this->activa;
    }
    //modificadores
    public function setCodigo($eCodigo){
        $this->codigo=$eCodigo;
    }
    public function setCosto($eCosto){
        $this->costo=$eCosto;
    }
    public function setAnioFabricacion($eAnioFabricacion){
        $this->anioFabricacion=$eAnioFabricacion;
    }
    public function setDescripcion($eDescripcion){
        $this->descripcion=$eDescripcion;
    }
    public function setPorcentajeIncrementoAnual($ePorcentaje){
        $this->porcentajeIncrementoAnual=$ePorcentaje;
    }
    public function setActivo($eActiva){
        $this->activa=$eActiva;
    }
    //metodo __toString()
    public function __toString(){
        $cadena="El Codigo:". $this->getCodigo()."\n";
        $cadena.="El Costo es: ". $this->getCosto()."\n";
        $cadena.="El Año de fabricacion es: ". $this->getAnioFabricacion()."\n";
        $cadena.="Descripcion:". $this->getDescripcion()."\n";
        $cadena.="El porcentaje de incremento Anual es: ". $this->getPorcentajeIncrementoAnual()."\n";
        $cadena.="Estado, si esta disponible(true) si no esta disponible(false)". $this->getActivo()."\n";
        return $cadena;
    }
    public function darPrecioVenta(){
        $venta=-1;
        $costo=$this->getCosto();
        $anio=$this->getAnioFabricacion();
        $anio=2024-$anio;
        $incremento=$this->getPorcentajeIncrementoAnual();
        if ($this->getActivo()) {

            $venta=$costo+($costo*$anio*$incremento);
        }
        return $venta;
    }
}
