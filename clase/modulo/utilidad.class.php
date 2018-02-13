<?php
class utilidad
{
    private  $con_bdt;

    public function __construct()
      {
      /*Funcion constructora con la conexion a la base de datos, la heredarán todos los hijos de utilidades*/

      $this->con_bdt=@mysqli_connect("localhost","root","","curso_web_octubre");
     
      }

   protected function ejecutar($sql)
   {
     
      /* echo $sql;
       
      mysql_query recibe 2 parámetros.
      Parámetro 1: lo que quiero ejecutar en la base de datos
      Parámetro 2: el ticket de conexion con la base de datos
      */
         $ret=mysqli_query($this->con_bdt,$sql);
         return $ret;
      }


    public function asignar_valor($atributo,$valor)
      {
         		$this->$atributo=$valor;
      }

    public function mensaje($res,$acc,$mod)
      {
        echo '<link rel="stylesheet" href="../../css/estilo.css">';
     /* Recibimos 3 parámetros:
        $res solo puede traer 2 valores(true o false)
        $acc puede traer los valores agregar/modificar/eliminar
        $mod puede traer los valores Cliente, Producto, Factura, Forma de Pago etc.
     */

              switch($acc)
              {

              	 case 'agregar':
              	 		if($res==true){
                          echo "<div class='ok pocision'>$mod procesado correctamente</div>";
                          $this->redireccionar($mod);
              	 		}else
              	 		  {
              	 		  	echo "<div class='error pocision'>Error al $acc $mod</div>";
                        $this->redireccionar($mod);
              	 		  }
              	 break;
                 case 'modificar':
                    if($res==true){
                          echo "<div class='ok pocision'>$mod procesado correctamente</div>";
                          $this->redireccionar($mod);
                    }else
                      {
                        echo "<div class='error pocision'>Error al $acc $mod</div>";
                        $this->redireccionar($mod);
                      }
                 break;
                 case 'listar':
                    if($res==true){
                          echo "<div class='ok pocision'>$mod procesado correctamente</div>";
                          $this->redireccionar($mod);
                    }else
                      {
                        echo "<div class='error pocision'>Error al $acc $mod</div>";
                        $this->redireccionar($mod);
                      }
                 break;
                 case 'eliminar':
                    if($res==true){
                          echo "<div class='ok pocision'>$mod procesado correctamente</div>";
                          $this->redireccionar($mod);
                    }else
                      {
                        echo "<div class='error pocision'>Error al $acc $mod</div>";
                        $this->redireccionar($mod);
                      }
                 break;
                 case 'buscar':
                    if($res==true){
                          echo $res['nom_cli'];
                          //$this->redireccionar($mod);
                    }else
                      {
                        echo "<div class='error pocision'>Error al $acc $mod</div>";
                        $this->redireccionar($mod);
                      }
                 break;

              }
      }


    public function extraer_dato($puntero)
      {
        return mysqli_fetch_assoc($puntero);
      }


      public function redireccionar($modulo)
      {
        switch ($modulo) 
        {
          case 'Cliente':
              echo"<div class='redireccionar pocision'>
                <a href='../../vista/cliente/agregar_cliente.php' title=''>Agregar cliente</a> !
                <a href='../../vista/cliente/listar_cliente.php' title=''>Listar cliente</a>
              </div>";
          break;

          case 'Producto':
              echo"<div class='redireccionar pocision '>
                <a href='../../vista/producto/agregar_producto.php' title=''>Agregar Producto</a> !
                <a href='../../vista/producto/listar_producto.php' title=''>Listar Producto</a>
              </div>";
          break;

          case 'Marca':
              echo"<div class='redireccionar pocision '>
                  <a href='../../vista/marca/agregar_marca.html' title=''>Agregar marca</a> !
                  <a href='../../vista/marca/listar_marca.php' title=''>Listar marca</a>
                  </div>";
          break;

          case 'Presentacion':

              echo"<div class='redireccionar pocision '>
                    <a href='../../vista/presentacion/agregar_presentacion.html' title=''>Agregar presentacion</a> !
                    <a href='../../vista/presentacion/listar_presentacion.php' title=''>Listar presentacion</a>
                    </div>";
          break;

          case 'Forma de Pago':
              echo"<div class='redireccionar pocision '>
                <a href='../../vista/forma_pago/agregar_forma_pago.html' title=''>Agregar forma_pago</a> !
                <a href='../../vista/forma_pago/listar_forma_pago.php' title=''>Listar forma_pago</a>
              </div>";
          break;

          case 'modulo':
              echo"<div class='redireccionar pocision '>
                <a href='../../vista/modulo/agregar_modulo.php' title=''>Agregar Modulo</a> !
                <a href='../../vista/modulo/listar_modulo.php' title=''>Listar Modulo</a>
              </div>";
          break;

          case 'rol':
              echo"<div class='redireccionar pocision '>
                <a href='../../vista/rol/agregar_rol.php' title=''>Agregar Rol</a> !
                <a href='../../vista/rol/listar_rol.php' title=''>Listar Rol</a>
              </div>";
          break;

          case 'opcion':
              echo"<div class='redireccionar pocision '>
                <a href='../../vista/opcion/agregar_opcion.php' title=''>Agregar opcion</a> !
                <a href='../../vista/opcion/listar_opcion.php' title=''>Listar opcion</a>
              </div>";
          break;

          case 'usuario':
              echo"<div class='redireccionar pocision '>
                <a href='../../vista/usuario/agregar_usuario.php' title=''>Agregar usuario</a> !
                <a href='../../vista/usuario/listar_usuario.php' title=''>Listar usuario</a>
              </div>";
          break;
          }

      }

}//Fin dela clase
?>