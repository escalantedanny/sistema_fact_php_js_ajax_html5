<?php
require_once("../../../curso_web_octubre/clase/utilidad/utilidad.class.php");
class marca extends utilidad{
	
	public $cod_mar;
	public $nom_mar;
	public $est_mar;

		public function agregar(){
			$sql="insert into marca(nom_mar,est_mar) values
			('$this->nom_mar',
			'$this->est_mar')";
			$agr=$this->ejecutar($sql);
			return $agr;
		}

		public function modificar(){
			$sql="update marca set 
			nom_mar='$this->nom_mar',
			est_mar='$this->est_mar'
			where cod_mar=$this->cod_mar";
			$mod=$this->ejecutar($sql);
			return $mod;
		}

		public function listar(){
			$sql="select * from marca";
			$lis=$this->ejecutar($sql);
			return $lis;
		}
		
		public function eliminar(){
			$sql="delete from marca where cod_mar=$this->cod_mar";
			$eli=$this->ejecutar($sql);
			return $eli;
		}

		public function buscar($cod_mar)
		{
			$sql = "select * from marca where cod_mar= $cod_mar";
			$mar = $this->ejecutar($sql);
			$dat_mar = $this->extraer_dato($mar);
			return $dat_mar;
		}

	}
?>