<?php
	require_once 'controllers/O_Sesion.php';

    class O_SuperOyente{
        function __construct(){

		}

		public function index(){
			require_once 'views/Gestion_De Sesion/Principal.php';
		}

		public function despliegaUIRegistro(){
			require_once 'views/Gestion_De Sesion/Registro.php';		
		}

		public function delegaNewNotice(){
			require_once 'views/Gestion_De_Contenido/Nueva_Noticia.php';
		}

		public function empiezaRegistro(){

			if( isset($_POST) ){
				$_SESSION['nombre'] = isset($_POST['nombre']) ? $_POST['nombre'] : false;
				$_SESSION['apellidoP'] = isset($_POST['apellidoP']) ? $_POST['apellidoP'] : false; 
				$_SESSION['apellidoM'] = isset($_POST['apellidoM']) ? $_POST['apellidoM'] : false;
				$_SESSION['email'] = isset($_POST['email']) ? $_POST['email'] : false; 

				$_SESSION['password'] = isset($_POST['password']) ? $_POST['password'] : false;
				$_SESSION['passwordConfirm'] = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : false;

				if( isset($_FILES['imagen']) ){

					$_SESSION['file']= $_FILES['imagen']; //$file = $_FILES['imagen'];
					$filename =  $_SESSION['file']['name']; //$filename = $file['name'];
					$mimetype = $_SESSION['file']['type']; //$mimetype = $file['type'];
					
					if ($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') {

						if (!is_dir('uploads')) {
							mkdir('uploads/images', 0777, true);
						}

						move_uploaded_file($_SESSION['file']['tmp_name'], 'uploads/images/'.$filename);
					}
				}else{
					$_SESSION['file']= false;
				}

				header("Location:".base_url.'O_Sesion/registrarUsuario');
			}else{	
				$_SESSION['register'] = "failed";
				header("Location:".base_url.'O_SuperOyente/despliegaUIRegistro');
			}
		
		}

		public function empiezaLogin(){
			if( isset($_POST) ){
				$_SESSION['usuarioLogin'] = isset($_POST['usuario']) ? $_POST['usuario'] : false;
				$_SESSION['passwordLogin'] = isset($_POST['password']) ? $_POST['password'] : false;

				header("Location:".base_url.'O_Sesion/autenticarUsuario');
			}else{
				$_SESSION['login'] = "failed";
			}
		}

		public function empiezaCerrarSesion(){
			header("Location:".base_url.'O_Sesion/cerrarSesion');
		}

		public function beginNewNotice(){
			var_dump($_POST);
			die();
		}
	}
?>