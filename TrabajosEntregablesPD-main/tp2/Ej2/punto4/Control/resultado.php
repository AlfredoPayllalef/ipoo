<?php
    if ($_POST){
        $valor1 = $_POST['validationServer01'];
        $valor2 = $_POST['validationServer02'];

        $operacion = $_POST['select'];
        if ($operacion == "suma"){
            echo "Resultado: ".$valor1+$valor2.".</h2>";
        }elseif($operacion == "resta"){
            echo "Resultado: ".$valor1-$valor2.".</h2>";
        }else {
            echo "Resultado: ".$valor1*$valor2.".</h2>";
        }
        echo "<br><a href='../Vista/punto4.php'><button class='btn btn-primary'>Volver</button></a>";
    }

?>