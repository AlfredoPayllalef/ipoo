<?php

/*13. Desarrollar una clase Cafetera con los atributos capacidadMaxima (la cantidad máxima de café que puede
contener la cafetera) y cantidadActual (la cantidad actual de café que hay en la cafetera). Implementar los
siguientes métodos:
13.a. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.
13.b. Los método de acceso de cada uno de los atributos de la clase.
13.c. llenarCafetera(): la cantidad actual debe ser igual a la capacidad de la cafetera.
13.d. servirTaza($cantidad): simula la acción de servir una taza con la capacidad indicada. Si la
cantidad actual de café “no alcanza” para llenar la taza, se sirve lo que quede y se envía un mensaje
al consumidor para que sepa porque no se le sirvió un taza completa.
13.e. vaciarCafetera(): pone la cantidad de café actual en cero.
13.f. agregarCafe($cantidad): añade a la cafetera la cantidad de café indicada.
13.g. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
13.h. Crear un script Test_Cafetera que cree un objeto Cafetera e invoque a cada uno de los
métodos implementados.*/

class miCafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($cantMax,$cantActual){
        $this->capacidadMaxima=$cantMax;
        $this->cantidadActual=$cantActual;
    }
    // funcion de acceso
    public function getMaximo(){
        return $this->capacidadMaxima;
    }
    public function getCapActual(){
        return $this->cantidadActual;
    }
    //modificadores
    public function setMaximo($cantMax){
        $this->capacidadMaxima=$cantMax;
    }
    public function setCantActual($cantActual){
        $this->cantidadActual=$cantActual;
    }
    //funccion toString
    public function __toString(){
        $cadena=" La cantidad Maxima es: ".$this->getMaximo()."cc \n";
        $cadena.=" La Cantidad disponible es: ".$this->getCapActual()."cc \n";
        return $cadena;
    }
    //funcion error
    public function error(){
        return " error en carga de datos ";
    }
     //funcion Informe
     public function informe(){
        return " Su Taza no fue llena por que la cafetera solo tenia disponible: ".$this->getCapActual()."cc";
    }

    //funccion que sirve para llenar la cafetera
    public function llenarCafetera(){
        $max=$this->getMaximo();
        $this->setCantActual($max);
    }
    // funcion que que sirve para restar la cantidad de una tasa
    public function servirTaza($cantidad){
        $cantActual=$this->getCapActual();
        if ($cantActual>=$cantidad) {
            $this->setCantActual($cantActual-$cantidad);
        }
       if ($cantActual>0 && $cantActual<$cantidad) {
            echo $this->informe()."\n";
            $this->vaciarCafetera(0);
       }
       else {
        echo $this->error()."\n";
       }
    }
    //funccion que sirve para vaciar la cafetera
    public function vaciarCafetera(){
        $this->setCantActual(0);
    }
    //funccion que sirve para agregar cafe a la cafetera
    public function agregarCafe($cantidad){
        $max=$this->getMaximo();
        $disponible=$this->getCapActual();
        $suma=$disponible+$cantidad;
        if ($max>=$suma) {
            $this-> setCantActual($suma);
        }
        else {
            $this->error();
        }
    }
    
}