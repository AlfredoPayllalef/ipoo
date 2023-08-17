<?php
class modulos {
    private $idModulos;
    private $descripcionModulos;
    private $topePrecio;
    private $costo;
    private $horarioInicio;
    private $horarioCierre;
    private $fechaInicio;
    private $fechaFin;

    public function _construct(){
        $this->idModulos="";
        $this->descripcionModulos="";
        $this->topePrecio="";
        $this->costo="";
        $this->horarioInicio="";
        $this->horarioCierre="";
        $this->fechaInicio="";
        $this->fechaFin="";
    }
    public function cargar($idmod,$descripcion,$tope,$costoN,$hsin,$hsfin,$datein,$datefin){
        $this->setModulo($idmod);
        $this->setdescModulo($descripcion);
        $this->setTope($tope);
        $this->setCosto($costoN);
        $this->setHsInicio($hsin);
        $this->setHsCierre($hsfin);
        $this->setFinicio($datein);
        $this->setFfin($datefin);
    }
    //metodo de acceso
    public function getModulo(){
        return $this->idModulos;
    }
    public function getdescModulo(){
        return $this->descripcionModulos;
    }
    public function getTope(){
        return $this->topePrecio;
    }
    public function getCosto(){
        return $this->costo;
    }
    public function getHsInicio(){
        return $this->horarioInicio;
    }
    public function getHsCierre(){
        return $this->horarioCierre;
    }
    public function getFinicio(){
        return $this->fechaInicio;
    }
    public function getFfin(){
        return $this->fechaFin;
    }
    //metodo de seteo
    public function setModulo($modulos){
        $this->idModulos=$modulos;
    }
    public function setdescModulo($desModulos){
        $this->descripcionModulos=$desModulos;
    }
    public function setTope($tope){
        $this->topePrecio=$tope;
    }
    public function setCosto($costoN){
        $this->costo=$costoN;
    }
    public function setHsInicio($inicio){
        $this->horarioInicio=$inicio;
    }
    public function setHsCierre($cierre){
        $this->horarioCierre=$cierre;
    }
    public function setFinicio($finicio){
        $this->fechaInicio=$finicio;
    }
    public function setFfin($fFin){
        $this->fechaFin=$fFin;
    }
    public function __toString(){
    $cadena="\n=============================================================================\n";
    $cadena=$cadena."[Id Modulo:". $this->getModulo()"]\n";
    $cadena=$cadena."[Descripcion Modulo:". $this->getdescModulo()"]\n";
    $cadena=$cadena."[Tope de Inscripciones:". $this->getTope()"]\n";
    $cadena=$cadena."[Costo:". $this->getCosto()"]\n";
    $cadena=$cadena."[Horario Inicio:". $this->getHsInicio()"]\n";
    $cadena=$cadena."[Horario Cierre:". $this->getHsCierre()"]\n";
    $cadena=$cadena."[Fecha Inicio:". $this->getFinicio()"]\n";
    $cadena=$cadena."[Fecha Fin:". $this->getFfin()"]\n";
    $cadena=$cadena."=============================================================================\n";
    }

        /**
	 * Recupera los datos de los modulos en la base de datos a partir del id del modulo ingresado
     * y los setea al objeto ingresante actual.
     * Retorna true si tiene éxito en la operación, false en caso contrario
     * 
	 * @param int $idModulos
	 * @return boolean
	 */		
    public function Buscar($idModulos){
		$base = new BaseDatos();
		$consulta = "SELECT * FROM modulos WHERE midModulos = '".$idModulos."'";
		$exito = false; 
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
				if($fila = $base->Registro()){	
                    $idModulos = $fila['midModulos'];
                    $descripcionModulos = $fila['mdescripcionModulos'];
                    $topePrecio = $fila['mtopePrecio'];
                    $costo = $fila['mcosto'];
                    $horarioInicio = $fila['mhorarioInicio'];
                    $horarioCierre = $fila['mhorarioCierre'];
                    $fechaInicio = $fila['mfechaInicio'];
                    $fechaFin=  $fila['mfechaFin'];

                    $this->cargar($idModulos, $descripcionModulos, $topePrecio,$costo,$horarioInicio,$horarioCierre,$fechaInicio,$fechaFin);

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
		$consulta="Select * from modulos  ";
		if ($condicion!=""){
		    $consulta=$consulta.' where '.$condicion;
		}
		$consulta.=" order by idModulos ";
		//echo $consultaPersonas;
		if($base->Iniciar()){
		    if($base->Ejecutar($consulta)){				
			    $arreglo= array();
				while($row2=$base->Registro()){
					$obj=new modulos();
					$obj->Buscar($row2['idModulos']);
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
		    $consultaInsertar="INSERT INTO modulos(midModulos, mfechaInicio)
				VALUES (".$this->getModulo().",'".$this->getFinicio()."')";
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
	        $consultaModifica="UPDATE modulos SET fechaInicio='".$this->getFinicio()."' WHERE idModulos=". $this->getModulo();
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
				$consultaBorra="DELETE FROM modulos WHERE idModulos=".$this->getModulo();
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