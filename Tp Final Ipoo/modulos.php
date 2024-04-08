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
    private $col_Inscripcion;

    public function _construct(){
        $this->idModulos="";
        $this->descripcionModulos="";
        $this->topePrecio="";
        $this->costo="";
        $this->horarioInicio="";
        $this->horarioCierre="";
        $this->fechaInicio="";
        $this->fechaFin="";
        $this->col_Inscripcion="";
    }
    public function cargar($idmod,$descripcion,$tope,$costoN,$hsin,$hsfin,$datein,$datefin,$colInscripcion){
        $this->setModulo($idmod);
        $this->setdescModulo($descripcion);
        $this->setTope($tope);
        $this->setCosto($costoN);
        $this->setHsInicio($hsin);
        $this->setHsCierre($hsfin);
        $this->setFinicio($datein);
        $this->setFfin($datefin);
        $this->setColInscripcion($colInscripcion);
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
    public function getColInscripcion(){
        return $this->col_Inscripcion;
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
    public function setColInscripcion($colInscripcion){
        return $this->col_Inscripcion=$colInscripcion;
    }
    public function __toString(){
    $cadena="\n=============================================================================\n";
    $cadena.="[Id Modulo:". $this->getModulo()."]\n";
    $cadena.="[Descripcion Modulo:". $this->getdescModulo()."]\n";
    $cadena.="[Tope de Inscripciones:". $this->getTope()."]\n";
    $cadena.="[Costo:". $this->getCosto()."]\n";
    $cadena.="[Horario Inicio:". $this->getHsInicio()."]\n";
    $cadena.="[Horario Cierre:". $this->getHsCierre()."]\n";
    $cadena.="[Fecha Inicio:". $this->getFinicio()."]\n";
    $cadena.="[Fecha Fin:". $this->getFfin()."]\n";
    $cadena.="[Coleccion de inscripciones:". $this->getColInscripcion()."]\n";
    $cadena.="=============================================================================\n";
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
        $col_Inscripcion=[];
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
                        
                    $inscripcion=new inscripcion();
                    $col_Inscripcion = $inscripcion->listar("inscripcion.midModulos = ".$midModulos);



                    $this->cargar($idModulos, $descripcionModulos, $topePrecio,$costo,$horarioInicio,$horarioCierre,$fechaInicio,$fechaFin,$col_Inscripcion);

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
		$base = new BaseDatos();
		$exito = false;
        $consulta="INSERT INTO modulos(midModulos,mdescripcionModulos,mtopePrecio,mcosto,mhorarioInicio,mhorarioCierre, mfechaInicio,mfechaFin)
        VALUES ('".$this->getModulo()."', '".$this->getdescModulo()."', '".$this->getTope()."', '".$this->getHsInicio().
        "', '".$this->getHsCierre()."', '".$this->getFinicio()."', '".$this->getFfin()."')";

        // tengo que ingresar la coleeccion de ingresantes???

		if($base->Iniciar()){
            if($base->Ejecutar($consulta)){
                $resp=  true;
            }	else {
                $this->setmensajeoperacion($base->getError());
            }
        } else {
            $this->setmensajeoperacion($base->getError());
        }
		return $exito;
	}
    
    public function modificar(){
	    $exito = false; 
	    $base = new BaseDatos();
        // deberia modificar todos los atributos???
        $consulta="UPDATE modulos SET fechaInicio='".$this->getFinicio()."' WHERE idModulos=". $this->getModulo();
		if($base->Iniciar()){
			if($base->Ejecutar($consulta)){
			    $exito =  true;
			} else {
                $this->setMensajeOperacion($base->getError());
            }
		} else {
            $this->setMensajeOperacion($base->getError());	
		}
		return $exito;
	}

    public function eliminar(){
		$base = new BaseDatos();
		$exito = false;
		if($base->Iniciar()){
            $consulta="DELETE FROM modulos WHERE idModulos=".$this->getModulo();
            if($base->Ejecutar($consulta)){
                $exito = true;
			} else {
                $this->setMensajeOperacion($base->getError());
            }
		} else {
            $this->setMensajeOperacion($base->getError());	
		}
		return $exito; 
	}
}