<?php
/*Diseñar e implementar la clase Fecha. La clase deberá disponer de los atributos mínimos y
necesarios para almacenar el día, el mes y el año, además de métodos que devuelvan un String con la
fecha en forma abreviada (16/02/2000) y extendida (16 de febrero de 2000) . Implementar una función
incremento, que reciba como parámetros un entero y una fecha, que retorne una nueva fecha, resultado
de incrementar la fecha recibida por parámetro en el numero de días definido por el parámetro entero.
Nota 1: Son años bisiestos los múltiplos de cuatro que no lo son de cien, salvo que lo sean de
cuatrocientos, en cuyo caso si son bisiestos.
Nota 2: Para la solución de este problema puede ser útil definir un método incrementa_un_dia.*/ 

class miFecha{
    private $dia;
    private $mes;
    private $anio;

    public function __construct($dd,$mm,$aa){
        $this->dia=$dd;
        $this->mes=$mm; 
        $this->anio=$aa;
    }
    //metodos de acceso
    public function getDia(){
        return $this->dia;
    }
    public function getMes(){
        return $this->mes;
    }
    public function getAnio(){
        return $this->anio;
    }
    // modificadores
    public function setDia($dd){
        $this->dia=$dd;
    }
    public function setMes($mm){
        $this->mes=$mm;
    }
    public function setAnio($aa){
        $this->anio=$aa;
    }
    // funccion to string
    public function __toString(){
        $cadena= $this->getDia()." de ".$this->mesEscrito()." de ".$this->getAnio()."\n";
        return $cadena;
    }
    public function __error(){
        return "error al ingresar el formato de fecha ";
    }
    //metodos de fechas
    public function mesEscrito(){
        $mm=$this->getMes();
        $elMes=null;
        if (is_integer($mm) && $mm>0 && $mm<13) {
            if ($mm==1) {
                $elMes="Enero";
            }
            if ($mm==2) {
                $elMes="Febrero";
            }
            if ($mm==3) {
                $elMes="Marzo";
            }
            if ($mm==4) {
                $elMes="Abril";
            }
            if ($mm==5) {
                $elMes="Mayo";
            }
            if ($mm==6) {
                $elMes="Junio";
            }
            if ($mm==7) {
                $elMes="Julio";
            }
            if ($mm==8) {
                $elMes="Agosto";
            }
            if ($mm==9) {
                $elMes="Septiembre";
            }
            if ($mm==10) {
                $elMes="Octubre";
            }
            if ($mm==11) {
                $elMes="Noviembre";
            }
            if ($mm==12) {
                $elMes="Diciembre";
            }
        }
        return $elMes;
    }
    public function incrementoDias($diasSumas){
        $bandera=false;
        $resto=null;
            while (!$bandera) {
            $dd=$this->getDia();
            $mm=$this->getMes();
            $aa=$this->getAnio();
                if (is_integer($dd) && is_integer($mm) && is_integer($aa)) {
                    if (0<$dd && $mm<13 && $aa>0) {
                            if ($mm==2) {
                                if ($aa>0 && is_integer($aa/4) && !is_integer($aa/100) || is_integer($aa/400) ) {
                                    if ($dd<30) {
                                        $resto=$this->sumarDias($diasSumas,$dd,29);
                                        if ($resto>0) {
                                            $diasSumas=$resto;
                                        }else {
                                            $bandera=true;
                                        }
                                    }else {
                                        $this->__error();
                                        $bandera=true;
                                    }
                                }else {
                                    if ($dd<29) {
                                        $resto=$this->sumarDias($diasSumas,$dd,28);
                                        if ($resto>0) {
                                            $diasSumas=$resto;
                                        }else {
                                            $bandera=true;
                                        }
                                    }else {
                                        $this->__error();
                                        $bandera=true;
                                    }
                                }
                            }
                            if ($mm==1 || $mm==3 || $mm==5 || $mm==7 || $mm==8 || $mm==10 || $mm==12) {
                                if ($dd<32) {
                                    $resto=$this->sumarDias($diasSumas,$dd,31);
                                    if ($resto>0) {
                                        $diasSumas=$resto;
                                    }else {
                                        $bandera=true;
                                    }
                                }else {
                                    $this->__error();
                                    $bandera=true;
                                }
                            }
                            if ($mm==4 || $mm==6 || $mm==9 ||$mm==11) {
                                if ($dd<31) {
                                    $resto=$this->sumarDias($diasSumas,$dd,30);
                                    if ($resto>0) {
                                        $diasSumas=$resto;
                                    }else {
                                        $bandera=true;
                                    }
                                }else {
                                    $this->__error();
                                    $bandera=true;
                                }
                            }
                            else {
                                $this->__error();
                                $bandera=true;
                            }
                    }
                    else {
                        $this->__error();
                        $bandera=true;
                    }
                }else {
                    $this->__error();
                        $bandera=true;
                }
            }
    }
    public function sumarDias($cantDias,$diaActual,$diasMes){
        $suma=$diaActual+$cantDias;
        $resto=-1;
        if ($suma>$diasMes) {
             $resto=$suma-$diasMes;
             $unMes=$this->getMes();
                if ($unMes<12) {
                    $this->setMes($unMes+1);
                    if ($resto<$diasMes) {
                        $this->setDia($resto);
                    }
                 }
                 else {
                    $this->setMes(1);
                    $unAnio=$this->getAnio();
                    $unAnio=$unAnio+1;
                    $this->setAnio($unAnio);
                 }
        }if ($diasMes>=$suma) {
            $this->setDia($suma);
        }
        return $resto;
    }
}