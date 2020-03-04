<?php
    class O_SuperOyente{
        function __construct(){

		}

		public function index(){
			require_once 'views/Gestion_De Sesion/Principal.php';
		}

		public function registro(){
			require_once 'views/Gestion_De Sesion/Registro.php';		
		}

		public function registroUsuario(){
			if (isset($_POST)) {
				$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
				$apellidoP = isset($_POST['apellidop']) ? $_POST['apellidop'] : false; 
				$apellidoM = isset($_POST['apellidom']) ? $_POST['apellidom'] : false;
				$email = isset($_POST['email']) ? $_POST['email'] : false; 
				$password = isset($_POST['password']) ? $_POST['password'] : false;
				//SI SE HIZO EL PUSH XD
			}else{	
				$_SESSION['register'] = "failed";			
			} 
		}
    }
?>