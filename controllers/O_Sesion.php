<?php
    class O_Sesion{
        function __construct(){
            
		}

        public function registroUsuario(){



            var_dump($_POST);
            die();

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
				$apellidoP = isset($_POST['apellidoP']) ? $_POST['apellidoP'] : false; 
				$apellidoM = isset($_POST['apellidoM']) ? $_POST['apellidoM'] : false;
				$email = isset($_POST['email']) ? $_POST['email'] : false; 

				$password = isset($_POST['password']) ? $_POST['password'] : false;
				$passwordConfirm = isset($_POST['passwordConfirm']) ? $_POST['passwordConfirm'] : false;
				
				if (isset($_FILES['fotoP'])) {
					$file = $_FILES['fotoP'];
					$filename = $file['name'];
					$mimetype = $file['type'];
					/*
					Muestra todos los elementos del array objeto de $_FILES
					var_dump($file); die();
					*/
					if ($mimetype == "image/jpg" || $mimetype == 'image/jpeg' || $mimetype == 'image/png' || $mimetype == 'image/gif') {

						//Esto significa que esta creando un directorio recursivamente 
						if (!is_dir('uploads')) {
							mkdir('uploads/images', 0777, true);
						}
						//$producto->setImagen($filename); 
						move_uploaded_file($file['tmp_name'], 'uploads/images/'.$filename);

					}
                }
                
                //header("Location:".base_url.'O_Sesio/inicio');
                //require_once 'views/Gestion_De Sesion/Registro.php';
        }

    }
?>