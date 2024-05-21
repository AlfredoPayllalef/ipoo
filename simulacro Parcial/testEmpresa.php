<?php
include_once("Moto.php");
include_once("Cliente.php");
include_once("Empresa.php");
include_once("Venta.php");
include_once("MotoImportada.php");
include_once("MotoNacional.php");

$objCliente1=new Cliente("Benjamin","Perez",true,"DNI",58612535);
$objCliente2=new Cliente("Juan","Lopez",true,"DNI",30282209);

$eColClientes=[$objCliente1,$objCliente2];

$objMoto1=new MotoNacional(11,2230000,2022,"Benelli Imperiale 400",85,true);
$objMoto1->setDescuentoNacional(10);

$objMoto2=new MotoNacional(12,584000,2021,"Zanella Zr 150 Ohc",70,true);
$objMoto2->setDescuentoNacional(10);

$objMoto3=new MotoNacional(13,999900,2023,"Zanella Patagonian Eagle 250",55,false);

$objMoto4=new MotoImportada(14,12499900,2020,"Pitbike Enduro Motocross Apollo Aiii 190cc Plr",100,true,"Francia",6244400);
$eColMotos=[$objMoto1,$objMoto2,$objMoto3,$objMoto4];
$objEmpresa=new Empresa("Alta Gama","Av Argenetina 123",$eColClientes,$eColMotos,[]);

echo "\n El precio de la venta 1 es: ";
echo $objEmpresa->registrarVenta([11,12,13,14], $objCliente2);
echo "\n-------------------------------------------------------\n";


echo "\nEl precio de la venta 2 es: ";
echo $objEmpresa->registrarVenta([13,14], $objCliente2);
echo "\n-------------------------------------------------------\n";

echo "\n El precio de la venta 3 es: ";
echo $objEmpresa->registrarVenta([14,2], $objCliente2);
echo "\n-------------------------------------------------------\n";
$ventaImportada=$objEmpresa->informarVentasImportadas();


echo "la suma de ventas nacionales es:";
echo $objEmpresa->informarSumaVentasNacionales();

echo $objEmpresa;






