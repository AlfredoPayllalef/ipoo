<?php
class banco{
    private $colObjCiente;
    private $colTramietes;
    private $colObjMostrador;

    public function __construct($eColCliente,$eColTramites,$mostradores){
        $this->colObjCiente=$eColCliente;
        $this->colTramietes=$eColTramites;
        $this->colObjMostrador=$mostradores;
    }
    public function getColObjCliente(){
        return $this->colObjCiente;
    }
    public function getColTramites(){
        return $this->colTramietes;
    }
    public function getColMostrador(){
        return $this->colObjMostrador;
    }
    public function setColObjCliente($eColCliente){
        $this->colObjCiente=$eColCliente;
    }
    public function setColClientes($eColTramites){
        $this->colObjCiente=$eColTramites;
    }
    public function setColMostrador($mostradores){
        $this->colObjMostrador=$mostradores;
    }
    public function __toString(){
        return "===============Los mostradores del Banco son===============\n". $this->getColMostrador()."===============";
    }
    /*banco–>mostradoresQueAtienden($unTramite): retorna la colección de todos los mostradores que
atienden ese trámite.
*/
    public function mostradoresQueAtienden($unTramite){
        $arrayMostradores= $this->getColMostrador();
        $coleccionMostradores=[];
        for ($i=0; $i <$count($arrayMostradores) ; $i++) { 
           if ( $arrayMostradores[$i]->atiende($unTramite)) {
            $coleccionMostradores[]=$arrayMostradores[$i];
           }
        }
        return $coleccionMostradores;
    }
    /*banco–>mejorMostradorPara($unTramite): retorna el mostrador con la cola más corta con espacio
para al menos una persona más y que atienda ese trámite; si ningun mostrador tiene espacio, retorna
null.*/
    public function mejorMostradorPara($unTramite){
        $mostradores=$this->mostradoresQueAtienden($unTramite);
        $mostrador=null;
        $mostradorDisponible=[];
        for ($i=0; $i <count($mostradores) ; $i++) { 
            if ($mostradores[$i]->getNumMaxClientes()>count($mostradores[$i]->getClientesActuales())){
                $mostradorDisponible[]=$mostradores[$i];
            }
        }
        if (count($mostradorDisponible)>1) {
            $menor=count($mostradorDisponible[0]->getClientesActuales());
            for ($i=1; $i <count($mostradorDisponible) ; $i++) { 
                $siguente=count($mostradorDisponible[$i]->getClientesActuales());
                if ($menor>$siguente) {
                    $mostrador=$mostradorDisponible[$i];
                    $menor=$siguente;
                }
            }
        }else {
            $mostrador=$mostradorDisponible;
        }
        return $mostrador;
    }
    /*banco–>atender($unCliente): cuando llega un cliente al banco se lo ubica en el mostrador que atienda
el trámite que el cliente requiere, que tenga espacio y la menor cantidad de clientes esperando; si no
hay lugar en ningún mostrador debe retornar un mensaje que diga al cliente que “será antendido en
cuanto haya lugar en un mostrador”.*/
    public function atender($unCliente){
        $tramiteCliente=$unCliente->getTramite();
        $resultado="será antendido en cuanto haya lugar en un mostrador";
        $mostrador=$this->mejorMostradorPara($tramiteCliente);
        if ($mostrado!=null) {
            $clientes=$mostrador->colObjClientes();
            $clientes[]=$unCliente;
            $mostrador->setColClientes($clientes);
            $resultado="Fue asignado a un mostrador";
        }
        return $$resultado;   
    }
    //ingresarTramite: esta etapa es cuando la persona ya esta en el mostrador explicando el trámite para
    //que sea tratado. Ya salió de la cola de trámites y está siendo atendido en el mostrador correspondiente.
    public function ingresarTramite(){
        
    }
}