<?php

	//echo($_POST['tabla']);

	if (isset($_POST['tabla'])) {
		$tabla=$_POST['tabla'];
	}

	switch ($tabla) {
		case 'Pacientes':
			require ("wsPacientes.php");
			break;

		case 'medicos':

			break;
	}

?>