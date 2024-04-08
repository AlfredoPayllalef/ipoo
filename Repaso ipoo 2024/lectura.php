<?php
class lectura{
    //private $objLibro;
    private $colObjLibro;
    private $numeroPagina;
    
    public function __construct($objLibro,$numPag){
        //$this->objLibro=$libro;
        $this->colObjLibro=$objLibro;
        $this-> numeroPagina=$numPag;
    }
    //metodos de acceso
    /*
    public function getObjLibro(){
        return $this->objLibro;
    }*/
    public function getColObjLibro(){
        return $this->colObjLibro;
    }
    public function getNumPag(){
        return $this->numeroPagina;
    }
    //metodos modificadores
    /*
    public function setObjLibro($newObjLibro){
        $this->objLibro=$newObjLibro;
    }
    */
    public function setColObjLibro($colLibro){
        $this->colObjLibro=$colLibro;
    }
    public function setNumpag($num){
        $this->numeroPagina=$num;
    }
    //__toString()
    public function __toString(){
        //$cadena="Datos del libro:\n".$this->getObjLibro();
        $cadena= "". $this->mostrarColeccionLibros($this->getColObjLibro());
        $cadena.="Numero de Pagina de lectura actual: ". $this->getNumPag()."\n";
        return $cadena;
    }
    public function mostrarColeccionLibros($colLibros){   
        $cadena="La Coleccion de libros es : \n";
        for ($i=0; $i <count($colLibros) ; $i++) { 
           $cadena.=$colLibros[$i]->__toString()."\n";
        }
        return $cadena;
    }
    public function siguientePagina(){
        $numPag=$this->getNumPag();
        $libro=$this->getObjLibro();
        $hojas=$libro->getCantHojas();
        if ($numPag<$hojas) {
            $numPag=$numPag+1;
            $this->setNumpag($numPag);
        }
        return $numPag;
    }
    public function retrocederPagina(){
        $numPag=$this->getNumPag();
        $libro=$this->getObjLibro();
        $hojas=$libro->getCantHojas();
        if ($numPag<$hojas && $numPag>1) {
            $numPag=$numPag-1;
            $this->setNumpag($numPag);
        }
        return $numPag;
    }
    public function irPagina($pagIr){
        $libro=$this->getObjLibro();
        $hojas=$libro->getCantHojas();
        if ($pagIr<=$hojas && $pagIr>0) {
            $this->setNumpag($pagIr);
        }
    }
    public function libroLeido($titulo){
        $colLibro=$this->getColObjLibro();
        $a=0;
        $bandera=false;
        while ($a < count($colLibro) && !$bandera) {
            $tituloLibro=$colLibro[$a]->getTitulo();
            if ($tituloLibro==$titulo) {
                $bandera=true;
            }
            $a=$a+1;
        }
        return $bandera;
    }
    public function darSinopsis($titulo){
        $colLibro=$this->getColObjLibro();
        $a=0;
        $bandera=false;
        $sinopsis="";
        while ($a < count($colLibro) && !$bandera) {
            $tituloLibro=$colLibro[$a]->getTitulo();
            if ($tituloLibro==$titulo) {
                $bandera=true;
                $sinopsis.="La Sinopsis de ".$tituloLibro." es: ".$colLibro[$a]->getSinopsis() ;
            }
            $a=$a+1;
        }
        return $sinopsis;
    }
    public function leidosAnioEdicion($x){
        $colLibro=$this->getColObjLibro();
        $colLibrosDeAnio=[];
        $a=0;
        while ($a < count($colLibro)) {
            $anioLibro=$colLibro[$a]->getAnioEdicion();
            if ($anioLibro==$x) {
                $colLibrosDeAnio[]=$colLibro[$a];
            }
            $a=$a+1;
        }if (count($colLibrosDeAnio)==0) {
            $cadena="No se leyeron libros del año: ".$x;
        }else{
            $cadena=$this->mostrarColeccionLibros($colLibrosDeAnio);
        }
        return $cadena;
    }
    public function darLibrosPorAutor($nombreAutor){
        $colLibro=$this->getColObjLibro();
        $colLibrosAutor=[];
        $a=0;
        while ($a < count($colLibro)) {
            $persona=$colLibro[$a]->getObjPersona();
            $nombre= $persona->getNombre();
            if ($nombre==$nombreAutor) {
                $colLibrosAutor[]=$colLibro[$a];
            }
            $a=$a+1;
        }if (count($colLibrosAutor)==0) {
            $cadena="No se posee ninguna coleccion de libros con el autor: ".$nombreAutor;
        }else {
            $cadena=$this->mostrarColeccionLibros($colLibrosAutor);
        }
        return $cadena;
    }
}