<?php 
 namespace Ayudapp\Controllers;

 class MedicamentoController extends Controller
 {
 	
 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM medicacionusuario"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "All medicamentos"
 			], 200
 		);
 	}

function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM medicacionusuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Medicamento de Id: " .$args['id'].".",
 			], 200
 		);
 	}



function create($request, $response, $args){
 		$db = $this->db;
 		$query = "INSERT INTO medicacionusuario (`Id`, `IdUsuario`, `IdMedicacion`) VALUES (NULL, '".$args['idusuario']."', '".$args['idmedicamento']."');"; 
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
 		$query = "DELETE FROM medicacionusuario WHERE id = ". $args['id']; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => 102,
 			], 200
 		);
 	}

/*

 	function update($request, $response, $args){
 		$db = $this->db;
 		$query = "UPDATE medicacionusuario set IdUsuario = ". $args['IdUsuario']. ", IdMedicacion =".$args['IdMedicacion']" Id WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Medicacion cuyo Id es " .$args['id']. " actualizado.",
 			], 200
 		);
 	}*/
 }

