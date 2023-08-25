<?php
        $arrayUsuarios = array('tomas.salto' => 'albano99', 'tomas.ferrin' => '42095934', 'dario.pedraza' => '12345678');
        if (isset($_POST)){
            //guardar datos
            if (isset($_POST['usuario'])) {
                $user = $_POST['usuario'];
            } else {
                $user = '';
            }
            if (isset($_POST['contrasenia'])) {
                $password = $_POST['contrasenia'];
            } else {
                $password = '';
            }
            //verificacion de campos por las dudas
            if ($user != '' && $password != '') {
                //var_dump($arrayUsuarios[$user]);
                //var_dump(key_exists($user, $arrayUsuarios));
                //verificar si esta en el array el user 
                if (key_exists($user, $arrayUsuarios)) {
                    if ($arrayUsuarios[$user] == $password) {                        
                    echo "<div class=\"alert alert-success\" role=\"alert\">
                    Bienvenido $user, ha iniciado sesion correctamente!
                    <div>                    
                        <tr>
                            <td class='ejercicios' style='text-align:center'>                    
                            <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                            </td>
                        </tr>
                    </div>";
                    } else {
                        
                        echo "<div class=\"alert alert-warning\" role=\"alert\">
                        $user ha ingresado una contraseña inválida
                      </div>
                      <div>                    
                        <tr>
                            <td class='ejercicios' style='text-align:center'>                    
                            <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                            </td>
                        </tr>
                    </div>";
                    }
                } else {
                  
                    echo "<div class=\"alert alert-danger\" role=\"alert\">
                    No hemos podido encontrar dicho usuario
                  </div>
                  <div>                    
                        <tr>
                            <td class='ejercicios' style='text-align:center'>                    
                            <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                            </td>
                        </tr>
                    </div>";
                }
            } else {
               
                echo "No hay datos <div>                    
                <tr>
                    <td class='ejercicios' style='text-align:center'>                    
                    <a href='../vista/ejercicio1.php'><button class='btn btn-primary'>Volver atrás.</button></a> 
                    </td>
                </tr>
            </div>";
            }
        }
        ?>