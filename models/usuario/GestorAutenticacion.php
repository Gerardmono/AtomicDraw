<?php 
    require_once 'Usuario.php';

	class GestorAutenticacion{
		//private $db;

		function __construct(){
			//$this->db= Database::connect();
		}

		public function guardarRegistro($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename) {
			
			$usuario  = new Usuario();
			$usuario->inicializarRegistro($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename);

            //Conectar a la DB pendiente
			$sql = "INSERT INTO usuarios VALUES (NULL, '{$usuario->getNombre()}', '{$usuario->getApellidoP()}', '{$usuario->getApellidoM()}', '{$usuario->getEmail()}', '{$usuario->getPassword()}', 2); ";
			$save = $this->db->query($sql);

			$result = false;
			if ($save) {
				$result = true;
			}
			return $result; 

		}

		public function comprobarCredencial($email){
			$sql= "SELECT * FROM usuarios WHERE email='$email'";
			$login= $this->db->query($sql);

			return $login;
		}


	}
