<?php
class activiades {
    private $idActividad;
    private $descripcionCorta;
    private $descriccionLarga;
	private $col_modulos;

    public function _construct(){
        $this->idActividad="";
        $this->descripcionCorta="";
        $this->descriccionLarga="";
		$this->col_modulos="";
    }

    public function cargar($id,$dCorta,$dLarga,$modulo){
        $this->set_idDescripcion($id);
        $this->setDesCorta($dCorta);
        $this->setDesLarga($dLarga);
		$this->setColModulos($modulo);
    }

    public function get_idDescripcion(){
        return $this->idActividad;
    }
    public function getDesCorto(){
        return $this->descripcionCorta;
    }
    public function getDesLarga(){
        return $this->descriccionLarga;
    }
	public function getColModulos(){
        return $this->col_modulos;
    }
    public function set_idDescripcion($actividad){
        $this->idActividad=$actividad;
    }
    public function setDesCorta($dCorta){
        $this->descripcionCorta=$dCorta;
    }
    public function setDesLarga($dLarga){
        $this->descriccionLarga=$dLarga;
    }
	public function setColModulos(){
        return $this->col_modulos;
    }
    public function __toString(){
    $cadena="\n=============================================================================\n";
    $cadena.="[id Actividad:". $this->get_idDescripcion()."]\n";
    $cadena.="[descripcion Corta:". $this->getDesCorto()."]\n";
    $cadena.="[descripcion Larga:". $this->getDesLarga()."]\n";
	$cadena.="[Coleccion Modulos:". $this->getColModulos()."]\n";
    $cadena.="=============================================================================\n";
    }


        /**
	 * Recupera los datos de las actividades en la base de datos a partir del id de actividades ingresado
     * y los setea al objeto ingresante actual.
     * Retorna true si tiene éxito en la operación, false en caso contrario
     * 
	 * @param int $idActividad
	 * @return boolean
	 */		
    public function Buscar($idActividad){
		$base = new BaseDatos();
		$consulta = "SELECT * FROM activiades WHERE aidActividades = '".$idActividad."'";
		$exito = false; 
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
				if($fila = $base->Registro()){	

                    $descripcionCorta = $fila['adescripcionCorta'];
					$descriccionLarga = $fila['adescriccionLarga'];
					$col_modulos = $fila['adescriccionLarga' ] /////

                    $this->cargar($idActividad, $descripcionCorta, $descriccionLarga);

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
		$consulta="Select * from activiades  ";
		if ($condicion!=""){
		    $consulta=$consulta.' where '.$condicion;
		}
		$consulta.=" order by idActividad ";
		//echo $consultaPersonas;
		if($base->Iniciar()){
		    if($base->Ejecutar($consulta)){				
			    $arreglo= array();
				while($row2=$base->Registro()){
					$obj=new activiades();
					$obj->Buscar($row2['idActividad']);
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
		    $consultaInsertar="INSERT INTO activiades(idActividad, adescripcionCorta)
				VALUES (".$this->get_idDescripcion().",'".$this->getDesCorto()."')";
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
	        $consultaModifica="UPDATE activiades SET adescripcionCorta='".$this->getDesCorto()."' WHERE idActividad=". $this->get_idDescripcion();
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
				$consultaBorra="DELETE FROM activiades WHERE idni=".$this->idActividad();
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