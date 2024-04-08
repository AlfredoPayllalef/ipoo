<?php
/*12. Definir una clase Linea con cuatro atributos: pA , p B, pC y pD donde ( pA , p B ) y ( pC,pD ) son 2 puntos
por los que pasa la línea en un espacio de dos dimensiones. La clase dispondrá de los siguientes métodos:
12.a. Método constructor _ _construct() que recibe como parámetros las coordenadas de los puntos.
12.b. Los métodos de acceso de cada uno de los atributos de la clase.
12.c. mueveDerecha($d): Desplaza la línea a la derecha la distancia(d) que se recibe por parámetro.
12.d. mueveIzquierda($d): Desplaza la línea a la izquierda la distancia(d) que se recibe por parámetro.
12.e. mueveArriba($d): Desplaza la línea hacia arriba la distancia que se recibe por parámetro.
12.f. mueveAbajo($d): Desplaza la línea hacia abajo la distancia que se recibe por parámetro.
12.g. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
12.h. Crear un script Test_Linea que cree un objeto Linea e invoque a cada uno de los
métodos implementados.
*/
class miLinea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($puntoA,$puntoB,$puntoC,$puntoD){
        $this->pA=$puntoA;
        $this->pB=$puntoB;
        $this->pC=$puntoC;
        $this->pD=$puntoD;
    }
    //metodos de acceso
    public function getPa(){
        return $this->pA;
    }
    public function getPb(){
        return $this->pB;
    }
    public function getPc(){
        return $this->pC;
    }
    public function getPd(){
        return $this->pD;
    }
    // modificadores
    public function setPa($puntoA){
        $this->pA=$puntoA;
    }
    public function setPb($puntoB){
        $this->pB=$puntoB;
    }
    public function setPc($puntoC){
        $this->pC=$puntoC;
    }
    public function setPd($puntoD){
        $this-> pD=$puntoD;
    }
    // funcion toString
    public function __toString(){
        $cadena="Los puntos son: \n";
        $cadena.="la codenada X del primer punto es: ". $this->getPa()."\n";
        $cadena.="la codenada Y del primer punto es: ". $this->getPb()."\n";
        $cadena.="la codenada X del segundo punto es: ". $this->getPc()."\n";
        $cadena.="la codenada Y del segundo punto es: ". $this->getPd()."\n";
        return $cadena;
    }
    public function mueveDerecha($d){
        $cordenada1=$this-> getPa();
        $cordenada2= $this->getPc();
        $this->setPa($cordenada1+$d);
        $this->setPc($cordenada2+$d);
    }
    public function mueveIzquierda($d){
        $cordenada1=$this-> getPa();
        $cordenada2= $this->getPc();
        $this->setPa($cordenada1-$d);
        $this->setPc($cordenada2-$d);
    }
    public function mueveArriba($d){
        $cordenada1=$this-> getPb();
        $cordenada2= $this->getPd();
        $this->setPb($cordenada1+$d);
        $this->setPd($cordenada2+$d);
    }
    public function mueveAbajo($d){
        $cordenada1=$this-> getPb();
        $cordenada2= $this->getPd();
        $this->setPb($cordenada1-$d);
        $this->setPd($cordenada2-$d);
    }
}