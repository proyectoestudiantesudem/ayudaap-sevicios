<?php 
 namespace Ayudapp\Controllers;

 class UsuarioController extends Controller
 {
 	
 	function all($request, $response){
 		$db = $this->db;
 		$query = "SELECT * FROM usuario"; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Todos los Usuarios"
 			], 200
 		);
 	}

 	function find($request, $response, $args){
 		$db = $this->db;
 		$query = "SELECT * FROM usuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Usuarios cuyo Id es " .$args['id']. "",
 			], 200
 		);
 	}

 	function delete($request, $response, $args){
 		$db = $this->db;
 		$query = "DELETE FROM usuario WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Usuario de Id: " .$args['id']. " ha sido eliminado.",
 			], 200
 		);
 	}

 	function update($request, $response, $args){
 		$db = $this->db;
 		$query = "UPDATE usuario set IdRh = ". $args['idRh'].", IdEps =".$args ['IdEps'].", IdTipoDeDocumento =".$args['IdTipoDeDocumento'].", NroDeDocumento=".$args['NroDeDocumento'].", Nombre=".$args['Nombre'].", Apellido=".$args['Apellido'].",TelefonoFijo=".$args['TelefonoFijo'].", Celular=".$args['Celular'].", Email = ".$args['Email'].", Direccion =".$args['Direccion'].", Contrasena=".$args['Contrasena'].", FechaDeNacimiento =".$args['FechaDeNacimiento']." where id=". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Usuario de Id: " .$args['id']. " ha sido actualizado.",
 			], 200
 		);
 	}
/*
 	function update($request, $response, $args){
 		$db = $this->db;
 		$query = "UPDATE usuario set nombre = ". $args['Nombre']. " WHERE id = ". $args['id'].""; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Usuarios cuyo Id es " .$args['id']. "",
 			], 200
 		);
 	}
*/
 }

