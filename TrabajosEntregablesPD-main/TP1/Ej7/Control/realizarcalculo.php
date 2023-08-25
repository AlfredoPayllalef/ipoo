<?php
if(isset($_POST)){

    if(isset($_POST['text1'])){
        $num1 = $_POST['text1'];
    }
    if(isset($_POST['text2'])){
        $num2 = $_POST['text2'];
    }
    if(isset($_POST['select'])){
        if($_POST['select'] == 'suma'){
            $cuenta = $num1 + $num2;
        }
        if($_POST['select'] == 'resta'){
            $cuenta = $num1 - $num2;
        }
        if($_POST['select'] == 'multiplicacion'){
            $cuenta = $num1 * $num2;
        }
        if($_POST['select'] == 'division'){
            $cuenta = $num1 / $num2;
        }
    }

    echo "El resultado es $cuenta";
    echo "<h2><a href='../Vista/Ej7.php'><input type='button' value='Volver'></a></h2>";
}

?>