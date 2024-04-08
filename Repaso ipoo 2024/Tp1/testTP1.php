<?php
include_once("miCafetera.php");
include ("miCalculadora.php");
include ("miCuadrado.php");
include ("miCuentaBancaria.php");
include ("miFecha.php");
include ("miLibro.php");
include ("miLinea.php");
include ("miLoing.php");
include ("miRelog.php");
include ("miTeatro.php");

$objCafetera=new miCafetera(45,23);
//$objCafetera->llenarCafetera();
//echo $objCafetera->servirTaza(205);
//echo $objCafetera;
$objCalculadora=new miCalculadora(3,0);
//echo $objCalculadora;
//echo $objCalculadora->suma();
//echo $objCalculadora->resta();
//echo $objCalculadora->producto();
//echo $objCalculadora->division();
$arrayPuntos[0]=array(5,3);
$arrayPuntos[1]=array(3,5);
$arrayPuntos[2]=array(1,3);
$arrayPuntos[3]=array(3,3);
$objCuadra= new miCuadrado($arrayPuntos);
//echo $objCuadra;
//echo $objCuadra->area();
//$objCuadra->desplazar(4,4);
//echo $objCuadra;
//$objCuadra->aumentarTamanio(2);
//echo $objCuadra;
$objCuenta=new miCuentaBancaria(84320,95686731,53000,20);
//echo $objCuenta;
//$objCuenta->actualizarSaldo();
//echo $objCuenta->depositar(800);
//echo $objCuenta->retirar(50000);
//echo $objCuenta;
$objFecha=new miFecha(12,4,1950);
//echo $objFecha;
//$objFecha->incrementoDias(36);
//echo $objFecha;
$objLibro=new miLibro("4522-AA2","La Polin",1982,"Sancor","Arturo","Bravo");
//echo $objLibro;
//echo $objLibro->perteneceEditorial("porcho");
//echo $objLibro->aniosdesdeEdicion();
function iguales($plibro,$parreglo){
    $suma=0;
    $nombre=$plibro->getTitulo();
    for ($i=0; $i <count($parreglo) ; $i++) { 
        $nombreLibro=$parreglo[$i]->getTitulo();
        if ($nombre==$nombreLibro) {
            $suma=$suma+1;
        }
    }
    return "el Libro esta ".$suma." veces en el arreglo ";
}
$objLibro1=new miLibro("4986-AA2","La CASA",1945,"Avianca","Maria","Becerra");
$objLibro2=new miLibro("7525-AB3","Vida Linda",2000,"capelusa","Arturo","Mina");
$objLibro3=new miLibro("4522-AA2","La Polin",1982,"Sancor","Pablo","Bravo");
$objLibro4=new miLibro("4252-AG4","La casa de papel",1950,"capelusa","Pablito","Lezcano");
$objLibro5=new miLibro("4522-AA2","La Polin",1982,"Sancor","Arturo","Bravo");
$arregloLibros=[$objLibro1,$objLibro2,$objLibro3,$objLibro4,$objLibro5];
//echo iguales($objLibro,$arregloLibros);
//funcion retorna un arreglo asociativo con todos los libros publicados por la editorial dada
function librodeEditoriales($arreglolibros, $peditorial){
    $arrayEditorial=[];
    for ($i=0; $i <count($arreglolibros) ; $i++) { 
        $editorial=$arreglolibros[$i]->getEditorial();
        if ($peditorial==$editorial) {
            $isbn=$arreglolibros[$i]->getISBN();
            $titulo=$arreglolibros[$i]->getTitulo();
            $anio=$arreglolibros[$i]->getAnioEdicion();
            $nombre=$arreglolibros[$i]->getNombreAutor();
            $apellido=$arreglolibros[$i]->getApellidoAutor();
            $arrayEditorial[]=array("ISBN"=>"$isbn","TITULO"=>"$titulo","Año edicion"=>"$anio","Editorial"=>"$editorial","Nombre Autor"=>"$nombre","Apellido Autor"=>"$apellido");
        }
    }
    return $arrayEditorial;
}
//print_r(librodeEditoriales($arregloLibros,"capelusa"));

//$objLinea= new miLinea(10,3,4,15);
//echo $objLinea;
//$objLinea->mueveDerecha(5);
//echo $objLinea;
//$objLinea->mueveIzquierda(3);
//echo $objLinea;
//$objLinea->mueveArriba(2);
//echo $objLinea;
//$objLinea->mueveAbajo(3);
//echo $objLinea; 
$contrasenias=array("porcigue","elbebe","poliedro","marimar");
$objLoing=new miLoig("ersaPachua",$contrasenias,"las rosas son rosas");
//echo $objLoing;
//print_r($objLoing->getContrasenias());
/*if ($objLoing->validarContrasenia("porcigue")) {
    echo "bienvenido";
}
else {
    echo "usuario o contraseña incorrecta";
}*/
/*if ($objLoing->cambiarContrasenia("molinete","las rosas son rosas")) {
    echo "la contraseña fue cambiada exitosamente";
}
else {
    echo "error al cambiar la contraseña";
}*/
//print_r($objLoing->getContrasenias());
//echo $objLoing->recordar("ersaPachua");
//$objRelog=new miRelog(12,3,10);
//echo $objRelog;
//echo $objRelog->incremento();
$arayFunciones[0]=["Nombre"=>"Cenicienta","Precio"=>3500];
$arayFunciones[1]=["Nombre"=>"Blanca Nieves","Precio"=>5900];
$arayFunciones[2]=["Nombre"=>"Pocahontas","Precio"=>1200];
$arayFunciones[3]=["Nombre"=>"El laburo de Nico del caño","Precio"=>9900];
$objTeatro= new miTeatro("Cine Poliedro", "Calle Falsa 123", $arayFunciones);
echo $objTeatro;
$objTeatro->cambiarFunciones("Cenicienta","La casa de pepel",6600);
echo $objTeatro;