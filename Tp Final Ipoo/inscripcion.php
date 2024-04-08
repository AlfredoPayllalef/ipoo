<?php
class inscripcion {
    private $id_inscripcion;
    private $fecha;
    private $costo;
	private $obj_Ingresante; 
	private $col_Modulos;
   

    public function _construct(){
        $this->id_inscripcion="";
        $this->fecha="";
        $this->costo="";
		$this->obj_Ingresante="";
		$this->col_Modulos="";
    }
    public function cargar($idins,$date,$coston,$objIngresante,$modulos){
        $this->setId_inscripcion($idins);
        $this->setFecha($date);
        $this->setCosto($coston);
		$this->setObjIngresante($objIngresante);
		$this->setColModulos($modulos);

    }
    //metodos  de acceso
    public function getId_inscripcion(){
        return $this->id_inscripcion;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getCosto(){
        return $this->costo;
    }
	public function getObjIngresante(){
		return $this->obj_Ingresante;
	}
	public function getColModulos(){
		return $this->col_Modulos;
	}
    
    // metodos para setear
    public function setId_inscripcion($inscripcion){
        $this->id_inscripcion=$inscripcion;
    }
    public function setFecha($date){
        $this->fecha=$date;
    }
    public function setCosto($costoN){
        $this->costo=$costoN;
    }
	public function setObjIngresante($objIngresante){
		$this->obj_Ingresante=$objIngresante;
	}
	public function setColModulos($modulos){
		$this->col_Modulos=$modulos;
	}
   
    public function __toString(){
    $cadena="\n=============================================================================\n";
    $cadena.="[id de Inscripcion:". $this->getId_inscripcion()."]\n";
    $cadena.="[Fecha de inscripcion:". $this->getFecha()."]\n";
    $cadena.="[Costo de inscripcion:". $this->getCosto()."]\n";
	$cadena.="[Alumno :". $this->getObjIngresante()."]\n";
	$cadena.="[Coleccion de Modulos :". $this->getColModulos()."]\n";
    $cadena.="=============================================================================\n";
    }

        /**
	 * Recupera los datos de la inscripcion en la base de datos a partir del id de la inscripcion ingresado
     * y los setea al objeto ingresante actual.
     * Retorna true si tiene éxito en la operación, false en caso contrario
     * 
	 * @param int $id_inscripcion
	 * @return boolean
	 */		
    public function Buscar($id_inscripcion){
		$base = new BaseDatos();
		$consulta = "SELECT * FROM inscripcion WHERE insid_inscripcion = '".$id_inscripcion."'";
		$exito = false; 
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
				if($fila = $base->Registro()){	

                    $fecha = $fila['insfecha'];
					$costo = $fila['inscosto'];
					$obj_Ingresante=new ingresante(0,0,0,0,0);
					$obj_Ingresante->Buscar($fila['idni']);
					$modulo= new modulos;
					$modulo->listar("inscripcion.midModulos = ".$obj_Ingresante);/// como busco los modulos donde esta inscripto??

                    $this->cargar($id_inscripcion, $fecha, $costo,$obj_Ingresante);

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
		$consulta="Select * from inscripcion  ";
		if ($condicion!=""){
		    $consulta=$consulta.' where '.$condicion;
		}
		$consulta.=" order by insfecha ";
		//echo $consultaPersonas;
		if($base->Iniciar()){
		    if($base->Ejecutar($consulta)){				
			    $arreglo= array();
				while($row2=$base->Registro()){
					$obj=new inscripcion();
					$obj->Buscar($row2['insid_inscripcion']);
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
		    $consultaInsertar="INSERT INTO inscripcion(insid_inscripcion, insfecha)
				VALUES (".$this->getId_inscripcion().",'".$this->getFecha()."')";
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
	        $consultaModifica="UPDATE inscripcion SET fecha='".$this->getFecha()."' WHERE insid_inscripcion=". $this->getId_inscripcion();
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
				$consultaBorra="DELETE FROM inscripcion WHERE insid_inscripcion=".$this->getId_inscripcion();
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