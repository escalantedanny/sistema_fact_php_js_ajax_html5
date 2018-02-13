<?php 
require("../../clase/utilidad/utilidad.class.php");

class rol extends utilidad
{
	public $cod_rol;
	public $nom_rol;
	public $est_rol;

		public function agregar(){
			$sql="insert into rol (nom_rol,est_rol)values('$this->nom_rol','$this->est_rol')";
			$agr=$this->ejecutar($sql);
			return $agr;
		}

		public function modificar(){
			$sql="update rol set 
			nom_rol='$this->nom_rol', 
			est_rol='$this->est_rol' where cod_rol=$this->cod_rol";
			$mod=$this->ejecutar($sql);
			return $mod;
		}

		public function listar() {

	    $sql="select * from rol";
	    $lis=$this->ejecutar($sql);
		return $lis;

		}
		    
		public function eliminar() {

		    $sql="delete from rol where cod_rol=$this->cod_rol";
		    $eli=$this->ejecutar($sql);
			return $eli;
		}	

		public function buscar($cod_rol)
		{
			$sql ="select * from rol where cod_rol = $cod_rol";
			$rol = $this->ejecutar($sql);
			$dat_rol = $this->extraer_dato($rol);
			return $dat_rol;
		}
}
?>