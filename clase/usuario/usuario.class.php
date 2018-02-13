<?php 

require_once("../../clase/utilidad/utilidad.class.php");


class usuario extends utilidad
{

	public $cod_usu;
	public $ced_usu;
	public $ema_usu;
	public $cla_usu;
	public $nom_usu;
	public $tel_usu;
	public $dir_usu;
	public $fky_rol;
	public $est_usu;

		public function agregar()
		{
			$sql="insert into usuario 
			(ced_usu,ema_usu,cla_usu,nom_usu,tel_usu,dir_usu,fky_rol,est_usu)
			values(
			'$this->ced_usu',
			'$this->ema_usu',
			'$this->cla_usu',
			'$this->nom_usu',
			'$this->tel_usu',
			'$this->dir_usu',
			$this->fky_rol,
			'$this->est_usu')";
			$agr=$this->ejecutar($sql);
			return $agr;
		}

		public function modificar()
		{
			$sql="update usuario set 
			ced_usu='$this->ced_usu', 
			ema_usu='$this->ema_usu', 
			cla_usu='$this->cla_usu', 
			nom_usu='$this->nom_usu', 
			tel_usu='$this->tel_usu',
			dir_usu='$this->dir_usu', 
			fky_rol=$this->fky_rol, 
			est_usu='$this->est_usu' 
			where cod_usu='$this->cod_usu'";
			$mod=$this->ejecutar($sql);
			return $mod;
		}

		public function listar() 
		{
	    $sql="select * from usuario";
	    $lis=$this->ejecutar($sql);
		return $lis;
		}
		    
		public function eliminar() 
		{

		    $sql="delete from usuario where cod_usu=$this->cod_usu";
		    $eli=$this->ejecutar($sql);
			return $eli;

		}	

		public function buscar($cod_usu)
		{
			$sql ="select * from usuario where cod_usu = $cod_usu";
			$usu = $this->ejecutar($sql);
			$dat_usu = $this->extraer_dato($usu);
			return $dat_usu;
		}

		public function buscar_permiso($cod_usu, $cod_opc) // agregamos otro parametro para buscar la opcion en la tabla permiso
		{
			$sql ="select est_per from permiso as per
					where 
					per.fky_usu = $cod_usu 
					and 
					per.fky_opc = $cod_opc ";
			$per = $this->ejecutar($sql);
			$per_usu = $this->extraer_dato($per);
			return $per_usu['est_per'];
		}


		public function ver_todos_permisos()
		{
			$sql ="select cod_opc, nom_opc, nom_mod 
				   from opcion as opc, 
				        modulo as modu 
				   where opc.est_opc ='A' and 
				         modu.est_mod = 'A' and 
				         opc.fky_mod = modu.cod_mod";
			$per = $this->ejecutar($sql);
			return $per;
		}

		public function buscar_usu($cod_usu)
		{
			$sql ="select * from usuario where cod_usu = $cod_usu";
			$usu = $this->ejecutar($sql);
			return $dat_usu;
		}


		public function agregar_permiso($fky_usu,$fky_opc)
		{
			$sql = "insert into permiso(fky_usu,fky_opc,est_per)value($fky_usu,$fky_opc,'A')";
			$agr= $this->ejecutar($sql);
			return $agr;
		}   

		public function eliminar_permiso($fky_usu,$fky_opc)
		{
			$sql = "delete from permiso where fky_usu='$fky_usu' and fky_opc='$fky_opc'";
			$eli = $this->ejecutar($sql);
			return $eli;
		}
		public function session($email,$clave)
		{
			$sql="select * from usuario where ema_usu='$email' and cla_usu='$clave'";
			$ses=$this->ejecutar($sql);
			$res=$this->extraer_dato($ses);
			$_SESSION['usuario']=$res['cod_usu'];
			if($res !="")
			{
				header('Location:../../vista/menu/menu.php');
			}
			else{
				session_destroy();
				header('Location:../../index.php');
			}
		}


}
?>