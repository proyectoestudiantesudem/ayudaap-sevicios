<?php
 namespace Ayudapp\Controllers;

 class EnfermedadesUsuarioController extends Controller
 {

 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM enfermedad";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "All enefermedad"
 			], 200
 		);
 	}

 	function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM enfermedad WHERE id = ". $args['id']."";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Find enfermedad"
 			], 200
 		);
 	}

 	function add($request, $response){
 		$db = $this->db;
 		$args = $request->getParams();
 		$query = "INSERT INTO enfermedad ( IdMedicacion, Descripcion) VALUES ('".$args['IdMedicacion']."','". $args['Descripcion']."')";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Add enfermedad completed"
 			], 200
 		);
 	}

 	function deleteForId($request, $response){
 		$db = $this->db;
 		$args = $request->getParams();
 		$query = "DELETE FROM enfermedad WHERE id = ". $args['id']."";
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
 		$query = "UPDATE enfermedad SET IdMedicacion = ". $args['IdMedicacion'].", Descripcion = ". $args['Descripcion']."";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "enfermedad Updated"
 			], 200
 		);
 	}

 	function findEnfermedadByIdMedicacion($request, $response){
 		$args = $request->getParams();
	    $db = $this->db;
	    $query = "SELECT * FROM enfermedad WHERE IdMedicacion = ". $args['IdMedicacion'];
	    $result = $db->query($query);
	  	return $response->withJson(
	      [
	        "status" => 101,
	        "data" => $result->fetchAll(),
	        "message" => "Find enfermedad by IdMedicacion"
	      ], 200
	    );
	  }


  }
 }
