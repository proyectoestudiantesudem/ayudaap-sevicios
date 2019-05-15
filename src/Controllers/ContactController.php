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

 	function add($request, $response){
 		$db = $this->db;
 		$args = $request->getParams();  		
 		$query = "INSERT INTO contactos (Nombre, IdParentesco, Celular, IdTipoContacto, Prioridad, IdUsuario) VALUES ('".$args['Nombre']."',". $args['IdParentesco'].", '". $args['Celular']."', ". $args['IdTipoContacto'].", ". $args['Prioridad'].", ". $args['IdUsuario'].")"; 
 		$result = $db->query($query); 	
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Add contact completed"
 			], 200
 		);
 	}

 	function delete($request, $response){
 		$db = $this->db;
 		$args = $request->getParams();  
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

 	function update($request, $response){
 		$args = $request->getParams();  

 		$db = $this->db;
 		$query = "UPDATE contactos SET Nombre = ". $args['Nombre'].", IdParentesco = ". $args['IdParentesco'].", 
 					Celular = ". $args['Celular'].", IdTipoContacto = ". $args['IdTipoContacto'].", 
 					Prioridad = ". $args['Prioridad']." WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Contact Updated"
 			], 200
 		);
 	}

 	function findContactByUserId($request, $response){ 
 		$args = $request->getParams();  		
	    $db = $this->db;
	    $query = "SELECT * FROM contactos WHERE IdUsuario = ". $args['IdUsuario'];	    
	    $result = $db->query($query);
	  	return $response->withJson(
	      [
	        "status" => 101,
	        "data" => $result->fetchAll(),
	        "message" => "Find contact by user id"
	      ], 200
	    );
	  }
 }

