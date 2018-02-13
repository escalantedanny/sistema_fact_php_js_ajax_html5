<?php
require_once("../../../curso_web_octubre/clase/utilidad/utilidad.class.php");

class forma_pago extends utilidad{
	
	public $cod_for;
	public $nom_for;
	public $est_for;

		public function agregar()
		{

			$sql="insert into forma_pago(nom_for,est_for)values('$this->nom_for','$this->est_for')";
			$agr=$this->ejecutar($sql);
			return $agr;
		}

		public function modificar()
		{

			$sql="update forma_pago set nom_for='$this->nom_for',est_for='$this->est_for' where cod_for=$this->cod_for";
			$mod=$this->ejecutar($sql);
			return $mod;
		}

		public function listar()
		{

			$sql="select * from forma_pago";
			$lis=$this->ejecutar($sql);
			return $lis;

		}

		public function eliminar()
		{


			$sql="delete from forma_pago where cod_for=$this->cod_for";
			$eli=$this->ejecutar($sql);
			return $eli;

		}

		public function buscar($cod_for)
		{
			$sql = "select * from forma_pago where cod_for=$cod_for";
			$for = $this->ejecutar($sql);
			$dat_for = $this->extraer_dato($for);
			return $dat_for;
		}


}






?>