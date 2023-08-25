<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 3 TP1</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/js/bootstrap.min.js">    
    <link href="../../../../cabecera/index.css" rel="stylesheet">
    <link href="../../../../cabecera/footer.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        function validar(){
            var nombre = document.getElementById("validationServer01");
            var apellido = document.getElementById("validationServer02");
            var direccion = document.getElementById("validationServer04");
            var edad = document.getElementById("validationServer03");
            var estudio = document.getElementsByName("radio-stacked");
            var sexo = document.getElementById("select");
            var deportes = document.getElementsByClassName("form-check-input");
            var resp=true;

            if (nombre.value == "" || isNaN(nombre.value) == false){
                resp=false;
            }
            if (apellido.value == "" || isNaN(apellido.value) == false){
                resp=false;
            }
            if (direccion.value == "" || isNaN(direccion.value) == false){
                resp=false;
            }
            if (edad.value == "" || isNaN(edad.value) == true){
                resp=false;
            }
            if (estudio.value == ""){
                resp=false;
            }
            if (sexo.value == "-"){
                resp=false;
            }
            if (deportes.value == ""){
                resp=false;
            }
        return resp;

        }
    </script>
</head>
<body>
<form style="margin:2%" class="was-validated row g-3" method="post" action="../Control/saludar.php" 
onSubmit="return validar();" novalidate>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationServer01" name="nombre" required>
    <div id="validationServer01Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer01Feedback" class="invalid-feedback">
        Ingrese su nombre.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer02" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="validationServer02" name="apellido" required>
    <div id="validationServer02Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer02Feedback" class="invalid-feedback">
        Ingrese su apellido.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer04" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="validationServer04" name="direccion" required>
    <div id="validationServer04Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer04Feedback" class="invalid-feedback">
        Ingrese su direccion.
    </div>
  </div>
</div>
<div class="row-md-4">
  <div class="col-md-4">
    <label for="validationServer03" class="form-label">Edad</label>
    <input type="text" class="form-control" id="validationServer03" name="edad" required>
    <div id="validationServer03Feedback" class="valid-feedback">
      Looks good!
    </div>
    <div id="validationServer03Feedback" class="invalid-feedback">
        Ingrese su edad.
    </div>
  </div>
</div>
<div class="row-md-4">
<div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="validationFormCheck1" name="radio-stacked" value="nulo" required>
    <label class="form-check-label" for="validationFormCheck2">Nulo</label>
  </div>
  <div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" value="primario" required>
    <label class="form-check-label" for="validationFormCheck3">Primario</label>
  </div>
  <div class="form-check mb-3">
    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" value="secundario" required>
    <label class="form-check-label" for="validationFormCheck3">Secundario</label>
  </div>
</div>

<div class="row-md-4">
<div class="mb-3">
    <select class="form-select" required aria-label="select example" name="sexo" id="select">
      <option value="">-</option>
      <option value="hombre">Hombre</option>
      <option value="mujer">Mujer</option>
      <option value="otro">Otro</option>
    </select>
    <div class="invalid-feedback">Example invalid select feedback</div>
  </div>
</div>

<div class="row-md-4">
<div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" name="deportes" id="validationFormCheck1" value="basquet" required>
    <label class="form-check-label" for="validationFormCheck1">Basquet</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
</div>
<div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" name="deportes" id="validationFormCheck2" value="futbol" required>
    <label class="form-check-label" for="validationFormCheck2">Futbol</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
</div>
<div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" name="deportes" id="validationFormCheck3" value="rugby" required>
    <label class="form-check-label" for="validationFormCheck3">Rugby</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
</div>
<div class="form-check mb-3">
    <input type="checkbox" class="form-check-input" name="deportes" id="validationFormCheck4" value="voley" required>
    <label class="form-check-label" for="validationFormCheck4">Voley</label>
    <div class="invalid-feedback">Example invalid feedback text</div>
</div>
</div>

<div class="form-check mb-3">
<div class="mb-12" >
    <button style="width:100%" class="btn btn-primary" type="submit" >Submit form</button>
  </div>
</div>
</form>
<a href="../../indexTP2Ej2.php"><button class="btn btn-primary">Volver atrás.</button></a> 
    
</body>
</html>
<?php include_once "../../../../cabecera/footer.php";?>