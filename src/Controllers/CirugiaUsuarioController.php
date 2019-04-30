<?php 
 namespace Ayudapp\Controllers;

 class CirugiaUsuarioController extends Controller
 {
 	
 	/*
	Consultar todos los registros
 	*/

 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM cirugiausuario"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Uy, compilo :v"
 			], 200
 		);
 	}


 	/*
	Consultar un registro especifico
 	*/

 	function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM cirugiausuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Uy, compilo :v"
 			], 200
 		);
 	}

 	/*
	Agregar un registro 
 	*/

 	function add($request, $response, $args){
 		$db = $this->db;
 		$query = "INSERT INTO cirugiausuario(IdUsuario, Descripcion) VALUES 
 		(". $args['IdUsuario'].", '". $args['Descripcion']."')";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Uy, compilo la que agrega :v"
 			], 200
 		);
 	}


 	/*
	Eliminar un registro 
 	*/

 	function delete($request, $response, $args){
 		$db = $this->db;
 		$query = "DELETE FROM cirugiausuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Uy, compilo la que elimina :v"
 			], 200
 		);
 	}


 	/*
	Editar un registro 
 	*/

 	function edit($request, $response, $args){
 		$db = $this->db;
 		$query = "UPDATE cirugiausuario SET IdUsuario = ". $args['IdUsuario']." , Descripcion = '". $args['Descripcion']."'
 		WHERE id = ". $args['id']."";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Uy, compilo la que edita :v"
 			], 200
 		);
 	}




}

