<?php
	require("Paciente.php");

	$accion=null;

	$dni=null;
	$nombre=null;
	$localidad=null;
	$telefono=null;

	if (isset($_POST['accion'])) {
		$accion=$_POST['accion'];

	}

	$filters=[];

	if (isset($_POST['dni'])) {
		$filters['dni']=$_POST['dni'];
	}
	if (isset($_POST['nombre'])) {
		$filters['nombre']=$_POST['nombre'];
	}
	if (isset($_POST['localidad'])) {
		$filters['localidad']=$_POST['localidad'];
	}
	if (isset($_POST['telefono'])) {
		$filters['telefono']=$_POST['telefono'];
	}


	switch ($accion) {
		case 'buscar':
			echo(Paciente::buscar($filters));
			break;
		case 'borrar':

			break;
		case 'modificar':

			break;
	}

?>