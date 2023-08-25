<?php

if ($_GET){
    if ($_GET){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $direccion = $_GET['direccion'];
        $edad = $_GET['edad'];
        if ($edad >= 18){
            echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años(Mayor de edad) y vivo en ".$direccion.".</h2>";
        } else {
            echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años(Menor de edad) y vivo en ".$direccion.".</h2>";
        }
    }
}
echo "<h2><a href='../Vista/Ej4.php'><input type='button' value='Volver'></a></h2>";
?>