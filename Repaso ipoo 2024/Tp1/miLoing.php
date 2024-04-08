<?php

/*Implementar una clase Login que almacene el nombreUsuario, contraseña, frase que permite
recordar la contraseña ingresada y las ultimas 4 contraseñas utilizadas. Implementar un método que
permita validar una contraseña con la almacenada y un método para cambiar la contraseña actual por otra
nueva, el sistema deja cambiar la contraseña siempre y cuando esta no haya sido usada recientemente (es
decir no se encuentra dentro de las cuatro almacenadas). Implementar el método recordar que dado el
usuario, muestra la frase que permite recordar su contraseña*/

class miLoig{
    private $nombreUsuario;
    private $Arraycontrasenia;
    private $frase;

    public function __construct($nombre,$passwords,$fraseRecordar){
        $this->nombreUsuario=$nombre;
        $this->Arraycontrasenia=$passwords;
        $this->frase=$fraseRecordar;
    }
    //Metodos de acceso
    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }
    public function getContrasenias(){
        return $this->Arraycontrasenia;
    }
    public function getFrase(){
        return $this->frase;
    }
    //modificadores
    public function setNombreUsuario($nombre){
        $this->nombreUsuario=$nombre;
    }
    public function setContrasenia($newPassword){
        $this->Arraycontrasenia=$newPassword;
    }
    public function setFrase($newFrase){
        $this->frase=$newFrase;
    }
    //metodo toString
    public function mostrarContrasenias(){
        $arrayClaves=$this->getContrasenias();
        $cadena="las Contraseñas son: \n";
        for ($i=0; $i <count($arrayClaves) ; $i++) { 
            $indice=$i+1;
            $cadena.=$indice." :".$arrayClaves[$i]."\n";
        }
        return $cadena;
    }
    public function __toString(){
        $cadena="el nombre de usuario es :". $this->getNombreUsuario()."\n";
        $cadena.="las Ultimas Contraseñas son:". $this->mostrarContrasenias();
        $cadena.="la Frase de recuperacion es :". $this->getFrase()."\n";
        return $cadena;
    }
    //metodos Validar contraseña
    public function validarContrasenia($password){
        $contrasenia= $this->getContrasenias();
        $bandera=false;
        if ($contrasenia[0]==$password) {
            $bandera=true;
        }
        return $bandera;
    }


    // funcion que cambia la contraseña en caso que no sea igual a contaseñas anteriores

    public function cambiarContrasenia($password,$fraseRecordar){
        $contrasenia=$this->getContrasenias();
        $laFrase=$this->getFrase();
        $nuevaContrasenia=[];
        $bandera=false;
        $exito=true;
        $i=0;
        $a=count($contrasenia);
        if ($fraseRecordar==$laFrase) {
            while ($i<count($contrasenia) && !$bandera) {
                if ($contrasenia[$i]==$password) {
                    $bandera=true;
                    $exito=false;
                }
                else {
                    $i=$i+1;
                }
            }
            if ($exito) {
                $nuevaContrasenia[0]=$password;
                for ($i=1; $i <$a ; $i++) { 
                    $nuevaContrasenia[$i]=$contrasenia[$i-1];
                }
                $this->setContrasenia($nuevaContrasenia);
            }
        }
        else{
            $exito=null;
        }
        return $exito;
    }

    //Funcion que sirve para recordar la frase de recuperacion con el usuario

    public function recordar($usuario){
        $nombre= $this->getNombreUsuario();
        if ($nombre==$usuario) {
            $frase=$this->getFrase();
        }
        return "\n".$frase;
    }
    

}