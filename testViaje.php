<?php
include_once ("Viaje.php");
include_once ("ResponsableV.php");
include_once ("Pasajeros.php");

        do {
            echo "menu de opciones \n";
            echo "[1] nuevo viaje \n";
            echo "[2] modificar datos \n";
            echo "[3] ver informacion \n";
            echo "ingrese el numero de la opcion:  \n";
            $seleccion=trim(fgets(STDIN));
            if (($seleccion<0) || ($seleccion> 3) or !ctype_digit($seleccion)) {
                echo "Opcion Incorecta! Ingrese otra opción: \n";
            }
            if($seleccion==1){
                echo "ingrese codigo \n";
                $nuevoCodigo=trim(fgets(STDIN));
                echo " Ingrese destino \n";
                $nuevoDestino=trim(fgets(STDIN));
                echo " Ingrese cantidad de pasajeros \n";
                $cantPasajeros=trim(fgets(STDIN));
                echo" Ingrese el Nombre del Responsable del viaje: ";
                $nameResponsable=trim(fgets(STDIN));
                echo " Ingrese el Apellido del Responsable del viaje: ";
                $ApellidoResp=trim(fgets(STDIN));
                echo " Ingrese el N° licencia del Responsable del viaje: ";
                $Nlicencia=trim(fgets(STDIN));
                echo " Ingrese el N° de empleado del Responsable del viaje: ";
                $Nempleado=trim(fgets(STDIN));
                $ObjResponsable=new ResponsableV($nameResponsable,$ApellidoResp,$Nlicencia,$Nempleado);
                $colObjPasajeros=[];
                for ($i=0; $i <$cantPasajeros ; $i++) { 
                    echo " Nombre del pasajero N°".($i+1)." \n";
                    $nombre=trim(fgets(STDIN));
                    echo " Apellido del pasajero N°".($i+1)." \n";
                    $apellido=trim(fgets(STDIN));
                    echo " N° Documento pasajero N°".($i+1)." \n";
                    $doc=trim(fgets(STDIN));
                    echo " Ingrese el telefono del pasajero N°".($i+1)." \n";
                    $telPer=trim(fgets(STDIN));
                    $objPasajero=new Pasajeros($nombre,$apellido,$doc,$telPer);
                    $colObjPasajeros[$i]=$objPasajero;
                }
                $objViaje= new Viaje($nuevoCodigo,$nuevoDestino,$cantPasajeros,$colObjPasajeros,$ObjResponsable);
            }
            if($seleccion==2){
                echo " ¿que desea modificar? \n";
                echo "[1] Datos de viaje \n";
                echo "[2] Datos de pasajero \n";
                echo "Ingrese el numero de la opcion: \n";
                $datoMenu=trim(fgets(STDIN));
                if ($datoMenu==1) {
                    echo "ingrese el codigo del viaje \n";
                    $codigoViaje=trim(fgets(STDIN));
                    $numCodigo= $objViaje->getCodigo();
                    $bandera2=false;
                    if ($numCodigo==$codigoViaje) {
                            $bandera2=true;
                         }
                         else{
                             $bandera2=false;
                         }
                   if ($bandera2==true){
                    echo " ¿que desea modificar? \n";
                    echo "[1] Destino \n";
                    echo "[2] Cantidad Maxima\n";
                    echo "[3] Responsable del viaje\n";
                    echo "Ingrese el numero de la opcion: \n";
                    $modificacion=trim(fgets(STDIN));
                        if ($modificacion==1) {
                            echo "ingrese nuevo destino \n";
                            $destino=trim(fgets(STDIN));
                            $objViaje-> setDestino_2($destino);
                            $objViaje->__toString();
                        }
                        if ($modificacion==2) {
                            echo "ingrese nuevo Cantidad Maxima \n";
                            $cantMax=trim(fgets(STDIN));
                            $objViaje-> setCantPasajeros_3($cantMax);
                            $objViaje->__toString();
                        }
                        if ($modificacion==3) {
                            echo" Ingrese el Nombre del nuevo Responsable del viaje: ";
                            $nameResponsable=trim(fgest(STDIN));
                            $ObjResponsable->setNombre($nameResponsable);
                            echo "Ingrese el Apellido del nuevo Responsable del viaje: ";
                            $ApellidoResp=trim(fgets(STDIN));
                            $ObjResponsable->setApellido($ApellidoResp);
                            echo "Ingrese el N° licencia del nuevo Responsable del viaje: ";
                            $Nlicencia=trim(fgets(STDIN));
                            $ObjResponsable->setNumLicencia($Nlicencia);
                            echo "Ingrese el N° de empleado del nuevo Responsable del viaje: ";
                            $Nempleado=trim(fgets(STDIN));
                            $ObjResponsable->setNumEmpleado($Nempleado);
                        }
                   }else {
                    echo "el codigo no se encuentra \n";
                   }
                }
                if ($datoMenu==2) {
                    echo "ingrese DNI del pasajero que desea modificar: \n";
                    $doc=trim(fgets(STDIN));
                    $arrayColeccion=$objViaje->getColObjPasajeros();
                    $n=count($arrayColeccion);
                    $bandera=false;
                    $i=0;
                    while( $i<$n && !$bandera){
                        $objPasajero=$arrayColeccion[$i];
                        if ($objPasajero->getDni()==$doc) {
                           $bandera=true;
                           $posicion=$i;
                        }
                        else{
                            $bandera=false;
                        }
                       $i=$i+1;
                    }
                    if ($bandera==true) {
                        echo " ¿que desea modificar? \n";
                        echo "[1] Nombre \n";
                        echo "[2] Apellido\n";
                        echo "[3] Numero de documento \n";
                        echo "[4] Numero de Telefono \n";
                        echo "Ingrese el numero de la opcion: \n";
                        $modificacion=trim(fgets(STDIN));
                        $objPasajero=$arrayColeccion[$posicion];
                        if ($modificacion==1) {
                            echo "ingrese nuevo nombre \n";
                            $nombre=trim(fgets(STDIN));
                            $objPasajero->setNombre($nombre);
                            $arrayColeccion[$posicion]=$objPasajero;
                            $objViaje->setColObjPasajeros_4($arrayColeccion);
                        }
                        if ($modificacion==2) {
                            echo "ingrese nuevo apellido \n";
                            $apellido=trim(fgets(STDIN));
                            $objPasajero->setApellido($apellido);
                            $arrayColeccion[$posicion]=$objPasajero;
                            $objViaje->setColObjPasajeros_4($arrayColeccion);
                        }
                        if ($modificacion==3) {
                            echo "ingrese nuevo dni \n";
                            $dni=trim(fgets(STDIN));
                            $objPasajero->setDni($dni);
                            $arrayColeccion[$posicion]=$objPasajero;
                            $objViaje->setColObjPasajeros_4($arrayColeccion);
                        }
                        if ($modificacion==4) {
                            echo "ingrese nuevo Telefono \n";
                            $tel=trim(fgets(STDIN));
                            $objPasajero->setTelefono($tel);
                            $arrayColeccion[$posicion]=$objPasajero;
                            $objViaje->setColObjPasajeros_4($arrayColeccion);
                            
                        }
                   }else {
                    echo "el dni no se encuentra \n";
                   }
                    }
                }
            if ($seleccion==3) {
                echo " ¿que desea ver? \n";
                echo "[1] Datos del viaje \n";
                echo "[2] Datos del pasajero \n";
                echo "[3] Datos del Responsable \n";
                echo "Ingrese el numero de la opcion: \n";
                $ver=trim(fgets(STDIN));
                if ($ver==1) {
                    $objViaje->__toString();
                }
                if ($ver==2) {
                    echo "ingrese DNI del pasajero que desea ver: \n";
                    $doc=trim(fgets(STDIN));
                    $arrayColeccion=$objViaje->getColObjPasajeros();
                    $n=count($arrayColeccion);
                    $bandera=false;
                    $i=0;
                    while( $i<$n && !$bandera){
                        $objPasajero=$arrayColeccion[$i];
                        if ($objPasajero->getDni()==$doc) {
                           $bandera=true;
                           $objPasajero->__toString();
                        }
                        else{
                            $bandera=false;
                        }
                       $i=$i+1;
                    }
                }
                if ($ver==3) {
                    $ObjResponsable->__toString();
                }
            }
        echo "marque [1] para volver al menu o [4] para salir: \n";
        $seleccion1=trim(fgets(STDIN));
        }while ($seleccion1==1|| $seleccion1==2 || $seleccion1==3);
        $objViaje->__toString();
        
        