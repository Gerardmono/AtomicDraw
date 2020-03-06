<?php 
	require_once 'Usuario.php';
	require_once 'services/conectores_DB/C_DB_Servidor/Proxy_Usuarios.php';

	class GestorAutenticacion{
		// Proxy Usuarios
		private $proxy_usuarios;

		function __construct(){
			$this->proxy_usuarios= Database::connect();
		}

		public function guardarRegistro($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename) {
			
			$usuario  = new Usuario();
			$usuario->inicializarRegistro($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename);


			if($usuario->getApellidoM() == false && $usuario->getImagen() == false){			
				// Query en donde no se introdujo el apellido materno y la imagen
				$sql = "INSERT INTO usuarios VALUES (NULL, '{$usuario->getNombre()}', '{$usuario->getApellidoP()}'";
				$sql.= ", NULL, '{$usuario->getEmail()}', '{$usuario->getPassword()}', NULL, 2); ";

				
			}else if($usuario->getApellidoM() == false){
				// Query donde no se introdujo el apellido materno
				$sql = "INSERT INTO usuarios VALUES (NULL, '{$usuario->getNombre()}', '{$usuario->getApellidoP()}'";
				$sql.= ", NULL, '{$usuario->getEmail()}', '{$usuario->getPassword()}', '{$usuario->getImagen()}', 2); ";
				
			}else if($usuario->getImagen() == false){
				// Query donde no se introdujo una foto de usuario
				$sql = "INSERT INTO usuarios VALUES (NULL, '{$usuario->getNombre()}', '{$usuario->getApellidoP()}'";
				$sql.= ", '{$usuario->getApellidoM()}', '{$usuario->getEmail()}', '{$usuario->getPassword()}', NULL, 2); ";
				
			}else{
				// Query donde tenemos todos los datos
				$sql = "INSERT INTO usuarios VALUES (NULL, '{$usuario->getNombre()}', '{$usuario->getApellidoP()}'";
				$sql.= ", '{$usuario->getApellidoM()}', '{$usuario->getEmail()}', '{$usuario->getPassword()}', '{$usuario->getImagen()}', 2); ";

			}
					
			$save = $this->proxy_usuarios->query($sql);

			$result = false;
			if ($save) {
				$result = true;
			}
			return $result; 
		}



	}
