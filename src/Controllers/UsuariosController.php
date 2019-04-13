<?php 
 namespace Ayudapp\Controllers;

 class UsuariosController extends Controller
 {
 	
 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM tipodealerta"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "All contact"
 			], 200
 		);
 	}

 	 
 	

 	function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM tipodealerta WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Id especifico"
 			], 200
 		);
 	}

 	function agregar($request, $response, $args){
 		$db = $this->db;
 		$query = "INSERT INTO tipodealerta(Id,Descripcion) VALUES (". $args['Id'].", '". $args['Descripcion']."')"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Agrego correctamente"
 			], 200
 		);
 	}

 		function eliminar($request, $response, $args){
 		$db = $this->db;
 		$query = "DELETE FROM tipodealerta WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Elimino correctamente"
 			], 200
 		);
 	}

 	function actualizar($request, $response, $args){
 		$db = $this->db;
 		$query = "UPDATE tipodealerta SET Id = ". $args['Id']." ,Descripcion = '". $args['Descripcion']."'
 		WHERE id = ". $args['id']."";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Actualizo correctamente"
 			], 200
 		);

 		/*No se hacen Foreign Keys*/
 	}







 }

