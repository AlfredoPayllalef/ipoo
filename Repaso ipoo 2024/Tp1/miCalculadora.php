<?php
//10.a. Diseñar e implementar la clase Calculadora que permite realizar las operaciones básicas: + , - , *, /
class miCalculadora{
    private $numeroUno;
    private $numeroDos;

    public function __construct($num1,$num2){
        $this->numeroUno=$num1;
        $this->numeroDos=$num2;
    }
    //metodos de acceso
    public function getNumeroUno(){
        return $this->numeroUno;
    }
    public function getNumeroDos(){
        return $this->numeroDos;
    }
    //modificadores
    public function serNumeroUno($num1){
        $this->numeroUno=$num1;
    }
    public function serNumeroDos($num2){
        $this->numeroDos=$num2;
    }
    public function __toString(){
        $cadena= "el primer numero es el: ".$this->getNumeroUno()."\n";
        $cadena.=" el segundo numero es el: ".$this->getNumeroDos()."\n";
        return $cadena;
    }
    //metodos para operaciones
    public function suma(){
        $num1=$this->getNumeroUno();
        $num2=$this->getNumeroDos();
        $resultado=$num1+$num2;
        return "la suma es: ".$resultado."\n";
    }
    public function resta(){
        $num1=$this->getNumeroUno();
        $num2=$this->getNumeroDos();
        $resultado=$num1-$num2;
        return "la resta es: ".$resultado."\n";
    }
    public function producto(){
        $num1=$this->getNumeroUno();
        $num2=$this->getNumeroDos();
        $resultado=$num1*$num2;
        return "el producto es:".$resultado."\n";
    }
    public function division(){
        $num1=$this->getNumeroUno();
        $num2=$this->getNumeroDos();
        $exito=null;
        if ($num2!=0) {
            $resultado=$num1/$num2;
            $exito= "el resultado es ".$resultado;
        }
        else {
            $exito=" ERROR, no es posible dividir por cero";
        }
        return $exito;
    }
}