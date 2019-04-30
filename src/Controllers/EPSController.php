<?php 
 namespace Ayudapp\Controllers;

 class EPSController extends Controller
 {
 	
 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM eps"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "All EPS"
 			], 200
 		);
 	}

 	function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM eps WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Specific EPS"
 			], 200
 		);
 	}

 	function add($request, $response, $args){
 		$db = $this->db;
 		$query = "INSERT INTO eps (Nombre) VALUES ('".$args['Nombre']."')"; 
 		$result = $db->query($query);
 		echo $query;
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Add contact completed"
 			], 200
 		);
 	}

 	function delete($request, $response, $args){
 		$db = $this->db;
 		$query = "DELETE FROM eps WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Delete EPS"
 			], 200
 		);
 	}

 	function update($request, $response, $args){
 		$db = $this->db;
 		$query = "UPDATE eps SET Nombre = '". $args['Nombre']."' WHERE id = ". $args['id']; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "EPS Updated"
 			], 200
 		);
 	}
 }

