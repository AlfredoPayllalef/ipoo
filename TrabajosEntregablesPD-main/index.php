<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./cabecera/index.css" rel="stylesheet">
    <link href="./index.css" rel="stylesheet">
    <link href="./cabecera/footer.css" rel="stylesheet">
    <title>Indice TP's</title>
</head>
<body>
<!-- <table class="table table-striped table-hover" style="width:100%;">
<thead>
    <tr>
      <th scope="col" style="text-align:center">Trabajos Programacion Web Dinamica</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td style="text-align:center">
            <a href="TP1/indexTP1.php">Trabajo Practico 1</a>
        </td>
    </tr>
    <tr>
        <td style="text-align:center">
            <a href="tp2/indexTP2.php">Trabajo Practico 2</a>
        </td>
    </tr>
    <tr>
        <td style="text-align:center">
            <a href="#">Trabajo Practico 3</a>
        </td>
    </tr>
</tbody>
</table> -->
    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid" id="header">
        <a class="navbar-brand" href="#">Trabajos Programacion Web Dinamica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">      
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Trabajos Practicos
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./TP1/indexTP1.php">Trabajo Practico 1</a></li>
            <li><a class="dropdown-item" href="./tp2/indexTP2.php">Trabajo Practico 2</a></li>
            <li><a class="dropdown-item" href="./tp3/indexTP3.php">Trabajo Practico 3</a></li>
            </ul>
            </li>
            </ul>
        </div>
    </div>
    </nav>

</body>
</html>
<?php include_once "./cabecera/footer.php";?>