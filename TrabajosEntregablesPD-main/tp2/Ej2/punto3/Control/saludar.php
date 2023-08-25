<?php
    if ($_POST){
        if ($_POST){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $edad = $_POST['edad'];
            $sexo = $_POST['sexo'];
            $estudio = $_POST['radio-stacked'];
            $deportes = $_POST['deportes']; 

            if ($edad >=18){
                echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo edad ".$edad." y vivo en ".$direccion.".
                <br>Sexo: ".$sexo.".
                <br>Estudios: ".$estudio.".
                <br>Deportes: ".$deportes.".</h2>";
            }else{
                echo "<h2>Hola yo soy ".$nombre.", ".$apellido." tengo edad ".$edad.".
                <br>Sexo: ".$sexo.".
                <br>Estudios: ".$estudio.".
                <br>Deportes: ".$deportes.".</h2>";
            }

            
        }
    }
    echo "<h2><a href='../Vista/punto3.php' id='link'>Volver</a></h2>";
?>