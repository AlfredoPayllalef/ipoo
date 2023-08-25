<?php
    if ($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $direccion = $_POST['direccion'];
        $edad = $_POST['edad'];

        echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".</h2>";
    } elseif ($_GET){
        if ($_GET){
            $nombre = $_GET['nombre'];
            $apellido = $_GET['apellido'];
            $direccion = $_GET['direccion'];
            $edad = $_GET['edad'];
    
            echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo ".$edad." años y vivo en ".$direccion.".</h2>";
        }
    }
    echo "<h2><a href='../Vista/Ej3.php'><input type='button' value='Volver'></a></h2>";
?>