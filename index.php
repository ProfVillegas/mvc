<?php
	define("BASE_URL","http://localhost/mvc/");
	include("controlador/controlador.php");
	session_start();
	
	if(!isset($_SESSION['id_user'])&&strcmp(strtolower(@$_GET['url']),"login/")<=0){
		$_GET['url']="login/log";//Controlador
		
	}
	$controlador= new controlador();?>