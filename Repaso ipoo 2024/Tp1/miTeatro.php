<?php
/* Un teatro se caracteriza por su nombre y su dirección y en él se realizan 4 funciones al día. Cada función tiene
un nombre y un precio. Realice el diseño de la clase Teatro e indique qué métodos tendría que tener la clase,
teniendo en cuenta que se pueda cambiar el nombre del teatro y la dirección, el nombre de un función y el
precio. Implementar las 4 funciones usando array de array asociativo. Cada función es un array asociativo con
las claves “nombre” y “precio”.*/
class miTeatro{
    private $nombre;
    private $direccion;
    private $funcciones;

    public function __construct($name, $addres, $arrayFunciones){
        $this->nombre=$name;
        $this->direccion=$addres;
        $this->funcciones=$arrayFunciones;
    }
    //metodos de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getFunciones(){
        return $this->funcciones;
    }
    // modificadores
    public function setNombre($name){
        $this->nombre=$name;
    }
    public function setDireccion($addres){
        $this->direccion=$addres;
    }
    public function setFuncciones($arrayFunciones){
        $this->funcciones=$arrayFunciones;
    }
    //mostar Funciones
    public function mostrarFunciones(){
        $funcciones=$this->getFunciones();
        $cadena=null;
        for ($i=0; $i <count($funcciones) ; $i++) { 
            $funcion=$funcciones[$i];
            foreach ($funcion as $key => $value) {
                $cadena.="|".$key.":".$value."|";
            }
            $cadena.="\n";
        }
        return $cadena;
    }
    //funccion __toString()
    public function __toString(){
        $cadena="El Nombre del teatro es: ".$this->getNombre()."\n";
        $cadena.="La direccion es:". $this->getDireccion()."\n";
        $cadena.="las funcciones son: \n". $this->mostrarFunciones();
        return $cadena;
    }
    // cambiar funcciones
    public function cambiarFunciones($funcionVieja, $funcionNueva,$precioNuevo){
            $funcciones=$this->getFunciones();
            $arregloNuevo=[];
            for ($i=0; $i < count($funcciones) ; $i++) { 
                $funccion=$funcciones[$i];
                    if ($funccion["Nombre"]==$funcionVieja) {
                        $arregloNuevo[$i]=array("Nombre"=>"$funcionNueva","Precio"=>"$precioNuevo"); 
                    }
                    else {  
                        $arregloNuevo[$i]=$funccion;
                    }
            }
            $this->setFuncciones($arregloNuevo);
    }
    
}