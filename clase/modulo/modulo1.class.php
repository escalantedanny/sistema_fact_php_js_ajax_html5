<?php 
require_once("utilidad.class.php");

class modulo extends utilidad
{

	public $cod_mod;
	public $nom_mod;
	public $rut_mod;
	public $est_mod;

	public function agregar(){
		$sql="insert into modulo (nom_mod,rut_mod,est_mod)values
		       ('$this->nom_mod',
		       '$this->rut_mod',
		       '$this->est_mod')";
		$agr=$this->ejecutar($sql);
		return $agr;
	}

	public function modificar(){
		$sql="update modulo set
		       cod_mod=$this->cod_mod,
		       nom_mod='$this->nom_mod',
		       rut_mod='$this->rut_mod',
		       est_mod='$this->est_mod'
		       where cod_mod= $this->cod_mod";
		$mod=$this->ejecutar($sql);
		return $mod;
	}

	public function listar(){
		$sql="select * from modulo";
		$lis=$this->ejecutar($sql);
		return $lis;
	}

	public function eliminar(){
			$sql="delete from modulo where cod_mod=$this->cod_mod";
			$eli=$this->ejecutar($sql);
			return $eli;
		}

	public function buscar($cod_mod)
		{
			$sql = "select * from modulo where cod_mod= $cod_mod";
			$mod = $this->ejecutar($sql);
			$dat_mod = $this->extraer_dato($mod);
			return $dat_mod;
		}







}
?>