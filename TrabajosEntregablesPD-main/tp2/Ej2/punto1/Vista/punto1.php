<?php ?>
<html>
    <head>
        <title>Ejemplo de PHP</title>
        <link rel="stylesheet" href="./bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/js/bootstrap.min.js">    
    <link href="../../../../cabecera/index.css" rel="stylesheet">
    <link href="../../../../cabecera/footer.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            function validacion(){
                var numero = document.getElementById("validationCustom01");
                var resp = true;
                var lab = document.getElementById("lab");

                if (isNaN(numero.value) || numero.value === ""){
                    resp= false;
                    numero.style="border-color:red";
                    lab.innerHTML = "Debe ingresar un numero:";
                }
                return resp;
            }
        </script>
    </head>

    <body>
    <form class="row g-3 needs-validation" method="get" action="../Control/vernumero.php" id="form1" name="form1" 
    onSubmit="return validacion();" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label" id="lab">Ingrese un numero: </label>
        <input type="text" class="form-control" id="validationCustom01" name="numero" value="" required>
        <div class="valid-feedback">
        Looks good!
        </div>
        <div class="invalid-feedback">
        Error!
        </div>
    </div>
    <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
    </form>
    <a href="../../indexTP2Ej2.php"><button class="btn btn-primary">Volver atrás.</button></a> 
            

    </body>

</html>
<?php include_once "../../../../cabecera/footer.php";?>