<?php 
include_once("persona.php");
include_once("tp1/miCuentaBancaria.php");
include_once("disquera.php");
include_once("tp1/miLibro.php");
include_once("lectura.php");
//ejerccio1
$objPersona= new persona("Juancarlos","Perez","DNI",93528112);
/*echo $objPersona;
$objCuenta= new miCuentaBancaria("4540-AA3",$objPersona,40555,30);
echo $objCuenta;*/
//ejercicio2
/*$ahoraApertura=["hora"=>8,"minutos"=>0];
$horaCierre=["hora"=>19,"minutos"=>0];
$objDisquera=new disquera($ahoraApertura,$horaCierre,"cerrado","calle falsa 123",$objPersona);
echo $objDisquera;*/
    //Ejercicio 3
$objLibro=new miLibro("AAA-3/LS","La casa de el Bebe",1990,"Hola Juancarlos",$objPersona,458,"Un Joven que es el menor de ocho hermanos es bullingniado por sus hermanos mayores por ser el bebe");
//echo $objLibro;
   //ejerccio 4
//$objLectura= new lectura($objLibro,68);
//echo $objLectura;
//$objLectura->siguientePagina();
//echo $objLectura;
//$objLectura->retrocederPagina();
//echo $objLectura;
//$objLectura->irPagina(10);
//echo $objLectura;
    //ejerccio 5
$objPersona2= new persona("Maria","Gomez","DNI",93525712);
$objPersona3= new persona("Pedro","Motoa","DNI",87528112);
$objPersona4= new persona("Ricardo","Milos","DNI",11528112);
$objlibro2=new miLibro("SSS-5","Los palmeras",1802,"Capeluz",$objPersona2,458,"el amigo de maria la del barrio se muere");
$objlibro3=new miLibro("BRC-45","La historia de Ricardo Arjona",1990,"Hola Juancarlos",$objPersona4,458,"un joven arma un video viral con la frase hola juancarlos");
$objlibro4=new miLibro("QWP-7/3S","Kunfu Panda",1995,"Hola Juancarlos",$objPersona3,458,"pone la pava que llego el biscocho");
$objlibro5=new miLibro("LLM-2/PX","El gol de colidio",1990,"Capeluz",$objPersona2,458,"aguante tahieeereeeeeeeee");
$objlibro6=new miLibro("KÑS-9/CC","No fue corner",1990,"Capeluz",$objPersona2,458,"Moriste en madrid el 9-12-18");
$coleccionLibros=[$objLibro,$objlibro2,$objlibro3,$objlibro4,$objlibro5,$objlibro6];
$objLectura= new lectura($coleccionLibros,68);
/*echo $objLectura;
if ($objLectura->libroLeido("El gol de colidio")) {
    echo "el libro si fue leido";
}
else {
    echo "no se leyo el libro";
}
echo $objLectura->darSinopsis("La historia de Ricardo Arjona");

echo $objLectura->leidosAnioEdicion(1990);
echo $objLectura->darLibrosPorAutor("Maria");*/
    //ejercicio 6
