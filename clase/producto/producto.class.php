<?php
require_once("../../../curso_web_octubre/clase/utilidad/utilidad.class.php");

class producto extends utilidad{

public $cod_pro;
public $nom_pro;
public $fky_mar;
public $fky_pre;
public $pre_pro;
public $exp_pro;
public $ven_pro;
public $sto_pro;
public $est_pro;


	public function agregar(){

		$sql="insert into producto
		(
		cod_pro,
		nom_pro,
		fky_mar,
		fky_pre,
		pre_pro,
		exp_pro,
		ven_pro,
		sto_pro,
		est_pro)
		values
		('$this->cod_pro',
		'$this->nom_pro',
		 $this->fky_mar,
		 $this->fky_pre,
		 $this->pre_pro,
		'$this->exp_pro',
		'$this->ven_pro',
		 $this->sto_pro,
		 '$this->est_pro')";

		$agr=$this->ejecutar($sql);
		return $agr;
	}

	public function modificar(){
		$sql="update producto set 
		cod_pro='$this->cod_pro',
		nom_pro='$this->nom_pro',
		fky_mar=$this->fky_mar,
		fky_pre=$this->fky_pre,
		pre_pro=$this->pre_pro,
		exp_pro='$this->exp_pro',
		ven_pro='$this->ven_pro',
		sto_pro=$this->sto_pro,
		est_pro='$this->est_pro'

		where cod_pro='$this->cod_pro'";

		$mod=$this->ejecutar($sql);
		return $mod;
	}


	public function listar(){
		$sql="select * from producto";
		$lis=$this->ejecutar($sql);
		return $lis;
	}


	public function eliminar(){
		$sql="delete from producto where cod_pro='$this->cod_pro'";
		$eli=$this->ejecutar($sql);
		return $eli;
	}


	public function asignar_valor($col_pro,$val_pro)
	{
	     $this->$col_pro=$val_pro;
	     /*
			Ejemplo:
			Si $col_pro vale nom_pro y $val_pro vale Mayonesa quedaría así:
			$this->nom_pro=Mayonesa
	     */
	}

	public function buscar($cod_pro)
	{
		$sql ="select *  from producto where cod_pro='$cod_pro'";
		$pro = $this->ejecutar($sql);
		$dat_pro =$this ->extraer_dato($pro);
		return $dat_pro;
	}


}

?>