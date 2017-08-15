<?php
class logincontrolador {
	public $id;
	public $accion;
	public $nombre;
	public $passw;
	public $error;
	public $objeto;
	
	function __construct(){		
		
	}//Fin construct
	function listar(){			
	}
	function ver(){		
	}
	function nuevo(){		
		
	}
	function actualizar(){	
		
	}
	function eliminar($id){		
	}
	/**Método Guardar**/
	function guardar(){		
	}
	function login (){
		echo "<h1>Falta inicio de sesion</h1>";
		echo "<a href='".BASE_URL."login/registrar' >Iniciar</a>";
	}
	function logout(){
		session_destroy();
		header("location:".BASE_URL."alumno");
		
	}
	function registrar(){
		$_SESSION['id_user']=1;
		header("location:".BASE_URL."alumno");
	}
}
?>