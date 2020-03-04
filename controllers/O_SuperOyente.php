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

				// Ignora esto, intentaba algunas soluciones que lei en blogs
				// var_dump( headers_sent($file, $line) );
				// var_dump($file);
				// var_dump($line);
				// var_dump(headers_list());
				// //header_remove();
				// var_dump( headers_sent($file, $line) );
				// var_dump($file);
				// var_dump($line);
				// var_dump(headers_list());
				// //header_remove ();

				//header("Location:".base_url.'O_Sesion/registroUsuario');
				header("Location:".base_url.'O_SuperOyente/registro');
				//require_once 'controllers/O_Sesion.php';
			}else{	
				$_SESSION['register'] = "failed";			
			} 
		}
    }