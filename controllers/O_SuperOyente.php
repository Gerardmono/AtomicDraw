<?php
	require_once 'controllers/O_Sesion.php';

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
				var_dump($_POST);
		
				//header("Location:".base_url.'O_Sesion/registroUsuario');
				//require_once 'controllers/O_Sesion/registroUsuario';
				header("Location:".base_url.'O_Sesion/registroUsuario');


			}else{	
				$_SESSION['register'] = "failed";			
			}
		}
	}
?>