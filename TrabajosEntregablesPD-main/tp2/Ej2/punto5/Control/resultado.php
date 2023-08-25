<?php
    if ($_POST){
        $edad = $_POST['validationServer01'];
        $estudiante = $_POST['radio-stacked'];

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

        echo "<h2>Precio : ".$precio.".</h2>
        <br><a href='../Vista/punto5.php'><button class='btn btn-primary'>Volver</button></a>";
    }

?>