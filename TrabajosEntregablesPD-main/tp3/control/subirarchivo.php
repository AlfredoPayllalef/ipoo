<?php

$dir = '../vista/archivos/';  // Definimos Directorio donde se guarda el archivo
// Comprobamos que no se hayan producido errores


    if($_FILES['archivo']["error"] <= 0){        
        if($_FILES['archivo']['type'] == "application/pdf" || $_FILES['archivo']['type'] == "application/doc"){            
            if($_FILES['archivo']['size'] < 999999999){
                if (!copy($_FILES['archivo']['tmp_name'], $dir.$_FILES['archivo']['name'])) {
                    echo "ERROR: no se pudo cargar el archivo ";
                   }else{
                    echo "Nombre: " . $_FILES['archivo']['name'] . "<br />";
                    echo "Tipo: " . $_FILES['archivo']['type'] . "<br />";
                    echo "Tamaño: " . ($_FILES['archivo']["size"] / 1024) . " kB<br />";
                    echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name']." <br />";
                    echo "El archivo ".$_FILES["archivo"]["name"]." se ha copiado con Éxito <br />";
                    echo "<a href='/tp3/vista/archivos/".$_FILES['archivo']['name']."'> Aqui </a>
                    <div>                    
                    <tr>
                        <td class='ejercicios' style='text-align:center'>                    
                        <a href='../vista/ejercicio2.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                        </td>
                    </tr>
                </div>";
                    }                
            }else{
                echo "el archivo es muy pesado
                <div>                    
                    <tr>
                        <td class='ejercicios' style='text-align:center'>                    
                        <a href='../vista/ejercicio2.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                        </td>
                    </tr>
                </div>";
            }
        }else{
            echo "El archivo no tiene el formato correcto
            <div>                    
            <tr>
                <td class='ejercicios' style='text-align:center'>                    
                <a href='../vista/ejercicio2.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                </td>
            </tr>
            </div>";
        }
// Intentamos copiar el archivo al servidor.
        
    }else{
    echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
    }
 



 ?>