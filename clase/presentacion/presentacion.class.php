<?php
require_once("../../../curso_web_octubre/clase/utilidad/utilidad.class.php");

class presentacion extends utilidad {

public 	$cod_pre;
public 	$nom_pre;
public 	$est_pre;

public function agregar(){
	
	$sql="insert into presentacion (nom_pre,est_pre)
	values ('$this->nom_pre','$this->est_pre')";

	$agr=$this->ejecutar($sql);
	return $agr;

}

public function modificar() {
    
    $sql="update presentacion set nom_pre='$this->nom_pre', est_pre='$this->est_pre' where cod_pre=$this->cod_pre";

    $mod=$this->ejecutar($sql);
	return $mod;


}    

public function listar() {

    $sql="select * from presentacion";

    $lis=$this->ejecutar($sql);
	return $lis;

}
    
public function eliminar() {

    $sql="delete from presentacion where cod_pre=$this->cod_pre";

    $eli=$this->ejecutar($sql);
	return $eli;

}	

public function buscar($cod_pre)
{
	$sql ="select * from presentacion where cod_pre = $cod_pre";
	$pre = $this->ejecutar($sql);
	$dat_pre = $this->extraer_dato($pre);
	return $dat_pre;
}



}// cierre de la clase

?>            