<?php
    function menu(){
        do {
            echo "menu de opciones /n";
            echo "[1] nuevo viaje /n";
            echo "[2] modificar datos /n";
            echo "[3] ver informacion /n";
            echo "ingrese el numero de la opcion:  /n";
            $seleccion=trim(fgets(STDIN));
            if (($seleccion<0) || ($seleccion> 3) or !ctype_digit($seleccion)) {
                echo "Opcion Incorecta! Ingrese otra opción: \n";
            }
            if($seleccion==1){
                nuevoViaje();
            }
            if($seleccion==2){
                echo "Ingrese la opcion que desea modificar /n";
                echo "[1] Datos de viaje /n";
                echo "[2] Datos de pasajero /n";
                $datoMenu=trim(fgets(STDIN));
                if ($datoMenu==1) {
                    echo "Ingrese la opcion que desea modificar /n";
                    echo "[1] Codigo de viaje /n";
                    echo "[2] Destino /n";
                    echo "[3] Cantidad Maxima/n";
                    echo "[4] Pasajejos /n";
                    echo "[5] Todo lo anterior /n";
                }
                if ($datoMenu==2) {
                    echo "Ingrese la opcion que desea modificar /n";
                    echo "[1] Nombre /n";
                    echo "[2] Apellido/n";
                    echo "[3] Numero de documento /n";
                    echo "[4] Todo lo anterior /n";
                }
            }
            if ($seleccion==3) {
                echo "Ingrese la opcion que desea ver /n";
                echo "[1] Nombre /n";
                echo "[2] Apellido/n";
                echo "[3] Numero de documento /n";
                echo "[4] Todo lo anterior /n";
            }
        }while (!($seleccion==1|| $seleccion==2 || $seleccion==3));
        return $seleccion;
    }