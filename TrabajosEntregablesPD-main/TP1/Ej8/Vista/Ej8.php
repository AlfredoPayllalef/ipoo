<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../cabecera/index.css" rel="stylesheet">
    <link href="../../../cabecera/footer.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Ejercicio 8 TP 1</title>
    <script type="text/javascript">
        function validar(){
            var edad = document.getElementById("edad");
            var estudio = document.querySelector('input[name="estudio"]:checked').value;
            var resp = true;

            if (edad.value == "" || isNaN(edad.value)){
                resp= false;
                edad.style= "border-color:red;"
            }
            return resp;
        }
    </script>
</head>
    <body>
        <form method="post" action="../Control/calculaprecio.php" name="form1" id="form1" onSubmit="return validar();">
            <input type="number" name="edad" id="edad" placeholder="Ingrese su edad"/><br/>
            Es estudiante?<br/>
            <input type="radio" name="estudio" id="estudio" value="1"/>Si<br/>
            <input type="radio" name="estudio" id="estudio" value="2" checked>No<br/>
            <input type="submit" name="submit" id="submit" value="Enviar"/>
        </form>
        <div>
    <tr>
        <td class="ejercicios" style="text-align:center">
          <a href="../../indexTP1.php"><button >Volver atrás.</button></a> 
        </td>
    </tr>
    </div>
    </body> 
</html>
<?php include_once "../../../cabecera/footer.php";?>