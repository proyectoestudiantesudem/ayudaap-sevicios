<?php 
 namespace Ayudapp\Controllers;

 class ContactController extends Controller
 {
 	
 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM contacts"; 
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
 		$query = "SELECT * FROM medicacionUsuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Medicamento de Id: " .$args['id'].".",
 			], 200
 		);
 	}
 	function delete($request, $response, $args){
 		$db = $this->db;
 		$query = "DELETE FROM medicacionUsuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "El medicamenteo de Id: " .$args['id']. " ha sido eliminado.",
 			], 200
 		);
 	}
 	function update($request, $response, $args){
 		$db = $this->db;
 		$query = "UPDATE medicacionUsuario set IdUsuario = ". $args['IdUsuario']. ", IdMedicacion =".$args['IdMedicacion']" Id WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Medicacion cuyo Id es " .$args['id']. " actualizado.",
 			], 200
 		);
 	}
 }

