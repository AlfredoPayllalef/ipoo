<?php include_once "../../../../cabecera/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 TP1</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/js/bootstrap.min.js">    
    <link href="../../../../cabecera/index.css" rel="stylesheet">
    <link href="../../../../cabecera/footer.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function validar(){
            var edad = document.getElementById("validationServer01");
            var error = document.getElementById("valid-feedback");
            var estudiante = document.getElementsByName("radio-stacked");
            var resp = true;

            if (edad.value == "" || isNaN(edad.value) == true){
                    resp = false;
                    edad.style="border-color:red";
                    error.style="color:red";
                    error.innerHTML="Ingrese una edad valida";
            }else if (edad.value <0){
                resp = false;
                    edad.style="border-color:red";
                    error.style="color:red";
                    error.innerHTML="Ingrese una edad valida";
            }else{
                edad.style="border-color:green";
                error.innerHTML="Looks good!";
            }
            if (estudiante.value == ""){
                resp = false;
            }

            return resp;
        }
    </script>
</head>
<body>
<form class="was-validated"  method="post" action="../Control/resultado.php" onSubmit="return validar();" novalidate>
    <div class="row-md-4">
    <div class="col-md-4">
    <label for="validationServer01" class="form-label">Edad</label>
    <input type="text" class="form-control" name="validationServer01" id="validationServer01" required>
    <div class="valid-feedback" id="valid-feedback">
      Looks good!
    </div>
    </div>

    <div class="row-md-4">
    <div class="col-md-4">
    <label for="form-check" class="form-label">Es estudiante?</label>
    <div class="form-check">
    <input type="radio" class="form-check-input" id="validationFormCheck1" value="1" name="radio-stacked" required>
    <label class="form-check-label" for="validationFormCheck1">Si</label>
    </div>
    <div class="form-check mb-3">
        <input type="radio" class="form-check-input" id="validationFormCheck2" value="2" name="radio-stacked" required>
        <label class="form-check-label" for="validationFormCheck2">No</label>
    </div>
    </div>
    </div>
    <div class="row-md-4">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    <a href="../../indexTP2Ej2.php"><button type="button" class="btn btn-primary mt-2">Volver atrás.</button></a> 
</form>

</body>
</html>
<?php include_once "../../../../cabecera/footer.php";?>