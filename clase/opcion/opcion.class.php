<?php 
require_once("../../clase/utilidad/utilidad.class.php");

class opcion extends utilidad
{

	public $cod_opc;
	public $nom_opc;
	public $fky_mod;
	public $url_opc;
	public $est_opc;

	public function agregar(){
		$sql="insert into opcion (nom_opc,fky_mod,url_opc,est_opc) values
		       ('$this->nom_opc',
		         $this->fky_mod,
		        '$this->url_opc',
		        '$this->est_opc')";
		$agr = $this->ejecutar($sql);
		return $agr;
	}

	public function modificar(){
		$sql="update opcion set 
		       nom_opc='$this->nom_opc',
		       fky_mod=$this->fky_mod,
		       url_opc='$this->url_opc',
		       est_opc='$this->est_opc'
		       where cod_opc=$this->cod_opc";
		$mod=$this->ejecutar($sql);
		return $mod;
	}

	public function listar(){
		$sql="select * from opcion";
		$lis=$this->ejecutar($sql);
		return $lis;
	}

	public function eliminar(){
			$sql="delete from opcion where cod_opc=$this->cod_opc";
			$eli=$this->ejecutar($sql);
			return $eli;
		}

	public function buscar($cod_opc)
		{
			$sql = "select * from opcion where cod_opc= $cod_opc";
			$opc = $this->ejecutar($sql);
			$dat_opc = $this->extraer_dato($opc);
			return $dat_opc;
		}
}
?>