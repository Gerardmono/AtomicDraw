<?php
	//require_once 'models/usuario/GestorAutenticacion.php';
	 require_once 'models/SuperGestor.php';
	// require_once 'models';

    class O_Sesion{
        function __construct(){
            
		}

        public function registrarUsuario(){

			if( isset($_SESSION['nombre']) && isset($_SESSION['apellidoP'])
				//&& isset($_SESSION['apellidoM']) && isset($_SESSION['email'])
				&& isset($_SESSION['email'])
				&& isset($_SESSION['password']) && isset($_SESSION['passwordConfirm']) ){
			
				// $filename = empty( $_SESSION['file']['name'] ) ? $_SESSION['file']['name'] : "NULL";
				$filename = empty( $_SESSION['file']['name'] ) ? NULL : $_SESSION['file']['name'];
				// $apellidoM = empty($_SESSION['apellidoM']) ? $_SESSION['apellidoM'] : "NULL";
				$apellidoM = empty($_SESSION['apellidoM']) ? NULL : $_SESSION['apellidoM'];				
				
				$nombre= $_SESSION['nombre'];				
				$apellidoP= $_SESSION['apellidoP'];				
				$email= $_SESSION['email'];
				$password= $_SESSION['password'];
				$passwordConfirm= $_SESSION['passwordConfirm'];


				if( !empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){
                    $nombre_validado = true;
                }else{
                    $nombre_validado = false;
                    $_SESSION['register'] = "failed";
				}
				
				if( !empty($apellidoP) && !is_numeric($apellidoP) && !preg_match("/[0-9]/", $apellidoP) ){
                    $apellidop_validado = true;
                }else{
                    $apellidop_validado = false;
                    $_SESSION['register'] = "failed";
				}
				
				if( !is_numeric($apellidoM) && !preg_match("/[0-9]/", $apellidoM) ){
                    $apellidom_validado = true;
                }else{					
                    $apellidom_validado = false;
                    $_SESSION['register'] = "failed";
				}

				if( empty($apellidoM) ){
					$apellidoM = false;
				}
				
				if( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $email_validado = true;
                }else{
                    $email_validado = false;
                    $_SESSION['register'] = "failed";
				}
				
				if( !empty($password)){
                    $password_validado = true;
                }else{
                    $password_validado = false;
                    $_SESSION['register'] = "failed";
				}
				
				if( !empty($passwordConfirm)){
                    $passwordConfirm_validado = true;
                }else{
                    $passwordConfirm_validado = false;
                    $_SESSION['register'] = "failed";
				}
				
				if($password != $passwordConfirm){
					$_SESSION['register'] = "failed";
					header("Location:".base_url.'O_SuperOyente/despliegaUIRegistro');
					
				}else if( $nombre_validado && $apellidop_validado && $apellidom_validado 
					&& $email_validado && $password_validado && $passwordConfirm_validado ){			
					
					$password_segura= password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
					
					$superGestor= new SuperGestor();
					$result= $superGestor->delegarGuardarRegistro($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename);			

					if ($result) {
						// Registro realizado correctamente
						Utils::borrarSesionesRegistro();
						$_SESSION['register'] = "complete";
						header("Location:".base_url.'O_SuperOyente/despliegaUIRegistro');
					}else{
						// Registro Fallido
						Utils::borrarSesionesRegistro();
						$_SESSION['register'] = "failed";
						header("Location:".base_url.'O_SuperOyente/despliegaUIRegistro');
					}

				}else{
					//Registro fallido
					Utils::borrarSesionesRegistro();
					$_SESSION['register'] = "failed";
					header("Location:".base_url.'O_SuperOyente/despliegaUIRegistro');
				}

			}else{
				//Registro fallido
				Utils::borrarSesionesRegistro();
				$_SESSION['register'] = "failed";
				header("Location:".base_url.'O_SuperOyente/despliegaUIRegistro');
			}

		}
		
		public function autenticarUsuario(){
			$email=trim($_SESSION['usuarioLogin']);
			$password=$_SESSION['passwordLogin'];

			$superGestor= new SuperGestor();
			$numeroUsers= $superGestor->delegarAutenticacionLogin($email);			

			if ($numeroUsers && mysqli_num_rows($numeroUsers)==1){
				$usuario= mysqli_fetch_assoc($numeroUsers);

				//COMPROBAR LA PASSWORD / CIFRAR
				$verify=password_verify($password,$usuario['password']);

				if($verify){
					//UTILIZAR UNA SESION PARA GUARDAR lOS DATOS DEL USUARIO LOGUEADO.
					$_SESSION['usuario']=$usuario;
					$_SESSION['login'] = "complete";

				}else{
					//SI ALGO FALLA ENVIAR UNA SESION CON EL FALLO.
					//$_SESSION['error_login']="Login Incorrecto.";
					$_SESSION['login'] = "failed";
				}
			}else{
				//MENSAJE DE ERROR
				//$_SESSION['error_login']="Login Incorrecto.!";
				$_SESSION['login'] = "failed";
			}

			Utils::borrarSesionesLogin();

			if($_SESSION['login'] == "failed"){
                header("Location:".base_url);
            }else{
                header("Location:".base_url);
                $_SESSION['login'] =null;
            }
		}

		public function cerrarSesion(){
            $_SESSION['usuario']=null;
            header("Location:".base_url);
        }

    }
?>