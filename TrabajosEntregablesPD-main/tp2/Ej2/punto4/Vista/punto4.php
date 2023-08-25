<?php include_once "../../../../cabecera/header.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/js/bootstrap.min.js">    
    <link href="../../../../cabecera/index.css" rel="stylesheet">
    <link href="../../../../cabecera/footer.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script>
    function validar(){
        var op1 = document.getElementById("validationServer01");
        var op2 = document.getElementById("validationServer02");
        var error = document.getElementById("msg");
        var error2 = document.getElementById("msg2");
        var resp=true;
        if (op1 == ""){
            resp=false;
            error.innerHTML = "Ingrese un numero !";
            error.style = "color:red";
            op1.style = "border-color:red";
        }
        if (op2 == ""){
            resp=false;
            error2.innerHTML = "Ingrese un numero !";
            error2.style = "color:red";
            op2.style = "border-color:red";
        }
        return resp;
    }
   </script>
</head>
<body>
<form class="was-validated" method="post" action="../Control/resultado.php" onSubmit="return validar();"novalidate>
<div class="row-md-4">
<div class="col-md-4">
    <label for="validationServer01" class="form-label">Ingrese un numero</label>
    <input type="number" class="form-control" id="validationServer01" name="validationServer01" required>
    <div class="valid-feedback" id="msg">
      Looks good!
    </div>
</div>
</div>

<div class="row-md-4">
<div class="col-md-4">
    <label for="validationServer02" class="form-label">Ingrese un numero</label>
    <input type="number" class="form-control" id="validationServer02" name="validationServer02" required>
    <div class="valid-feedback" id="msg2">
      Looks good!
    </div>
</div>
</div>

<div class="row-md-4">
<div class="col-md-2">
    <label for="validationServer04" class="form-label">Operacion</label>
    <select class="form-select" id="validationServer04" name="select" aria-describedby="validationServer04Feedback" required>
      <option selected disabled value="">Choose...</option>
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicacion</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Please select a valid state.
    </div>
   
  <div class="col-md-2">
  <input type="submit" value="Enviar" class="btn btn-primary mt-2">
  </div>

  </div>
</div>
</form>
<a href="../../indexTP2Ej2.php"><button class="btn btn-primary mt-2">Volver atrás.</button></a> 


</body>
</html>
<?php include_once "../../../../cabecera/footer.php";?>