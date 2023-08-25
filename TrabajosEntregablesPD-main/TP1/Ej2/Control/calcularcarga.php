<?php
    if ($_GET){
        $arregloSemana = array();
        array_push($arregloSemana,$_GET['lunes']);
        array_push($arregloSemana,$_GET['martes']);
        array_push($arregloSemana,$_GET['miercoles']);
        array_push($arregloSemana,$_GET['jueves']);
        array_push($arregloSemana,$_GET['viernes']);

        $sum = 0;
        for ($i=0; $i < count($arregloSemana); $i++) { 
            $sum = $sum + (int)$arregloSemana[$i];
        }
        echo "<h2>El total de horas semanales es de : ".$sum."Hs.</h2>";
        echo "<br/><h2><a class='volver' href='../Vista/Ej2.php'><input type='button' value='Volver'></a></h2>";
    }
?>