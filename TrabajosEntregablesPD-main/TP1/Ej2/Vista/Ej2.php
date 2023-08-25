<?php /*include_once "../../../cabecera/header.php";*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 TP 1</title>
    <link href="../../../cabecera/footer.css" rel="stylesheet">
    <link href="../../../cabecera/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        function validar(){
            var lunes = document.getElementById("lunes");
            var martes = document.getElementById("martes");
            var miercoles = document.getElementById("miercoles");
            var jueves = document.getElementById("jueves");
            var viernes = document.getElementById("viernes");
            var array_semana = Array(lunes, martes, miercoles, jueves, viernes);
            var resp = true;
            
            for (let i = 0; i < array_semana.length; i++) {
                if (isNaN(array_semana[i].value)){
                    resp= false;
                    array_semana[i].style = "border-color:red;";
                }else{
                    array_semana[i].style = "border-color:gray";
                }         
            }

            return resp;
        }
    </script>
</head>

<body>
    <form name="form1" id="form1" method="get" action="../Control/calcularcarga.php" onSubmit="return validar();">
        <h2>Programacion Web Dinámica</h2>
        <table width="30%">
        <th colspan="2" style="text-align:left">
            Ingrese la cantidad de horas correspondientes:
        </th>
        <tr>
            <td width="20">
                Lunes:
            </td>
            <td>
            <input type="number" name="lunes" id="lunes" placeholder="Carga horaria">
            </td>
        </tr>
        <tr>
            <td>
                Martes:
            </td>
            <td>
            <input type="number" name="martes" id="martes" placeholder="Carga horaria"><br/>
            </td>
        </tr>
        <tr>
            <td>
                Miercoles:
            </td>
            <td>
            <input type="number" name="miercoles" id="miercoles" placeholder="Carga horaria">
            </td>
        </tr>
        <tr>
            <td>
                Jueves:
            </td>
            <td>
            <input type="number" name="jueves" id="jueves" placeholder="Carga horaria"><br/>
            </td>
        </tr>
        <tr><td>
                Viernes:
            </td>
            <td>
            <input type="number" name="viernes" id="viernes" placeholder="Carga horaria"><br/>
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" name="submit" id="submit" value="Enviar"/>
            </td>
        </tr>
        </table>
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