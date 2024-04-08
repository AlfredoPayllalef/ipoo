<?php
//10.b. Diseñar e implementar la clase Reloj que simule el comportamiento de un cronómetro digital
//(con los comportamientos: puesta_a_cero, incremento, etc.). Cuando el contador llegue a 23:59:59 y
//reciba el mensaje de incremento deberá pasar a 00:00:00.
 class miRelog{
    private $horas;
    private $minutos;
    private $segundos;

    public function __construct($hs,$min,$seg){
        $this->horas=$hs;
        $this->minutos=$min;
        $this->segundos=$seg;
    }
    //metodos de acceso
    public function getHoras(){
        return $this->horas;
    }
    public function getMinutos(){
        return $this->minutos;
    }
    public function getSegundos(){
        return $this->segundos;
    }
    //modificadores
    public function setHoras($hs){
        $this->horas=$hs;
    }
    public function setMinutos($min){
        $this->minutos=$min;
    }
    public function setSegundos($seg){
        $this->segundos=$seg;
    }
    //retorno de los atributos de la clase
    public function __toString(){
        return $this->getHoras().":".$this->getMinutos().":".$this->getSegundos()."\n";
    }
    public function incremento(){
        $hs=$this->getHoras();
        $min=$this->getMinutos();
        $seg=$this->getSegundos();
        $bandera=false;
        $cadena="";
         while ($hs!=0 && !$bandera) {
            while ($hs <24) {
                $hs=$hs+1;
                while ($min <=60) {
                    while ($seg <= 59) {
                        $this->setSegundos($seg);
                        $cadena.=$this->__toString();
                        $seg=$seg+1;
                    }
                        $this->setSegundos(0);
                        $this->setMinutos($min);
                        $seg=0;
                        $min=$min+1;
                }
                $this->setSegundos(0);
                $this->setMinutos(0);
                $this->setHoras($hs);
                $min=0;
            }
            $this->setHoras(0);
            $this->setMinutos(0);
            $this->setSegundos(0);
            $bandera=true;
         }
         $cadena.=$this->__toString();
         return $cadena;
    }
 
 }