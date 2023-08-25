<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2TP1</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/js/bootstrap.min.js">    
    <link href="../../../../cabecera/index.css" rel="stylesheet">
    <link href="../../../../cabecera/footer.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function validar(){
            var lun = document.getElementById("validationServer01");
            var mar = document.getElementById("validationServer02");
            var mier = document.getElementById("validationServer03");
            var jue = document.getElementById("validationServer04");
            var vie = document.getElementById("validationServer05");
            var arreglo_semana = Array(lun, mar, mier, jue, vie);
            var resp=true;
            for (let i = 0; i < arreglo_semana.length; i++) {
                if (arreglo_semana[i].value == "" ||isNaN(arreglo_semana[i].value) == true){
                    resp = false;
                    arreglo_semana[i].style="border-color:red";
                    
                }
            }

            return resp;

        }
    </script>
</head>
<body>
<form class="was-validated row g-3" method="post" action="../Control/validacion.php" onSubmit="return validar();" novalidate>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Lunes</label>
    <input type="text" class="form-control" id="validationServer01" name="lunes" required>
    <div id="validationServer01Feedback" class="valid-feedback">
        Looks good!
    </div>
    <div id="validationServer01Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Martes</label>
    <input type="text" class="form-control" id="validationServer02" name="martes" required>
    <div id="validationServer02Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer02Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer03" class="form-label">Miercoles</label>
    <input type="text" class="form-control" id="validationServer03" name="miercoles" required>
    <div id="validationServer03Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer03Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer04" class="form-label">Jueves</label>
    <input type="text" class="form-control" id="validationServer04" name="jueves" required>
    <div id="validationServer04Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer04Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer05" class="form-label">Viernes</label>
    <input type="text" class="form-control" id="validationServer05" name="viernes" required>
    <div id="validationServer05Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer05Feedback" class="invalid-feedback">
        Ingrese horas.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-12">
    <button class="btn btn-primary" type="submit" >Submit form</button>
  </div>
</div>
</form>
<a href="../../indexTP2Ej2.php"><button class="btn btn-primary mt-2">Volver atrás.</button></a> 

    
</body>
</html>
<?php include_once "../../../../cabecera/footer.php";?>