<?Php


$conn = mysql_connect(
							"localhost", 				/*direccion ip donde esta db*/
							"lapollad_am", 		/*usuario de la base de datos*/
							"aula_matriz"					/*pass de la base de datos*/
						) or die(
							"Error conectando a la BBDD"
							);
mysql_select_db(
				"lapollad_oc", 
				$conn
				) or die(
							"Base de datos no encontrada"
							);


