<?php
class modulosLinea extends modulos{
    private $linkReunion;	

    public function _construct(){
    parent:: _construct();
        $this->linkReunion="";
    }
    public function getLinkReunion(){
        return $this->linkReunion;
    }
    public function getCosto(){
         $costoLinea=parent::getCosto();
         $costoLinea=$costoLinea*1.2;
         return $costoLinea;
    }
    public function setLinkReunion($link){
        $this->linkReunion=$link;
    }
    public function __toString(){
        $cadena= parent:: __toString();
        $cadena.= "\n [Link de la reunion:]".$this->getLinkReunion();
        $cadena.= "\n [Costo Online:]".$this->getCosto();
        return $cadena;
    }

    public function Buscar($idmod){
		$base=new BaseDatos();
		$consulta="Select * from modulosLinea where idModulos=".$idmod;
		$resp= false;
		if($base->Iniciar()){
		    if($base->Ejecutar($consulta)){
				if($row2=$base->Registro()){	
				    parent::Buscar($idmod);
				    $this->setLinkReunion($row2['mlinkReunion']);
					$resp= true;
				}				
			
		 	}	else {
		 			$this->setmensajeoperacion($base->getError());
		 		
			}
		 }	else {
		 		$this->setmensajeoperacion($base->getError());
		 	
		 }		
		 return $resp;
	}	
    

	public static function listar($condicion=""){
	    $arreglo = null;
		$base=new BaseDatos();
		$consulta="Select * from modulosLinea ";
		if ($condicion!=""){
		    $consulta=$consulta.' where '.$condicion;
		}
		$consulta.=" order by idmod ";
		//echo $consultaPersonas;
		if($base->Iniciar()){
		    if($base->Ejecutar($consulta)){				
			    $arreglo= array();
				while($row2=$base->Registro()){
					$obj=new Estudiante();
					$obj->Buscar($row2['mlinkReunion']);
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
		    $consultaInsertar="INSERT INTO modulosLinea(mlinkReunion)
				VALUES (".$this->getLinkReunion().")";
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
	        $consultaModifica="UPDATE modulosLinea SET mlinkReunion='".$this->getLinkReunion()."' WHERE idmod=". $this->getModulo();
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
				$consultaBorra="DELETE FROM modulosLinea WHERE idmod=".$this->getModulo();
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

	public function __toString(){
	    return parent::__toString()."\n idmod: ".$this->getModulo()."\n";
			
	}
}
