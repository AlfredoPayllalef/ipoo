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
    <title>Document</title>
</head>
<body>
    <form name="form" id="form" method="post" action="../Control/realizarcalculo.php">
        <input name="text1" id="text1" type="number" required>
        <input name="text2" id="text2" type="number" required>
        <select name="select" id="select">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <button  type="submit">Calcular</button>
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