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
 		$query = "SELECT * FROM contacts WHERE id = ". $args['id'].""; 
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

