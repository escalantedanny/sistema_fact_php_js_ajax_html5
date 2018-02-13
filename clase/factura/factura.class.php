<?php
require_once("../../../curso_web_octubre/clase/utilidad/utilidad.class.php");

class factura extends utilidad
{


public $num_fac;
public $ctr_fac;
public $fec_fac;
public $fky_cli;
public $fky_for;
public $con_fac;
public $ven_fac;
public $sub_fac;
public $imp_fac;
public $tot_fac;
public $est_fac;




		public function agregar()
		{
			$sql="insert into factura(ctr_fac,fec_fac,fky_cli,fky_for,con_fac,ven_fac,sub_fac,imp_fac,tot_fac,est_fac)
			values($this->ctr_fac,'$this->fec_fac',$this->fky_cli,$this->fky_for,'$this->con_fac','$this->ven_fac',$this->sub_fac,$this->imp_fac,$this->tot_fac,'$this->est_fac')";

			$agr=$this->ejecutar($sql);
			return $agr;
		}

		public function modificar()
		{
			$sql="update factura set ctr_fac='$this->ctr_fac',fec_fac='$this->fec_fac',fky_cli='$this->fky_cli',fky_for='$this->fky_for',con_fac='$this->con_fac',ven_fac='$this->ven_fac',sub_fac=$this->sub_fac,tot_fac=$this->tot_fac,est_fac='$this->est_fac'
			where num_fac=$this->num_fac";
			$mod=$this->ejecutar($sql);
			return $mod;
		}

		public function listar()
		{
			$sql="select * from factura";
			$lis=$this->ejecutar($sql);
			return $lis;
		}

		public function eliminar()
		{
			$sql="delete from factura where num_fac=$this->num_fac";
			$eli=$this->ejecutar($sql);
			return $eli;
		}

		public function buscar($num_fac)
		{
			$sql = "select * from factura where num_fac= $num_fac";
			$fac = $this->ejecutar($sql);
			$dat_fac = $this->extraer_dato($fac);
			return $dat_fac;
		}
}//fin de la clase factura
?>