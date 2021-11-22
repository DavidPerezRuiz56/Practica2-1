<?php

	require("conexionBD.php");

	class Paciente
	{

		public static function buscar($filters) 
		{

			require("conexionBD.php");
			$consulta="select * from pacientes where true";

			$params=[];

			foreach ($filters as $key => $value) {
				$params[':'.$key]=$value.'%';
				$consulta.=" and ".$key." like :".$key;
			}

			$consulta.=" limit 5";
			$stmnt = $pdo->prepare($consulta);
			$stmnt->execute($params);
			$rows=$stmnt->fetchAll(PDO::FETCH_ASSOC);

			return(json_encode($rows));

		}

		public static function buscar($filters) 
		{

			require("conexionBD.php");
			$consulta="select * from pacientes where true";

			$params=[];

			foreach ($filters as $key => $value) {
				$params[':'.$key]=$value.'%';
				$consulta.=" and ".$key." like :".$key;
			}

			$consulta.=" limit 5";
			$stmnt = $pdo->prepare($consulta);
			$stmnt->execute($params);
			$rows=$stmnt->fetchAll(PDO::FETCH_ASSOC);

			return(json_encode($rows));

		}
	}



?>