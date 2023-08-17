<?php
class ingresante {
    private $nombre;
    private $apellido;
    private $correo;
    private $legajo;
    private $dni;

    public function _construct(){
        $this->nombre="";
        $this->apellido="";
        $this->correo="";
        $this->legajo="";
        $this->dni="";
    }
    public function cargar($name,$lastName,$email,$legajoN,$numDoc){
        $this->setNombre($name);
        $this->setApellido($lastName);
        $this->setCorreo($email);
        $this->setLegajo($legajoN);
        $this->setDni($numDoc);
    }
    //metodos  de acceso
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getLegajo(){
        return $this->legajo;
    }
    public function getDni(){
        return $this->dni;
    }
    // Modificadores
    public function setNombre($name){
        $this->nombre=$name;
    }
    public function setApellido($lastName){
        $this->apellido=$lastName;
    }
    public function setCorreo($email){
        $this->correo=$email;
    }
    public function setLegajo($legajoN){
        $this->legajo=$legajoN;
    }
    public function setDni($numDoc){
        $this->dni=$numDoc;
    }

    // Metodo de lectura
    public function __toString(){
    $cadena="\n=============================================================================\n";
    $cadena=$cadena."[Nombre:". $this->getNombre()"]\n";
    $cadena=$cadena."[Apellido:". $this->getApellido()"]\n";
    $cadena=$cadena."[Correo:". $this->getCorreo()"]\n";
    $cadena=$cadena."[Legajo:". $this->getLegajo()"]\n";
    $cadena=$cadena."[Numero de Documento:". $this->getDni()"]\n";
    $cadena=$cadena."=============================================================================\n";
    }

    /**
	 * Recupera los datos del alumno en la base de datos a partir del dni del ingresante ingresado
     * y los setea al objeto ingresante actual.
     * Retorna true si tiene éxito en la operación, false en caso contrario
     * 
	 * @param int $dniIngresante
	 * @return boolean
	 */		
    public function Buscar($dniIngresante){
		$base = new BaseDatos();
		$consulta = "SELECT * FROM ingresante WHERE idni = '".$dniIngresante."'";
		$exito = false;
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
				if($fila = $base->Registro()){	

                    $nombre = $fila['inombre'];
					$apellido = $fila['iapellido'];
                    $correo = $fila['icorreo'];
					$legajo = $fila['ilegajo'];

                    $this->cargar($nombre, $apellido, $correo,$legajo,$dni);

					$exito = true;
				}				
		 	} else {
                $this->setMensajeOperacion($base->getError());
			}
		} else {
            $this->setMensajeOperacion($base->getError());	
		}		
		return $exito;
	}

    
    public static function listar($condicion=""){
	    $arreglo = null;
		$base=new BaseDatos();
		$consulta="Select * from ingresante  ";
		if ($condicion!=""){
		    $consulta=$consulta.' where '.$condicion;
		}
		$consulta.=" order by iapellido ";
		//echo $consultaPersonas;
		if($base->Iniciar()){
		    if($base->Ejecutar($consulta)){				
			    $arreglo= array();
				while($row2=$base->Registro()){
					$obj=new ingresante();
					$obj->Buscar($row2['idni']);
					array_push($arreglo,$obj);
				}
		 	}	else {
		 			$this->setmensajeoperacion($base->getError());
			}
		 }	else {
		 		$this->setmensajeoperacion($base->getError());
		 }	
		 return $arreglo;
	}	

    public function insertar(){
		$base=new BaseDatos();
		$resp= false;
		
		if(parent::insertar()){
		    $consultaInsertar="INSERT INTO ingresante(idni, inombre)
				VALUES (".$this->getDni().",'".$this->getNombre()."')";
		    if($base->Iniciar()){
		        if($base->Ejecutar($consultaInsertar)){
		            $resp=  true;
		        }	else {
		            $this->setmensajeoperacion($base->getError());
		        }
		    } else {
		        $this->setmensajeoperacion($base->getError());
		    }
		 }
		return $resp;
	}

    public function modificar(){
	    $resp =false; 
	    $base=new BaseDatos();
	    if(parent::modificar()){
	        $consultaModifica="UPDATE ingresante SET inombre='".$this->getNombre()."' WHERE idni=". $this->getDni();
	        if($base->Iniciar()){
	            if($base->Ejecutar($consultaModifica)){
	                $resp=  true;
	            }else{
	                $this->setmensajeoperacion($base->getError());
	                
	            }
	        }else{
	            $this->setmensajeoperacion($base->getError());
	            
	        }
	    }
		
		return $resp;
	}
    

    public function eliminar(){
		$base=new BaseDatos();
		$resp=false;
		if($base->Iniciar()){
				$consultaBorra="DELETE FROM ingresante WHERE idni=".$this->getDni();
				if($base->Ejecutar($consultaBorra)){
				    if(parent::eliminar()){
				        $resp=  true;
				    }
				}else{
						$this->setmensajeoperacion($base->getError());
					
				}
		}else{
				$this->setmensajeoperacion($base->getError());
			
		}
		return $resp; 
	}
}