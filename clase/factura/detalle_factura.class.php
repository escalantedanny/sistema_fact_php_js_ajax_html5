<?php
require_once("../../../curso_web_octubre/clase/utilidad/utilidad.class.php");

class detalle_factura extends utilidad{

public $ide_det;
public $fky_fac;
public $fky_pro;
public $can_det;
public $pre_det;
public $sub_det;
public $tot_det;

public function agregar(){
$sql="insert into detalle_factura(fky_fac,fky_pro,can_det,pre_det,sub_det,tot_det) values
($this->fky_fac,'$this->fky_pro',$this->can_det,$this->pre_det,$this->sub_det,$this->tot_det)";

$agr=$this->ejecutar($sql);
return $agr;
}

public function modificar(){
$sql="update detalle_factura set fky_fac=$this->fky_fac,fky_pro='$this->fky_pro',can_det=$this->can_det,pre_det=$this->pre_det,sub_det=$this->sub_det,tot_det=$this->tot_det where ide_det=$this->ide_det";

$mod=$this->ejecutar($sql);
return $mod;

	}

public function listar(){
$sql="select * from detalle_factura";

$lis=$this->ejecutar($sql);
return $lis;
}

public function eliminar(){
$sql="delete from detalle_factura where ide_det=$this->ide_det";

$eli=$this->ejecutar($sql);
return $eli;
}

}
	//final de la clase detalle_factura
?>