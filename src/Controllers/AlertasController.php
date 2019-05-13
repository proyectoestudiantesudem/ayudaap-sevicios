<?php 
 namespace Ayudapp\Controllers;

 class AlertasController extends Controller
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
 		$query = "INSERT INTO tipodealerta(Descripcion) VALUES ('". $args['Descripcion']."')";
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
 		$query = "UPDATE tipodealerta SET Id = ". $args['Id']." ,Descripcion = '". $args['Descripcion']."' 	WHERE id = ". $args['Id']."";
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Actualizo correctamente"
 			], 200
 		);

 	}


 	 function buscar_alerta_usuario($request, $response, $args){
 		$db = $this->db;
 		$IdUsuario = $args['IdUsuario'];
 		$query = "SELECT * FROM alertausuario INNER JOIN tipodealerta on alertausuario.IdTipoAlerta = tipodealerta.Id WHERE IdUsuario = '$IdUsuario'"; 

 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Alertas Usuario"
 			], 200
 		);
 	}



 	function agregar_alerta_usuario($request, $response){
 		$args = $request->getParams(); 
 		$db = $this->db; 		
 		$query = "INSERT INTO alertausuario(Id ,IdTipoAlerta ,IdUsuario , Fecha, Ubicacion) VALUES (NULL, '".$args['IdTipoAlerta']."', '".$args['IdUsuario']."', '".$args['Fecha']."', '".$args['Ubicacion']."')";

 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Agrego correctamente"
 			], 200
 		);
 		
 	}


 	function eliminar_alertausuario($request, $response, $args){
 		$db = $this->db;
 		$query = "DELETE FROM alertausuario WHERE alertausuario.Id =".$args['Id']; 
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Elimino correctamente"
 			], 200
 		);
 	}


 	

 }

