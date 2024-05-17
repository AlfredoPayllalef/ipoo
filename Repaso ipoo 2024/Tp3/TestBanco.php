<?php
include_once("Cuenta.php");
include_once("../tp2/persona.php");
include_once("Cliente.php");
include_once("CuetaCorriente.php");
include_once("Banco.php");

$objCliente1=new Cliente("Juan","Merlini","DNI",44328454,203417);
$objCliente2=new Cliente("Mario","Fernandez","DNI",45424691,206723);
$objCliente3=new Cliente("Gonzalo","Cardozo","DNI",42456476,106427);
$cuenta1=new Cuenta("CA-203417",500,"Caja Ahorro",$$objCliente1);
$cuenta2=new Cuenta("CC-206723",1700,"Cuenta Corriente",$$objCliente2,1000);
$cuenta3=new Cuenta("CA-106427",500,"Caja Ahorro",$$objCliente3);
$cuenta4=new Cuenta("CA-206723",1700,"Caja Ahorro",$$objCliente2);
$ColCc=[$cuenta2];
$ColCa=[$cuenta1,$cuenta3,$cuenta4];
$ColClientes=[$objCliente1,$objCliente2,$objCliente3];
$objBanco=new Banco($ColCc,$ColCa,500,$ColClientes);

