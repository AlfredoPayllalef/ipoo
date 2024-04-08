<?php
/*6. Cree una clase Libro que tenga los atributos ISBN, titulo, año de edición, editorial, nombre y apellido
del autor. Defina en la clase los siguientes métodos
a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la
clase.
b) Los método de acceso de cada uno de los atributos de la clase.
c) Método toString() que retorne la información de los atributos de la clase.
d) perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como parámetro
una editorial y devuelve un valor verdadero/falso.
e) aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado.
f) Cree un script TestLibro que:
1) defina el método iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por
parámetro ya se encuentra en dicha colección.
2) defina el método librodeEditoriales($arreglolibros, $peditorial): método que retorna un arreglo asociativo
con todos los libros publicados por la editorial dada.
3) cree al menos tres objetos libros e invoque a cada uno de los métodos implementados en la clase Libro */

class miLibro{
    private $ISBN;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    //private $nombreAutor;
    //private $apellidoAutor;
    private $objPersona;
    private $cantHojas;
    private $sinopsis;

    public function __construct($numLibro,$nameBook,$anio,$edit,$persona,$hojas,$sinopsisLibro){
        $this->ISBN=$numLibro;
        $this->titulo=$nameBook;
        $this->anioEdicion=$anio;
        $this->editorial=$edit;
        $this->objPersona=$persona;
        //$this->nombreAutor=$nameAutor;
        //$this->apellidoAutor=$lastNameAutor;
        $this->cantHojas=$hojas;
        $this->sinopsis=$sinopsisLibro;
    }
    //metodos de acceso
    public function getISBN(){
        return $this->ISBN;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getObjPersona(){
        return $this->objPersona;
    }
    /*public function getNombreAutor(){
        return $this->nombreAutor;
    }
    public function getApellidoAutor(){
        return $this->apellidoAutor;
    } */
    public function getCantHojas(){
        return $this->cantHojas;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }
    //modificadores
    public function setISBN($num){
        $this->ISBN=$num;
    }
    public function setTitulo($nameBook){
        $this->titulo=$nameBook;
    }
    public function setAnioEdicion($anio){
        $this->anioEdicion=$anio;
    }
    public function setEditorial($edit){
        $this->editorial=$edit;
    }
    public function setObjPersona($newPersona){
        $this->objPersona=$newPersona;
    }
    public function setCantHojas($newHojas){
        $this->cantHojas=$newHojas;
    }
    public function setSinopsis($newSinopsis){
        $this->sinopsis=$newSinopsis;
    }
    /*public function setNombreAutor($nombre){
        $this->nombreAutor=$nombre;
    }
    public function setApellidoAutor($apellido){
        $this->apellidoAutor=$apellido;
    }*/
    //Método toString()
    public function __toString(){
        $cadena=" El ISBN es:". $this->getISBN()."\n";
        $cadena.=" El titulo es: ".$this->getTitulo()."\n";
        $cadena.=" El anio de edicion es :".$this->getAnioEdicion()."\n";
        /*$cadena.=" Nombre de autor: ".$this->getNombreAutor()."\n";
        $cadena.=" Apellido del autor: ". $this->getApellidoAutor()."\n"*/;
        $cadena.="Sinopsis:". $this->getSinopsis()."\n";
        $cadena.="Cantidad de hojas: ". $this->getCantHojas();
        $cadena.=$this->getObjPersona();
        return $cadena;  
    }
    //perteneceEditorial($peditorial)
    public function perteneceEditorial($peditorial){
        $exito="no Existe coincidencia con la editorial";
        $edit=$this->getEditorial();
        if ($edit==$peditorial) {
            $exito="si pertenece a la editorial";
        }
        return $exito;
    }
    //anios de edicion
    public function aniosdesdeEdicion(){
        $anio=$this->getAnioEdicion();
        $anioPasado=2024-$anio;
        return $anioPasado;
    }
}