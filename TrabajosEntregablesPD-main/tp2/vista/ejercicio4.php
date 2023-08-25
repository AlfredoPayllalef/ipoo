<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.2.0-dist/js/bootstrap.min.js">
    <link href="./index.css" rel="stylesheet">
    <link href="../../cabecera/footer.css" rel="stylesheet">
    <link href="../../cabecera/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Formulario de peliculas</title>
</head>

<body>
    <div class="col-mb-12 contenedor">
        <form class="needs-validation" action="../control/mostarpelis.php" method="POST" enctype="multipart/form-data" novalidate>
            <fieldset class="titulo">
                <legend>
                    Cinem@s
                </legend>
            </fieldset>
            <div class="alert alert-warning error" id="error" role="alert">
                Todos los campos son obligatorios
            </div>
            <div class="contenido">
                <fieldset class="grid1">
                    <div class="col-md-4 p1">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text"  class="form-control input" id="titulo" placeholder="Título"  name="titulo" required>
                        <div class="invalid-feedback">
                        Debes completar este dato correctamente
                        </div><br>
                    </div>
                    <div class="col-md-4 p2">
                        <label for="actores" class="form-label">Actores</label>
                        <input type="text"  onkeydown="return /[a-z, ]/i.test(event.key)"
                            onblur="if (this.value == '') {this.value = '';}"
                            onfocus="if (this.value == '') {this.value = '';}" class="form-control input" id="actores" placeholder="Actores" name="actores" required>
                        <div class="invalid-feedback">
                            Debes completar este dato correctamente
                        </div> <br>
                    </div>
                </fieldset>
                <fieldset class="grid1">
                    <div class="col-md-4 p1">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" class="form-control input" id="director"  onkeydown="return /[a-z, ]/i.test(event.key)"
                        onblur="if (this.value == '') {this.value = '';}"
                        onfocus="if (this.value == '') {this.value = '';}" placeholder="Director" name="director" required>
                        <div class="invalid-feedback">
                        Debes completar este dato correctamente
                        </div> <br>
                    </div>
                    <div class="col-md-4 p2">
                        <label for="guion" class="form-label">Guión</label>
                        <input type="text" class="form-control input" id="guion" placeholder="Guión" name="guion" required>
                        <div class="invalid-feedback">
                        Debes completar este dato correctamente
                        </div> <br>
                    </div>
                </fieldset>
                <fieldset class="grid1">
                    <div class="col-md-4 p1">
                        <label for="produccion" class="form-label">Producción</label>
                        <input type="text" class="form-control input" id="produccion" placeholder="Producción" name="produccion" required>
                        <div class="invalid-feedback">
                        Debes completar este dato correctamente
                        </div> <br>
                    </div>
                    <div class="col-md-4 p2">
                        <label for="anio" class="form-label">Año</label>
                        <input type="number" class="form-control input" id="anio" name="anio" max="2022" min="1900" required>
                        <div class="invalid-feedback " id="anioV">
                            El año deben ser 4 números
                        </div> <br>
                    </div>
                </fieldset>
                <fieldset class="grid1">
                    <div class="col-md-4 p1">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control input" id="nacionalidad" placeholder="Nacionalidad" name="nacionalidad" required>
                        <div class="invalid-feedback">
                        Debes completar este dato correctamente
                        </div><br>
                    </div>
                    <div class="col-md-4 p2">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-select input" id="genero" name="genero" required>
                            <option value="">Ninguno</option>
                            <option value="comedia">Comedia</option>
                            <option value="drama">Drama</option>
                            <option value="terror">Terror</option>
                            <option value="romance">Romance</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otro">Otro</option>
                        </select>
                        <div class="invalid-feedback">
                            Debe seleccionar al menos uno
                        </div><br>
                    </div>
                </fieldset>


                <fieldset class="grid2">
                    <div class="col-md-4 p1">
                        <label for="duracion" class="form-label">Duración</label>
                        <input type="number" class="form-control input" id="duracion"  max="999" min="100" name="duracion" required>
                        <div class="invalid-feedback " id="duracionV">
                            Deben ser 3 números 
                        </div><br>
                        <label class="form-label">(minutos)</label>
                    </div>
                    <div class="col-md-4 p2">
                        <label for="form-check">Público</label>
                        <section>
                            <div class="form-check check1">
                                <input class="form-check-input" type="radio" name="publico" value="todo publico" id="publico" required>
                                <label class="form-check-label" for="publico">
                                    Todo público
                                </label>
                            </div>
                            <div class="form-check check2">
                                <input class="form-check-input" type="radio" name="publico" value="mayores de 7 años" id="publico">
                                <label class="form-check-label" for="publico">
                                    Mayores de 7 años
                                </label>
                            </div>
                            <div class="form-check check3">
                                <input class="form-check-input" type="radio" name="publico" value="mayores de 18 años" id="publico">
                                <label class="form-check-label" for="publico">
                                    Mayores de 18 años
                                </label>
                            </div>
                        </section>

                    </div>
                </fieldset><br>



                <fieldset>
                    <div class="col-md-12">
                        <label for="titulo" class="form-label">Sinopsis</label>
                        <input type="textarea" class="form-control textarea input" id="sinopsis" name="sinopsis" required>
                    </div>
                    
                </fieldset>
                <div class="invalid-feedback">
                    Debes completar este dato correctamente
                        </div><br>
                <div class="col-md-4 p2">
            <label for="formFile" class="form-label">Ingrese una foto de la pelicula</label>
            <input class="form-control" type="file" id="imagen" name="imagen" required>
          </div>
          <div class="invalid-feedback">
                    Debes completar este dato correctamente
                        </div><br>
          <div class="mb-3">

                <div class="col-12 botones">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                    <button class="btn btn-primary" type="reset">Borrar</button>
                </div>
            </div><br>
            
                <tr>
                <td class="ejercicios" style="text-align:center">
                <a href="../indexTP2.php"><button class="btn btn-primary" type="button">Volver atrás.</button></a> 
                </td>
                </tr>
           
       
            <script>                 
            



                            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()

          
            </script>
        </form>
    </div>
</body>

</html>
<?php include_once "../../cabecera/footer.php";?>