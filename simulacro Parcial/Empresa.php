<?php
class Empresa{
    private $denominacion;
    private $direccion;
    private $colObjCliente;
    private $colObjMotos;
    private $colVentas;

    public function __construct($eDenominacion,$eDireccion,$eColClientes,$eColMotos,$eColVentas){
        $this->denominacion=$eDenominacion;
        $this->direccion=$eDireccion;
        $this->colObjCliente=$eColClientes;
        $this->colObjMotos=$eColMotos;
        $this->colVentas=$eColVentas;
    }
    //metodos de acceso
    public function getDenominacion(){
        return $this->denominacion;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getColObjCliente(){
        return $this->colObjCliente;
    }
    public function getColObjMotos(){
        return $this->colObjMotos;
    }
    public function getColVentas(){
        return $this->colVentas;
    }
    // modificadores
    public function setDenominacion($eDenominacion){
        $this->denominacion=$eDenominacion;
    }
    public function setDireccion($eDireccion){
        $this->direccion=$eDireccion;
    }
    public function setColObjCliente($eColClientes){
        $this->colObjCliente=$eColClientes;
    }
    public function setColObjMotos($eColMotos){
        $this->colObjMotos=$eColMotos;
    }
    public function setColVentas($eColVentas){
        $this->colVentas=$eColVentas;
    }
    // funciones Mostrar
    public function mostrarColClientes(){
        $clientes=$this->getColObjCliente();
        $cadena="                         ------Los Clientes de a Empresa son:------ \n";
        for ($i=0; $i <count($clientes) ; $i++) { 
            $cadena.="|N".$i."| ".$clientes[$i]->__toString();
        }
        return $cadena;
    }
    public function mostrarColMotos(){
        $motos=$this->getColObjMotos();
        $cadena="                          ----Las Motos de a Empresa son:---- \n";
        for ($i=0; $i <count($motos) ; $i++) { 
            $cadena.="|N".$i."| ".$motos[$i]->__toString();
        }
        return $cadena;
    }
    public function mostrarColVentas(){
        $ventas=$this->getColVentas();
        $cadena="                         ******Las ventas de la empresa son Empresa son:****** \n";
        for ($i=0; $i <count($ventas) ; $i++) { 
            $cadena.="|N".$i."| ".$ventas[$i]->__toString();
        }
        return $cadena;
    }
    //Funcion toString()
    public function __toString(){
        $cadena="                    ****|Denominacion de la Empresa****|: ". $this->getDenominacion()."\n";
        $cadena.="La direccion: ". $this->getDireccion()."\n";
        $cadena.=$this->mostrarColClientes()."\n";
        $cadena.=$this->mostrarColMotos()."\n";
        $cadena.=$this->mostrarColVentas()."\n";
        return $cadena;
    }
    public function retornarMoto($codigoMoto){
        $motos=$this->getColObjMotos();
        $bandera=false;
        $objMoto=null;
        $a=0;
        while ($a <count($motos) && !$bandera){
          $codigo=$motos[$a]->getCodigo();
          if ($codigo==$codigoMoto) {
            $objMoto=$motos[$a];
            $bandera=true;
          }
          $a=$a+1;
        }
        return $objMoto;
    }
    public function  registrarVenta($colCodigosMoto, $objCliente){
        $motos=$this->getColObjMotos();
        $colMotos=[];
        $fecha=date("m.d.y");
        $precio=0;
        if ($objCliente->getEstado()){
            $venta=new Venta("10",$fecha,$objCliente,[],0);
            for ($i=0; $i < count($colCodigosMoto) ; $i++) { 
                $codigo=$colCodigosMoto[$i];
                 $moto=$this->retornarMoto($codigo);
                 if ($moto!=null) {
                     if ($venta->incorporarMoto($moto)) {
                        $precio=$venta->getPrecio();
                        /*$precio+$moto->darPrecioVenta();
                        $colMotos[]=$moto;
                        $venta->setColObjMotos($colMotos);*/
                        $ventasCol=$this->getColVentas();
                        $ventasCol[]=$venta;
                        $this->setColVentas($ventasCol);
                     }
                 }
             }
        }
        return $precio;
    }
    public function retornarVentasXCliente($tipo,$numDoc){
        $clientes=$this->getColObjCliente();
        $bandera=false;
        $ventas=$this->getColVentas();
        $ventasCliente=[];
        $a=0;
        while ($a < count($clientes) && !$bandera) {
          if ($clientes[$a]->getTipoDoc()==$tipo && $clientes[$a]->getNumDoc()==$numDoc) {
                for ($i=0; $i <count($ventas) ; $i++) { 
                    $clienteVenta=$ventas[$i]->getObjCliente();
                    if ($clienteVenta==$clientes[$a]) {
                        $ventasCliente[]=$ventas[$i];
                    }
                }
                $bandera=true;
          }
          $a=$a+1;
        }
        return $ventasCliente;
    }

    public function informarSumaVentasNacionales(){
        $ventasColeccion=$this->getColVentas();
        $sumaNacional=0;
        foreach ($ventasColeccion as $venta) {
            $sumaNacional+=$venta->retornarTotalVentaNacional();
        }
        return $sumaNacional;
    }
    public function informarVentasImportadas(){
        $ventasColeccion=$this->getColVentas();
        $colMotoImportadas=[];
        foreach ($ventasColeccion as $venta) {
            if ($venta->retornarMotosImportadas()!=[]) {
                $colMotoImportadas[]=$venta->retornarMotosImportadas();
            }
        }
        return $colMotoImportadas;
    }
}
