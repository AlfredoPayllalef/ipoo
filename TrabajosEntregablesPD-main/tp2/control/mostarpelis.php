<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Vista/styles/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Vista/styles/css/styles.css" />
    <script src="../Vista/styles/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <title>Su película</title>
</head>

<body>
    <main>
        <div class="alert alert-success" role="alert">
        <?php
        $aaa = $_SERVER["DOCUMENT_ROOT"];
        $dir = "../vista/archivos/";
        $nombre = $_FILES['imagen']["name"];
        if(isset($_POST)){
            if($_FILES['imagen']["error"] <= 0){
                if($_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png"){          
                   
                   if (!copy($_FILES['imagen']['tmp_name'], $dir.$_FILES['imagen']['name'])) {
                    echo "ERROR: no se pudo cargar el imagen
                    <div>                    
                        <tr>
                            <td class='ejercicios' style='text-align:center'>                    
                            <a href='../vista/ejercicio4.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                            </td>
                        </tr>
                    </div>";
                   }else{                    
                    echo "El archivo ".$_FILES["imagen"]["name"]." se ha copiado con Éxito <br />";                   
                    } 
                                
                }else{
                    $img = $_FILES['imagen']["type"];
                    echo "El archivo no tiene el formato solicitado. El formato invalido de la imagen es: $img";
                    
                    
                }                
            }else{
                echo "no hay archivo <div>                    
                <tr>
                    <td class='ejercicios' style='text-align:center'>                    
                    <a href='../vista/ejercicio4.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                    </td>
                </tr>
            </div>";
            }
            //recuperacion de datos 
            if(isset($_POST['titulo'])){
                $titulo = $_POST['titulo'];
            }else{
                $titulo = '';
            }
            if(isset($_POST['actores'])){
                $actores = $_POST['actores'];
            }else{
                $actores = '';
            }
            if(isset($_POST['director'])){
                $director = $_POST['director'];
            }else{
                $director = '';
            }
            if(isset($_POST['guion'])){
                $guion = $_POST['guion'];
            }else{
                $guion = '';
            }
            if(isset($_POST['produccion'])){
                $produccion = $_POST['produccion'];
            }else{
                $produccion = '';
            }
            if(isset($_POST['anio'])){
                $anio = $_POST['anio'];
            }else{
                $anio = '';
            }
            if(isset($_POST['nacionalidad'])){
                $nacionalidad = $_POST['nacionalidad'];
            }else{
                $nacionalidad = '';
            }
            if(isset($_POST['genero'])){
                $genero = $_POST['genero'];
            }else{
                $genero = '';
            }
            if(isset($_POST['duracion'])){
                $duracion = $_POST['duracion'];
            }else{
                $duracion = '';
            }
            if(isset($_POST['publico'])){
                $publico = $_POST['publico'];
            }else{
                $publico = '';
            }
            if(isset($_POST['sinopsis'])){
                $sinopsis = $_POST['sinopsis'];
            }else{
                $sinopsis = '';
            }
            echo "<h2>La película introducida es:</h2>
            <br>
            <p>
            <b>Título:</b> $titulo
            <br>
            <b>Actores:</b> $actores
            <br>
            <b>Director:</b> $director
            <br>
            <b>Guión:</b> $guion
            <br>
            <b>Producción:</b> $produccion
            <br>
            <b>Año:</b> $anio
            <br>
            <b>Nacionalidad:</b> $nacionalidad
            <br>
            <b>Género:</b> $genero
            <br>
            <b>Duracion:</b> $duracion minutos
            <br>
            <b>Restricciones de edad:</b> $publico
            <br>
            <b>Sinopsis:</b> $sinopsis
            </p>
            <div class='shadow' id='imagen_contenedor'>
            <p></p>Imagen de la pelicula:<br>
            <img src='../vista/archivos/$nombre' alt='Foto ilustrativa de la pelicula $titulo'>
            </div>
            <div>                    
                        <tr>
                            <td class='ejercicios' style='text-align:center'>                    
                            <a href='../vista/ejercicio4.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                            </td>
                        </tr>
                    </div>
                    <p></p>Imagen de la pelicula: $aaa<br>  ";
        }
        
        ?>
        </div>
    </main>
</body>

</html>