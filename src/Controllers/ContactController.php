<?php 
 namespace Ayudapp\Controllers;

 class ContactController extends Controller
 {
 	
 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM contactos"; 
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
 		$query = "SELECT * FROM contactos WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Find contact"
 			], 200
 		);
 	}

 	function add($request, $response, $args){
 		$db = $this->db;
 		$query = "INSERT INTO contactos (Nombre, IdParentesco, Celular, IdTipoContacto, Prioridad) VALUES ('".$args['Nombre']."',". $args['IdParentesco'].", ". $args['Celular'].", ". $args['IdTipoContacto'].", ". $args['Prioridad'].")"; 
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
 		$query = "DELETE FROM contactos WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Delete contact"
 			], 200
 		);
 	}

 }

