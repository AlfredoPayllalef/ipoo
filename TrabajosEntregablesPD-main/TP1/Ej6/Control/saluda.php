<?php

if ($_GET){
    if ($_GET){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $direccion = $_GET['direccion'];
        $edad = $_GET['edad'];
        $estudios = $_GET['estudios'];
        $sexo = $_GET['sexo'];
        $cont_deportes = 0;
        if (isset($_GET['1'])){
            $cont_deportes++;
        }
        if (isset($_GET['2'])){
            $cont_deportes++;
        }
        if (isset($_GET['3'])){
            $cont_deportes++;
        }
        if (isset($_GET['4'])){
            $cont_deportes++;
        }
        if ($edad >= 18){
            echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".<br>
            Estudios: ".$estudios.".<br>Sexo: ".$sexo.".<br>Deportes practicados: ".($cont_deportes).".</h2>";
        } else {
            echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años.
            <br>Estudios: ".$estudios.".<br>Sexo: ".$sexo.".<br>Deportes practicados: ".($cont_deportes).".</h2>";
        }
    }
}
echo "<h2><a href='../Vista/Ej6.php'><input type='button' value='Volver'></a></h2>";
?>