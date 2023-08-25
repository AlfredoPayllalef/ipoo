<?php /*include_once "../../../cabecera/header.php";*/?>
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
    <title>Ejercicio 1 TP 1</title>

    <script>
            function validacion(){
                var numero = document.getElementById("validationCustom01");
                var resp = false;
                var lab = document.getElementById("lab");

                if (numero.value === ""){
                    lab.innerHTML = "Debe ingresar un numero: ";
                    numero.style="border-color:red;"
                }else{
                    if (isNaN(numero.value)===false){
                        resp= true;
                    } else{
                        lab.innerHTML = "Debe ingresar un numero: ";
                        numero.style="border-color:red;"
                    }
                }
                return resp;
            }
    </script>
</head>
<body>

    <form method="get" action="../Control/vernumero.php" id="form1" name="form1" 
    onSubmit="return validacion();" >
        <label for="validationCustom01" id="lab">Ingrese un numero: </label>
        <input type="number" id="validationCustom01" name="numero">
        <button class="btn btn-primary" type="submit">Enviar</button>
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