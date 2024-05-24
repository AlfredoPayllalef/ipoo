<?php
class Torneo{
    private $colObjPartidos;
    private $premio;

    public function __construct($ePremio){
        $this->colObjPartidos=[];
        $this->premio=$ePremio;
    }
    //metodo de acceso
    public function getColObjPartidos(){
        return $this->colObjPartidos;
    }
    public function getPremio(){
        return $this->premio;
    }
    //modificadores
    public function setColObjPartidos($eColPartidos){
        $this->colObjPartidos=$eColPartidos;
    }
    public function setPremio($ePremio){
        $this->premio=$ePremio;
    }
    //mostrar Coleccion de partidos
    public function mostraraColeccionPartidos(){
        $colPartidos=$this->getColObjPartidos();
        $cadena="";
        $i=1;
        foreach ($colPartidos as $partido) {
            $cadena.="|N°".$i."| ".$partido->__toString()."\n";
            $i+=1;
        }
        return $cadena;
    }
    public function __toString(){
        $cadena="                 Los partidos del Torneo son:". $this->mostraraColeccionPartidos()." \n";
        $cadena.="El premio del torneo es de : ". $this->getPremio();
        return $cadena;
    }
    /*mplementar el método ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido) en la  clase Torneo 
    el cual recibe por parámetro 2 equipos, la fecha en la que se realizará el partido y si se trata de un 
    partido de futbol o basquetbol . El método debe crear y retornar la instancia de la clase Partido que 
    corresponda y almacenarla en la colección de partidos del Torneo. Se debe chequear que los 2 equipos 
    tengan la misma categoría e igual cantidad de jugadores, caso contrario no podrá ser registrado ese 
    partido en el torneo.*/
    public function ingresarPartido($OBJEquipo1, $OBJEquipo2, $fecha, $tipoPartido){
        $coeficiente1=$OBJEquipo1->getCoefBase();
        $coeficiente2=$OBJEquipo2->getCoefBase();
        $bandera=false;
        if ($coeficiente1==$coeficiente2) {
            $cantJugadores1=$OBJEquipo1->getCantJugadores();
            $cantJugadores2=$OBJEquipo2->getCantJugadores();
            if ($cantJugadores1==$cantJugadores2) {
                if ($coeficiente1==0.5) {
                    $partido=new Basket("", $fecha,$OBJEquipo1,0,$OBJEquipo2,0,0);
                }
                else {
                    $partido=new Fotbool("", $fecha,$OBJEquipo1,0,$OBJEquipo2,0,0);
                }
                $colPartidos=$this->getColObjPartidos();
                $colPartidos[]=$partido;
                $this->setColObjPartidos($colPartidos);
                $bandera=true;
            }
        }
        return $bandera;
    }
    /*Implementar el método darGanadores($deporte) en la clase Torneo que recibe por parámetro si se trata de
     un partido de fútbol o de básquetbol y en  base  al parámetro busca entre esos partidos los equipos
      ganadores ( equipo con mayor cantidad de goles). El método retorna una colección con los objetos de 
      los equipos encontrados. */
    
    public function darGanadores($deporte){
        $colPartidos=$this->getColObjPartidos();
        $colEquipos=[];
        if ($deporte=="Fotbool" || $deporte=="fotbool") {
            foreach ($colPartidos as $partido) {
                if (is_a($partido,"Fotbool")) {
                    $ganador=$partido->darEquipoGanador();
                    if (count($ganador)==1) {
                        $objEquipo=$partido->getObjEquipo1();
                        $nombreObjEquipo= $objEquipo->getNombre();
                        $nombreGanador=$ganador->getNombre();
                        if ($nombreGanador==$nombreObjEquipo) {
                            $goles=$partido->getCantGolesE1();
                            $colEquipos[]=["objGanador"=>$ganador,"Goles"=>$goles];
                        }
                        else {
                            $goles=$partido->getCantGolesE2();
                            $colEquipos[]=["objGanador"=>$ganador,"Goles"=>$goles];
                        }
                    }
                }
            }
        }
        if ($deporte=="Basket" || $deporte=="basket") {
            foreach ($colPartidos as $partido) {
                if (is_a($partido,"Basket")) {
                    $ganador=$partido->darEquipoGanador();
                    if (count($ganador)==1) {
                        $objEquipo=$partido->getObjEquipo1();
                        $nombreObjEquipo= $objEquipo->getNombre();
                        $nombreGanador=$ganador->getNombre();
                        if ($nombreGanador==$nombreObjEquipo) {
                            $goles=$partido->getCantGolesE1(); 
                            $colEquipos[]=["objGanador"=>$ganador,"Goles"=>$goles];
                        }
                        else {
                            $goles=$partido->getCantGolesE2();
                            $colEquipos[]=["objGanador"=>$ganador,"Goles"=>$goles];
                        }
                    }
                }
            }
        }
        $ganadores=ksort( $colEquipos["Goles"]);
        return $ganadores;
    }
    public function calcularPremioPartido($OBJPartido){
        $ganador=$OBJPartido->darEquipoGanador();
        $Coef_partido=$OBJPartido->coeficientePartido();
        $premioPartido=-1;
        if (count($ganador)==1) {
            $premioPartido = $Coef_partido * $this->getPremio();
        }
        return $premioPartido;
    }
    
    
}