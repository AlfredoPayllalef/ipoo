<?php
    if ($_GET){
        $num = $_GET['numero'];

        if ($num > 0){
            echo "<h2>El numero es positivo</h2>";
        } elseif ($num < 0){
            echo "<h2>El numero es negativo</h2>";
        } else {
            echo "<h2>El numero es igual a 0 </h2>";
        }

        echo "<br/><h2><a class='link' href='../Vista/punto1.php' >Volver</a></h2>";
    }

?>