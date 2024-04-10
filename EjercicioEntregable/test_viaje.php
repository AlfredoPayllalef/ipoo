<?php
include_once("viaje.php");
include_once("responsableV.php");
include_once("pasajero.php");
$objpasajero1=new pasajero("Juan", "Perez",36472788,"2995299299");
$objpasajero2=new pasajero("Maria", "Ortiz",35572788,"299886330");
$objpasajero3=new pasajero("Pablo", "Manquez",37338112,"299623299");
$objpasajero4=new pasajero("Pepe", "Mujica",30338117,"2994220345");
$objpasajero5=new pasajero("Ines", "Becerra",30822955,"2996694822");
$objpasajero6=new pasajero("Jonas", "Ramirez",36472788,"2995293457");
$objpasajero7=new pasajero("Lucas", "Perez",43444552,"2994568932");
$colPasajeros=[$objpasajero1,$objpasajero2,$objpasajero3,$objpasajero4,$objpasajero5,$objpasajero6,$objpasajero7];
$objResponsable=new responsableV("AL3-045","002-45322","Pereyra");
$objViaje=new viaje("0034-ML","Cancun",20,$colPasajeros,$objResponsable);

echo "======================Bienvenido====================== \nIngrese una de las opciones deseadas\n";

do {
    echo "Ingrese (1) para modificar los datos de un pasajero \n";
    echo "Ingrese (2) para ingresar un nuevo pasajero \n";
    echo "Ingrese (3) para ver la coleccion de pasajeros \n";
    echo "Ingrese (4) para salir \n";
    $valor=trim(fgets(STDIN));
    if ($valor==1) {
        echo "echo ingrese el DNI del pasajero \n";
        $dniPasajero=trim(fgets(STDIN));
        $objPasajero= $objViaje->buscarPersonaPorDni($dniPasajero);
        if ($objPasajero!=null) {
            echo "=============\n".$objPasajero->__toString()."=============\n";
            echo "ingrese (1) para modificar el nombre \n";
            echo "ingrese (2) para modificar el apellido \n";
            echo "ingrese (3) para modificar el telefono \n";
            $cambio=trim(fgets(STDIN));
            if ($cambio==1) {
                echo "ingrese el nuevo Nombre: ";
                $eNombre=trim(fgets(STDIN));
                $objPasajero->setNombre("$eNombre");
                echo $objPasajero->__toString();
            }
            if ($cambio==2) {
                echo "ingrese el nuevo Apellido: ";
                $eApellido=trim(fgets(STDIN));
                $objPasajero->setApellido("$eApellido");
                echo $objPasajero->__toString();
            }
            if ($cambio==3) {
                echo "ingrese el nuevo Telefono: ";
                $eTelefono=trim(fgets(STDIN));
                $objPasajero->setTelefono("$eTelefono");
                echo $objPasajero->__toString();
            }
        }
        else {
            echo "No se encontro el pasajero con el dni:". $dniPasajero;
        }
    }
    if ($valor==2) {
        echo "Ingrese el solo Nombre: \n";
        $eNombre=trim(fgets(STDIN));
        echo "Ingrese el apellido: \n";
        $eApellido=trim(fgets(STDIN));
        echo "ingrese el DNI del pasajero: \n";
        $eDni=trim(fgets(STDIN));
        echo "ingrese el numero de telefono: \n";
        $eTelefono=trim(fgets(STDIN));
        $objPasajeroAgregar=new pasajero("$eNombre","$eApellido",$eDni,"$eTelefono");
        if ($objViaje->agregarPasajero($objPasajeroAgregar)) {
            echo "********Se agrego correctamente a:********\n ";
            echo $objPasajeroAgregar->__toString(); 
        }
    }
    if ($valor==3) {
        echo $objViaje->mostrarPasajeros();
    }
} while ($valor==1 || $valor==2 ||$valor==3);