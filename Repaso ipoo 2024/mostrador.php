<?php
class mostrador{
    private $tiposTramites;
    private $colObjClientes;
    private $numMaxClientes;
    private $numActualClientes;

    public function __construct($tramites,$colClientes,$cantClientes,$clientesActuales){
        $this->tiposTramites=$tramites;
        $this->colObjClientes=$colClientes;
        $this->numMaxClientes=$cantClientes;
        $this->numActualClientes=$clientesActuales;
    }
    // metodos de acceso
    public function getTiposTramites(){
        return $this->tipoTramites;
    }
    public function getColObjCliente(){
        return $this->colObjClientes;
    }
    public function getNumMaxClientes(){
        return $this->numMaxClientes;
    }
    public function getClientesActuales(){
        return $this->numActualClientes;
    }
    //modificadores
    public function setCantTramites($tramites){
        $this->tiposTramites=$tramites;
    }
    public function setColClientes($colClientes){
        $this->colObjClientes=$colClientes;
    }
    public function setNumMaxClientes($cantClientes){
        $this->numMaxClientes=$cantClientes;
    }
    public function setClientesActuales($clientesActuales){
        $this->numActualClientes=$clientesActuales;
    }
    public function __toString(){
        $cadena="El mostrador tiene ". $this->getTiposTramites()." cantidad de tramites \n";
        $cadena.="La cantida maxima de clientes para la cola son: ".$this->getNumMaxClientes()."\n";
        $cadena.="La cantidad actual de clientes son: ". $this->getClientesActuales()."\n";
        $cadena.="**************************** Los clientes en la cola son: ". $this->getColObjCliente()."****************************";
        return $cadena;
    }
    /*atiende($unTramite): devuelve true o false indicando si el tramite se puede atender o no
en el mostrador; note que el tipo de trámite correspondiente a unTramite tiene que coincidir con
alguno de los tipos de trámite que atiende el mostrador*/
    public function atiende($unTramite){
        $arrayTramites=$this->getTiposTramites();
        $i=0;
        $bandera=false;
        while ($i <count($arrayTramites) && !$bandera) { 
            if ($arrayTramites[$i]==$unTramite) {
                $bandera=true;
            }
            $i=$i+1;
        }
        return $bandera;
    }

}