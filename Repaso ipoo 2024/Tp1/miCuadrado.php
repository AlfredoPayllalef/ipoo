<?php
/*
Crear una clase Cuadrado que modele cuadrados por medio de cuatro puntos (los vértices). Puede utilizar
arreglos asociativos para implementar cada uno de los vértices. La clase dispondrá de los siguientes métodos:
Método constructor _ _construct () que recibe como parámetros las coordenadas de los puntos.
11.b. Los métodos de acceso de cada uno de los atributos de la clase.
11.c. area(): método que calcula el área del cuadrado.
11.d. desplazar($d): método que recibe por parámetro un punto y desplaza el cuadrado en el plano
desde su punto mas inferior izquierdo.
11.e. aumentarTamaño($t): método que recibe por parámetro el tamaño que debe aumentar el cuadrado.
11.f. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase.
11.g. Crear un script Test_Cuadrado que cree un objeto Cuadrado e invoque a cada uno de los
métodos implementado */

class miCuadrado{
    private $puntos;

    public function __construct($arrayPuntos){
        $this->puntos=$arrayPuntos;
    }
    //metodos de acceso
    public function getPuntos(){
        return $this->puntos;
    }
    //modificadores
    public function setPuntos($newPuntos){
        $this->puntos=$newPuntos;
    }
    //Mostrar puntos del arreglo
    public function mostrarPuntos(){
     $vertices=$this->getPuntos();
     $cadena="";
         for ($i=0; $i < 4 ; $i++) { 
            $cadena.="(X".$i." =".$vertices[$i][0]."; Y".$i." =".$vertices[$i][1].") \n";
         }
         return $cadena;
    }
    //metodo toString
    public function __toString(){
        $cadena="los puntos ingresados son:\n".$this->mostrarPuntos();
        return $cadena;
    }
    // funcion distancia
    public function distancia($x1,$x2,$y1,$y2){
        $distancia1= $x1-$x2;
        $distancia2= $y1-$y2;
        $distancia=sqrt(pow(2,$distancia1)+pow(2,$distancia2));
        return $distancia;
    }

    //area(): método que calcula el área del cuadrado
    public function area(){
        $puntos=$this->getPuntos();
        $p1x=$puntos[0][0];
        $p1y=$puntos[0][1];
        $p2x=$puntos[1][0];
        $p2y=$puntos[1][1];
        $p3x=$puntos[2][0];
        $p3y=$puntos[2][1];
        $dist1=$this->distancia($p1x,$p2x,$p1y,$p2y);
        $dist2=$this->distancia($p2x,$p3x,$p2y,$p3y);
        $area=$dist1*$dist2;
        return "el area del cuadrado es: ".$area."\n";
    }  
    // funcion que sirve para desplazar el cuadrado una distancia dada desde el punto inferior izquierdo
    public function desplazar($cordenadaX,$cordenadaY){
        $puntos=$this->getPuntos();
        $p1x=$puntos[0][0];
        $p1y=$puntos[0][1];
        $p2x=$puntos[1][0];
        $p2y=$puntos[1][1];
        $p3x=$puntos[2][0];
        $p3y=$puntos[2][1];
        $p4x=$puntos[3][0];
        $p4y=$puntos[3][1];
        $dist1=$this->distancia($p1x,0,$p1y,0);
        $dist2=$this->distancia($p2x,0,$p2y,0);
        $dist3=$this->distancia($p3x,0,$p3y,0);
        $dist4=$this->distancia($p4x,0,$p4y,0);
        $menor=min($dist1,$dist2,$dist3,$dist4);
        if ($menor==$dist1) {
            $puntos[0][0]=$cordenadaX;
            $puntos[0][1]=$cordenadaY;
            $puntos[1][0]=$p2x+$cordenadaX;
            $puntos[1][1]=$p2y+$cordenadaY;
            $puntos[2][0]=$p3x+$cordenadaX;
            $puntos[2][1]=$p3y+$cordenadaY;
            $puntos[3][0]=$p4x+$cordenadaX;
            $puntos[3][1]=$p4y+$cordenadaY;

        }
        if ($menor==$dist2) {
            $puntos[0][0]=$p1x+$cordenadaX;
            $puntos[0][1]=$p1y+$cordenadaY;
            $puntos[1][0]=$cordenadaX;
            $puntos[1][1]=$cordenadaY;
            $puntos[2][0]=$p3x+$cordenadaX;
            $puntos[2][1]=$p3y+$cordenadaY;
            $puntos[3][0]=$p4x+$cordenadaX;
            $puntos[3][1]=$p4y+$cordenadaY;
        }
        if ($menor==$dist3) {
            $puntos[0][0]=$p1x+$cordenadaX;
            $puntos[0][1]=$p1y+$cordenadaY;
            $puntos[1][0]=$p2x+$cordenadaX;
            $puntos[1][1]=$p2y+$cordenadaY;
            $puntos[2][0]=$cordenadaX;
            $puntos[2][1]=$cordenadaY;
            $puntos[3][0]=$p4x+$cordenadaX;
            $puntos[3][1]=$p4y+$cordenadaY;
        }
        if ($menor==$dist4) {
            $puntos[0][0]=$p1x+$cordenadaX;
            $puntos[0][1]=$p1y+$cordenadaY;
            $puntos[1][0]=$p2x+$cordenadaX;
            $puntos[1][1]=$p2y+$cordenadaY;
            $puntos[2][0]=$p3x+$cordenadaX;
            $puntos[2][1]=$p3y+$cordenadaY;
            $puntos[3][0]=$cordenadaX;
            $puntos[3][1]=$cordenadaY;
        }
        $this->setPuntos($puntos);
    }
    //aumentarTamaño($t): método que recibe por parámetro el tamaño que debe aumentar el cuadrado.

    public function aumentarTamanio($t){
        $puntos= $this->getPuntos();
        foreach ($puntos as $key => $subArrayPuntos) {
            foreach ($subArrayPuntos as $subkey => $value) {
                $puntos[$key][$subkey]=$value*$t;
            }
        }
        $this->setPuntos($puntos);
    }
    
}