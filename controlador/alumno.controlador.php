<?php
class alumnocontrolador {
	public $error;
	public $objeto;
	
	function __construct(){
		try{
			if(file_exists("modelo/alumno.class.php")){
				//incluir la clase
				include("modelo/alumno.class.php");
				$this->objeto= new alumno();
			}else{
				$this->error="no se puede localizar el objeto seleccionado";
			}
			
		}
		catch(Exception $e){
			$this->error=$e->getMessage();
		}
		
	}//Fin construct
	function listar(){
		$data=$this->objeto->listar();
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/alumno/listar.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function ver(){
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function nuevo(){
		
	}
	function actualizar(){
		
	}
	function eliminar(){
		
	}
	
}
?>