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

			// var_dump($usuario);
			// die();

			// Query para guardar registro
			$sql = "INSERT INTO usuarios VALUES (NULL, '{$usuario->getNombre()}', '{$usuario->getApellidoP()}'";
			$sql.= ", '{$usuario->getApellidoM()}', '{$usuario->getEmail()}', '{$usuario->getPassword()}', '{$usuario->getImagen()}', 2); ";
				
			// var_dump($sql);
			// die();
			$save = $this->proxy_usuarios->query($sql);

			$result = false;
			if ($save) {
				$result = true;
			}
			return $result; 
		}
		
		public function comprobarCredencial($email){
			$sql= "SELECT * FROM usuarios WHERE correo='$email'";
			$login= $this->proxy_usuarios->query($sql);
			
			return $login;
		}



	}
