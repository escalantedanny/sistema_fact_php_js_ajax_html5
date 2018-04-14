<?php
require_once("../utilidad/utilidad.class.php");
class cliente extends utilidad
{

public $ide_cli;
public $nom_cli;
public $dir_cli;
public $tel_cli;
public $est_cli;

public function agregar(){

$sql="insert into cliente(
 ide_cli,
 nom_cli,
 dir_cli,
 tel_cli,
 est_cli) 
values
('$this->ide_cli',
 '$this->nom_cli',
 '$this->dir_cli',
 '$this->tel_cli',
 '$this->est_cli')";

	$agr=$this->ejecutar($sql);
	return $agr;
}


public function modificar()
{

	$sql="update cliente set 
	ide_cli='$this->ide_cli',
	nom_cli='$this->nom_cli',
	dir_cli='$this->dir_cli',
	tel_cli='$this->tel_cli',
	est_cli='$this->est_cli'
	where
	cod_cli='$this->cod_cli'";

	$mod=$this->ejecutar($sql);
	return $mod;
}

public function listar()
{

	$sql="select * from cliente";
	$lis=$this->ejecutar($sql);
	return $lis;
}

public function eliminar()
{

	$sql="delete from cliente where cod_cli=$this->cod_cli";
	$eli=$this->ejecutar($sql);
	return $eli;
}

public function buscar($cod_cli)
	{
		$sql ="select *  from cliente where cod_cli='$cod_cli' or  ide_cli='$cod_cli'";
		$cli = $this->ejecutar($sql);
		$dat_cli =$this ->extraer_dato($cli);
		return $dat_cli;
	}


}//Fin de la clase
?>