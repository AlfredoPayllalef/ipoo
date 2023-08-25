<?php
$dir = '../vista/archivos/';
$nombre = $_FILES['archivo']["name"];

    if($_FILES['archivo']["error"] <= 0){
        if($_FILES['archivo']['type'] == "text/plain"){           
           if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
            echo "ERROR: no se pudo cargar el archivo ";
           }else{
            $ruta = file_get_contents('../vista/archivos/'.$nombre);
            echo "El archivo ".$_FILES["archivo"]["name"]." se ha copiado con Éxito <br />";
            echo "<div>
            <textarea rows=10 cols=50>
            $ruta</textarea>
            </div>
            <div>                    
                <tr>
                    <td class='ejercicios' style='text-align:center'>                    
                    <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                    </td>
                </tr>
            </div>";
            }   
        }else{
            echo "El archivo no tiene el formato solicitado
            <div>                    
                <tr>
                    <td class='ejercicios' style='text-align:center'>                    
                    <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                    </td>
                </tr>
            </div>";
        }
       
    }else{
        echo "no hay archivo
        <div>                    
            <tr>
                <td class='ejercicios' style='text-align:center'>                    
                <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                </td>
            </tr>
        </div>";
    }





?>