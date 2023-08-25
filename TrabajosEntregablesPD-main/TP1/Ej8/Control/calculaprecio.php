<?php
    if ($_POST){
        $edad = $_POST['edad'];
        $estudiante = $_POST['estudio'];
        $precio = 0;

        if ($estudiante == "1"){
            if ($edad >= 12){
                $precio = 180;
            }else {
                $precio = 160;
            }
        }else{
            if ($edad < 12){
                $precio = 160;
            } else {
                $precio = 300;
            }
        }

        echo "<h2>El precio es de : ".$precio.".</h2>";
        echo "<h2><a href='../Vista/Ej8.php'><input type='button' value='Volver'></h2>";
    }

?>