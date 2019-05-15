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
 				"message" => "Usuario encontrado",
 			], 200
 		);
 	}


 	function find_email($request, $response){
 		$args = $request->getParams();

 		$db = $this->db;
 		$query = "SELECT * FROM usuario WHERE Email = '". $args['Email']."'"; 
 		$result = $db->query($query);
 		if($result->rowCount()){
 			$error= 101;
 		}else{
 			$error= 102;
 		}
		return $response->withJson(
 			[
 				"status" => $error,
 				"data" => $result->fetchAll(),
 				"message" => "Buscar Usuario",
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
 				"message" => "Usuario eliminado",
 			], 200
 		);
 	}

 	function update($request, $response){
 		$args = $request->getParams();

 		$db = $this->db;
 		$query = "UPDATE usuario set IdRh = ". $args['IdRh'].", IdEps =".$args ['IdEps'].", IdTipoDeDocumento =".$args['IdTipoDeDocumento'].", NroDeDocumento='".$args['NroDeDocumento']."', Nombre='".$args['Nombre']."', Apellido='".$args['Apellido']."',TelefonoFijo='".$args['TelefonoFijo']."', Celular='".$args['Celular']."', Email = '".$args['Email']."', Direccion ='".$args['Direccion']."', Contrasena='".$args['Contrasena']."', FechaDeNacimiento ='".$args['FechaDeNacimiento']."' where id=". $args['id']; 

 		

 		
 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Usuario actualizado",
 			], 200
 		);
 	}


 	function create($request, $response){
 		$args = $request->getParams(); 	 		
 		$db = $this->db;
 		$query = "INSERT INTO `usuario` (`IdRh`, `IdEps`, `IdTipoDeDocumento`, `NroDeDocumento`, `Nombre`, `Apellido`, `TelefonoFijo`, `Celular`, `Email`, `Direccion`, `Contrasena`, `FechaDeNacimiento`) VALUES ('".$args['IdRh']."', '".$args ['IdEps']."', '".$args['IdTipoDeDocumento']."', '".$args['NroDeDocumento']."', '".$args['Nombre']."', '".$args['Apellido']."', '".$args['TelefonoFijo']."', '".$args['Celular']."', '".$args['Email']."', '".$args['Direccion']."', '".$args['Contrasena']."', '".$args['FechaDeNacimiento']."')";

 		$result = $db->query($query);
		return $response->withJson(
 			[
 				"status" => 101,
 				"data" => $result->fetchAll(),
 				"message" => "Usuario creado",
 			], 200
 		);
 	}


 	function login($request, $response){
 		$args = $request->getParams(); 		
 		$db = $this->db;
 		$error ="";
 		$query = "SELECT Id, Nombre, Contrasena FROM usuario WHERE Email = '". $args['email']."' and Contrasena = '".$args['contrasena']."'" ;  	
 		$result = $db->query($query); 		
 		if($result->rowCount()){
 			$error= 101;
 		}else{
 			$error= 102;
 		}
		return $response->withJson(
 			[
 				"status" => $error,
 				"data" => $result->fetchAll(),
 				"message" => "Login",
 			], 200
 		);
 	}

 }


