<?php
	define("BASE_URL","http://localhost/mvc/");
	include("controlador/controlador.php");
	session_start();
	if(!isset($_SESSION['id_user'])){
		$_GET['url']="login/login";//Controlador
		
	}
	$controlador= new controlador();?>