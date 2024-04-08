<?php
class banco{
    private $colObjMostrador;

    public function __construct($mostradores){
        $this->colObjMostrador=$mostradores;
    }
    public function getColMostrador(){
        return $this->colObjMostrador;
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
    }
}