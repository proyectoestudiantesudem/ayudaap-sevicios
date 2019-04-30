<?php 
 namespace Ayudapp\Controllers;

 class LoginController extends Controller
 {
	
 	function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM usuario WHERE email = ". $args['email']."";
 		$contrasenia = $args['contrasena'];
 		$query2 = "SELECT contrasena FROM usuario WHERE email =". $args['email']."";
 		$result = $db->query($query);
 		//verifica si el primer query devolvió datos
 		if (mysql_num_rows($result)>0){
 			//verificar si el email y la contraseña coinciden 
 			if ( $contrasenia = $query2){
				return $response->withJson(
		 			[
		 				"status" => 101,
		 				"data" => $result->fetchAll(),
		 				"message" => $query
		 			], 200
		 		);
			} else {
				return $response->withJson(
		 			[
		 				"status" => 403,
		 				"data" => $result->fetchAll(),
		 				"message" => "Contraseña o Email inválido"
		 			], 200
		 		);
			}
	 	}	else {
	 		return $response->withJson(
		 			[
		 				"status" => 404,
		 				"data" => $result->fetchAll(),
		 				"message" => "El usuario no existe"
		 			], 200
		 		);
	 	}
 	}

 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM usuario"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "All contact"
 			], 200
 		);
 	}
 }

