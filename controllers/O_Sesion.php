<?php
	require_once '../models/usuario/GestorAutenticacion.php';
    class O_Sesion{
        function __construct(){
            
		}

        public function registrarUsuario(){
			
			if( isset($_SESSION['nombre']) && isset($_SESSION['apellidoP'])
				&& isset($_SESSION['apellidoM']) && isset($_SESSION['email'])
				&& isset($_SESSION['password']) && isset($_SESSION['passwordConfirm']) ){
			
				$filename = isset( $_SESSION[$_SESSION['file']['name']] ) ? $_SESSION[$_SESSION['file']['name']] : false;

				$nombre= $_SESSION['nombre'];
				$apellidoP= $_SESSION['apellidoP'];
				$apellidoM= $_SESSION['apellidoM'];
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
				
				if( !empty($apellidoM) && !is_numeric($apellidoM) && !preg_match("/[0-9]/", $apellidoM) ){
                    $apellidom_validado = true;
                }else{
                    $apellidom_validado = false;
                    $_SESSION['register'] = "failed";
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
				}else if( $nombre_validado && $apellidop_validado && $apellidom_validado 
					&& $email_validado && $password_validado && $passwordConfirm_validado ){			
					
					$password_segura= password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);

					$gestorAutenticacion= new GestorAutenticacion($nombre, $apellidoP, $apellidoM, $email, $password_segura, $filename);
				}

			}else{
				//Registro fallido, aun esta pendiente
				$_SESSION['register'] = "failed";
			}

        }

    }
?>