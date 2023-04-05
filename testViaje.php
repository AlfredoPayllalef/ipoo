<?php
include_once ("Viaje.php");

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
                echo "ingrese destino \n";
                $nuevoDestino=trim(fgets(STDIN));
                echo "ingrese cantidad de pasajeros \n";
                $cantPasajeros=trim(fgets(STDIN));
                $pasajeros=[];
                for ($i=0; $i <$cantPasajeros ; $i++) { 
                    echo "nombre del pasajero \n";
                    $nombre=trim(fgets(STDIN));
                    echo "Apellido del pasajero \n";
                    $apellido=trim(fgets(STDIN));
                    echo "  N° Documento pasajero \n";
                    $doc=trim(fgets(STDIN));
                    $pasajeros[$i]=[$nombre,$apellido,$doc];
                }
                $objViaje= new Viaje($nuevoCodigo,$nuevoDestino,$cantPasajeros,$pasajeros);// esta bien??
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
                    $condicion=array_search($codigoViaje,$objViaje);// es objVije o this->getCodigo??
                   if ( is_int($condicion) and $condicion>=0) {
                    echo " ¿que desea modificar? \n";
                    echo "[1] Destino \n";
                    echo "[2] Cantidad Maxima\n";
                    echo "Ingrese el numero de la opcion: \n";
                    $modificacion=trim(fgets(STDIN));
                        if ($modificacion==1) {
                            echo "ingrese nuevo destino \n";
                            $destino=trim(fgets(STDIN));
                            $this-> setDestino_2($destino);
                        }
                        if ($modificacion==2) {
                            echo "ingrese nuevo Cantidad Maxima \n";
                            $cantMax=trim(fgets(STDIN));
                            $this-> setCantPasajeros_3($cantMax);
                        }
                   }else {
                    echo "el codigo no se encuentra \n";
                   }
                }
                if ($datoMenu==2) {
                    echo "ingrese DNI del pasajero: \n";
                    $doc=trim(fgets(STDIN));
                    $condicion= array_search($doc, $this->$pasajeros);
                    if (is_int($condicion) and $condicion>=0) {
                        echo " ¿que desea modificar? \n";
                        echo "[1] Nombre \n";
                        echo "[2] Apellido\n";
                        echo "[3] Numero de documento \n";
                        echo "Ingrese el numero de la opcion: \n";
                        $modificacion=trim(fgets(STDIN));
                        if ($modificacion==1) {
                            echo "ingrese nuevo nombre \n";
                            $nombre=trim(fgets(STDIN));
                            $this-> setNombre_5($nombre);
                        }
                        if ($modificacion==2) {
                            echo "ingrese nuevo apellido \n";
                            $apellido=trim(fgets(STDIN));
                            $this-> setApellido_6($apellido);
                        }
                        if ($modificacion==3) {
                            echo "ingrese nuevo dni \n";
                            $dni=trim(fgets(STDIN));
                            $this-> setnDoc_7($dni);
                        }
                   }else {
                    echo "el dni no se encuentra";
                   }
                }
                }
            if ($seleccion==3) {
                echo " ¿que desea ver? \n";
                echo "[1] Datos del viaje \n";
                echo "[2] Datos de pasajeros \n";
                echo "Ingrese el numero de la opcion: \n";
                $ver=trim(fgets(STDIN));
                if ($ver==1) {
                    $this->__toStrin2();
                }
                if ($ver==2) {
                    $this->__toString1();
                }
            }
        }while (!($seleccion==1|| $seleccion==2 || $seleccion==3));
        echo $objVije;//retorna el arreglo de pasajeros??